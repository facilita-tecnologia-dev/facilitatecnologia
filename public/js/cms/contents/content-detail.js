const wysiwygElement = document.querySelector("#content");
const oldContent = wysiwygElement.dataset.old;

const editor = new FroalaEditor(wysiwygElement, {
    enter: FroalaEditor.ENTER_BR,
    paragraphFormat: {
        N: "Normal",
    },
    paragraphDefaultSelection: "Normal",
});

document.addEventListener("DOMContentLoaded", () => {
    editor.html.set(oldContent);
});
