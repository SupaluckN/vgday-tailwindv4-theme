/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

const navMenu = document.getElementByClass("menu-header-munu-container");
//const navLink = document.querySelectorAll(".menu-item");
const hambergerMenu = document.getElementById("hamberger");

hambergerMenu.addEventListener("click", () => {
    navMenu.classList.toggle("left-[0]");
})