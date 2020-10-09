function openDialog(dialogName) {
    var dialog = document.getElementById(dialogName);
    dialog.showModal();
}

function closeDialog(dialogName) {
    var dialog = document.getElementById(dialogName);
    dialog.close();
}

function cleanFormDialog(elementId) {
    document.getElementById(dialogName).value = "";
}