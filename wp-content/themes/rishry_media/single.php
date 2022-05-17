<?php get_header(); ?>
		<div class="l-main">
			<div class="p-search">
				<?php get_search_form(); ?>
			</div>
			<main class="p-contents">
				<?php
					if( have_posts() ):
						while( have_posts() ):
							the_post(); ?>
					<article class="p-detail u-mb30--tb60">
						<div class="p-card--entry u-mb15--pc30">
							<h2 class="p-card--entry__title c-text--title c-barline-border u-mb--pc10"><?php the_title(); ?></h2>
							<ul class="p-card--entry__data c-parallel--data">
								<li class="p-card--entry__data__text c-text--gray"><time><?php the_time( 'Y年n月j日' ); ?></time></li>
								<?php
									$cats = get_the_category(); // get_the_category(); を変数 $cats へ代入
									if( $cats ) : // $cats が空ではない場合
										foreach( $cats as $cat ) : ?> <!-- $cats の中にある要素を $cat へ代入。 $cat を全てとりだすまでループを続ける -->
											<li class="p-card--entry__data__text-bold c-text--pink"> <!-- li タグ内に $cat がある場合、 -->
												<?php
													echo esc_html( $cat -> name ); // カテゴリー名を出力
												?>
											</li>
										<?php endforeach;
									endif;
								?>
							</ul>
						</div>
						<div class="p-eyecatch"><?php the_post_thumbnail(); ?></div>
						<section class="p-inside u-mt30--pc60 u-mb20">
							<?php the_content(); ?>
							<h3 class="p-inside__head c-text--head c-barline-border u-mb20">見出し</h3>
							<p class="c-text--default">本文です本文です本文です本文です本文です本文です本文です本文です</p>
							<p class="c-text--default">本文です本文です本文です本文です本文です本文です本文です本文です</p>
							<p class="c-text--default">本文です本文です本文です本文です本文です本文です本文です本文です</p>
							<p class="c-text--default">本文です本文です本文です本文です本文です本文です本文です本文です</p>
							<div class="p-inside__tag u-mt30--pc60">
								<a class="p-inside__tag__link c-text" href="#">#タグ名</a>
								<a class="p-inside__tag__link c-text" href="#">#タグ名</a>
								<a class="p-inside__tag__link c-text" href="#">#タグ名</a>
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
										<figure class="c-parallel p-card--connection">
											<img class="p-card--connection__img" src="<?php echo get_theme_file_uri( './images/eye-catching03.jpg' ); ?>" alt="関連記事アイキャッチ画像">
											<figcaption class="p-card--connection__caption">
												<ul class="c-parallel">
													<li class="c-text--gray-small"><time><?php the_time( 'Y年n月j日' ); ?></time></li>
													<li class="c-text--pink-small">カテゴリー名</li>
												</ul>
												<h5 class="p-card--connection__caption__title">タイトル</h5>
											</figcaption>
										</figure>
									</a>
								</li>
								<li class="p-relation__list__item u-mb10--pc20">
									<a class="p-relation__list__item__link" href="#">
										<figure class="c-parallel p-card--connection">
											<img class="p-card--connection__img" src="<?php echo get_theme_file_uri( './images/eye-catching03.jpg' ); ?>" alt="関連記事アイキャッチ画像">
											<figcaption class="p-card--connection__caption">
												<ul class="c-parallel">
													<li class="c-text--gray-small"><time><?php the_time( 'Y年n月j日' ); ?></time></li>
													<li class="c-text--pink-small">カテゴリー名</li>
												</ul>
												<h5 class="p-card--connection__caption__title">タイトル</h5>
											</figcaption>
										</figure>
									</a>
								</li>
								<li class="p-relation__list__item u-mb10--pc20">
									<a class="p-relation__list__item__link" href="#">
										<figure class="c-parallel p-card--connection">
											<img class="p-card--connection__img" src="<?php echo get_theme_file_uri( './images/eye-catching03.jpg' ); ?>" alt="関連記事アイキャッチ画像">
											<figcaption class="p-card--connection__caption">
												<ul class="c-parallel">
													<li class="c-text--gray-small"><time><?php the_time( 'Y年n月j日' ); ?></time></li>
													<li class="c-text--pink-small">カテゴリー名</li>
												</ul>
												<h5 class="p-card--connection__caption__title">タイトル</h5>
											</figcaption>
										</figure>
									</a>
								</li>
							</ul>
						</aside>
						<ul class="p-link--page u-mt30">
							<?php if ( get_previous_post()): ?>
								<li class="p-link--page__btn c-text--little"><?php previous_post_link('%link', '前へ'); ?></li>
							<?php endif; ?>
							<?php if ( get_next_post()): ?>
								<li class="p-link--page__btn c-text--little"><?php next_post_link('%link', '次へ'); ?></li>
							<?php endif; ?>
						</ul>
					</article>
					<?php endwhile;
						else :
						?><p>表示する記事がありません</p><?php
						endif; ?>
			</main>
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>
