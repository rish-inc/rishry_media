<div class="l-sidebar c-boundary-line u-border-pc-none">
	<nav class="p-side-navigation">
		<h3 class="p-side-navigation__title c-headline-border">CATEGORY</h3>
		<?php
			wp_nav_menu( array (
				'menu'            => 'sidebar-menu',
				'theme_location'  => 'sidebar-menu',
				'container'       => 'nav',
				'menu_class'      => 'p-side-navigation__main-menu',
				'items_wrap'      => '<ul>%3$s</ul>',
				));
		?>
		<ul class="p-side-navigation__sns-menu c-sns--icon">
			<li class="twitter"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/sns/t_logo.png' )); ?>" alt="twitter"></a></li>
			<li class="facebook"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/sns/f_logo.png' )); ?>" alt="facebook"></a></li>
			<li class="instagram"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/sns/i_logo.png' )); ?>" alt="instagram"></a></li>
		</ul>
	</nav>
</div>
