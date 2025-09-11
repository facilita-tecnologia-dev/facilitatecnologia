import "./bootstrap";

import Swiper from "swiper";
import { Pagination } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";

import Typed from "typed.js";

document.addEventListener("DOMContentLoaded", () => {
    // Global
    menuMobile();
    scrollToSection();

    // Home
    console.log(document.getElementById("animated-title"));
    animateString("animated-title", [
        `Tecnologia que <span class="text-sky-500">conecta</span>.`,
        `Tecnologia que <span class="text-sky-500">evolui</span>.`,
        `Tecnologia que <span class="text-sky-500">adapta</span>.`,
        `Tecnologia que <span class="text-sky-500">facilita</span>.`,
    ]);

    animateHistoryNumbers();
    swiperTestimonials();

    // About
    swiperTimeline();
});

// Global
function scrollToSection() {
    // Scroll into view
    const urlParams = new URLSearchParams(window.location.search);
    const urlSectionParam = urlParams.get("secao");

    if (urlSectionParam) {
        const section = document.querySelector(`#${urlSectionParam}`);
        if (section) {
            section.scrollIntoView({
                behavior: "smooth",
            });
        }
    }
}

function menuMobile() {
    // Menumobile
    const menuMobileTrigger = document.querySelector("#menumobile-trigger");
    const menuMobile = document.querySelector("#menumobile");
    const menuMobileOverlay = document.querySelector("#menumobile-overlay");

    document.querySelector("body").addEventListener("click", function (event) {
        if (menuMobileOverlay && event.target.id === "menumobile-overlay") {
            handleHideMenuMobile();
        }
    });

    menuMobileTrigger.addEventListener("click", function () {
        handleShowMenuMobile();
    });

    function handleShowMenuMobile() {
        menuMobile.classList.add("active");
        menuMobileOverlay.classList.replace("hidden", "block");
    }

    function handleHideMenuMobile() {
        menuMobile.classList.remove("active");
        menuMobileOverlay.classList.replace("block", "hidden");
    }
}

// Home
function animateString(id, strings = []) {
    const string = document.getElementById(id);

    if (string) {
        new Typed(string, {
            strings: strings,
            typeSpeed: 50,
            backSpeed: 50,
        });
    }
}

function animateHistoryNumbers() {
    const counterSection = document.querySelector("#history-numbers");
    const counters = document.querySelectorAll(".number-counter");
    const duration = 2500;

    if (counterSection) {
        function formatNumber(value) {
            if (value >= 1000000000)
                return "+" + Math.floor(value / 1000000000) + "bi";
            if (value >= 1000000)
                return "+" + Math.floor(value / 1000000) + "mi";
            if (value >= 1000) return "+" + Math.floor(value / 1000) + "mil";
            return "+" + Math.floor(value).toString();
        }

        function animateCounter(counter) {
            const target = +counter.getAttribute("data-target");
            const startTime = performance.now();

            function updateCounter(currentTime) {
                const elapsedTime = currentTime - startTime;
                const progress = Math.min(elapsedTime / duration, 1);
                const currentValue =
                    progress === 1 ? target : Math.floor(progress * target);
                counter.textContent = formatNumber(currentValue);

                if (progress < 1) requestAnimationFrame(updateCounter);
            }

            requestAnimationFrame(updateCounter);
        }

        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        counters.forEach(animateCounter); // Inicia a animação
                        observer.unobserve(entry.target); // Para de observar após o primeiro disparo
                    }
                });
            },
            { threshold: 0.5 }
        );

        observer.observe(counterSection);
    }
}

function swiperTestimonials() {
    const testimonials = document.querySelector(".testimonials-swiper");

    if (testimonials) {
        new Swiper(testimonials, {
            modules: [Pagination],
            direction: "horizontal",
            autoHeight: true,

            pagination: {
                el: ".swiper-pagination",
            },
        });
    }
}

//About
function swiperTimeline() {
    const timeline = document.querySelector(".timeline-swiper");

    if (timeline) {
        new Swiper(timeline, {
            modules: [Pagination],
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
    }
}
