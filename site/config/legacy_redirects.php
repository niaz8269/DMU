<?php

/*
| Old / mistyped addresses that should 301 to the closest real page: 'paths' (path => destination) and
| 'blog_slugs' (old /blog-post?slug=<old> => destination).
| The /downloads/ fallback is the built-in default in routes/web.php (a missing file below /downloads/ goes to /downloads).
| The nationality-specific guides were retired when the site went global; they now point to the regional guides.
*/
return [
    'paths' => [
        '/mbbs-in-china-for-pakistani-students' => '/mbbs-in-china-from-south-asia',
        '/mbbs-in-china-for-indian-students' => '/mbbs-in-china-from-south-asia',
        '/mbbs-in-china-for-bangladeshi-nepali-students' => '/mbbs-in-china-from-south-asia',
        '/mbbs-in-china-vs-pakistan' => '/is-mbbs-in-china-good',
        '/mdcat-pmdc-rules-for-mbbs-in-china' => '/who-listed-medical-universities-in-china',
    ],
];
