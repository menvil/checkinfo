<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@for ($i = 1 ; $i <= $pages; $i++)
<sitemap><loc>{{action('SitemapController@xml', $i)}}</loc></sitemap>
@endfor
</sitemapindex>
