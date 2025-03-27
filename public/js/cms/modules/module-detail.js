const wysiwygElements = document.querySelectorAll(".wysiwyg");

wysiwygElements.forEach((item) => {
    const oldContent = item.dataset.old;

    const editor = new FroalaEditor(item, {
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
});
