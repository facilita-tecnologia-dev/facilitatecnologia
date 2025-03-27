const wysiwygElement = document.querySelector("#content");
const oldContent = wysiwygElement.dataset.old;

const editor = new FroalaEditor(wysiwygElement, {
    height: 200,
    enter: FroalaEditor.ENTER_BR,
    paragraphFormat: {
        N: "Normal",
    },
    paragraphDefaultSelection: "Normal",
});

document.addEventListener("DOMContentLoaded", () => {
    editor.html.set(oldContent);
});

// function setInputToText(event) {
//     const parentDiv = event.target.parentElement.parentElement;
//     const triggerText = parentDiv.querySelector(".trigger-text");
//     const text = parentDiv.querySelector("#text");
//     const triggerFile = parentDiv.querySelector(".trigger-file");
//     const file = parentDiv.querySelector("#file");
// }

// function setInputToFile(event) {
//     const parentDiv = event.target.parentElement.parentElement;
//     const text = parentDiv.querySelector("#text");
//     const file = parentDiv.querySelector("#file");
// }

function toggleInput(inputType) {
    const parentDiv = event.target.parentElement.parentElement;
    const triggerText = parentDiv.querySelector(".trigger-text");
    const text = parentDiv.querySelector("#text");
    const triggerFile = parentDiv.querySelector(".trigger-file");
    const file = parentDiv.querySelector("#file");

    if (inputType === "text") {
        text.style.display = "block";
        triggerText.classList.add("bg-gray-300");
        editor.edit.on();

        file.style.display = "none";
        file.querySelector("input").setAttribute("disabled", "");
        triggerFile.classList.remove("bg-gray-300");
    } else if (inputType === "file") {
        text.style.display = "none";
        triggerText.classList.remove("bg-gray-300");
        editor.edit.off();

        file.style.display = "flex";
        triggerFile.classList.add("bg-gray-300");
        file.querySelector("input").removeAttribute("disabled");
    }
}
