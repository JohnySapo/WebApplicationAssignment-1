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
});