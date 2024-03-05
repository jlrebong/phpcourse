
const addNew = document.querySelector('.add-new-symbol');
const body   = document.querySelector('body');
const modalContainer   = document.querySelector('.modal-container');
const closeModal = document.querySelector('.window-close')

addNew.addEventListener('click', function(){
    body.classList.add('no-overflow');
    modalContainer.style.display='block';
});

closeModal.addEventListener('click', function(){
    body.classList.remove('no-overflow');
    modalContainer.style.display='none';
});