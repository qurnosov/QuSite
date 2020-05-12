<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kw
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="tp-widget">
	<div class="tp-wcats-name">Рубрики</div>
	<!-- /.tp-wcats-name -->
	<div class="tp-wcats-list">
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link" href="#">💼 Бизнес</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">🍏 Дизайн</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">🏆 Личный опыт</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">🎯 Маркетинг</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">👩🏿‍💻 Разработка</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">⚙️ Сервисы</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">🌍 Соцсети</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">📡 Техника</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">🛒 Торговля</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">💸 Финансы</a>
			</li>
		</ul>
		<!-- /.nav flex-column -->
	</div>
	<!-- /.tp-wcats-list -->
</div>
<!-- /.tp-widget -->
