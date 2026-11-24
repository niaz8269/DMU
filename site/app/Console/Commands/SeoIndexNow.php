<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

/** Tell IndexNow search engines (Bing, Yandex, Seznam, Naver) about every sitemap URL. Google does not use IndexNow. */
class SeoIndexNow extends Command
{
    protected $signature = 'seo:indexnow';
    protected $description = 'Submit all sitemap URLs to IndexNow';

    public function handle(): int
    {
        $key = '4382d47872e37b9fe78e55f4c0d793d9';
        $host = 'dmu.cas.moe';
        $xml = Http::timeout(30)->get("https://{$host}/sitemap.xml")->body();
        preg_match_all('#<loc>([^<]+)</loc>#', $xml, $m);
        $urls = array_values(array_unique($m[1]));
        if (! $urls) {
            $this->error('No URLs found in the sitemap.');
            return self::FAILURE;
        }
        $res = Http::timeout(30)->asJson()->post('https://api.indexnow.org/indexnow', [
            'host' => $host, 'key' => $key, 'keyLocation' => "https://{$host}/{$key}.txt", 'urlList' => $urls,
        ]);
        $this->info('Submitted ' . count($urls) . ' URLs, HTTP ' . $res->status());
        return $res->successful() ? self::SUCCESS : self::FAILURE;
    }
}
