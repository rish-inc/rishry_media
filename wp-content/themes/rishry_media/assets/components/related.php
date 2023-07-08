<?php
	$categ = get_the_category( $post->ID );
	$catID = array();
	foreach( $categ as $cat ){
		array_push( $catID, $cat -> cat_ID );
	}
	$cateArgs = array(
		'post__not_in' => array( $post->ID ),
		'category__in' => $catID,
		'posts_per_page' => 3,
		'orderby' => 'rand'
	);
	$the_query = new WP_Query( $cateArgs );
?>
<?php if ( $the_query -> have_posts() ) : ?>
	<ul class="p-related-list">
		<?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
		<li class="p-related-item">
			<figure class="p-related-card">
				<figcaption class="p-related-card__caption">
					<ul class="p-related-card__caption__data c-time-category-chunk">
						<li class="time">
							<time><?php echo get_the_date( "Y年m月d日" ); ?></time>
						</li>
							<?php
								$categories = get_the_category();
								foreach( $categories as $category ):
							?>
						<li class="category">
							<?php echo '<a href="'. get_category_link( $category -> term_id ) .'">' . $category -> name . '</a>'; ?>
						</li>
							<?php endforeach; ?>
						<h5 class="p-related-card__caption__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h5>
					</ul>
					<a href="<?php the_permalink(); ?>">
						<span class="p-card__mask">
							<?php if ( has_post_thumbnail() ): the_post_thumbnail('full'); ?>
							<?php else : ?>
								<img src="<?php echo esc_url( get_theme_file_uri('/assets/images/p-card/eye-catching.jpg') ); ?>" alt="<?php the_title(); ?>">
							<?php endif; ?>
						</span>
					</a>
				</figcaption>
			</figure>
		</li>
		<?php endwhile; ?>
	</ul>
<?php else : ?>
	<ul class="p-related-list--none">
		<li><p>関連記事はありません</p></li>
	</ul>
<?php endif; wp_reset_postdata(); ?>
