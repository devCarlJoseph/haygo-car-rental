document.addEventListener('DOMContentLoaded', function () {
    const editCustomerModal = document.getElementById('editCustomerModal');

    if (editCustomerModal) {
        editCustomerModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const id = button.getAttribute('data-id');
            const name = button.getAttribute('data-name');
            const email = button.getAttribute('data-email');
            const phone = button.getAttribute('data-phone');
            const dob = button.getAttribute('data-dob');

            const modalTitleName = editCustomerModal.querySelector('#modal-customer-name');
            const modalIdFooter = editCustomerModal.querySelector('#modal-customer-id-footer');
            const inputId = editCustomerModal.querySelector('#edit-customer-id');
            const inputName = editCustomerModal.querySelector('#edit-customer-name');
            const inputEmail = editCustomerModal.querySelector('#edit-customer-email');
            const inputPhone = editCustomerModal.querySelector('#edit-customer-phone');
            const inputDob = editCustomerModal.querySelector('#edit-customer-dob');

            if (modalTitleName) modalTitleName.textContent = name;
            if (modalIdFooter) modalIdFooter.textContent = id;
            if (inputId) inputId.value = id;
            if (inputName) inputName.value = name;
            if (inputEmail) inputEmail.value = email;
            if (inputPhone) inputPhone.value = phone;
            if (inputDob) inputDob.value = dob;
        });
    }

});

function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this customer?")) {
        // Redirect to PHP delete script
        window.location.href = `../actions/delete_customer.php?id=${id}`;
    }
}
