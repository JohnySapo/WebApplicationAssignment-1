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