const editDialog=document.getElementById('eventEditModal');
const editBtn=document.getElementById('editEventBtn');
const deleteBtn=document.getElementById('deleteEventBtn');
const popUpMenu=document.getElementById('popUpMenu');
const hideDialogBtn=document.getElementById('hideDialog');
const hideBtn=document.getElementById('hideBtn');

editBtn.addEventListener('click',openDialog);

hideDialogBtn.addEventListener('click',hideDialog);
hideBtn.addEventListener('click',hideDialog);

function openDialog() {
    editDialog.style.display = 'block';
    popUpMenu.classList.toggle('menu-visible');
}

function hideDialog() {
    editDialog.style.display = 'none';
}

window.addEventListener('click', (event) => {
    if (event.target === editDialog) {
        hideDialog();
    }
});