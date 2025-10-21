const form = document.getElementById('contactForm');
const nameInput = document.getElementById('contactName');
const phoneInput = document.getElementById('contactPhone');
const messageInput = document.getElementById('contactMessage');
const modalBodyText = document.getElementById('modalBodyText');

// Initialize Bootstrap Modal instance
const submissionModal = new bootstrap.Modal(document.getElementById('submissionModal'));

form.addEventListener('submit', function (event) {
    // Prevent default form submission
    event.preventDefault();
    event.stopPropagation();

    // Clear previous validation classes
    form.classList.remove('is-submitted');

    let isValid = form.checkValidity();

    if (isValid) {
        // Since we are not using Firebase, we simulate success
        const name = nameInput.value.trim();
        const phone = phoneInput.value.trim();

        // Construct and display the success message
        modalBodyText.innerHTML = `Thank you, **${name}**! Your message has been successfully logged into the Hay Go system. <br><br>We will contact you at **${phone}** as soon as possible.`;

        submissionModal.show();

        // Reset the form
        form.reset();
        form.classList.remove('was-validated');

    } else {
        // Add Bootstrap's class to show validation feedback
        form.classList.add('was-validated');

        // Optional: Show a brief error message if needed, though Bootstrap handles field-specific errors.
        console.error("Form validation failed.");
    }
});

// Add 'was-validated' class on user interaction to enable real-time feedback
['change', 'keyup'].forEach(eventType => {
    nameInput.addEventListener(eventType, () => form.classList.add('was-validated'));
    phoneInput.addEventListener(eventType, () => form.classList.add('was-validated'));
    messageInput.addEventListener(eventType, () => form.classList.add('was-validated'));
});