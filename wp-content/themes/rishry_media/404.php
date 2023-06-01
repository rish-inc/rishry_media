<?php get_header(); ?>
	<main class="l-main">
		<div class="p-search">
			<div class="p-search__window">
				<?php get_search_form(); ?>
			</div>
		</div>
		<article class="p-contents_404">
			<section class="p-detail error">
				<h2 class="error__title">404 File not found.</h2>
				<h3>お探しのページはありません</h3>
				<p>お探しのページは移動、または削除された可能性があります。</p>
				<a class="back-to-top c-btn" href="<?php echo esc_url(  home_url() ); ?>" >トップへ戻る</a>
			</section>
		</article>
		<?php get_sidebar(); ?>
	</main>
<?php get_footer(); ?>
