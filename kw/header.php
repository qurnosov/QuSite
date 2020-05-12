<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kw
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Yandex Webmaster -->
	<meta name="yandex-verification" content="81c21b32f2bc1670" />

	<?php wp_head(); ?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P7RXLF5');</script>
	<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7RXLF5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php wp_body_open(); ?>


	<!-- NAVBAR -->
	<nav id="nav-top" class="navbar navbar-expand-md navbar-light sticky-top">
		<div class="container d-flex justify-content-between">
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-briefcase"></i> <?php bloginfo( 'name' ); ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nt-collapse"
				aria-controls="nt-collapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="nt-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="nt-link" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Рубрики
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<div class="container">
								<div class="row">
									<div class="col-lg-6">
										<a class="dropdown-item" href="/category/business/">💼 Бизнес</a>
										<a class="dropdown-item" href="#">🍏 Дизайн</a>
										<a class="dropdown-item" href="#">🏆 Личный опыт</a>
										<a class="dropdown-item" href="#">🎯 Маркетинг</a>
										<a class="dropdown-item" href="#">👩🏿‍💻 Разработка</a>
									</div>
									<!-- /.col-lg-6 -->
									<div class="col-lg-6">
										<a class="dropdown-item" href="#">⚙️ Сервисы</a>
										<a class="dropdown-item" href="#">🌍 Соцсети</a>
										<a class="dropdown-item" href="#">📡 Техника</a>
										<a class="dropdown-item" href="#">🛒 Торговля</a>
										<a class="dropdown-item" href="#">💸 Финансы</a>
									</div>
									<!-- /.col-lg-6 -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.container -->
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/collaboration/">Реклама</a>
					</li>
				</ul>
				<div id="search" class="form-inline my-2 my-lg-0">
					<div class="ya-site-form ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;https://bi-zi.ru/search/&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:16,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Поиск по bi-zi.ru&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2402957,&quot;input_fg&quot;:&quot;#2f2f2f&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;Поиск...&quot;,&quot;input_placeholderColor&quot;:&quot;#2f2f2f&quot;,&quot;input_borderColor&quot;:&quot;#f0f0f0&quot;}"><form action="https://yandex.ru/search/site/" method="get" target="_self" accept-charset="utf-8"><input type="hidden" name="searchid" value="2402957"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</nav>
	<!-- END NAVBAR -->

	<div id="tp-content">
		<div class="container">
			<div class="row">
				<div class="col-12 small gray">
					<?php
						if(!is_home()) {
							if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
							}
						}
					?>
				</div>
				<!-- /.col-12 -->
