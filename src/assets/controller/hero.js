// --- CALENDAR LOGIC START ---

// State variables for the calendar
let currentDate = new Date();
let selectedStartDate = null;
let selectedEndDate = null;

// Element references (now using jQuery objects)
const $calendarWrapper = $('#calendar-months-wrapper');
const $prevMonthBtn = $('#prevMonth');
const $nextMonthBtn = $('#nextMonth');
const $pickupDisplay = $('#selected-pickup-display');
const $dropoffDisplay = $('#selected-dropoff-display');
const $confirmBtn = $('#confirmDatesButton');
const $clearBtn = $('#clearDatesButton');
const $pickupInput = $('#pickupDate');
const $dropoffInput = $('#dropoffDate');
const $pickupDisplayInput = $('#pickupDateDisplay');
const $dropoffDisplayInput = $('#dropoffDateDisplay');

const DAYS_OF_WEEK = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
const MONTH_NAMES = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"];

// Helper to format date into YYYY-MM-DD
const formatDate = (date) => {
    if (!date) return null;
    const y = date.getFullYear();
    const m = String(date.getMonth() + 1).padStart(2, '0');
    const d = String(date.getDate()).padStart(2, '0');
    return `${y}-${m}-${d}`;
};

// Helper to format date for display (e.g., Oct 25)
const formatDisplayDate = (date) => {
    if (!date) return '- -';
    return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
};

// Renders a single calendar month (STILL VANILLA JS FOR PERFORMANCE)
function renderMonth(date, container, isFirst) {
    const year = date.getFullYear();
    const month = date.getMonth();

    // Start date of the month
    const firstDayOfMonth = new Date(year, month, 1);
    // Day of the week (0=Sunday, 6=Saturday)
    const startingDay = firstDayOfMonth.getDay();
    // Total days in the month
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    // Create month structure
    const monthDiv = document.createElement('div');
    monthDiv.className = 'calendar-month';

    // Month Title Header
    monthDiv.innerHTML = `
                <div class="calendar-header text-center pb-2 mb-2">
                    <h5 class="fw-bold mb-0">${MONTH_NAMES[month]} ${year}</h5>
                </div>
                <div class="calendar-grid day-labels">
                    ${DAYS_OF_WEEK.map(day => `<div class="day-label">${day}</div>`).join('')}
                </div>
                <div class="calendar-grid" id="month-grid-${year}-${month}">
                    </div>
            `;

    const gridContainer = monthDiv.querySelector('.calendar-grid:last-child');
    // Get today's date for comparison, normalized to midnight
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    // Add empty padding cells for days before the 1st
    for (let i = 0; i < startingDay; i++) {
        const dayCell = document.createElement('div');
        dayCell.className = 'day-cell outside-month';
        gridContainer.appendChild(dayCell);
    }

    // Add actual day cells
    for (let dayNum = 1; dayNum <= daysInMonth; dayNum++) {
        const dayDate = new Date(year, month, dayNum);
        dayDate.setHours(0, 0, 0, 0); // Normalize to midnight for accurate comparison
        const dateString = formatDate(dayDate);

        const dayCell = document.createElement('div');
        dayCell.className = 'day-cell';
        dayCell.dataset.date = dateString;

        const isPast = dayDate < today;

        // Add classes for styling
        if (isPast) {
            dayCell.classList.add('disabled');
        }

        if (selectedStartDate && dateString === formatDate(selectedStartDate)) {
            dayCell.classList.add('selected-start');
        }
        if (selectedEndDate && dateString === formatDate(selectedEndDate)) {
            dayCell.classList.add('selected-end');
        }

        // Add in-range class
        if (selectedStartDate && selectedEndDate && dayDate > selectedStartDate && dayDate < selectedEndDate) {
            dayCell.classList.add('in-range');
        }

        // Add content
        dayCell.innerHTML = `<span class="day-number">${dayNum}</span>`;

        // Add click listener (Vanilla JS listener is fine here)
        if (!isPast) {
            dayCell.addEventListener('click', handleDateClick);
        }

        gridContainer.appendChild(dayCell);
    }

    container.append(monthDiv); // Use container.append for appending a node
}

// Renders the main calendar view (1 or 2 months)
function renderCalendar() {
    $calendarWrapper.empty(); // jQuery equivalent of innerHTML = ''

    // Month 1 (Current month)
    const month1Date = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    // Use the native DOM element for rendering
    renderMonth(month1Date, $calendarWrapper[0], true);

    // Determine if we should show a second month (desktop/tablet view)
    if ($(window).width() >= 768) { // jQuery equivalent of window.innerWidth
        const month2Date = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
        renderMonth(month2Date, $calendarWrapper[0], false);
    }

    updateNavigationButtons();
    updateSelectionDisplay();
}

// Handles date selection logic
function handleDateClick(event) {
    // We can use $(this).data('date') if we bound the event with jQuery's .on(),
    // but since the listener is on the native element inside renderMonth, we use the native event.currentTarget
    const dateString = event.currentTarget.dataset.date; 
    const newDate = new Date(dateString);
    newDate.setHours(0, 0, 0, 0); // Normalize

    // 1. If both are selected, reset and set new start date
    if (selectedStartDate && selectedEndDate) {
        selectedStartDate = newDate;
        selectedEndDate = null;
    }
    // 2. If only start is selected
    else if (selectedStartDate) {
        // Normalize start date for comparison
        const normalizedStartDate = new Date(selectedStartDate);
        normalizedStartDate.setHours(0, 0, 0, 0);

        if (newDate < normalizedStartDate) {
            // New date is earlier than start, make it the new start
            selectedStartDate = newDate;
        } else if (newDate.getTime() === normalizedStartDate.getTime()) {
            // Clicking the same day clears both
            selectedStartDate = null;
            selectedEndDate = null;
        } else {
            // New date is later, set it as the end date
            selectedEndDate = newDate;
        }
    }
    // 3. If neither is selected, set as start date
    else {
        selectedStartDate = newDate;
        selectedEndDate = null;
    }

    renderCalendar(); // Re-render to update classes
}

// Updates the visual display in the modal footer
function updateSelectionDisplay() {
    $pickupDisplay.text(formatDisplayDate(selectedStartDate)); // jQuery .text()
    $dropoffDisplay.text(formatDisplayDate(selectedEndDate)); // jQuery .text()

    const isConfirmed = selectedStartDate && selectedEndDate;
    $confirmBtn.prop('disabled', !isConfirmed); // jQuery .prop() for disabling
}

// Updates visibility of the navigation buttons
function updateNavigationButtons() {
    const today = new Date();
    const currentMonthStart = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);

    // Disable Prev button if current month is the actual current month
    const isDisabled = currentMonthStart.getMonth() === today.getMonth() && currentMonthStart.getFullYear() === today.getFullYear();
    $prevMonthBtn.prop('disabled', isDisabled);
}

// Handle Confirmation
function handleConfirm() {
    if (selectedStartDate && selectedEndDate) {
        // Update the hidden input fields for form submission
        $pickupInput.val(formatDate(selectedStartDate)); // jQuery .val()
        $dropoffInput.val(formatDate(selectedEndDate));

        // Update the visible input fields for the user
        $pickupDisplayInput.val(formatDisplayDate(selectedStartDate));
        $dropoffDisplayInput.val(formatDisplayDate(selectedEndDate));

        // Optional: Automatically close modal (handled by data-bs-dismiss)
    } else {
        showCustomModal('Please select both a pick-up and drop-off date.');
    }
}

// Handle Clearing Dates
function handleClearDates() {
    selectedStartDate = null;
    selectedEndDate = null;
    $pickupInput.val('');
    $dropoffInput.val('');
    $pickupDisplayInput.val('');
    $dropoffDisplayInput.val('');
    renderCalendar();
}

// Navigation Handlers (using jQuery .on('click', ...))
$prevMonthBtn.on('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
});

$nextMonthBtn.on('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
});

$confirmBtn.on('click', handleConfirm);
$clearBtn.on('click', handleClearDates);

// Initial setup when modal opens
const $calendarModal = $('#calendarModal');
$calendarModal.on('show.bs.modal', () => { // jQuery event for Bootstrap modal
    // Check if input fields already contain a date
    if ($pickupInput.val()) {
        selectedStartDate = new Date($pickupInput.val());
        selectedStartDate.setHours(0, 0, 0, 0);
    } else {
        selectedStartDate = null;
    }
    if ($dropoffInput.val()) {
        selectedEndDate = new Date($dropoffInput.val());
        selectedEndDate.setHours(0, 0, 0, 0);
    } else {
        selectedEndDate = null;
    }

    // Reset current month view to the month of the selected start date, or today
    if (selectedStartDate) {
        currentDate = new Date(selectedStartDate.getFullYear(), selectedStartDate.getMonth(), 1);
    } else {
        currentDate = new Date();
        currentDate.setDate(1); // Set to the 1st for cleaner navigation logic
    }
    renderCalendar();
});

// Handle window resize for single vs. double month view
$(window).on('resize', renderCalendar); // jQuery resize handler

// --- CALENDAR LOGIC END ---

// --- Original Form Logic (Modified to integrate with calendar) ---
const $searchForm = $('#rentalSearchForm');
const $messageEl = $('#form-message');

// Form submission handler
$searchForm.on('submit', (e) => { // jQuery form submission
    e.preventDefault();
    $messageEl.text('');

    const pickupDateValue = $pickupInput.val();
    const dropoffDateValue = $dropoffInput.val();

    if (!pickupDateValue || !dropoffDateValue) {
        $messageEl.text('Error: Please select both a pick-up and drop-off date using the calendar.')
                  .removeClass('text-success')
                  .addClass('text-danger');
        return;
    }

    const pickupDate = new Date(pickupDateValue);
    const dropoffDate = new Date(dropoffDateValue);

    // Basic validation check
    if (pickupDate >= dropoffDate) {
        $messageEl.text('Error: Drop-off date must be after the Pick-up date.')
                  .removeClass('text-success')
                  .addClass('text-danger');
        return;
    }

    // Mock submission success message
    $messageEl.text('Searching for available vehicles in Cebu...')
              .removeClass('text-danger')
              .addClass('text-success');

    // Simulate navigation/search process
    const pickupLocation = $('#pickupLocation').val();
    setTimeout(() => {
        const modalMessage = $('<div>').html(`<h5 class="fw-bold text-haygo-dark">Search Completed!</h5>
                        <p class="small text-start">
                            <strong>Pick-up:</strong> ${pickupLocation} on ${pickupDateValue}<br>
                            <strong>Drop-off:</strong> ${pickupLocation} on ${dropoffDateValue}
                        </p>
                        <p>We found great rental options for your trip!</p>`);
        showCustomModal(modalMessage);

        // Clear temporary message
        $messageEl.text('').removeClass('text-success');
    }, 1000);
});

// Utility function to replace alert() with a custom Bootstrap modal
function showCustomModal(content) {
    // Remove existing modal using jQuery
    $('#customModal').remove();

    // Use content.prop('outerHTML') for jQuery objects, otherwise use content
    const contentHtml = (typeof content === 'string') ? content : content.prop('outerHTML');

    const modalHtml = `
                <div class="modal fade" id="customModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content rounded-4 shadow-lg p-4">
                            <div class="modal-header border-0 pb-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                ${contentHtml}
                            </div>
                            <div class="modal-footer border-0 pt-0">
                                <button type="button" class="btn btn-haygo-primary text-haygo-dark rounded-pill w-100" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
    $('body').append(modalHtml); // jQuery append

    // Initialize and show modal using Bootstrap's JS API
    const customModal = new bootstrap.Modal(document.getElementById('customModal'));
    customModal.show();
}
// End of Hero Script