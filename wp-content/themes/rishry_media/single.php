<?php get_header(); ?>
		<div class="l-contents">
			<div class="p-search">
				<div class="p-search__window">
					<?php get_search_form(); ?>
				</div>
			</div>
			<main class="p-main">
				<article class="p-detail">
					<div class="p-entry-card">
						<h2 class="c-entry-title p-card__caption__title c-barline-border">
							<?php
								$title = esc_html( get_the_title() );
								if ( empty( $title ) ) {
									$title = 'タイトルなし';
								}
								echo $title;
							?>
						</h2>
						<ul class="data c-time-category-chunk">
							<li class="time">
								<time datetime="<?php echo esc_attr( get_the_date() ); ?>">
									<?php echo esc_html( get_the_date( 'Y年m月d日' ) ); ?>
								</time>
							</li>
							<?php
							  $categories = get_the_category();
							  foreach( $categories as $category ):
							?>
							<li class="category">
								<?php echo '<a href="'. get_category_link( $category -> term_id ) .'">' . $category -> name . '</a>';?>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<?php if ( has_post_thumbnail()) : ?>
						<?php echo get_the_post_thumbnail('', 'medium_large', array( 'class' => 'p-eyecatch') ); ?>
					<?php else : ?>
						<img class="p-card__img--single" src="<?php echo esc_url( get_theme_file_uri('/assets/images/p-card/eye-catching.jpg') ); ?>" alt="アイキャッチ画像">
					<?php endif; ?>
					<section class="p-entry-content">
						<p class="c-barline-border">
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<?php the_content(); ?>
										<?php
											$args = array(
												'before'           => '<p>' . ( 'ページ：' ),
												'separator'        => '&nbsp;&nbsp;&nbsp;',
											);
											wp_link_pages( $args );
										?>
									</article>
								<?php endwhile; ?>
							<?php endif; ?>
						</p>
						<ul class="p-entry-tag">
							<?php
								$tags = get_the_tags();
								if ( ! empty( $tags ) ) {
									foreach ( $tags as $tag ) {
										echo '<li>#<a href="'. get_tag_link( $tag -> term_id ) .'">' . $tag -> name . '</a></li>';
									}
								}
							?>
						</ul>
						<div class="p-share c-boundary-line__bottom">
							<p class="p-share__title">SHARE!</p>
							<ul class="p-share__sns c-sns__icon">
								<li class="p-share__sns__list">
									<a href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=<?php echo get_the_title();?>" target="_blank" rel="nofollow noopener">
									<img src="<?php echo esc_url( get_theme_file_uri( '/dist/assets/images/t_logo.png' )); ?>" alt="Twitterアイコン画像">
									</a>
								</li>
								<li class="p-share__sns__list">
									<a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener">
										<img src="<?php echo esc_url( get_theme_file_uri( '/dist/assets/images/f_logo.png' )); ?>" alt="Facebookアイコン画像">
									</a>
								</li>
								<li class="p-share__sns__list">
									<a href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener">
										<img src="<?php echo esc_url( get_theme_file_uri( '/dist/assets/images/l_logo.png' )); ?>" alt="LINEアイコン画像">
									</a>
								</li>
							</ul>
						</div>
					</section>
					<aside class="p-related">
						<h4 class="p-related__title">関連記事</h4>
						<?php get_template_part( "assets/components/related" ); ?>
					</aside>
				</article>
				<div class="p-pager">
					<ul class="p-prev-next">
						<?php if ( get_previous_post() ) : ?>
							<li class="prev">
								<?php previous_post_link( '%link', '前へ' ); ?>
							</li>
						<?php else : ?>
							<li class="prev-hidden"></li>
						<?php endif; ?>
						<?php if ( get_next_post() ) : ?>
							<li class="next">
								<?php next_post_link( '%link', '次へ' ); ?>
							</li>
						<?php else : ?>
							<li class="next-hidden"></li>
						<?php endif; ?>
					</ul>
				</div>
			</main>

			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>
