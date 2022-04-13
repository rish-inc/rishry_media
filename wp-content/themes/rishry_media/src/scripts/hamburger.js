jQuery( function( $ ) {
    $( ".is-hamburger" ).on( "click", function() {
    $( this ).toggleClass( "is-open" );
    $( ".p-head-nav" ).toggleClass( "active" );
    $( "body" ).toggleClass( "is-open" );
    $( ".c-dorower-bg-sp" ).toggleClass( "is-open" );

    // $( window ).resize(function() {
	// 	if( $( window ).width()>=1025 );
	// 	$( ".is-hamburger" ).removeClass( "is-open" );
	// 	$( ".p-head-nav" ).removeClass( "active" );
    //     $( "body" ).removeClass( "is-open" );
    // } );
    } );
} );
