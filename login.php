<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HayGo Access Portal</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.css">
    <link rel="stylesheet" href="src/assets/css/portal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="portal-page">
    <main class="container py-4 py-lg-5">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
            <div>
                <p class="text-uppercase tracking mb-1 text-muted small">HayGo Car Rental</p>
                <h1 class="fw-bold mb-0 portal-heading">Choose Access Type</h1>
            </div>
            <a class="btn btn-outline-dark rounded-pill px-4" href="index.php">
                <i class="bi bi-arrow-left me-2"></i>Back to Home
            </a>
        </div>

        <section class="portal-hero rounded-4 p-4 p-lg-5 mb-4">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <p class="text-uppercase fw-semibold mb-2 hero-kicker">Rental Workspace</p>
                    <h2 class="display-6 fw-bold text-white mb-3">Customer trips and fleet operations, separated clearly.</h2>
                    <p class="text-white-50 mb-0 fs-5">Use the customer portal to manage personal bookings. Use the admin console for fleet, pricing, and reservation operations.</p>
                </div>
                <div class="col-lg-5">
                    <div class="hero-metrics rounded-4 p-4">
                        <div class="metric-item">
                            <span class="metric-value">24/7</span>
                            <span class="metric-label">Booking Visibility</span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-value">Real-Time</span>
                            <span class="metric-label">Fleet Availability</span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-value">Secure</span>
                            <span class="metric-label">Role-Based Access</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="row g-4">
            <div class="col-md-6">
                <article class="role-card customer-card h-100 rounded-4 p-4 p-lg-5">
                    <div class="icon-wrap mb-4"><i class="bi bi-person-circle"></i></div>
                    <p class="text-uppercase fw-semibold small mb-2">For Renters</p>
                    <h3 class="fw-bold mb-3">Customer Portal</h3>
                    <p class="mb-4">Log in with your booking email and mobile number to view active trips, check status, and cancel upcoming rentals when needed.</p>
                    <a class="btn btn-dark rounded-pill px-4" href="user/log_in.php">Continue as Customer</a>
                </article>
            </div>

            <div class="col-md-6">
                <article class="role-card admin-card h-100 rounded-4 p-4 p-lg-5">
                    <div class="icon-wrap mb-4"><i class="bi bi-speedometer2"></i></div>
                    <p class="text-uppercase fw-semibold small mb-2">For Operations</p>
                    <h3 class="fw-bold mb-3">Admin Console</h3>
                    <p class="mb-4">Sign in to manage vehicles, approve bookings, monitor customers, and keep availability and pricing aligned with demand.</p>
                    <a class="btn btn-light rounded-pill px-4" href="admin/log_in.php">Continue as Admin</a>
                </article>
            </div>
        </section>
    </main>
</body>

</html>
