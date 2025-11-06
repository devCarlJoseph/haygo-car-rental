// --- 1. DATA STORE (Mock Bookings Data) ---

let bookings = [
    { id: 1001, vehicle_name: 'Toyota Camry (2023)', customer_name: 'Jane Doe', email: 'jane@example.com', phone_num: 5551234, lic_id: 'JD98765', booking_date: '2025-11-10', total: 375.00, status: 'Confirmed' },
    { id: 1002, vehicle_name: 'Ford Transit Van (2022)', customer_name: 'Big Events Co.', email: 'big@events.com', phone_num: 5555555, lic_id: 'BE11223', booking_date: '2025-12-01', total: 3600.00, status: 'Confirmed' },
    { id: 1003, vehicle_name: 'Audi Q5 (2023)', customer_name: 'John Smith', email: 'john@smith.net', phone_num: 5559876, lic_id: 'JS45678', booking_date: '2025-10-25', total: 480.00, status: 'Completed' },
    { id: 1004, vehicle_name: 'Tesla Model Y (2024)', customer_name: 'Elon Renter', email: 'elon@renter.org', phone_num: 5550001, lic_id: 'ER00001', booking_date: '2025-11-20', total: 945.00, status: 'Confirmed' },
    { id: 1005, vehicle_name: 'Nissan Rogue (2021)', customer_name: 'Mary Lee', email: 'mary@lee.com', phone_num: 5553333, lic_id: 'ML22334', booking_date: '2025-11-01', total: 340.00, status: 'Completed' },
    { id: 1006, vehicle_name: 'BMW 3 Series (2024)', customer_name: 'Robert Johnson', email: 'robert@home.net', phone_num: 5558888, lic_id: 'RJ67890', booking_date: '2025-09-15', total: 450.00, status: 'Cancelled' },
    { id: 1007, vehicle_name: 'Toyota Camry (2023)', customer_name: 'Alice Cooper', email: 'alice@music.com', phone_num: 5557777, lic_id: 'AC13579', booking_date: '2025-12-24', total: 675.00, status: 'Confirmed' },
    { id: 1008, vehicle_name: 'Ford Transit Van (2022)', customer_name: 'Construction Inc.', email: 'contact@build.com', phone_num: 5552468, lic_id: 'CI99887', booking_date: '2026-01-10', total: 1800.00, status: 'Confirmed' },
];

let currentStatusFilter = 'All';
let currentSearchTerm = '';


// --- 2. RENDERING FUNCTIONS ---

/**
 * Formats a number into US currency string.
 * @param {number} amount
 * @returns {string} Formatted currency string.
 */
function formatCurrency(amount) {
    return new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
    }).format(amount);
}

/**
 * Generates the status badge HTML with color coding.
 * @param {string} status The status string (Confirmed, Pending, Completed, Cancelled).
 * @returns {string} HTML for the status badge.
 */
function getStatusBadge(status) {
    return `<span class="badge badge-status badge-status-${status.replace(/\s/g, '')}">${status}</span>`;
}

/**
 * Renders the filtered booking list to the table body.
 * @param {Array<Object>} filteredList The list of bookings to display.
 */
function renderTable(filteredList = bookings) {
    const tableBody = document.getElementById('bookingTableBody');
    const totalCountElement = document.getElementById('booking-count');
    const showingCountElement = document.getElementById('showing-count');
    let html = '';

    if (filteredList.length === 0) {
        // Updated colspan to 7 to match new column count
        html = `<tr><td colspan="7" class="text-center p-4 text-secondary">No bookings match your current search and filter criteria.</td></tr>`;
    } else {
        filteredList.forEach(booking => {
            let actionsHtml = `<div class="table-action-buttons d-flex gap-2">`;

            // 1. View Details Button (Always visible)
            actionsHtml += `<button class="btn btn-sm btn-outline-secondary rounded-3" title="View Details" onclick="viewBookingDetails(${booking.id})"><i class="bi bi-eye"></i></button>`;

            if (booking.status === 'Confirmed' || booking.status === 'Pending') {
                // 2. Mark as Completed button (Green)
                actionsHtml += `<button class="btn btn-sm btn-success rounded-3" title="Mark as Completed" onclick="updateBookingStatus(${booking.id}, 'Completed')"><i class="bi bi-check-circle"></i></button>`;

                // 3. Cancel Booking button (Red)
                actionsHtml += `<button class="btn btn-sm btn-danger rounded-3" title="Cancel Booking" onclick="updateBookingStatus(${booking.id}, 'Cancelled')"><i class="bi bi-x-circle"></i></button>`;
            }

            actionsHtml += `</div>`;


            html += `
                        <tr>
                            <td class="px-3 py-3 fw-semibold text-rental-primary">#${booking.id}</td>
                            <td class="px-3 py-3 text-dark">${booking.customer_name}</td>
                            <td class="px-3 py-3 text-sm text-secondary">${booking.email}</td>
                            <td class="px-3 py-3 text-dark">${booking.vehicle_name}</td>
                            <td class="px-3 py-3 text-sm text-dark">${booking.booking_date}</td>
                            <td class="px-3 py-3">${getStatusBadge(booking.status)}</td>
                            <td class="px-3 py-3">${actionsHtml}</td>
                        </tr>
                    `;
        });
    }

    tableBody.innerHTML = html;
    totalCountElement.textContent = bookings.length;
    showingCountElement.textContent = `Showing ${filteredList.length} of ${bookings.length} reservations`;
}

/**
 * Finds a booking by ID, populates the details modal, and shows it.
 * @param {number} id The ID of the booking to view.
 */
function viewBookingDetails(id) {
    const booking = bookings.find(b => b.id === id);

    if (!booking) {
        console.error(`Booking with ID ${id} not found.`);
        return;
    }

    // 1. Populate the static modal elements
    document.getElementById('detail-booking-id').textContent = id;
    document.getElementById('detail-customer-name').textContent = booking.customer_name;
    document.getElementById('detail-email').textContent = booking.email;
    document.getElementById('detail-phone').textContent = booking.phone_num;
    document.getElementById('detail-lic-id').textContent = booking.lic_id;
    document.getElementById('detail-vehicle-name').textContent = booking.vehicle_name;
    document.getElementById('detail-booking-date').textContent = booking.booking_date;
    document.getElementById('detail-total').textContent = formatCurrency(booking.total);

    // 2. Populate status badge
    document.getElementById('detail-status').innerHTML = getStatusBadge(booking.status);

    // 3. Update the Action Buttons visibility and action
    const modalCompleteBtn = document.getElementById('modal-complete-btn');
    const modalCancelBtn = document.getElementById('modal-cancel-btn');

    // Function to close modal instance
    const closeAndAct = (newStatus) => {
        const modalInstance = bootstrap.Modal.getInstance(document.getElementById('viewDetailsModal'));
        if (modalInstance) modalInstance.hide();
        updateBookingStatus(id, newStatus);
    };

    if (booking.status === 'Confirmed' || booking.status === 'Pending') {
        // Show both actions
        modalCompleteBtn.style.display = 'inline-flex';
        modalCancelBtn.style.display = 'inline-flex';

        // Configure Complete button
        modalCompleteBtn.onclick = () => closeAndAct('Completed');

        // Configure Cancel button
        modalCancelBtn.onclick = () => closeAndAct('Cancelled');

    } else {
        // Hide action buttons if already Completed or Cancelled
        modalCompleteBtn.style.display = 'none';
        modalCancelBtn.style.display = 'none';
    }


    // 4. Show the modal
    const modal = new bootstrap.Modal(document.getElementById('viewDetailsModal'));
    modal.show();
}

/**
 * Updates a booking status (e.g., completing or cancelling).
 * @param {number} id The ID of the booking to update.
 * @param {string} newStatus The new status to set ('Completed' or 'Cancelled').
 */
function updateBookingStatus(id, newStatus) {
    const booking = bookings.find(b => b.id === id);
    if (booking) {
        // Using custom confirmation box instead of alert/confirm
        const isConfirmed = window.confirm(`Are you sure you want to change Booking #${id} status to ${newStatus}?`);

        if (isConfirmed) {
            booking.status = newStatus;
            console.log(`Booking #${id} status updated to ${newStatus}.`);
            applyFilters(); // Re-render table
        }
    }
}


// --- 3. FILTERING AND SEARCHING LOGIC ---

/**
 * Applies the current search term and status filter to the booking list.
 */
function applyFilters() {
    const searchTerm = document.getElementById('search-input').value.toLowerCase().trim();
    currentSearchTerm = searchTerm;

    const filtered = bookings.filter(booking => {
        // 1. Search filter updated to use new field names and include email
        const searchMatch = booking.customer_name.toLowerCase().includes(searchTerm) ||
            booking.vehicle_name.toLowerCase().includes(searchTerm) ||
            booking.email.toLowerCase().includes(searchTerm) ||
            String(booking.id).includes(searchTerm);

        // 2. Status filter
        const statusMatch = currentStatusFilter === 'All' || booking.status === currentStatusFilter;

        return searchMatch && statusMatch;
    });

    renderTable(filtered);
}

/**
 * Sets up event listeners for the status filter and search bar.
 */
function setupFilterListeners() {
    // Search Input Listener
    document.getElementById('search-input').addEventListener('keyup', applyFilters);

    // Status Filter Dropdown Listeners
    document.querySelectorAll('#status-filter-menu .filter-link').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            currentStatusFilter = this.getAttribute('data-filter-value');
            document.getElementById('status-filter-btn').innerHTML = `Status: ${currentStatusFilter}`;
            applyFilters();
        });
    });
}


/**
 * Initialization function called on page load.
 */
window.onload = function () {
    // 1. Initial render of the table
    renderTable(bookings);

    // 2. Setup filtering and searching event handlers
    setupFilterListeners();
}
