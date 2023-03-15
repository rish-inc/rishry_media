<form class="c-search-window" action="/" name="search-form" method="get" action="<?php echo home_url('/'); ?>">
	<input type="text" placeholder="Search" name="s" id="s">
	<button type="submit" class="c-search-window__button" aria-label="search" value="">
		<img class="c-search-window__img" src="<?php echo get_theme_file_uri( '/assets/images/search/search.svg' ); ?>" alt="">
	</button>
</form>
