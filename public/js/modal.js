/* 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith 
*/

"use strict";

document.addEventListener('DOMContentLoaded', function () {
    const removeButtons = document.querySelectorAll('.remove-address');
    const modalTitle = document.querySelector('.modal-title');
    const modalBody = document.querySelector('.modal-body');
    const RemoveAddress = document.getElementById('RemoveAddress');

    removeButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            const fullName = this.getAttribute('data-full-name');
            const apartmentHouse = this.getAttribute('data-apartment-house');
            const address = this.getAttribute('data-address');
            const city = this.getAttribute('data-city');
            const postCode = this.getAttribute('data-post-code');
            const country = this.getAttribute('data-country');
            const phone = this.getAttribute('data-phone');
            const addressID = this.getAttribute('data-address-id');
            RemoveAddress.href = `addresses.php?ID=${addressID}`;

            modalTitle.textContent = 'Confirm Deletion';
            modalBody.innerHTML = `
                <div class="">
                    <h6 class="card-subtitle text-white mb-2 text-muted fw-bold ps-2 py-2">${fullName}</h6>
                    <ul class=" list-unstyled">
                        <li class="small text-lighter card-text ps-2">
                            <span class="">Apartment/House: ${apartmentHouse}</span>
                        </li>
                        <li class="small text-lighter card-text ps-2">
                            <span class="">${address}</span>
                        </li>
                        <li class="small text-lighter card-text ps-2">
                            <span class="">${city}, ${postCode}</span>
                        </li>
                        <li class="small text-lighter card-text ps-2">
                            <span class="">${country}</span>
                        </li>
                        <li class="small text-lighter card-text ps-2">
                            <span class="">Phone number: ${phone}</span>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <p class="small mt-4">
                        <strong class="">Please note:</strong> Deleting this address will not delete any pending orders being dispatched to this address.
                    </p>
                </div>`;
        });
    });
});