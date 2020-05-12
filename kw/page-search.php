<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kw
 */

get_header();
?>

<div id="tp-main" class="col-md-9">

	<div class="tp-single">

		<div class="tp-single-title pt-4">
			<h1>Результаты поиска</h1>
		</div>

		<div id="ya-site-results" data-bem="{&quot;tld&quot;: &quot;ru&quot;,&quot;language&quot;: &quot;ru&quot;,&quot;encoding&quot;: &quot;&quot;,&quot;htmlcss&quot;: &quot;1.x&quot;,&quot;updatehash&quot;: true}"></div><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0];s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Results.init();})})(window,document,'yandex_site_callbacks');</script>

	</div>
	<!-- /.tp-single --> 

</div>
<!-- /.col-md-9 -->
<div id="tp-aside" class="col-md-3">
	<?php get_sidebar(); ?>
</div>
<!-- /#tp-aside .col-md-3 -->

<?php get_footer(); ?>
