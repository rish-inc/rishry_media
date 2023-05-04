<?php get_header(); ?>
<div class="l-contents">
	<div class="p-search">
		<div class="p-search__window">
			<?php get_search_form(); ?>
		</div>
	</div>
	<div class="p-mainvisual"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dummy.jpg' ) ); ?>" alt="メインビジュアル　ダミー画像"></div>
	<main class="p-main">
		<article class="p-detail">
			<h2 class="c-title c-headline-border">MEDIA</h2>
				<?php get_template_part( "assets/components/card" ); ?>
		</article>
		<?php
			$args = array (
				'prev_text'          => '前へ',
				'next_text'          => '次へ',
				'screen_reader_text' => "Posts navigation",
			);
			the_posts_pagination( $args );
		?>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
