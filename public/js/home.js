import Swiper from "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs";

document.addEventListener("DOMContentLoaded", () => {
    new Swiper(".testimonials-swiper", {
        direction: "horizontal",
        autoHeight: true,

        pagination: {
            el: ".swiper-pagination",
        },
    });

    const typedStrings = [
        `Tecnologia que <span class="text-sky-500">conecta</span>.`,
        `Tecnologia que <span class="text-sky-500">evolui</span>.`,
        `Tecnologia que <span class="text-sky-500">adapta</span>.`,
        `Tecnologia que <span class="text-sky-500">facilita</span>.`,
    ];

    new Typed("#type", {
        strings: typedStrings,
        typeSpeed: 50,
        backSpeed: 50,
    });

    animateHistoryNumbers();
});

function animateHistoryNumbers() {
    const counterSection = document.querySelector("#history-numbers");
    const counters = document.querySelectorAll(".number-counter");
    const duration = 2500;

    function formatNumber(value) {
        if (value >= 1000000000)
            return "+" + Math.floor(value / 1000000000) + "bi";
        if (value >= 1000000) return "+" + Math.floor(value / 1000000) + "mi";
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
