const FAQSection = document.querySelector("#faq");

const FAQQuestions = FAQSection.querySelectorAll(".faq-question");
console.log(FAQQuestions);

FAQQuestions.forEach((question) => {
    question.addEventListener("click", () => {
        const dropdown = question.querySelector(".dropdown");

        console.log(dropdown);
        if (dropdown.classList.contains("max-h-0")) {
            dropdown.classList.replace("max-h-0", "max-h-[200px]");
            dropdown.classList.replace("mt-0", "mt-2");
        } else {
            dropdown.classList.replace("max-h-[200px]", "max-h-0");
            dropdown.classList.replace("mt-2", "mt-0");
        }
    });
});
