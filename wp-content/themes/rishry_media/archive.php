<?php get_header(); ?>
		<main class="l-main">
			<div class="p-search">
				<?php get_search_form(); ?>
			</div>
			<article class="p-contents">
				<section class="p-detail">
					<ul class="p-breadcrumb c-breadcrumb-list">
						<li class="p-breadcrumb__item"><a href="/">HOME</a></li>
						<li class="p-breadcrumb__item"><a href="">BRAND</a></li>
					</ul>
					<ul class="p-post-list">
						<li class="p-post-list__posted c-boundary-line">
							<figure class="p-card">
								<figcaption class="p-card__caption">
									<h2 class="p-card__caption__title c-barline-border">ブログタイトル</h2>
									<ul class="data c-time-category-chunk">
										<li class="p-parallel--data__text"><time>投稿日時</time></li>
										<li class="p-parallel--data__text-bold">カテゴリー名</li>
									</ul>
								</figcaption>
								<img class="p-card__img" src="././images/p-card/eye-catching.jpg" alt="アイキャッチ画像">
							</figure>
						</li>
						<li class="p-post-list__posted c-boundary-line">
							<figure class="p-card">
								<figcaption class="p-card__caption">
									<h2 class="p-card__caption__title c-barline-border">ブログタイトル</h2>
									<ul class="data c-time-category-chunk">
										<li class="p-parallel--data__text"><time>投稿日時</time></li>
										<li class="p-parallel--data__text-bold">カテゴリー名</li>
									</ul>
								</figcaption>
								<img class="p-card__img" src="./images/p-card/eye-catching.jpg" alt="アイキャッチ画像">
							</figure>
						</li>
						<li class="p-post-list__posted c-boundary-line">
							<figure class="p-card">
								<figcaption class="p-card__caption">
									<h2 class="p-card__caption__title c-barline-border">ブログタイトル</h2>
									<ul class="data c-time-category-chunk">
										<li class="p-parallel--data__text"><time>投稿日時</time></li>
										<li class="p-parallel--data__text-bold">カテゴリー名</li>
									</ul>
								</figcaption>
								<img class="p-card__img" src="./images/p-card/eye-catching.jpg" alt="アイキャッチ画像">
							</figure>
						</li>
					</ul>
				</section>
				<ul class="c-pagination">
					<li class="c-pagination__list"><a class="c-pagination__list__before-to" href="#">前へ</a></li>
					<li class="c-pagination__list"><a class="c-pagination__list__page-active" href="#">1</a></li>
					<li class="c-pagination__list"><a class="c-pagination__list__page" href="#">2</a></li>
					<li class="c-pagination__list"><a class="c-pagination__list__page" href="#">3</a></li>
					<li class="c-pagination__list"><a class="c-pagination__list__extend" href="#">…</a></li>
					<li class="c-pagination__list"><a class="c-pagination__list__next-for" href="#">次へ</a></li>
				</ul>
			</article>
			<?php get_sidebar(); ?>
		</main>
<?php get_footer(); ?>
