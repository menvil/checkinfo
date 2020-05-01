<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.w3.org/TR/xhtml11/xhtml11_schema.html http://www.w3.org/2002/08/xhtml/xhtml1-strict.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/TR/xhtml11/xhtml11_schema.html">
	@foreach ($links as $link)
	<url>
		<loc>{{action('IpController@short', $link)}}</loc>
		<lastmod>{{ $time }}</lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.6</priority>
	</url>
	@endforeach
</urlset>
