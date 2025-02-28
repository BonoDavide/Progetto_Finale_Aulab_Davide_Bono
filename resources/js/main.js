//scroll navbar


let navbar = document.querySelector(".navCustom");
let navbarBrand = document.querySelector(".navbar-brand");

window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        navbar.classList.add("nav-scrolled");
    } else {
        navbar.classList.remove("nav-scrolled");
    }
});