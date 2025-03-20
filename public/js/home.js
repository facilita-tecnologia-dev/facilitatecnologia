import Swiper from "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs";

// init Swiper:
const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    autoHeight: true,
    // // loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        // dynamicBullets: true,
    },
});
