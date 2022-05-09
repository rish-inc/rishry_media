<footer class="l-footer">
			<div class="p-footer">
				<nav class="p-footer__menu u-mb100">
					<?php wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'menu_class' => 'p-footer__menu__list',
						'container' => false
					) ); ?>
				</nav>
				<?php wp_nav_menu( array(
					'theme_location' => 'sns-list',
					'menu_class' => 'p-link--list u-mb20', // class 名を複数指定
					'add_li_class' => 'p-link--list__sns', // li タグへ class を追加
					'add_a_class' => 'c-text--sns', // a タグへ class を追加
					'container' => false
				) );
				?>
				<address class="c-text--copyright"><small>&copy; <?php bloginfo( 'name' ); ?></small></address>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
