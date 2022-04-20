<?php get_header(); ?>
		<div class="l-contents">
			<div class="p-search">
				<form class="p-search__window c-search-window" action="/" name="search-form" method="post">
					<input type="text" name="search" placeholder="Search">
					<button type="submit" class="c-search-window__button" aria-label="search" value="">
						<img class="c-search-window__img" src="./images/search/search.svg" alt="">
					</button>
				</form>
			</div>
			<main class="p-main">
				<article class="p-detail">
					<div class="p-card--entry u-mb15--pc30">
						<h2 class="p-card--entry__title c-text--title c-barline-border u-mb--pc10">ブログタイトル</h2>
						<ul class="p-parallel--data">
							<li class="p-parallel--data__text c-text--gray"><time>投稿日時</time></li>
							<li class="p-parallel--data__text-bold c-text--pink">カテゴリー名</li>
						</ul>
					</div>
					<div class="p-eye-catching"><img src="<?php echo get_theme_file_uri( './images/eye-catching02.jpg' ); ?>" alt="記事アイキャッチ画像"></div>
					<section class="p-inside u-mt30--pc60 u-mb20">
						<h3 class="p-inside__head c-text--head c-barline-border u-mb20">見出し</h3>
						<p class="c-text--default">本文です本文です本文です本文です本文です本文です本文です本文です</p>
						<p class="c-text--default">本文です本文です本文です本文です本文です本文です本文です本文です</p>
						<p class="c-text--default">本文です本文です本文です本文です本文です本文です本文です本文です</p>
						<p class="c-text--default">本文です本文です本文です本文です本文です本文です本文です本文です</p>
						<div class="p-parallel u-mt30--pc60">
							<a class="c-text" href="#">#タグ名</a>
							<a class="c-text" href="#">#タグ名</a>
							<a class="c-text" href="#">#タグ名</a>
						</div>
						<div class="p-share u-mt30">
							<p class="p-share__title">SHARE!</p>
							<ul class="p-share__sns c-sns--icon u-mt20">
								<li class="p-share__sns__list"><a href="#"><img class="c-img--sns" src="<?php echo get_theme_file_uri( './images/sns/t_logo.png' ); ?>" alt="Twitterアイコン画像"></a></li>
								<li class="p-share__sns__list"><a href="#"><img class="c-img--sns" src="<?php echo get_theme_file_uri( './images/sns/f_logo.png' ); ?>" alt="Facebookアイコン画像"></a></li>
								<li class="p-share__sns__list"><a href="#"><img class="c-img--sns" src="<?php echo get_theme_file_uri( './images/sns/l_logo.png' ); ?>" alt="LINEアイコン画像"></a></li>
							</ul>
						</div>
					</section>
					<aside class="p-relation c-boundary-line">
						<h4 class="p-relation__title c-text--subhead u-mt30">関連記事</h4>
						<ul class="p-relation__list u-mt12--tb20">
							<li class="p-relation__list__item u-mb10--pc20">
								<a class="p-relation__list__item__link" href="#">
									<figure class="p-parallel--card">
										<img class="p-parallel--card__img" src="<?php echo get_theme_file_uri( './images/eye-catching03.jpg' ); ?>" alt="関連記事アイキャッチ画像">
										<figcaption class="p-parallel--card__caption">
											<ul class="p-parallel--data">
												<li class="p-parallel--data__text--relation c-text--gray"><time>投稿日時</time></li>
												<li class="p-parallel--data__text-bold--relation c-text--pink">カテゴリー名</li>
											</ul>
											<h5 class="p-parallel--card__caption__title">タイトル</h5>
										</figcaption>
									</figure>
								</a>
							</li>
							<li class="p-relation__list__item u-mb10--pc20">
								<a class="p-relation__list__item__link" href="#">
									<figure class="p-parallel--card">
										<img class="p-parallel--card__img" src="<?php echo get_theme_file_uri( './images/eye-catching03.jpg' ); ?>" alt="関連記事アイキャッチ画像">
										<figcaption class="p-parallel--card__caption">
											<ul class="p-parallel--data">
												<li class="p-parallel--data__text--relation c-text--gray"><time>投稿日時</time></li>
												<li class="p-parallel--data__text-bold--relation c-text--pink">カテゴリー名</li>
											</ul>
											<h5 class="p-parallel--card__caption__title">タイトル</h5>
										</figcaption>
									</figure>
								</a>
							</li>
							<li class="p-relation__list__item u-mb10--pc20">
								<a class="p-relation__list__item__link" href="#">
									<figure class="p-parallel--card">
										<img class="p-parallel--card__img" src="<?php echo get_theme_file_uri( './images/eye-catching03.jpg' ); ?>" alt="関連記事アイキャッチ画像">
										<figcaption class="p-parallel--card__caption">
											<ul class="p-parallel--data">
												<li class="p-parallel--data__text--relation c-text--gray"><time>投稿日時</time></li>
												<li class="p-parallel--data__text-bold--relation c-text--pink">カテゴリー名</li>
											</ul>
											<h5 class="p-parallel--card__caption__title">タイトル</h5>
										</figcaption>
									</figure>
								</a>
							</li>
						</ul>
					</aside>
					<nav class="p-pager">
						<ul class="p-prev-next">
							<a href="#"><li class="c-text--little">前へ</li></a>
							<a href="#"><li class="c-text--little">次へ</li></a>
						</ul>
					</nav>
				</article>
			</main>
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>
