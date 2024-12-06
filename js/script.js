const loginBox = document.querySelector('.login-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', () => {
    loginBox.classList.add('active');
});

loginLink.addEventListener('click', () => {
    loginBox.classList.remove('active');
});
