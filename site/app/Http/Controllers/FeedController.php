<?php

namespace App\Http\Controllers;

/** Atom feed of the admission guides (/feed.xml): another crawlable list of every guide with its last update. */
class FeedController extends Controller
{
    public function __invoke()
    {
        $base = 'https://dmu.cas.moe';
        $guides = config('seo_guides', []);
        uasort($guides, fn ($a, $b) => strcmp($b['updated'] ?? '', $a['updated'] ?? ''));
        $latest = '2026-11-25';
        foreach ($guides as $g) {
            $latest = max($latest, $g['updated'] ?? '');
        }
        $e = fn (string $t) => htmlspecialchars($t, ENT_XML1 | ENT_QUOTES, 'UTF-8');

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<feed xmlns="http://www.w3.org/2005/Atom">' . "\n";
        $xml .= "  <title>Dalian Medical University admission guides</title>\n";
        $xml .= "  <subtitle>MBBS, BDS and study-in-China guides for Dalian Medical University (DMU)</subtitle>\n";
        $xml .= "  <link href=\"{$base}/feed.xml\" rel=\"self\" type=\"application/atom+xml\"/>\n";
        $xml .= "  <link href=\"{$base}/\" rel=\"alternate\" type=\"text/html\"/>\n";
        $xml .= "  <id>{$base}/</id>\n  <updated>{$latest}T00:00:00Z</updated>\n";
        $xml .= "  <author><name>Consultancy for Abroad Study (CAS)</name></author>\n";
        foreach ($guides as $slug => $g) {
            $xml .= "  <entry>\n";
            $xml .= '    <title>' . $e($g['title'] ?? $slug) . "</title>\n";
            $xml .= "    <link href=\"{$base}/{$slug}\" rel=\"alternate\" type=\"text/html\"/>\n";
            $xml .= "    <id>{$base}/{$slug}</id>\n";
            $xml .= '    <updated>' . ($g['updated'] ?? $latest) . "T00:00:00Z</updated>\n";
            $xml .= '    <summary>' . $e($g['description'] ?? '') . "</summary>\n";
            $xml .= "  </entry>\n";
        }
        $xml .= "</feed>\n";

        return response($xml)->header('Content-Type', 'application/atom+xml; charset=UTF-8');
    }
}
