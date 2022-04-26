<footer class="l-footer p-footer">
			<div class="p-footer__inner">
				<nav class="p-footer__inner__navigation">
					<ul class="p-footer__inner__navigation__menu">
						<?php wp_nav_menu( array(
							'theme_location' => 'footer-menu',
							'items_wrap' => '%3$s',
							'container' => false
						) ); ?>
					</ul>
				</nav>
				<address class="p-copyright"><small>&copy; <?php bloginfo( 'name' ); ?></small></address>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
