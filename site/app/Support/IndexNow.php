<?php

namespace App\Support;

use Illuminate\Support\Facades\Http;

/** Tells IndexNow engines (Bing, Yandex, Seznam, Naver) about new or changed URLs the moment they are published. Never throws. */
class IndexNow
{
    public const KEY = '4382d47872e37b9fe78e55f4c0d793d9';
    public const HOST = 'dmu.cas.moe';

    /** @param string[] $paths site-relative paths, e.g. ['/blog/my-post', '/blogs'] */
    public static function ping(array $paths): void
    {
        if (! app()->environment('production')) {
            return;
        }
        try {
            $urls = array_map(fn ($p) => 'https://' . self::HOST . '/' . ltrim($p, '/'), $paths);
            Http::timeout(5)->asJson()->post('https://api.indexnow.org/indexnow', [
                'host' => self::HOST, 'key' => self::KEY,
                'keyLocation' => 'https://' . self::HOST . '/' . self::KEY . '.txt', 'urlList' => array_values($urls),
            ]);
        } catch (\Throwable $e) {
            // best effort only: the sitemap still lists the page
        }
    }
}
