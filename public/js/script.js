<<<<<<< HEAD
/* 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith 
*/

"use strict";

window.addEventListener('scroll', function() {
    let position = window.scrollY
    let navHeader = document.getElementById('nav-header');

    if (position >= 400) {
        navHeader.classList.add('customer-navHeader');
    } else {
        navHeader.classList.remove('customer-navHeader');
    }
=======
"use strict";

const formCon = document.getElementById('formContainer');
const signUpBtn = document.getElementById('signUp');
const logInBtn = document.getElementById('logIn');

signUpBtn.addEventListener('click', () => {
    formCon.classList.add("active");
});

logInBtn.addEventListener('click', () => {
    formCon.classList.remove("active");
>>>>>>> f354be1a675ec2e2bf51ee30f8998d6f377f9942
});