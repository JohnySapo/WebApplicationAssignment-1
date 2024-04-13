"use strict";

const formCon = document.getElementById('formContainer');
const signUpBtn = document.getElementById('signUp');
const logInBtn = document.getElementById('logIn');

signUpBtn.addEventListener('click', () => {
    formCon.classList.add("active");
});

logInBtn.addEventListener('click', () => {
    formCon.classList.remove("active");
});