<ul class="p-post-list">
	<li class="p-post-list__posted">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<figure class="p-card c-boundary-line">
					<figcaption class="p-card__caption">
						<h3 class="p-card__caption__title__search c-barline-border"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<ul class="data c-time-category-chunk">
							<li class="time"><time><?php echo get_the_date( "Y年m月d日" ); ?></time></li>
							<?php
							  $categories = get_the_category();
							  foreach( $categories as $category ):
							?>
							<li class="category">
								<?php echo '<a href="'. get_category_link( $category -> term_id ) .'">' . $category -> name . '</a>';?>
							</li>
							<?php endforeach; ?>
						</ul>
					</figcaption>
					<a href="<?php the_permalink(); ?>">
						<span class="p-card__mask">
							<?php if ( has_post_thumbnail()) : ?>
								<?php the_post_thumbnail( 'full', array( 'class' => 'p-card__img' ) ); ?>
							<?php else : ?>
								<img class="p-card__img" src="<?php echo esc_url( get_theme_file_uri('/assets/images/p-card/eye-catching.jpg') ); ?>" alt="アイキャッチ画像">
							<?php endif; ?>
						</span>
					</a>
				</figure>
			<?php endwhile; ?>
		<?php else : ?>
			<p id="search_result" class="search_result">「表示するブログがありません」</p>
		<?php endif; ?>
	</li>
</ul>
