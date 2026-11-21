<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct(private BlogService $blogs)
    {
    }

    /** /blogs: search + pagination (?search=, ?page=). */
    public function index(Request $request)
    {
        $page = max(1, intval($request->query('page', 1)));
        $search = $request->query('search');
        $search = is_string($search) ? trim($search) : '';

        return view('pages.blogs.index', $this->blogs->listing($search, $page) + [
            'current_page' => $page,
            'page_title' => 'Academic Blog | Dalian Medical University',
            'page_description' => "Explore insights, research, and stories from our faculty and students. Discover the latest in medical education, research, student life, and more.",
            'page_keywords' => 'DMU blog, medical education blog, student experiences, medical research, academic articles, Dalian Medical University news',
            'page_url' => 'https://dmu.cas.moe/blogs',
            'page_image' => 'https://dmu.cas.moe/images/logo.png',
            'body_class' => 'ds-page',
            'page_css' => ['css/design-system.css', 'css/blogs.css'],
        ]);
    }

    /** /blog/{slug} (old /blog-post?slug=... redirects here): one published post (counts a view); 404 page when missing. */
    public function show(Request $request, ?string $slug = null)
    {
        \App\Support\CasLinks::reset();
        $fromPath = $slug !== null;
        if (! $fromPath) {
            $slug = $request->query('slug');
            $slug = is_string($slug) ? trim($slug) : '';
        }
        $blog = $this->blogs->findPublished($slug);

        // SEO: the old /blog-post?slug=... address permanently redirects to the clean /blog/... one.
        if ($blog && ! $fromPath) {
            return redirect($this->blogs->path($blog->slug), 301);
        }

        // Renamed / removed posts that Google still knows under the old address.
        if (! $blog && ! $fromPath && ($to = config('legacy_redirects.blog_slugs.' . $slug))) {
            return redirect($to, 301);
        }

        if (! $blog) {
            return response()->view('pages.blogs.not-found', [
                'page_title' => 'Blog Post Not Found | DMU',
                'page_description' => 'The blog post you requested could not be found.',
                'page_keywords' => 'DMU blog',
                'page_url' => 'https://dmu.cas.moe/blogs',
                'page_image' => 'https://dmu.cas.moe/images/logo.png',
                'body_class' => 'ds-page',
                'page_css' => ['css/design-system.css', 'css/blog-post.css'],
            ], 404);
        }

        $this->blogs->incrementViews($blog);

        return view('pages.blogs.show', $this->blogs->postMeta($blog) + [
            'blog' => $blog,
            'published_date' => $this->blogs->publishedDate($blog),
            'featured_image' => $this->blogs->featuredImageUrl($blog),
        ]);
    }
}
