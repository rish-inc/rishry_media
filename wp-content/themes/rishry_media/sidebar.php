<div class="l-sidebar c-boundary-line u-border-pc-none">
	<nav class="p-side">
		<?php
			if( is_active_sidebar( 'category_widget' ) ):
				dynamic_sidebar( 'category_widget' );
				else:
			endif;
		?>

		<ul class="p-parallel--sns">
			<?php if ( ssam_url()[ 'twitter' ] ) : ?>
				<li class="p-parallel--sns__icon"><a href="<?php echo esc_attr( ssam_url()['twitter'] ); ?>" target="_blank"><img class="c-sns--icon" src="<?php echo get_theme_file_uri( 'images/sns/t_logo.png' ); ?>" alt="Twitterアイコン"></a></li>
			<?php endif; ?>
			<?php if ( ssam_url()[ 'facebook' ] ) : ?>
				<li class="p-parallel--sns__icon"><a href="#" target="_blank"><img class="c-sns--icon" src="<?php echo get_theme_file_uri( 'images/sns/f_logo.png' ); ?>" alt="Facebookアイコン"></a></li>
			<?php endif; ?>
			<?php if ( ssam_url()[ 'instagram' ] ) : ?>
				<li class="p-parallel--sns__icon"><a href="#" target="_blank"><img class="c-sns--icon" src="<?php echo get_theme_file_uri( 'images/sns/i_logo.png' ); ?>" alt="Instagramアイコン"></a></li>
			<?php endif; ?>
		</ul>
	</nav>
</div>
