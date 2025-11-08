const filterButtons = document.querySelectorAll('.filter-btn');

filterButtons.forEach(btn => {
    btn.addEventListener('click', function () {
        // Remove active class from all buttons
        filterButtons.forEach(b => b.classList.remove('active'));

        // Add active class to clicked button
        this.classList.add('active');
    });
});
