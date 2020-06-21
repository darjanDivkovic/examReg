// Handles change-password hide/unhide
let changePasswordBtn = document.getElementById('change-pw-btn');
let changePasswordContainer = document.getElementById('change-password');
let closeCPContainerBtn = document.getElementById('close-btn');

changePasswordBtn.addEventListener('click', ()=> {
    changePasswordContainer.style.visibility = 'visible';
});

closeCPContainerBtn.addEventListener('click', ()=> {
    changePasswordContainer.style.visibility = 'hidden';
});