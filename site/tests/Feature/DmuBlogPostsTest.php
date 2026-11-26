<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/** The DMU blog posts import cleanly, render, stay on facts in FACTS.md and appear in the sitemap. */
class DmuBlogPostsTest extends TestCase
{
    use RefreshDatabase;

    public function test_posts_import_render_and_are_in_the_sitemap(): void
    {
        Artisan::call('blog:import-dmu');
        Artisan::call('blog:import-dmu'); // idempotent
        $posts = require database_path('data/dmu-blog-posts.php');
        $this->assertSame(count($posts), DB::table('blogs')->count());

        $sitemap = $this->get('/sitemap.xml')->getContent();
        foreach ($posts as $p) {
            $this->assertGreaterThan(150, str_word_count(strip_tags($p['content'])), $p['slug']);
            $this->assertLessThanOrEqual(160, mb_strlen($p['meta_description']), $p['slug']);
            $this->assertFileExists(public_path($p['featured_image']), $p['slug']);
            $r = $this->get('/blog/' . $p['slug'])->assertOk();
            $r->assertSee('"@type":"BlogPosting"', false);
            $this->assertStringContainsString('https://dmu.cas.moe/blog/' . $p['slug'], $sitemap);
            foreach (['Xinjiang', 'XJMU', 'Urumqi', 'Pakistan', 'India', 'Nursing'] as $bad) {
                $this->assertStringNotContainsString($bad, $p['content'] . $p['title'], $p['slug']);
            }
            // every internal link points to a real page
            preg_match_all('#href="(/[^"\#]*)"#', $p['content'], $m);
            foreach (array_unique($m[1]) as $href) {
                $this->get($href)->assertSuccessful();
            }
        }
    }
}
