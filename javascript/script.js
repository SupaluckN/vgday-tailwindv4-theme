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


import '@fortawesome/fontawesome-free/js/all'
/*~~~~~~~~~~~~~~~ TOGGLE BUTTON ~~~~~~~~~~~~~~~*/
const navMenu = document.getElementById("nav-menu");
//const navLink = document.querySelectorAll(".menu-item");
const hambergerMenu = document.getElementById("hamberger");



hambergerMenu.addEventListener("click", () => {
    navMenu.classList.toggle("left-[0]");
    //hambergerMenu.classList.toggle("fa-solid fa-xmark");
})







