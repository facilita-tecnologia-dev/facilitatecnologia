document.addEventListener("DOMContentLoaded", () => {
    // FAQ
    const FAQSection = document.querySelector("#faq");
    const FAQSearchInput = FAQSection.querySelector("#faq-search");
    const FAQQuestions = FAQSection.querySelectorAll(".faq-question");

    const urlParams = new URLSearchParams(window.location.search);
    const scrollTo = urlParams.get("search") || urlParams.get("page");

    if (scrollTo) {
        FAQSection.scrollIntoView({
            behavior: "smooth",
        });
    }

    FAQQuestions.forEach((question) => {
        question.addEventListener("click", () => {
            const dropdown = question.querySelector(".dropdown");

            if (dropdown.classList.contains("max-h-0")) {
                dropdown.classList.replace("max-h-0", "max-h-[200px]");
                dropdown.classList.replace("mt-0", "mt-2");
            } else {
                dropdown.classList.replace("max-h-[200px]", "max-h-0");
                dropdown.classList.replace("mt-2", "mt-0");
            }
        });
    });
});
