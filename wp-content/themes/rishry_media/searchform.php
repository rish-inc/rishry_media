<form class="c-search-window" name="search-form" method="get" action="<?php echo esc_url( home_url('/') ); ?>">
	<label for="s" class="screen-reader-text">検索</label>
	<input type="text" placeholder="<?php
									if ( get_search_query() ) {
	  								     the_search_query();
									} else {
										 echo "ブランド・フリーワードで探す";
									}
									?>" name="s" id="s">
	<button type="submit" class="c-search-window__button" aria-label="search" value="">
		<img class="c-search-window__img" src="<?php echo get_theme_file_uri( '/assets/images/search/search.svg' ); ?>" alt="虫メガネ">
	</button>
</form>
