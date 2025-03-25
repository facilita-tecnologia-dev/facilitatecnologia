import Swiper from "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs";

const typedStrings = [
    `Tecnologia que <span class="text-sky-500">conecta</span>.`,
    `Tecnologia que <span class="text-sky-500">evolui</span>.`,
    `Tecnologia que <span class="text-sky-500">adapta</span>.`,
    `Tecnologia que <span class="text-sky-500">facilita</span>.`,
];

const swiper = new Swiper(".swiper", {
    direction: "horizontal",
    autoHeight: true,

    pagination: {
        el: ".swiper-pagination",
    },
});

var typed = new Typed("#type", {
    strings: typedStrings,
    typeSpeed: 50,
    backSpeed: 50,
});
