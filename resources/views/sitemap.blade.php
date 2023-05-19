<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{route('home')}}</loc>
        <lastmod>2023-04-21T11:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{route('posts')}}</loc>
        <lastmod>2023-04-21T11:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{route('services')}}</loc>
        <lastmod>2023-04-21T11:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{route('about')}}</loc>
        <lastmod>2023-04-21T11:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{route('pricing')}}</loc>
        <lastmod>2023-04-21T11:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{route('faq')}}</loc>
        <lastmod>2023-04-21T11:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{route('portfolios')}}</loc>
        <lastmod>2023-04-21T11:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{route('contact')}}</loc>
        <lastmod>2023-04-21T11:00:00+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($posts as $post)
        <url>
            <loc>{{route('post',['slug'=>$post->slug])}}</loc>
            <lastmod>{{ $post->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach ($pages as $page)
        <url>
            <loc>{{route('page',['slug'=>$page->slug])}}</loc>
            <lastmod>{{ $page->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
