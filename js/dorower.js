jQuery( function( $ ) {
    $( ".p-hamburger-menu" ).on( "click", function ( ) {
        $( ".p-head-nav-sp" ).slideToggle( 300 );
    } );
    $( ".p-hamburger-menu" ).on( "click", function ( ) {
        $( ".p-head-nav-sp" ).css( { display: "none" } );
    } );
} );