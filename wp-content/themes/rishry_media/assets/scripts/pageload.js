const sideNav = document.querySelector( ".p-side-navigation" );

window.addEventListener('load', function() {
    document.body.style.visibility = 'visible';
	if( document.getElementById( "search_result" ) != null ) {
		sideNav.classList.add( "is-close" );
	  }
});
