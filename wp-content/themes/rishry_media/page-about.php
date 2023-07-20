<?php get_header(); ?>
	<div class="l-contents">
		<div class="p-search">
			<div class="p-search__window">
				<?php get_search_form(); ?>
			</div>
		</div>
		<main class="p-main__about">
			<article class="p-detail__about">
				<h2 class="c-title__about c-headline-border">ABOUT</h2>
			<figure class="p-card">
			</figure>
				<?php if ( has_post_thumbnail()) : ?>
					<?php echo get_the_post_thumbnail('', 'medium_large', array( 'class' => 'p-eyecatch') ); ?>
				<?php endif; ?>
				<section class="p-entry-content__about">
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
