<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Support\SeoFaqs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/** Code-side FAQs (config/seo_faqs.php) on the main pages and selected blog posts. */
class SeoFaqsTest extends TestCase
{
    use RefreshDatabase;

    public function test_main_pages_show_at_least_eight_faqs_with_faqpage_schema(): void
    {
        foreach (['/', '/mbbs', '/fees', '/admissions', '/scholarships'] as $url) {
            $html = $this->get($url)->assertOk()->getContent();
            $this->assertSame(1, substr_count($html, '"FAQPage"'), $url . ' has one FAQPage block');
            $this->assertGreaterThanOrEqual(8, substr_count($html, '"@type":"Question"'), $url . ' question count');
            $this->assertGreaterThanOrEqual(8, substr_count($html, '<details class="ds-faq">'), $url . ' visible FAQs');
        }
    }

    public function test_merge_keeps_existing_faqs_first_and_skips_repeated_questions(): void
    {
        $merged = SeoFaqs::merge([['Is Dalian Medical University MOE listed for MBBS?', 'Admin answer']], 'home');
        $this->assertSame('Admin answer', $merged[0][1]);
        $questions = array_map(fn ($r) => strtolower($r[0]), $merged);
        $this->assertSame(count($questions), count(array_unique($questions)));
    }

    public function test_listed_blog_post_gets_faqs_and_others_do_not(): void
    {
        // config('seo_faqs.blogs') is empty on this site (no blog posts yet), so list one post for the test.
        config(['seo_faqs.blogs' => ['listed-post' => [['Is Dalian Medical University MOE listed for MBBS?', 'Yes, see the MOE list.']]]]);
        foreach ([['listed-post', true], ['other-post', false]] as [$s, $expected]) {
            Blog::query()->create(['title' => 'T ' . $s, 'slug' => $s, 'excerpt' => 'x', 'content' => '<p>Body</p>',
                'status' => 'published', 'published_at' => '2026-01-01 00:00:00', 'created_at' => '2026-01-01 00:00:00']);
            $html = $this->get('/blog/' . $s)->assertOk()->getContent();
            $this->assertSame($expected, str_contains($html, '"FAQPage"'), $s);
        }
    }

    public function test_answers_avoid_outdated_wording_and_state_confirmed_facts(): void
    {
        $text = json_encode(config('seo_faqs'), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        foreach (['50%', 'Aged 17', 'not ECFMG'] as $bad) {
            $this->assertStringNotContainsStringIgnoringCase($bad, $text, $bad);
        }
        $this->assertSame(0, preg_match('~(?<!March/)spring intake|(?<!September/)fall intake~i', $text));
        $this->assertStringContainsString('DMU is ECFMG eligible', $text);
        $this->assertStringContainsString('No HSK or IELTS requirement is published', $text);
        foreach (['Xinjiang', 'XJMU', 'Urumqi', '49,950', '35,950'] as $xj) {
            $this->assertStringNotContainsStringIgnoringCase($xj, $text, $xj);
        }

        $home = $this->get('/')->assertOk()->getContent();
        $this->assertStringContainsString('DMU is ECFMG eligible', $home);
        $this->assertStringNotContainsString('not ECFMG eligible', $home);
    }
}
