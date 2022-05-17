<?php get_header(); ?>
	<main class="l-main">
		<div class="p-search">
			<?php get_search_form(); ?>
		</div>
		<figure class="p-mainvisual"><img src="<?php echo get_theme_file_uri( '/images/dummy.jpg' ); ?>" alt="メインビジュアル　ダミー画像"></figure>
		<article class="p-contents">
			<section class="p-detail">
				<h2 class="c-title c-headline-border">MEDIA</h2>
				<ul class="p-post-list">
					<li class="p-post-list__posted c-boundary-line">
						<figure class="p-card">
							<figcaption class="p-card__caption">
								<h3 class="p-card__caption__title c-barline-border">ブログタイトル</h3>
								<ul class="c-parallel--data">
									<li class="c-text--gray"><time><?php echo get_the_date(); ?></time></li>
									<li class="c-text--pink">カテゴリー名</li>
								</ul>
							</figcaption>
							<img class="p-card__img" src="<?php echo get_theme_file_uri( './images/p-card/eye-catching.jpg' ); ?>" alt="アイキャッチ画像">
						</figure>
					</li>
					<li class="p-post-list__posted c-boundary-line">
						<figure class="p-card">
							<figcaption class="p-card__caption">
								<h3 class="p-card__caption__title c-barline-border">ブログタイトル</h3>
								<ul class="c-parallel--data">
									<li class="c-text--gray"><time><?php echo get_the_date(); ?></time></li>
									<li class="c-text--pink">カテゴリー名</li>
								</ul>
							</figcaption>
							<img class="p-card__img" src="<?php echo get_theme_file_uri( './images/p-card/eye-catching.jpg' ); ?>" alt="アイキャッチ画像">
						</figure>
					</li>
					<li class="p-post-list__posted c-boundary-line">
						<figure class="p-card">
							<figcaption class="p-card__caption">
								<h3 class="p-card__caption__title c-barline-border">ブログタイトル</h3>
								<ul class="c-parallel--data">
									<li class="c-text--gray"><time><?php echo get_the_date(); ?></time></li>
									<li class="c-text--pink">カテゴリー名</li>
								</ul>
							</figcaption>
							<img class="p-card__img" src="<?php echo get_theme_file_uri( './images/p-card/eye-catching.jpg' ); ?>" alt="アイキャッチ画像">
						</figure>
					</li>
				</ul>
			</section>
			<ul class="c-pagination">
				<li class="c-pagination__list"><a class="before-to" href="#">前へ</a></li>
				<li class="c-pagination__list"><a class="page-active" href="#">1</a></li>
				<li class="c-pagination__list"><a class="page" href="#">2</a></li>
				<li class="c-pagination__list"><a class="page" href="#">3</a></li>
				<li class="c-pagination__list"><a class="extend" href="#">…</a></li>
				<li class="c-pagination__list"><a class="next-for" href="#">次へ</a></li>
			</ul>
		</article>
		<?php get_sidebar(); ?>
	</main>
<?php get_footer(); ?>
