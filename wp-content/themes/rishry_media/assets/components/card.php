<ul class="p-post-list">
	<li class="p-post-list__posted c-boundary-line">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<figure class="p-card">
					<figcaption class="p-card__caption">
						<h3 class="p-card__caption__title c-barline-border"><?php the_title(); ?></h3>
						<ul class="data c-time-category-chunk">
							<li class="time"><time><?php echo get_the_date( "Y年m月d日" ); ?></time></li>
							<?php
							  $categories = get_the_category();
							  foreach( $categories as $category ):
							?>
							<li class="category"><?php echo $category -> name; ?></li>
							<?php endforeach; ?>
						</ul>
					</figcaption>
					<img class="p-card__img" src="<?php echo esc_url( get_theme_file_uri('/assets/images/p-card/eye-catching.jpg') ); ?>" alt="アイキャッチ画像">
				</figure>
			<?php endwhile; ?>
		<?php else : ?>
			<p id="search_result" class="search_result">「表示するブログがありません」</p>
		<?php endif; ?>
	</li>
</ul>
