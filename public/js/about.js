import Swiper from "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs";

const swiper = new Swiper(".swiper", {
    direction: "horizontal",
    slidesPerView: 1,
    // centeredSlides: true,

    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },

    pagination: {
        el: ".swiper-pagination",
    },
});
