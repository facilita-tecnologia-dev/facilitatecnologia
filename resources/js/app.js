import "./bootstrap";

import Swiper from "swiper";
import { Pagination, Navigation } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";

import Typed from "typed.js";

document.addEventListener("DOMContentLoaded", () => {
    // Global
    menuMobile();
    scrollToSection();
    window.scrollToY = scrollToY;

    // Home
    animateString("home-animated-title", [
        `Tecnologia que <span class="text-sky-500">conecta</span>.`,
        `Tecnologia que <span class="text-sky-500">evolui</span>.`,
        `Tecnologia que <span class="text-sky-500">adapta</span>.`,
        `Tecnologia que <span class="text-sky-500">facilita</span>.`,
    ]);

    animateHistoryNumbers();
    swiperTestimonials();

    // End Home

    // About
    swiperTimeline();

    // End About

    // Services - Training Management
    animateString("training-management-animated-title", [
        `Gestão de Treinamentos <span class="text-training-management-primary-solid">eficiente</span>.`,
        `Gestão de Treinamentos <span class="text-training-management-primary-solid">confiável</span>.`,
        `Gestão de Treinamentos <span class="text-training-management-primary-solid">simples</span>.`,
        `Gestão de Treinamentos <span class="text-training-management-primary-solid">descomplicada</span>.`,
    ]);
    // End Services - Training Management

    // Services - RH Management
    animateString("rh-management-animated-title", [
        `Gestão de Recrutamento <span class="text-rh-management-primary-solid">eficiente</span>.`,
        `Gestão de Recrutamento <span class="text-rh-management-primary-solid">sólida</span>.`,
        `Gestão de Recrutamento <span class="text-rh-management-primary-solid">ágil</span>.`,
        `Gestão de Recrutamento <span class="text-rh-management-primary-solid">assertiva</span>.`,
    ]);
    // End Services - RH Management

    // Services - EPI Management
    animateString("epi-management-animated-title", [
        `Gestão de Epi\'s <span class="text-epi-management-primary-solid">automatizada</span>.`,
        `Gestão de Epi\'s <span class="text-epi-management-primary-solid">eficiente</span>.`,
        `Gestão de Epi\'s <span class="text-epi-management-primary-solid">confiável</span>.`,
        `Gestão de Epi\'s <span class="text-epi-management-primary-solid">otimizada</span>.`,
    ]);
    // End Services - EPI Management

    heroSectionSwiper();
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

    if (menuMobileTrigger) {
        menuMobileTrigger.addEventListener("click", function () {
            handleShowMenuMobile();
        });
    }

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

function scrollToY(event, id, offset = 0) {
    event.preventDefault();

    const element = document.getElementById(id);
    if (!element) return;

    const y = element.getBoundingClientRect().top + window.pageYOffset - offset;

    window.scrollTo({
        top: y,
        behavior: "smooth",
    });
}

// Services
// function heroSectionSwiper() {
//     const sliderContainer = document.querySelector(".hero-section-swiper");
//     if (sliderContainer) {
//         const videoPlayer = document.getElementById(
//             "hero-section-video-canvas"
//         );
//         const slides = sliderContainer.querySelectorAll(".swiper-slide");

//         const swiper = new Swiper(sliderContainer, {
//             modules: [Navigation],
//             slidesPerView: "auto",
//             spaceBetween: 8,
//             loop: true,
//             allowTouchMove: window.innerWidth < 640,
//             navigation: {
//                 nextEl: ".custom-next",
//                 prevEl: ".custom-prev",
//             },
//         });

//         function setActiveVideo(videoSrc, activeSlide) {
//             videoPlayer.src = videoSrc;

//             slides.forEach((slide) => {
//                 const btn = slide.querySelector("button");
//                 const span = slide.querySelector("span");
//                 btn.classList.remove("!bg-primary-solid");
//                 span.classList.remove("!text-main-background");
//             });

//             const activeBtn = activeSlide.querySelector("button");
//             const activeSpan = activeSlide.querySelector("span");

//             activeBtn.classList.add("!bg-primary-solid");
//             activeSpan.classList.add("!text-main-background");
//         }

//         // Inicializa o primeiro GIF
//         setActiveVideo(slides[0].dataset.video, slides[0]);

//         // Clique nos slides
//         slides.forEach((slide, index) => {
//             slide.addEventListener("click", () => {
//                 swiper.slideToLoop(index);
//                 setActiveVideo(slide.dataset.video, slide);
//             });
//         });

//         // Atualiza o vídeo ao mudar o slide via navegação
//         swiper.on("slideChange", () => {
//             const activeSlide = slides[swiper.realIndex];
//             setActiveVideo(activeSlide.dataset.video, activeSlide);
//         });

//         window.addEventListener("resize", () => {
//             swiper.allowTouchMove = window.innerWidth < 640;
//         });
//     }
// }

function heroSectionSwiper(){
     const sliderContainer = document.querySelector(".hero-section-swiper");
    if (!sliderContainer) return;

    const videoPlayer = document.getElementById(
        "hero-section-video-canvas"
    );

    const videoClickArea = document.getElementById(
        "hero-video-click"
    );

    const slides = sliderContainer.querySelectorAll(".swiper-slide");

    const swiper = new Swiper(sliderContainer, {
        modules: [Navigation],
        slidesPerView: "auto",
        spaceBetween: 8,
        loop: true,
        allowTouchMove: window.innerWidth < 640,
        navigation: {
            nextEl: ".custom-next",
            prevEl: ".custom-prev",
        },
    });

    function setActiveVideo(videoSrc, activeSlide) {
        videoPlayer.src = videoSrc;

        slides.forEach((slide) => {
            const btn = slide.querySelector("button");
            const span = slide.querySelector("span");

            btn.classList.remove("!bg-primary-solid");
            span.classList.remove("!text-main-background");
        });

        const activeBtn = activeSlide.querySelector("button");
        const activeSpan = activeSlide.querySelector("span");

        activeBtn.classList.add("!bg-primary-solid");
        activeSpan.classList.add("!text-main-background");
    }

    // Inicializa o primeiro vídeo
    if (slides.length > 0) {
        setActiveVideo(slides[0].dataset.video, slides[0]);
    }

    // Clique nos slides
    slides.forEach((slide, index) => {
        slide.addEventListener("click", () => {
            swiper.slideToLoop(index);
            setActiveVideo(slide.dataset.video, slide);
        });
    });

    // Atualiza o vídeo ao mudar o slide via navegação
    swiper.on("slideChange", () => {
        const activeSlide = slides[swiper.realIndex];
        if (activeSlide) {
            setActiveVideo(activeSlide.dataset.video, activeSlide);
        }
    });

    // 👉 Clique no vídeo abre modal Livewire
    if (videoClickArea) {
        videoClickArea.addEventListener("click", () => {
            if (!videoPlayer.src) return;

            Livewire.dispatch("openHeroVideoModal", {
                video: videoPlayer.src,
            });
        });
    }

    window.addEventListener("resize", () => {
        swiper.allowTouchMove = window.innerWidth < 640;
    });
}
