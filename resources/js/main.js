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

// // swiper
// document.addEventListener("DOMContentLoaded", function() {
//     const swiperEl = document.querySelector('.mySwiper');
//     // Assicurati che l'istanza di Swiper sia già inizializzata
//     const swiper = swiperEl.swiper;
  
//     // Disabilita lo scorrimento verso destra quando si raggiunge l'ultima slide
//     swiper.on('reachEnd', function() {
//       swiper.allowSlideNext = false;
//     });
  
//     // Riabilita lo scorrimento se l'utente torna indietro dalla fine
//     swiper.on('fromEdge', function() {
//       if (!swiper.isEnd) {
//         swiper.allowSlideNext = true;
//       }
//     });
//   });
