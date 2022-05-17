<?php get_header(); ?>
		<div class="l-main">
			<div class="p-search">
				<?php get_search_form(); ?>
			</div>
			<main class="p-contents">
				<article class="p-detail__search">
					<p class="p-detail__search__results">○○の検索結果</p>
					<ul class="p-post-list">
						<li class="p-post-list__posted c-boundary-line">
							<figure class="p-card">
								<figcaption class="p-card__caption">
									<h2 class="p-card__caption__title c-barline-border">ブログタイトル</h2>
									<ul class="c-parallel--data">
										<li class="c-text--gray"><time><?php the_time( 'Y年n月j日' ); ?></time></li>
										<li class="c-text--pink">カテゴリー名</li>
									</ul>
								</figcaption>
								<img class="p-card__img" src="././images/p-card/eye-catching.jpg" alt="アイキャッチ画像">
							</figure>
						</li>
						<li class="p-post-list__posted c-boundary-line">
							<figure class="p-card">
								<figcaption class="p-card__caption">
									<h2 class="p-card__caption__title c-barline-border">ブログタイトル</h2>
									<ul class="c-parallel--data">
										<li class="c-text--gray"><time><?php the_time( 'Y年n月j日' ); ?></time></li>
										<li class="c-text--pink">カテゴリー名</li>
									</ul>
								</figcaption>
								<img class="p-card__img" src="./images/p-card/eye-catching.jpg" alt="アイキャッチ画像">
							</figure>
						</li>
						<li class="p-post-list__posted c-boundary-line">
							<figure class="p-card">
								<figcaption class="p-card__caption">
									<h2 class="p-card__caption__title c-barline-border">ブログタイトル</h2>
									<ul class="c-parallel--data">
										<li class="c-text--gray"><time><?php the_time( 'Y年n月j日' ); ?></time></li>
										<li class="c-text--pink">カテゴリー名</li>
									</ul>
								</figcaption>
								<img class="p-card__img" src="./images/p-card/eye-catching.jpg" alt="アイキャッチ画像">
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
