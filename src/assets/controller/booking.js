
document.addEventListener("DOMContentLoaded", () => {
    const viewDetailsModal = document.getElementById("viewDetailsModal");

    viewDetailsModal.addEventListener("show.bs.modal", (event) => {
        const button = event.relatedTarget;
        const id = button.getAttribute("data-id");
        const customer = button.getAttribute("data-customer");
        const email = button.getAttribute("data-email");
        const phone = button.getAttribute("data-phone");
        const license = button.getAttribute("data-license");
        const vehicle = button.getAttribute("data-vehicle");
        const bookingDate = button.getAttribute("data-booking-date");
        const status = button.getAttribute("data-status");
        const total = button.getAttribute("data-total");

        viewDetailsModal.querySelector("#detail-booking-id").textContent = id;
        viewDetailsModal.querySelector("#detail-customer-name").textContent = customer;
        viewDetailsModal.querySelector("#detail-email").textContent = email;
        viewDetailsModal.querySelector("#detail-phone").textContent = phone;
        viewDetailsModal.querySelector("#detail-lic-id").textContent = license;
        viewDetailsModal.querySelector("#detail-vehicle-name").textContent = vehicle;
        viewDetailsModal.querySelector("#detail-booking-date").textContent = bookingDate;
        viewDetailsModal.querySelector("#detail-status").textContent = status;
        viewDetailsModal.querySelector("#detail-total").textContent = total;

        const completeBtn = viewDetailsModal.querySelector("#modal-complete-btn");
        const cancelBtn = viewDetailsModal.querySelector("#modal-cancel-btn");

        if (status.toLowerCase() === "pending" || status.toLowerCase() === "confirmed") {
            completeBtn.style.display = "inline-block";
            cancelBtn.style.display = "inline-block";
        } else {
            completeBtn.style.display = "none";
            cancelBtn.style.display = "none";
        }

        completeBtn.dataset.bookingId = id;
        cancelBtn.dataset.bookingId = id;
    });


    document.getElementById("modal-complete-btn").addEventListener("click", async (e) => {
        const bookingId = e.target.dataset.bookingId;
        await updateBookingStatus(bookingId, "completed");
    });

    document.getElementById("modal-cancel-btn").addEventListener("click", async (e) => {
        const bookingId = e.target.dataset.bookingId;
        await updateBookingStatus(bookingId, "cancelled");
    });

    async function updateBookingStatus(bookingId, status) {
        try {
            const formData = new FormData();
            formData.append("booking_id", bookingId);
            formData.append("submit_status", status);

            const response = await fetch("../actions/bookings.php", {
                method: "POST",
                body: formData
            });


            if (response.ok) {
                const modal = bootstrap.Modal.getInstance(viewDetailsModal);
                modal.hide();

                alert(`Booking #${bookingId} marked as ${status}.`);
                location.reload();
            } else {
                alert("Failed to update booking status.");
            }
        } catch (error) {
            console.error("Error updating booking:", error);
        }
    }
});

function deleteBooking(id) {
    if (confirm("Are you sure you want to delete this booking?")) {
        // Redirect to PHP delete script
        window.location.href = `../actions/booking_delete.php?id=${id}`;
    }
}

