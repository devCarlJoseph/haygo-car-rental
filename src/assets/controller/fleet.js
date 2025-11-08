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
        $('input[name="vehicle_id"]').val(vehicleId);

        showStep(1);
        $('#bookingModal').modal('show');
    });

    // Proceed / Complete Booking button
    $('#nextStepBtn').click(function () {
        if ($('[data-step="1"]').is(':visible')) {
            showStep(2);
        } else if ($('[data-step="2"]').is(':visible')) {
            // Step 2: Submit form to create pending booking
            $.post('actions/bookings.php', $('#bookingForm').serialize(), function (response) {
                $('#bookingIdInput').val(response); // Save booking_id
                showStep(3);
            });
        } else if ($('[data-step="3"]').is(':visible')) {
            // Step 3: Confirm booking
            $.post('actions/bookings.php', {
                booking_id: $('#bookingIdInput').val(),
                submit_status: 'confirmed'
            }, function () {
                alert('Booking confirmed!');
                $('#bookingModal').modal('hide');
            });
        }
    });

    // Cancel button
    $('#cancelBtn').click(function () {
        var bookingId = $('#bookingIdInput').val();
        if (bookingId) {
            $.post('actions/bookings.php', {
                booking_id: bookingId,
                submit_status: 'cancelled'
            }, function () {
                alert('Booking cancelled.');
                $('#bookingModal').modal('hide');
            });
        } else {
            $('#bookingModal').modal('hide');
        }
    });

    $('#prevStepBtn').click(function () {
        if ($('[data-step="2"]').is(':visible')) showStep(1);
        else if ($('[data-step="3"]').is(':visible')) showStep(2);
    });

});
