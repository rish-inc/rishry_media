jQuery( function( $ ) {
    $( ".p-hamburger-menu" ).on( "click", function() {
    $( this ).toggleClass( "is-open" );
    $( "body" ).toggleClass( "is-open" );
    $( ".c-dorower-bg-sp" ).toggleClass( "is-open" );
    } );
    } );