<?php get_header(); ?>
	<div class="l-main">
		<div class="p-search">
			<div class="p-search__window">
				<?php get_search_form(); ?>
			</div>
		</div>
		<main class="p-contents">
			<article class="p-detail__search">
				<?php if (empty(get_search_query())) : ?>
					<p class="not-entered">「検索キーワードが未入力です」</p>
				<?php else : ?>
				<p class="p-detail__search__results"><?php the_search_query(); ?>の検索結果</p>
					<?php get_template_part( "assets/components/card_search" ); ?>
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
				<?php endif; ?>
			</article>
		</main>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
