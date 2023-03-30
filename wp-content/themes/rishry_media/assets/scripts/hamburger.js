const hamburger = document.querySelector( ".js-hamburger" );
const headNav   = document.querySelector( ".p-head-nav" );
const body      = document.querySelector( "body" );
const dorower   = document.querySelector( ".c-dorower-bg-sp" );

hamburger.addEventListener( "click", () => {
  hamburger.classList.toggle( "is-open" );
  headNav.classList.toggle( "active" );
  body.classList.toggle( "is-open" );
  dorower.classList.toggle( "is-open" );

  // window.addEventListener("resize", () => {
  //   if (window.innerWidth >= 1025 ) {
  //     hamburger.classList.remove("is-open");
  //     headNav.classList.remove("active");
  //     body.classList.remove("is-open");
  //   }
  // });
});
