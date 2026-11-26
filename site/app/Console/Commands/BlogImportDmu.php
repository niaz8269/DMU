<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

/** Imports/updates the DMU blog posts from database/data/dmu-blog-posts.php (matched by slug, safe to re-run). */
class BlogImportDmu extends Command
{
    protected $signature = 'blog:import-dmu {--date= : published date (Y-m-d); default today}';
    protected $description = 'Import the DMU blog posts (idempotent)';

    public function handle(): int
    {
        $posts = require database_path('data/dmu-blog-posts.php');
        $date = $this->option('date') ?: date('Y-m-d');
        $now = now();
        foreach ($posts as $p) {
            $existing = DB::table('blogs')->where('slug', $p['slug'])->first();
            $row = [
                'title' => $p['title'],
                'excerpt' => $p['excerpt'],
                'content' => $p['content'],
                'author_name' => 'CAS Admissions Team',
                'author_title' => 'Admissions guide',
                'featured_image' => $p['featured_image'],
                'is_featured' => 0,
                'status' => 'published',
                'meta_description' => $p['meta_description'],
                'meta_keywords' => $p['meta_keywords'],
                'updated_at' => $now,
            ];
            if ($existing) {
                DB::table('blogs')->where('id', $existing->id)->update($row);
            } else {
                DB::table('blogs')->insert($row + ['slug' => $p['slug'], 'published_at' => $date . ' 09:00:00', 'created_at' => $now]);
            }
            $this->line(($existing ? 'updated ' : 'added   ') . $p['slug']);
        }
        return self::SUCCESS;
    }
}
