import Swiper from "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs";

document.addEventListener("DOMContentLoaded", () => {
    new Swiper(".timeline-swiper", {
        direction: "horizontal",
        slidesPerView: 1,

        autoplay: {
            delay: 4000,
            disableOnInteraction: true,
        },

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
});
