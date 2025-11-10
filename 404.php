<?php

require_once 'header.php';

http_response_code(404);

?>

<section id="error-404" class="d-flex align-items-center justify-content-center py-5" style="min-height: 80vh;">
    <div class="container text-center">
        <h1 class="display-1 fw-bolder haygo-accent mb-3" style="font-size: 8rem;">
            404
        </h1>

        <h2 class="display-5 fw-bold haygo-primary-text mb-4">
            Oops! Dead End Ahead.
        </h2>

        <p class="lead mb-5 fs-5 text-secondary mx-auto" style="max-width: 600px;">
            It looks like your navigation system took a wrong turn. The URL you entered doesn't lead to a page in our fleet. Let's get you back on the main highway.
        </p>

        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
            <a href="index.php" class="btn btn-haygo-primary btn-lg px-4 me-sm-3 fw-semibold rounded-3 shadow-sm">
                <i class="bi bi-house-fill me-2"></i> Return to Main Road
            </a>

            <a href="index.php#hero-section" class="btn btn-outline-secondary btn-lg px-4 rounded-3 fw-semibold">
                <i class="bi bi-geo-alt-fill me-2"></i> Reroute Your Search
            </a>
        </div>

        <p class="mt-4 small text-muted">
            Need directions? For immediate assistance, please <a href="contact.php" class="text-haygo-accent fw-semibold">contact customer support</a>.
        </p>

    </div>
</section>

<?php
require_once 'footer.php';
?>