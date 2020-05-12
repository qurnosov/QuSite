<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kw
 */

?>

</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /#tp-content -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="order-2 order-lg-1 col-lg-6 text-lg-left">
					<div class="copyright small">
						<div>© 2020 <strong><?php bloginfo( 'name' ); ?></strong> Любое копирование материалов сайта запрещено!</div>
						<div><a href="/agree/">Политика конфиденциальности</a></div>
					</div>
					<!-- /.copyright -->
					<!-- KW COPYRIGHT -->
					<div id="karriweb">
						<a href="https://karriweb.ru">KARRI<span>WEB</span></a>
						<div class="small">Сайты со вкусом!</div>
					</div>
					<!-- / END KW COPYRIGHT -->
				</div>
				<!-- /.col-6 -->
				<div class="order-1 order-lg-2 col-lg-6">
					<p class="small text-md-left">Продолжая использовать сайт, вы даете согласие на обработку файлов cookie, пользовательских данных в целях функционирования сайта, проведения ретаргетинга и проведения статистических исследований и обзоров. Если вы не хотите, чтобы ваши данные обрабатывались, покиньте сайт.</p>
				</div>
				<!-- /.col-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
		<div onclick="$('html, body').animate({scrollTop:0},'slow')" id="back-top" class="hidden">
			<div class="icon"><i class="fa fa-angle-double-up"></i></div>
			<div class="rotate">Наверх</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
