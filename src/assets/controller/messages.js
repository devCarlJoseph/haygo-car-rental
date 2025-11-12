function deleteInquiry(buttonElement) {
    // Find the closest parent column element (which holds the card)
    const col = buttonElement.closest('.col');
    // Safely get the sender name
    const senderElement = col.querySelector('.card-title');
    const sender = senderElement ? senderElement.textContent.trim() : 'Unknown Sender';

    // Create a temporary success message (using alert but as a Bootstrap dismissal box)
    const successMessage = document.createElement('div');
    successMessage.className = 'alert alert-success alert-dismissible fade show w-100 mt-3';
    successMessage.setAttribute('role', 'alert');
    successMessage.innerHTML = `
                Inquiry from <strong>${sender}</strong> has been successfully archived/deleted.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;

    // Insert the success message right before the main message grid
    const mainHeader = document.querySelector('header');
    if (mainHeader && mainHeader.parentNode) {
        mainHeader.parentNode.insertBefore(successMessage, mainHeader.nextSibling);
    }

    // Remove the card's column element to simulate deletion
    if (col) {
        col.remove();
    }

    console.log(`Simulated deletion of inquiry from: ${sender}`);
}