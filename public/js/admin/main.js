const createEventBtn=document.getElementById('openForm');
const dialog=document.getElementById('eventCreateModal');
const closeBtn=document.getElementById('closeDialog');
const closeDialogBtn=document.getElementById('closeBtn');


createEventBtn.addEventListener('click',openDialog);

closeDialogBtn.addEventListener('click',closeDialog);


function togglePopMenu(){

    popUpMenu.classList.toggle('menu-visible');
}

function openDialog() {
    dialog.style.display = 'block';
}


function closeDialog() {
    dialog.style.display = 'none';
}

closeBtn.addEventListener('click',closeDialog);

window.addEventListener('click', (event) => {
    if (event.target === dialog) {
        closeDialog();
    }
});