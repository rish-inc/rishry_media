<?php get_header(); ?>
<div class="l-contents">
	<div class="p-search">
		<div class="p-search__window">
			<?php get_search_form(); ?>
		</div>
	</div>
	<div class="p-mainvisual"><img src="<?php echo get_theme_file_uri('/assets/images/dummy.jpg'); ?>" alt="メインビジュアル　ダミー画像"></div>
	<main class="p-main">
		<article class="p-detail">
			<h2 class="c-title c-headline-border">MEDIA</h2>
			<ul class="p-post-list">
				<li class="p-post-list__posted c-boundary-line">
					<figure class="p-card">
						<figcaption class="p-card__caption">
							<h3 class="p-card__caption__title c-barline-border">ブログタイトル</h3>
							<ul class="data c-time-category-chunk">
								<li class="time"><time>投稿日時</time></li>
								<li class="category">カテゴリー名</li>
							</ul>
						</figcaption>
						<img class="p-card__img" src="<?php echo get_theme_file_uri('/assets/images/p-card/eye-catching.jpg'); ?>" alt="アイキャッチ画像">
					</figure>
				</li>
				<li class="p-post-list__posted c-boundary-line">
					<figure class="p-card">
						<figcaption class="p-card__caption">
							<h3 class="p-card__caption__title c-barline-border">ブログタイトル</h3>
							<ul class="data c-time-category-chunk">
								<li class="time"><time>投稿日時</time></li>
								<li class="category">カテゴリー名</li>
							</ul>
						</figcaption>
						<img class="p-card__img" src="<?php echo get_theme_file_uri('/assets/images/p-card/eye-catching.jpg'); ?>" alt="アイキャッチ画像">
					</figure>
				</li>
				<li class="p-post-list__posted c-boundary-line">
					<figure class="p-card">
						<figcaption class="p-card__caption">
							<h3 class="p-card__caption__title c-barline-border">ブログタイトル</h3>
							<ul class="data c-time-category-chunk">
								<li class="time"><time>投稿日時</time></li>
								<li class="category">カテゴリー名</li>
							</ul>
						</figcaption>
						<img class="p-card__img" src="<?php echo get_theme_file_uri('/assets/images/p-card/eye-catching.jpg'); ?>" alt="アイキャッチ画像">
					</figure>
				</li>
			</ul>
		</article>
		<ul class="c-pagination">
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
