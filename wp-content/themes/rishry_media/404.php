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
				<article class="p-detail error">
					<h2 class="error__title">404 File not found.</h2>
					<h3>お探しのページはありません</h3>
					<p>お探しのページは移動、または削除された可能性があります。</p>
					<a class="back-to-top c-btn" href="/">TOPへ戻る</a>
				</article>
			</main>
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>
