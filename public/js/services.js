const ourPlansSection = document.querySelector("#our-plans");
console.log(ourPlansSection);

const ourPlansList = ourPlansSection.querySelectorAll(".plan");
console.log(ourPlansList);

ourPlansList.forEach((plan) => {
    plan.addEventListener("click", function () {
        const dropdown = plan.querySelector(".dropdown");

        console.log(dropdown);

        if (dropdown.classList.contains("mt-0")) {
            dropdown.classList.replace("mt-0", "mt-4");
            dropdown.classList.replace("max-h-0", "max-h-[300px]");
            dropdown.classList.replace("border-t-0", "border-t");
            dropdown.classList.replace("pt-0", "pt-4");
        } else {
            dropdown.classList.replace("mt-4", "mt-0");
            dropdown.classList.replace("max-h-[300px]", "max-h-0");
            dropdown.classList.replace("border-t", "border-t-0");
            dropdown.classList.replace("pt-4", "pt-0");
        }
    });
});
