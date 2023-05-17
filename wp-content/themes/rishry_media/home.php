<?php get_header(); ?>
<article class="l-contents">
	<div class="p-search">
		<div class="p-search__window">
			<?php get_search_form(); ?>
		</div>
	</div>
	<div class="p-mainvisual"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dummy.jpg' ) ); ?>" alt="メインビジュアル　ダミー画像"><p class="p-mainvisual__title"><?php bloginfo( 'description' ); ?></p></div>
	<main class="p-main">
		<section class="p-detail">
			<h2 class="c-title c-headline-border">MEDIA</h2>
				<?php get_template_part( "assets/components/card" ); ?>
		</section>
		<?php
			$args = array (
				'prev_text'          => '前へ',
				'next_text'          => '次へ',
				'screen_reader_text' => "Posts navigation",
				'show_all'           => false,
				'mid_size'           => 0,
			);
			the_posts_pagination( $args );
		?>
	</main>
	<?php get_sidebar(); ?>
</article>
<?php get_footer(); ?>
