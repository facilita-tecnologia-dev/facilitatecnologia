const body = document.querySelector("body");

// Menumobile
const menuMobileTrigger = document.querySelector("#menumobile-trigger");
const menuMobile = document.querySelector("#menumobile");
const menuMobileClose = document.querySelector("#menumobile-close");
const menuMobileOverlay = document.querySelector("#menumobile-overlay");

// Scroll into view
const urlParams = new URLSearchParams(window.location.search);
const urlSectionParam = urlParams.get("secao");

// if (scrollTo) {
//     FAQSection.scrollIntoView({
//         behavior: "smooth",
//     });
// }

document.addEventListener("DOMContentLoaded", () => {
    // Menumobile
    body.addEventListener("click", function (event) {
        if (event.target.id === "menumobile-overlay") {
            handleHideMenuMobile();
        }
    });

    menuMobileTrigger.addEventListener("click", function () {
        handleShowMenuMobile();
    });

    menuMobileClose.addEventListener("click", function () {
        handleHideMenuMobile();
    });

    if (urlSectionParam) {
        const section = document.querySelector(`#${urlSectionParam}`);
        if (section) {
            section.scrollIntoView({
                behavior: "smooth",
            });
        }
    }
});

function handleShowMenuMobile() {
    menuMobile.classList.add("active");
    menuMobileOverlay.classList.replace("hidden", "block");
}

function handleHideMenuMobile() {
    menuMobile.classList.remove("active");
    menuMobileOverlay.classList.replace("block", "hidden");
}
