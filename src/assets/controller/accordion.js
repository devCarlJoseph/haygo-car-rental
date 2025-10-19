window.onload = function () {
    const accordionHeaders = document.querySelectorAll('.accordion-header');


    accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {

            const content = header.nextElementSibling;

            header.classList.toggle('active');

            if (header.classList.contains('active')) {

                setTimeout(() => {
                    content.style.maxHeight = content.scrollHeight + "px";
                }, 0);

            } else {
                content.style.maxHeight = "0";
            }

        });
    });
};


$(document).ready(function () {
    // Open chat fullscreen
    $('#chatNowBtn').on('click', function () {
        $('#helpContent').hide(); // hide help section
        $('.header-container').hide();
        $('footer').hide();
        $('#chatSection').fadeIn().css('display', 'flex');
    });

    // Close or go back
    $('#closeChatBtn').on('click', function () {
        $('#chatSection').fadeOut(function () {
            $('#helpContent').show();
            $('.header-container').show();
            $('footer').show();
        });
    });
});