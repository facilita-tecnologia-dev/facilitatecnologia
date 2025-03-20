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
