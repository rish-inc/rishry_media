<?php get_header(); ?>
		<main class="l-main">
			<div class="p-search">
				<div class="p-search__window">
					<?php get_search_form(); ?>
				</div>
			</div>
			<article class="p-contents">
				<section class="p-detail">
					<?php
						// パンくずリストの開始タグを出力
						echo '<ul class="p-breadcrumb c-breadcrumb-list">';
						echo '<li class="p-breadcrumb__item"><a href="/">HOME</a></li>';
						// アーカイブの種類によって異なるパンくずリストを表示する
						if (is_category()) {
							// 現在のカテゴリーを表示
							echo '<li class="p-breadcrumb__item">' . single_cat_title('', false) . '</li>';
						} elseif (is_tag()) {
							// タグアーカイブの場合
							echo '<li class="p-breadcrumb__item">' . single_tag_title('', false) . '</li>';
						}
						// パンくずリストの終了タグを出力
						echo '</ul>';
					?>
					<?php get_template_part( "assets/components/card_archive" ); ?>
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
			</article>
			<?php get_sidebar(); ?>
		</main>
<?php get_footer(); ?>
