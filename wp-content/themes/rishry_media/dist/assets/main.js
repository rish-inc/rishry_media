window.addEventListener("load", function() {
  document.body.style.visibility = "visible";
});
const hamburger = document.querySelector(".js-hamburger");
const headNav = document.querySelector(".p-head-nav");
const body = document.querySelector("body");
const dorower = document.querySelector(".c-dorower-bg-sp");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-open");
  headNav.classList.toggle("active");
  body.classList.toggle("is-open");
  dorower.classList.toggle("is-open");
});
const main = "";
