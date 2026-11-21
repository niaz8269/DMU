<?php

// SEO overrides for individual blog posts, applied in code so the blog rows in the database stay untouched.
// 'title' / 'description' replace the <title> and meta description only (the visible H1 and article are unchanged).
// 'guides' => true adds a short "Planning for 2027?" box under the article, linking to the keyword guides (config/seo_guides.php).
return [
    'posts' => [
        // 'blog-post-slug' => ['title' => '...', 'description' => '...', 'guides' => true],
    ],
];
