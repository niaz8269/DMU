<?php
// Usage: php tools/check_guide.php slug [slug...]   (no args = every guide). Mirrors tests/Feature/SeoGuidesTest.php.
chdir(dirname(__DIR__));
$slugs = array_slice($argv, 1) ?: array_map(fn ($f) => basename($f, '.php'), glob('resources/guides/[!_]*.php'));
$bad = ['Xinjiang', 'XJMU', 'Urumqi', 'Ürümqi', 'xjmu', '49,950', '35,950', '8th of 43', '60 seats', '67,100', '9,450', 'first-year package', 'complete package'];
foreach ($slugs as $slug) {
    $g = require "resources/guides/$slug.php";
    $text = [$g['h1'], $g['lead']];
    array_walk_recursive($g['sections'], function ($v, $k) use (&$text) { if (is_string($v) && ! in_array($k, ['src', 'id'], true)) { $text[] = $v; } });
    array_walk_recursive($g['faqs'], function ($v) use (&$text) { $text[] = $v; });
    $all = implode(' ', $text);
    $words = str_word_count($all);
    $imgs = array_values(array_filter(array_column($g['sections'], 'img')));
    $missing = array_filter(array_map(fn ($i) => file_exists("public/{$i['src']}") && trim($i['alt']) !== '' ? null : $i['src'], $imgs));
    $ans = str_word_count($g['answer'] ?? '');
    $hits = array_filter($bad, fn ($b) => stripos(json_encode($g, JSON_UNESCAPED_UNICODE), $b) !== false);
    printf("%-50s words=%d (need 1200) imgs=%d (need 4) answer=%d (40-70) title=%d (<=70) desc=%d (<=170)%s%s\n", $slug, $words, count($imgs), $ans,
        mb_strlen($g['title']), mb_strlen($g['description']), $missing ? ' MISSING-IMG:' . implode(',', $missing) : '', $hits ? ' BANNED:' . implode(',', $hits) : '');
}
