const editCustomerModal = document.getElementById('editCustomerModal');

// Listen for the 'show.bs.modal' event, which fires immediately when the modal is about to be shown.
editCustomerModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget;

    // Extract info from data-bs-* attributes
    const id = button.getAttribute('data-id');
    const name = button.getAttribute('data-name');
    const email = button.getAttribute('data-email');
    const phone = button.getAttribute('data-phone');
    const dob = button.getAttribute('data-dob');

    // Update the modal's content
    const modalTitle = editCustomerModal.querySelector('#modal-customer-name');
    const modalIdFooter = editCustomerModal.querySelector('#modal-customer-id-footer');

    // Form Inputs
    const inputId = editCustomerModal.querySelector('#edit-customer-id');
    const inputName = editCustomerModal.querySelector('#edit-customer-name');
    const inputEmail = editCustomerModal.querySelector('#edit-customer-email');
    const inputPhone = editCustomerModal.querySelector('#edit-customer-phone');
    const inputDob = editCustomerModal.querySelector('#edit-customer-dob');

    // Set the main text and ID footer
    modalTitle.textContent = name;
    modalIdFooter.textContent = id;

    // Set the form input values
    inputId.value = id;
    inputName.value = name;
    inputEmail.value = email;
    inputPhone.value = phone;
    inputDob.value = dob;

    // Note: Since this is purely front-end/HTML, the save button currently does not submit data anywhere.
    // When you integrate a backend (like Firestore, as discussed in the instructions), this is where you
    // would attach the submission logic to the form element.
});

// Example Submission Handler (for future integration)
document.getElementById('edit-customer-form').addEventListener('submit', function (e) {
    e.preventDefault();
    console.log("Form submission intercepted (Simulating Update)...");

    const customerData = {
        id: document.getElementById('edit-customer-id').value,
        name: document.getElementById('edit-customer-name').value,
        email: document.getElementById('edit-customer-email').value,
        phone: document.getElementById('edit-customer-phone').value,
        dob: document.getElementById('edit-customer-dob').value,
    };

    console.log("Updated Customer Data:", customerData);

    // In a real application, you would now send this data to your database (e.g., Firestore)

    // Hide the modal after processing
    const modalInstance = bootstrap.Modal.getInstance(editCustomerModal);
    modalInstance.hide();
});