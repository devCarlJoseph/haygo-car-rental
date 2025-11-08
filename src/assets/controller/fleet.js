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

        var rentalDays = parseInt($('#rentalDays').data('days')) || 1;

        var totalPrice = carPrice * rentalDays;

        $('#selectedCarName').text(carName);
        $('#totalPrice').text(totalPrice.toFixed(2));
        $('#totalPriceFooter').text(totalPrice.toFixed(2));
        $('input[name="vehicle_id"]').val(vehicleId);
        $('input[name="daily_price"]').val(carPrice.toFixed(2));

        $('[data-step="3"] dd.fs-5').text('₱ ' + totalPrice.toFixed(2));
        $('[data-step="3"] .form-check-label span').text(totalPrice.toFixed(2));
        
        showStep(1);
        $('#bookingModal').modal('show');
    });

    $('#nextStepBtn').click(function () {
        if ($('[data-step="1"]').is(':visible')) {
            showStep(2);
        } else if ($('[data-step="2"]').is(':visible')) {
            showStep(3);
        }
    });

    $('#prevStepBtn').click(function () {
        if ($('[data-step="2"]').is(':visible')) {
            showStep(1);
        } else if ($('[data-step="3"]').is(':visible')) {
            showStep(2);
        }
    });
});
