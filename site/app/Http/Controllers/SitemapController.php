<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

/** Dynamic sitemap.xml (same URLs, priorities and Content-Type as the original sitemap.php). */
class SitemapController extends Controller
{
    public const SITE_UPDATED = '2026-11-25';

    private const STATIC = [
        ['/',               'daily',   '1.0'],
        ['/mbbs',           'weekly',  '1.0'],
        ['/programs',       'weekly',  '0.9'],
        ['/admissions',     'weekly',  '0.9'],
        ['/fees',           'monthly', '0.9'],
        ['/adm-HtApply',    'monthly', '0.8'],
        ['/about',          'monthly', '0.8'],
        ['/contact',        'monthly', '0.8'],
        ['/scholarships',   'monthly', '0.8'],
        ['/blogs',          'daily',   '0.8'],
        ['/events',         'weekly',  '0.8'],
        ['/gallery',        'monthly', '0.7'],
        ['/downloads',      'monthly', '0.7'],
        ['/support',        'monthly', '0.7'],
        ['/be-our-partner', 'monthly', '0.6'],
        ['/login',          'monthly', '0.7'],
        ['/register',       'monthly', '0.7'],
        ['/privacy',        'yearly',  '0.4'],
        ['/terms',          'yearly',  '0.4'],
    ];

    public function __invoke()
    {
        $base = 'https://dmu.cas.moe';
        $today = date('Y-m-d');
        // Static pages: use the date the site content last changed (bump on edits), not today's date,
        // so search engines can trust <lastmod>.
        $siteUpdated = self::SITE_UPDATED;

        $blogs = [];
        try {
            $blogs = DB::table('blogs')->where('status', 'published')->orderByDesc('published_at')->get(['slug', 'published_at'])->all();
        } catch (\Throwable $e) {
        }
        $events = [];
        try {
            $events = DB::table('events')->where('status', 'published')->orderByDesc('event_date')->get(['slug', 'event_date'])->all();
        } catch (\Throwable $e) {
        }

        $esc = fn (string $t) => htmlspecialchars($t, ENT_XML1 | ENT_QUOTES, 'UTF-8');
        $imgXml = function (array $imgs) use ($base, $esc): string {
            $o = '';
            foreach ($imgs as $src => [$alt, $cap]) {
                $o .= "    <image:image>\n      <image:loc>{$base}/" . ltrim($src, '/') . "</image:loc>\n      <image:title>" . $esc($cap ?: $alt) . "</image:title>\n      <image:caption>" . $esc($alt) . "</image:caption>\n    </image:image>\n";
            }

            return $o;
        };
        $url = fn (string $loc, string $lastmod, string $freq, string $prio, array $imgs = []) => "  <url>\n    <loc>{$loc}</loc>\n    <lastmod>{$lastmod}</lastmod>\n    <changefreq>{$freq}</changefreq>\n    <priority>{$prio}</priority>\n" . $imgXml($imgs) . "  </url>\n";

        // Every guide image with its alt text and caption, so Google Images can index the photos.
        $allImages = [];
        $guideImages = [];
        foreach (config('seo_guides', []) as $slug => $guide) {
            foreach ($guide['sections'] ?? [] as $sec) {
                if (! empty($sec['img']['src'])) {
                    $row = [$sec['img']['alt'] ?? '', $sec['img']['caption'] ?? ''];
                    $allImages[$sec['img']['src']] ??= $row;
                    $guideImages[$slug][$sec['img']['src']] = $row;
                }
            }
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"\n"
            . "        xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\"\n"
            . "        xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"\n"
            . "        xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9\n"
            . "        https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">\n\n";

        foreach (self::STATIC as [$loc, $freq, $prio]) {
            $xml .= $url($base . $loc, $siteUpdated, $freq, $prio, in_array($loc, ['/', '/about', '/gallery'], true) ? $allImages : []);
        }
        foreach (config('seo_guides', []) as $slug => $guide) {
            $xml .= $url($base . '/' . $slug, $guide['updated'], 'weekly', '0.9', $guideImages[$slug] ?? []);
        }
        $xml .= "\n";
        foreach ($blogs as $b) {
            $lastmod = ! empty($b->published_at) ? date('Y-m-d', strtotime($b->published_at)) : $today;
            $xml .= $url($base . '/blog/' . rawurlencode($b->slug), $lastmod, 'monthly', '0.7');
        }
        $xml .= "\n";
        foreach ($events as $e) {
            $lastmod = ! empty($e->event_date) ? date('Y-m-d', strtotime($e->event_date)) : $today;
            $xml .= $url($base . '/event?slug=' . urlencode($e->slug), $lastmod, 'weekly', '0.6');
        }
        $xml .= "\n</urlset>\n";

        return response($xml)->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
