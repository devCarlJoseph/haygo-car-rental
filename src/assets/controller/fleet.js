$(document).ready(function () {

    function showStep(step) {
        $('.booking-step').hide();
        $('[data-step="' + step + '"]').show();
        var width = step === 1 ? '33%' : step === 2 ? '66%' : '100%';
        $('#bookingProgressBar').css('width', width);
        $('#prevStepBtn').toggle(step > 1);
        $('#nextStepBtn').text(step === 1 ? 'Proceed to Details & Upload' :
            step === 2 ? 'Proceed to Final Review' : 'Complete Booking');
    }

    $('.selectCarBtn').click(function () {
        var carName = $(this).data('name');
        var carPrice = parseFloat($(this).data('price')) || 0;
        var vehicleId = $(this).data('id');
        var carDescription = $(this).closest('.card').find('p.small.text-secondary').text();
        var rentalDays = parseInt($('#rentalDays').data('days')) || 1;
        var totalPrice = carPrice * rentalDays;

        $('#selectedCarName').text(carName);
        $('#selectedCarDescription').text(carDescription);
        $('#totalPriceFooter').text(totalPrice.toFixed(2));
        $('#totalPriceInput').val(totalPrice.toFixed(2));
        $('#s_total').val(totalPrice.toFixed(2));
        $('input[name="vehicle_id"]').val(vehicleId);

        showStep(1);
        $('#bookingModal').modal('show');
    });

    $('#nextStepBtn').click(function () {
        if ($('[data-step="1"]').is(':visible')) {

            showStep(2);
        } else if ($('[data-step="2"]').is(':visible')) {
            let fullname = $('#fullname').val().trim();
            let email = $('#email').val().trim();
            let phone = $('#phone_num').val().trim();
            let lic = $('#lic_id').val().trim();
            let birth = $('#birth').val().trim();

            if (fullname === "" || email === "" || phone === "" || lic === "" || birth === "") {
                showMessage("Please fill out all required fields before continuing.");
                return;
            }

            $.post('actions/bookings.php', $('#bookingForm').serialize(), function (response) {
                $('#bookingIdInput').val(response);

                $('#summaryCar').text($('#selectedCarName').text());
                $('#summaryDates').text($('#pick_up').val() + " → " + $('#drop_off').val());
                $('#summaryRenter').text($('#fullname').val());
                $('#summaryEmail').text($('#email').val());
                $('#summaryPhone').text($('#phone_num').val());
                $('#summaryTotal').text("₱" + parseFloat($('#totalPriceInput').val()).toFixed(2));

                showStep(3);
            });
        } else if ($('[data-step="3"]').is(':visible')) {
            $.post('actions/bookings.php', {
                booking_id: $('#bookingIdInput').val(),
                submit_status: 'confirmed'
            }, function () {
                alert('Booking confirmed!');
                $('#bookingModal').modal('hide');
                window.location.href = 'index.php';
            });
        }
    });

    $('#cancelBtn').click(function () {
        var bookingId = $('#bookingIdInput').val();
        if (bookingId) {
            $.post('actions/bookings.php', {
                booking_id: bookingId,
                submit_status: 'cancelled'
            }, function () {
                alert('Booking cancelled.');
                $('#bookingModal').modal('hide');
                window.location.href = 'index.php';
            });
        } else {
            $('#bookingModal').modal('hide');
            window.location.href = 'index.php';
        }
    });


    $('#prevStepBtn').click(function () {
        if ($('[data-step="2"]').is(':visible')) showStep(1);
        else if ($('[data-step="3"]').is(':visible')) showStep(2);
    });

    function filterCars() {
        let searchName = $('#searchName').val().toLowerCase();
        let maxPrice = parseFloat($('#priceRange').val());
        let selectedType = $('.filter-quick-btn.active').data('type') || 'All';

        let anyVisible = false;

        $('.car-item').each(function () {
            let name = $(this).data('name');
            let type = $(this).data('type');
            let price = parseFloat($(this).data('price'));

            let matchName = name.includes(searchName);
            let matchPrice = price <= maxPrice;
            let matchType = (selectedType === 'All') || (type === selectedType);

            if (matchName && matchPrice && matchType) {
                $(this).show();
                anyVisible = true;
            } else {
                $(this).hide();
            }
        });

        if (!anyVisible) {
            $('#no-results-message').show();
        } else {
            $('#no-results-message').hide();
        }


        $('#maxPriceDisplay').text('₱ ' + maxPrice.toLocaleString());
    }


    function quickFilter(type) {
        $('.filter-quick-btn').removeClass('active');
        $('.filter-quick-btn[data-type="' + type + '"]').addClass('active');
        filterCars();
    }

    function resetFilters() {
        $('#searchName').val('');
        $('#priceRange').val(5000);
        $('.filter-quick-btn').removeClass('active').filter('[data-type="All"]').addClass('active');
        filterCars();
    }

    $('#searchName').on('input', filterCars);
    $('#priceRange').on('input', filterCars);
    $('.filter-quick-btn').on('click', function () {
        quickFilter($(this).data('type'));
    });

    resetFilters();


});
