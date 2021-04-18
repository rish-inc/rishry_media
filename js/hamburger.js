jQuery( function( $ ) {
    $( ".js-hamburger" ).on( "click", function() {
    $( this ).toggleClass( "is-open" );
    $( "body" ).toggleClass( "is-open" );
    $( ".dorower-bg-sp" ).toggleClass( "is-open" );
    } );
    } );