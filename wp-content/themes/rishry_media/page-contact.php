<?php get_header(); ?>
		<div class="l-contents">
			<div class="p-search">
				<div class="p-search__window">
					<?php get_search_form(); ?>
				</div>
			</div>
			<article class="p-contents">
				<section class="p-detail__contact p-contact">
					<h1 class="c-title__contact c-headline-border">お問い合わせ</h1>
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</section>
			</article>
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>
