$(document).ready(function () {
    $('.filter-btn').click(function () {
        const category = $(this).data('category'); // get the clicked category

        if (category === 'all') {
            $('.post-card-item').show();
        } else {
            $('.post-card-item').hide();
            $('.post-card-item[data-category="' + category + '"]').show();
        }

        // Update active button styling
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
    });
});