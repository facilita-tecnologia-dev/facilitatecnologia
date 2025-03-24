const body = document.querySelector("body");

const menuMobileTrigger = document.querySelector("#menumobile-trigger");
const menuMobile = document.querySelector("#menumobile");
const menuMobileClose = document.querySelector("#menumobile-close");

const menuMobileOverlay = document.querySelector("#menumobile-overlay");

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

function handleShowMenuMobile() {
    menuMobile.classList.add("active");
    menuMobileOverlay.classList.replace("hidden", "block");
}

function handleHideMenuMobile() {
    menuMobile.classList.remove("active");
    menuMobileOverlay.classList.replace("block", "hidden");
}

const phoneInputs = document.querySelectorAll('input[type="tel"]');

phoneInputs.forEach(function (phoneInput) {
    phoneInput.addEventListener("input", function (e) {
        var x = e.target.value
            .replace(/\D/g, "")
            .match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
        e.target.value = !x[2]
            ? x[1]
            : "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
    });
});
