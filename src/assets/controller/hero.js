// --- CALENDAR LOGIC START ---

// State variables for the calendar
var currentDate = new Date();
var selectedStartDate = null;
var selectedEndDate = null;

// Element references (jQuery objects)
var $calendarWrapper = $('#calendar-months-wrapper');
var $prevMonthBtn = $('#prevMonth');
var $nextMonthBtn = $('#nextMonth');
var $pickupDisplay = $('#selected-pickup-display');
var $dropoffDisplay = $('#selected-dropoff-display');
var $confirmBtn = $('#confirmDatesButton');
var $clearBtn = $('#clearDatesButton');
var $pickupInput = $('#pickupDate');
var $dropoffInput = $('#dropoffDate');
var $pickupDisplayInput = $('#pickupDateDisplay');
var $dropoffDisplayInput = $('#dropoffDateDisplay');

var DAYS_OF_WEEK = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
var MONTH_NAMES = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"];

// Format date YYYY-MM-DD
function formatDate(date) {
    if (!date) return null;
    var y = date.getFullYear();
    var m = ('0' + (date.getMonth() + 1)).slice(-2);
    var d = ('0' + date.getDate()).slice(-2);
    return y + '-' + m + '-' + d;
}

// Format date for display (e.g., Oct 25)
function formatDisplayDate(date) {
    if (!date) return '- -';
    return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
}

// Render a single calendar month
function renderMonth(date, $container, isFirst) {
    var year = date.getFullYear();
    var month = date.getMonth();

    var firstDayOfMonth = new Date(year, month, 1);
    var startingDay = firstDayOfMonth.getDay();
    var daysInMonth = new Date(year, month + 1, 0).getDate();

    var $monthDiv = $('<div>').addClass('calendar-month');

    var monthHtml = '<div class="calendar-header text-center pb-2 mb-2">' +
        '<h5 class="fw-bold mb-0">' + MONTH_NAMES[month] + ' ' + year + '</h5>' +
        '</div>' +
        '<div class="calendar-grid day-labels">' +
        DAYS_OF_WEEK.map(day => '<div class="day-label">' + day + '</div>').join('') +
        '</div>' +
        '<div class="calendar-grid" id="month-grid-' + year + '-' + month + '"></div>';

    $monthDiv.html(monthHtml);

    var $gridContainer = $monthDiv.find('.calendar-grid').last();

    // Add empty padding cells
    for (var i = 0; i < startingDay; i++) {
        $('<div>').addClass('day-cell outside-month').appendTo($gridContainer);
    }

    var today = new Date();
    today.setHours(0, 0, 0, 0);

    // Add actual days
    for (var dayNum = 1; dayNum <= daysInMonth; dayNum++) {
        var dayDate = new Date(year, month, dayNum);
        dayDate.setHours(0, 0, 0, 0);
        var dateString = formatDate(dayDate);

        var $dayCell = $('<div>').addClass('day-cell').attr('data-date', dateString);
        if (dayDate < today) $dayCell.addClass('disabled');
        if (selectedStartDate && dateString === formatDate(selectedStartDate)) $dayCell.addClass('selected-start');
        if (selectedEndDate && dateString === formatDate(selectedEndDate)) $dayCell.addClass('selected-end');
        if (selectedStartDate && selectedEndDate && dayDate > selectedStartDate && dayDate < selectedEndDate) $dayCell.addClass('in-range');

        $dayCell.html('<span class="day-number">' + dayNum + '</span>');

        if (dayDate >= today) {
            $dayCell.on('click', handleDateClick);
        }

        $gridContainer.append($dayCell);
    }

    $container.append($monthDiv);
}

// Render the main calendar view (1 or 2 months)
function renderCalendar() {
    $calendarWrapper.empty();

    var month1Date = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    renderMonth(month1Date, $calendarWrapper, true);

    if ($(window).width() >= 768) {
        var month2Date = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
        renderMonth(month2Date, $calendarWrapper, false);
    }

    updateNavigationButtons();
    updateSelectionDisplay();
}

// Handle date click
function handleDateClick() {
    var dateString = $(this).data('date');
    var newDate = new Date(dateString);
    newDate.setHours(0, 0, 0, 0);

    if (selectedStartDate && selectedEndDate) {
        selectedStartDate = newDate;
        selectedEndDate = null;
    } else if (selectedStartDate) {
        if (newDate < selectedStartDate) selectedStartDate = newDate;
        else if (newDate.getTime() === selectedStartDate.getTime()) {
            selectedStartDate = null;
            selectedEndDate = null;
        } else {
            selectedEndDate = newDate;
        }
    } else {
        selectedStartDate = newDate;
        selectedEndDate = null;
    }

    renderCalendar();
}

// Update modal display
function updateSelectionDisplay() {
    $pickupDisplay.text(formatDisplayDate(selectedStartDate));
    $dropoffDisplay.text(formatDisplayDate(selectedEndDate));
    $confirmBtn.prop('disabled', !(selectedStartDate && selectedEndDate));
}

// Update prev/next month buttons
function updateNavigationButtons() {
    var today = new Date();
    var currentMonthStart = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    $prevMonthBtn.prop('disabled', currentMonthStart.getMonth() === today.getMonth() && currentMonthStart.getFullYear() === today.getFullYear());
}

// Confirm selection
function handleConfirm() {
    if (selectedStartDate && selectedEndDate) {
        $pickupInput.val(formatDate(selectedStartDate));
        $dropoffInput.val(formatDate(selectedEndDate));
        $pickupDisplayInput.val(formatDisplayDate(selectedStartDate));
        $dropoffDisplayInput.val(formatDisplayDate(selectedEndDate));
    } else {
        alert('Please select both a pick-up and drop-off date.');
    }
}

// Clear selection
function handleClearDates() {
    selectedStartDate = null;
    selectedEndDate = null;
    $pickupInput.val('');
    $dropoffInput.val('');
    $pickupDisplayInput.val('');
    $dropoffDisplayInput.val('');
    renderCalendar();
}

// Navigation buttons
$prevMonthBtn.on('click', function () { currentDate.setMonth(currentDate.getMonth() - 1); renderCalendar(); });
$nextMonthBtn.on('click', function () { currentDate.setMonth(currentDate.getMonth() + 1); renderCalendar(); });

// Confirm / Clear buttons
$confirmBtn.on('click', handleConfirm);
$clearBtn.on('click', handleClearDates);

// Initial modal setup
$('#calendarModal').on('show.bs.modal', function () {
    if ($pickupInput.val()) selectedStartDate = new Date($pickupInput.val());
    else selectedStartDate = null;

    if ($dropoffInput.val()) selectedEndDate = new Date($dropoffInput.val());
    else selectedEndDate = null;

    if (selectedStartDate) currentDate = new Date(selectedStartDate.getFullYear(), selectedStartDate.getMonth(), 1);
    else currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);

    renderCalendar();
});

// Window resize
$(window).on('resize', renderCalendar);

// --- CALENDAR LOGIC END ---
