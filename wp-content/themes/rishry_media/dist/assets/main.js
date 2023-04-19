window.addEventListener("load", function() {
  document.body.style.visibility = "visible";
});
const hamburger = document.querySelector(".js-hamburger");
const headNav = document.querySelector(".p-head-nav");
const body = document.querySelector("body");
const dorower = document.querySelector(".c-dorower-bg-sp");
const logo = document.querySelector(".c-header-flex-beside__logo");
const html = document.querySelector(".js-html_margin");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-open");
  headNav.classList.toggle("active");
  body.classList.toggle("is-open");
  dorower.classList.toggle("is-open");
  logo.classList.toggle("is-open");
  html.classList.toggle("is-open");
  if (window.matchMedia("(min-width: 600px)").matches) {
    dorower.classList.remove("is-open");
  }
});
window.addEventListener("resize", () => {
  hamburger.classList.remove("is-open");
  headNav.classList.remove("active");
  body.classList.remove("is-open");
  dorower.classList.remove("is-open");
  logo.classList.remove("is-open");
  html.classList.remove("is-open");
});
const main = "";
