
// --- 1. Car Data ---
const carData = [
    // IMPORTANT: Replace the dummy image path with your actual image path (e.g., '../images/vios.jpg')
    { id: 1, name: 'Toyota Vios', type: 'Sedan', description: 'Economy Sedan (2023 Model)', seats: 4, bags: 2, transmission: 'Automatic', price: 1500, tag: 'Budget Pick', image: 'src/assets/images/vios.jpg' },
    { id: 2, name: 'Nissan Almera', type: 'Sedan', description: 'Comfort Sedan (2024 Model)', seats: 5, bags: 3, transmission: 'Automatic', price: 1800, tag: null, image: 'src/assets/images/nissan.avif' },
    { id: 3, name: 'Toyota Rush', type: 'SUV', description: 'Crossover SUV (7 Seater)', seats: 7, bags: 4, transmission: 'Automatic', price: 2500, tag: 'Popular', image: 'src/assets/images/toyota rush.jpg' },
    { id: 4, name: 'Montero Sport', type: 'SUV', description: 'Premium SUV (7 Seater)', seats: 7, bags: 5, transmission: 'Automatic', price: 3200, tag: null, image: 'src/assets/images/montero sport.avif' },
    { id: 5, name: 'Hyundai Starex', type: 'Van', description: 'Family/Tour Van (10 Seater)', seats: 10, bags: 6, transmission: 'Manual', price: 4500, tag: 'High Capacity', image: 'src/assets/images/hyundai starex.jpeg' },
    { id: 6, name: 'Honda City', type: 'Sedan', description: 'Standard Sedan (2022 Model)', seats: 5, bags: 3, transmission: 'Automatic', price: 1900, tag: null, image: 'src/assets/images/honda city.avif' },
    { id: 7, name: 'Suzuki Swift', type: 'Hatchback', description: 'City Hatchback (2023 Model)', seats: 4, bags: 1, transmission: 'Manual', price: 1200, tag: 'Eco Friendly', image: 'src/assets/images/suzuki swift.jpg' },
];

// --- 2. Global State (Dates are now assumed/fixed) ---

// UPDATED: Total steps is now 3
let currentStep = 1;
const totalSteps = 3;

let currentBookingData = {
    uploadedLicense: null
};

let activeFilterType = 'All'; // Tracks the currently selected vehicle type

// ** FIXED DATES (Simulating dates passed from homepage) **
let rentalStartDate = new Date();
let rentalEndDate = new Date();
rentalEndDate.setDate(rentalStartDate.getDate() + 3); // Default 3 days rental

/**
 * Calculates the number of full rental days.
 * @returns {number} - The number of days (always >= 0).
 */
function getRentalDays() {
    const diffTime = rentalEndDate.getTime() - rentalStartDate.getTime();
    if (diffTime <= 0) return 1; // Default to 1 day if dates are invalid/same
    // Add a small buffer (12 hours) to ensure proper rounding for full days
    return Math.ceil((diffTime + (12 * 60 * 60 * 1000)) / (1000 * 60 * 60 * 24));
}

// Calculate rental days once on load
const fixedRentalDays = getRentalDays();

/**
 * Converts a Date object to YYYY-MM-DD string format.
 * @param {Date} date - The date object.
 * @returns {string} - The date string.
 */
function dateToISOString(date) {
    return date.toISOString().split('T')[0];
}

// --- 3. DOM Elements ---
const carListingsContainer = document.getElementById('car-listings');
const searchNameInput = document.getElementById('searchName');
const priceRangeInput = document.getElementById('priceRange');
const maxPriceDisplay = document.getElementById('maxPriceDisplay');
const carCountDisplay = document.getElementById('carCountDisplay');
const noResultsMessage = document.getElementById('no-results-message');
const quickFilterButtons = document.querySelectorAll('.filter-quick-btn');
const displayStartDate = document.getElementById('displayStartDate');
const displayEndDate = document.getElementById('displayEndDate');

// Modal DOM elements
const bookingModalTitle = document.getElementById('bookingModalLabel');
const bookingProgressBar = document.getElementById('bookingProgressBar');
const nextStepBtn = document.getElementById('nextStepBtn');
const prevStepBtn = document.getElementById('prevStepBtn');
const licenseImageFile = document.getElementById('licenseImageFile');
const licenseImagePreview = document.getElementById('licenseImagePreview');
const licenseImagePlaceholder = document.getElementById('licenseImagePlaceholder');

// --- 4. UI Functions ---

/**
 * Displays a custom modal message.
 * @param {string} title - Modal title.
 * @param {string} body - Modal body content (supports basic HTML).
 * @param {string} type - 'success' or 'error' to influence header color.
 */
function showModalMessage(title, body, type = 'info') {
    const modalElement = document.getElementById('messageModal');
    const modalTitle = document.getElementById('messageModalLabel');
    const modalBody = document.getElementById('messageModalBody');

    // Close the booking modal first if it is open
    const bookingModalEl = document.getElementById('bookingModal');
    const bookingModalInstance = bootstrap.Modal.getInstance(bookingModalEl);
    if (bookingModalInstance) bookingModalInstance.hide();

    modalTitle.textContent = title;
    modalBody.innerHTML = body;

    // Simple color indication based on type
    modalTitle.parentElement.className = 'modal-header';
    if (type === 'success') {
        modalTitle.parentElement.classList.add('bg-success', 'text-white');
    } else if (type === 'error') {
        modalTitle.parentElement.classList.add('bg-danger', 'text-white');
    } else {
        modalTitle.parentElement.classList.add('bg-haygo-blue', 'text-white');
    }

    const messageModal = new bootstrap.Modal(modalElement);
    messageModal.show();
}


// --- 5. Booking/Filtering Logic ---

/**
 * Renders the given array of cars into the listing container.
 * @param {Array<Object>} cars - The list of car objects to render.
 */
function renderCars(cars) {

    // Clear previous listings
    carListingsContainer.innerHTML = '';
    carCountDisplay.textContent = cars.length;

    if (cars.length === 0) {
        noResultsMessage.style.display = 'block';
        return;
    } else {
        noResultsMessage.style.display = 'none';
    }

    cars.forEach(car => {
        const totalCarPrice = car.price;

        // 🚗 UPDATED: Use the car.image property directly.
        // Fallback to a default if the image property is somehow missing
        const imageURL = car.image ? car.image : 'src/assets/images/vios.jpg';

        // Build the badge HTML if a tag exists
        const badgeHtml = car.tag
            ? `<span class="badge ${car.tag === 'Popular' ? 'bg-haygo-blue text-white' : 'bg-haygo-lime text-haygo-dark'} fw-bold position-absolute top-0 ${car.id % 2 === 0 ? 'end-0' : 'start-0'} m-2">${car.tag}</span>`
            : '';

        const carHtml = `
                    
                `;
        carListingsContainer.insertAdjacentHTML('beforeend', carHtml);
    });
}

/**
 * Reads the current filter settings and renders the matching cars.
 */
function filterCars() {
    const searchTerm = searchNameInput.value.toLowerCase();
    const maxPrice = parseInt(priceRangeInput.value);

    // 1. Filter the data based on global state and inputs
    const filteredCars = carData.filter(car => {
        // Filter by Type (using activeFilterType state)
        const typeMatch = activeFilterType === 'All' || car.type === activeFilterType;

        // Filter by Price (Range Slider) - compares daily price
        const priceMatch = car.price <= maxPrice;

        // Filter by Name (Search Box)
        const nameMatch = car.name.toLowerCase().includes(searchTerm);

        return typeMatch && priceMatch && nameMatch;
    });

    // 2. Update active quick filter button style
    updateQuickFilterButtonStyle(activeFilterType);

    // 3. Render the filtered results
    renderCars(filteredCars);
}

/**
 * Handles the quick filter button clicks and updates the state.
 * @param {string} type - The car type to filter by ('Sedan', 'SUV', 'All', etc.).
 */
window.quickFilter = function (type) {
    activeFilterType = type;
    filterCars();
}

/**
 * Updates the active state of the quick filter buttons based on the current activeFilterType.
 * @param {string} currentType - The currently selected car type.
 */
function updateQuickFilterButtonStyle(currentType) {
    quickFilterButtons.forEach(button => {
        button.classList.remove('active');
        if (button.dataset.type === currentType) {
            button.classList.add('active');
        }
    });
}

/**
 * Resets all filters to their default state.
 */
window.resetFilters = function () {
    // Reset state
    activeFilterType = 'All';

    // Reset search input
    searchNameInput.value = '';

    // Reset price range to max
    priceRangeInput.value = priceRangeInput.max;
    maxPriceDisplay.textContent = '₱ ' + new Intl.NumberFormat().format(priceRangeInput.max);

    // Re-filter and re-render
    filterCars();
}

// --- 6. Multi-Step Booking Functions ---

/**
 * Updates the UI to show the correct step.
 * @param {number} step - The step number (1, 2, or 3).
 */
function showStep(step) {
    currentStep = step;

    // 1. Update Title and Progress Bar
    let title = '';
    let progress = 0;

    if (step === 1) {
        title = 'Step 1 of 3: Booking Summary';
        progress = 33;
        prevStepBtn.style.display = 'none';
        nextStepBtn.textContent = 'Proceed to Details & Upload';
        nextStepBtn.disabled = false;
    } else if (step === 2) {
        title = 'Step 2 of 3: Enter Details & Upload License';
        progress = 66;
        prevStepBtn.style.display = 'inline-flex';
        nextStepBtn.textContent = 'Proceed to Confirmation';
        nextStepBtn.disabled = false;
    } else if (step === 3) {
        title = 'Step 3 of 3: Final Review & Complete';
        progress = 100;
        prevStepBtn.style.display = 'inline-flex';
        nextStepBtn.textContent = 'Complete Booking';
        // Button state handled by the checkbox validation in the nextStep() flow for this step
        nextStepBtn.disabled = !document.getElementById('paymentInstruction').checked;
    } else {
        return;
    }

    bookingModalTitle.textContent = title;
    bookingProgressBar.style.width = progress + '%';

    // 2. Switch Step Content Visibility
    document.querySelectorAll('.booking-step').forEach(el => {
        el.style.display = (parseInt(el.dataset.step) === step) ? 'block' : 'none';
    });
}

/**
 * Clears any validation feedback on all form controls.
 */
function clearValidationFeedback() {
    document.querySelectorAll('.form-control').forEach(input => {
        input.classList.remove('is-invalid');
    });
}


/**
 * Validates current step data and moves to the next step.
 */
window.nextStep = function () {
    clearValidationFeedback();

    if (currentStep === 1) {
        // Step 1: Summary - Move to Step 2 (Combined Details & Upload)
        showStep(2);

    } else if (currentStep === 2) {
        // Step 2: Validate all fields (Contact details AND Document Upload)

        const fullNameInput = document.getElementById('fullName');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');
        const licenseInput = document.getElementById('licenseNumber');
        const fileInput = document.getElementById('licenseImageFile');

        let isValid = true;

        const inputs = [fullNameInput, emailInput, phoneInput, licenseInput];

        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('is-invalid');
                isValid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });

        // Simple email regex check
        if (emailInput.value.trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim())) {
            emailInput.classList.add('is-invalid');
            isValid = false;
        }

        // Document Upload validation
        if (!fileInput.files || fileInput.files.length === 0) {
            fileInput.classList.add('is-invalid');
            isValid = false;
        } else {
            fileInput.classList.remove('is-invalid');
            currentBookingData.uploadedLicense = fileInput.files[0]; // Save file data
        }

        if (!isValid) {
            showModalMessage("Missing Information", "Please fill in all required contact details and upload your license image before proceeding.", "error");
            return;
        }

        // Save data to global booking object
        currentBookingData.customer = {
            fullName: fullNameInput.value.trim(),
            email: emailInput.value.trim(),
            phone: phoneInput.value.trim(),
            license: licenseInput.value.trim()
        };

        // Populate Step 3 review panel
        document.getElementById('reviewFullName').textContent = currentBookingData.customer.fullName;
        document.getElementById('reviewEmail').textContent = currentBookingData.customer.email;
        document.getElementById('reviewPhone').textContent = currentBookingData.customer.phone;

        // Reset checkbox state for final confirmation
        document.getElementById('paymentInstruction').checked = false;

        // Move to next step (Step 3: Confirmation)
        showStep(3);
    } else if (currentStep === 3) {
        // Step 3: Submission
        submitBooking();
    }
}

/**
 * Moves to the previous step.
 */
window.prevStep = function () {
    if (currentStep > 1) {
        showStep(currentStep - 1);
    }
}

// Listener for payment checkbox (Step 3)
document.getElementById('paymentInstruction').addEventListener('change', (event) => {
    if (currentStep === 3) {
        nextStepBtn.disabled = !event.target.checked;
    }
});

// Listener for license file input (Step 2)
licenseImageFile.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            licenseImagePreview.src = e.target.result;
            licenseImagePreview.style.display = 'block';
            licenseImagePlaceholder.style.display = 'none';
            licenseImageFile.classList.remove('is-invalid');
        };
        reader.readAsDataURL(file);
    } else {
        licenseImagePreview.style.display = 'none';
        licenseImagePlaceholder.style.display = 'block';
    }
});


/**
 * Populates and opens the booking modal for the selected car.
 * @param {number} carId - The ID of the car to book.
 */
window.openBookingModal = function (carId) {
    const selectedCar = carData.find(c => c.id === carId);
    if (!selectedCar) return;

    // Use the fixed rental duration
    const rentalDays = fixedRentalDays;
    const totalPrice = selectedCar.price * rentalDays;

    if (rentalDays <= 0) {
        showModalMessage("Invalid Duration", "The calculated rental duration is 0 or less days. Please review the assumed dates.", "error");
        return;
    }

    const formattedTotal = new Intl.NumberFormat().format(totalPrice);

    // Store necessary data for the submission process
    currentBookingData = {
        carId: carId,
        carName: selectedCar.name,
        dailyPrice: selectedCar.price,
        rentalDays: rentalDays,
        totalPrice: totalPrice,
        startDate: dateToISOString(rentalStartDate),
        endDate: dateToISOString(rentalEndDate),
        uploadedLicense: null, // Reset license status on new booking
    };

    // Reset Step 2 UI (input fields and license preview)
    document.getElementById('fullName').value = '';
    document.getElementById('email').value = '';
    document.getElementById('phone').value = '';
    document.getElementById('licenseNumber').value = '';
    licenseImageFile.value = '';
    licenseImagePreview.style.display = 'none';
    licenseImagePlaceholder.style.display = 'block';

    // Populate Step 1 UI
    document.getElementById('modalCarName').textContent = selectedCar.name;
    document.getElementById('modalStartDate').textContent = rentalStartDate.toDateString();
    document.getElementById('modalEndDate').textContent = rentalEndDate.toDateString();
    document.getElementById('modalRentalDays').textContent = rentalDays;
    document.getElementById('modalTotalPrice').textContent = `₱ ${formattedTotal}`;

    // Populate Step 3 Summary
    document.getElementById('reviewCarName').textContent = selectedCar.name;
    document.getElementById('reviewDates').textContent = `${rentalStartDate.toDateString()} to ${rentalEndDate.toDateString()}`;
    document.getElementById('reviewTotal').textContent = `₱ ${formattedTotal}`;
    document.getElementById('reviewTotalSmall').textContent = formattedTotal;


    // Start at Step 1
    showStep(1);
}

/**
 * Simulates submission and shows confirmation.
 */
window.submitBooking = function () {

    // Check for simulated payment field acknowledgement
    const paymentCheckbox = document.getElementById('paymentInstruction');
    if (!paymentCheckbox.checked) {
        showModalMessage("Payment Confirmation Required", "You must acknowledge the payment instruction before completing the booking.", "error");
        return;
    }

    const form = document.getElementById('bookingForm');

    // ✅ Create hidden input for PHP detection
    const stepInput = document.createElement('input');
    stepInput.type = 'hidden';
    stepInput.name = 'confirm_booking';
    stepInput.value = '3';
    form.appendChild(stepInput);

    // ✅ Optionally include other dynamic values if needed (example only)
    if (typeof currentBookingData !== 'undefined') {
        const carNameInput = document.createElement('input');
        carNameInput.type = 'hidden';
        carNameInput.name = 'carName';
        carNameInput.value = currentBookingData.carName;
        form.appendChild(carNameInput);

        const totalPriceInput = document.createElement('input');
        totalPriceInput.type = 'hidden';
        totalPriceInput.name = 'totalPrice';
        totalPriceInput.value = currentBookingData.totalPrice;
        form.appendChild(totalPriceInput);
    }

    // ✅ Submit form to PHP
    form.submit();

    // Simulate successful submission with a random ID
    const bookingId = Math.random().toString(36).substring(2, 15).toUpperCase();
    const formattedTotal = new Intl.NumberFormat().format(currentBookingData.totalPrice);

    // Close the booking modal
    const bookingModal = bootstrap.Modal.getInstance(document.getElementById('bookingModal'));
    if (bookingModal) bookingModal.hide();

    // Show success message, confirming document upload
    showModalMessage('Booking Confirmed!',
        `Your reservation for the ${currentBookingData.carName}is confirmed! We have your details and uploaded license image. You'll pay the total of 
                <span class="text-haygo-blue fw-bold">₱ ${formattedTotal}</span> upon pick-up.
                <br><br>Booking ID: ${bookingId}.<br>We sent the details to: ${currentBookingData.customer.email}.`,
        'success');
}


// --- 7. Initialization ---

document.addEventListener('DOMContentLoaded', () => {

    // 7.1. Display the assumed pre-selected dates
    displayStartDate.textContent = rentalStartDate.toDateString();
    displayEndDate.textContent = rentalEndDate.toDateString();

    // 7.2. Event Listeners

    // Price range display update listener
    priceRangeInput.addEventListener('input', (event) => {
        const value = event.target.value;
        maxPriceDisplay.textContent = '₱ ' + new Intl.NumberFormat().format(value);
        filterCars(); // Re-filter whenever price changes
    });

    // Event listeners for text search filtering
    searchNameInput.addEventListener('input', filterCars);

    // Initial setup: Show all cars by default and set the 'All Types' button as active.
    filterCars();

    // Initialize price display to max value
    maxPriceDisplay.textContent = '₱ ' + new Intl.NumberFormat().format(priceRangeInput.max);
});