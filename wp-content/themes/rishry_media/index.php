<?php get_header(); ?>
<div class="l-contents">
	<div class="p-search">
		<div class="p-search__window">
			<?php get_search_form(); ?>
		</div>
	</div>
	<div class="p-mainvisual"><img src="<?php echo esc_url( get_theme_file_uri('/assets/images/dummy.jpg') ); ?>" alt="メインビジュアル　ダミー画像"></div>
	<main class="p-main">
		<article class="p-detail">
			<h2 class="c-title c-headline-border">MEDIA</h2>
				<?php get_template_part("assets/components/card"); ?>
		</article>
		<ul class="c-pagination u-boundary-line">
			<li class="c-pagination__list"><a class="before-to" href="#">前へ</a></li>
			<li class="c-pagination__list"><a class="page-active" href="#">1</a></li>
			<li class="c-pagination__list"><a class="page" href="#">2</a></li>
			<li class="c-pagination__list"><a class="page" href="#">3</a></li>
			<li class="c-pagination__list"><a class="extend" href="#">…</a></li>
			<li class="c-pagination__list"><a class="next-for" href="#">次へ</a></li>
		</ul>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
