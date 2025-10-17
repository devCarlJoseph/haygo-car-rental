<footer style="height: 23.25rem; background: #0F0F0F;">
    <div>
        <div class="d-flex justify-content-center align-items-center" style="padding-top: 3.188rem;">
            <div class="text-center">
                <img src="src/assets/images/logo.png" style="width: 3.75rem; height: 2.5rem;">
                <div class="text-white">
                    <h1 style="font-size: 2.813rem;">Hay Go</h1>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-3">
            <ul class="d-flex gap-4 text-white list-unstyled">
                <a class="text-decoration-none text-white" href="index.php">
                    <li>Home</li>
                </a>
                <a class="text-decoration-none text-white" href="about.php">
                    <li>About Us</li>
                </a>
                <a class="text-decoration-none text-white" href="vehicles.php">
                    <li>Vehicles</li>
                </a>
                <a class="text-decoration-none text-white" href="contact.php">
                    <li>Contact Us</li>
                </a>
                <a class="text-decoration-none text-white" href="help.php">
                    <li>Help</li>
                </a>
                <a class="text-decoration-none text-white" href="blog.php">
                    <li>Blog</li>
                </a>
            </ul>
        </div>
        <div class="d-flex justify-content-center align-items-center gap-3">
            <div class="bg-danger" style="width: 1.875rem; height: 1.875rem;"></div>
            <div class="bg-danger" style="width: 1.875rem; height: 1.875rem;"></div>
            <div class="bg-danger" style="width: 1.875rem; height: 1.875rem;"></div>
            <div class="bg-danger" style="width: 1.875rem; height: 1.875rem;"></div>
            <div class="bg-danger" style="width: 1.875rem; height: 1.875rem;"></div>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <div class="bg-primary" style="width: 7.563rem; height: 3.25rem;"></div>
        </div>
        <div class="text-center text-white mt-3">
            <p>2025 HAYGO All Rights Reserved.</p>
        </div>
    </div>
</footer>

<script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
</script>

</body>

</html>