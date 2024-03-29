<?php get_header(); ?>
	<div class="l-contents--privacy">
		<div class="p-search">
			<div class="p-search__window">
				<?php get_search_form(); ?>
			</div>
		</div>
		<main class="p-main">
			<article class="p-detail__about--privacy">
				<figure class="p-card"></figure>
					<?php if ( has_post_thumbnail()) : ?>
						<?php echo get_the_post_thumbnail('', 'medium_large', array( 'class' => 'p-eyecatch') ); ?>
					<?php endif; ?>
					<section class="p-entry-content__privacy">
						<p class="c-barline-border">
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</p>
					</section>
			</article>
		</main>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
