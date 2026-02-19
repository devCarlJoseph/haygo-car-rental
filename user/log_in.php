<?php
session_start();

if (isset($_SESSION['user_customer'])) {
    header('Location: dashboard.php');
    exit();
}

$error = $_GET['error'] ?? '';
$errorMessage = '';

if ($error === 'missing') {
    $errorMessage = 'Enter your booking email and phone number.';
} elseif ($error === 'notfound') {
    $errorMessage = 'No customer profile matched your details. Please use the same email and phone used in booking.';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login | HayGo</title>
    <link rel="stylesheet" href="../src/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../src/assets/css/portal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="user-auth-page">
    <div class="user-auth-shell">
        <article class="user-auth-card">
            <header class="user-auth-header">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="small text-uppercase tracking mb-2">HayGo Customer Access</p>
                        <h1 class="h3 fw-bold mb-2">Track and Manage Your Trips</h1>
                        <p class="mb-0 text-white-50">Use the same contact details from your booking.</p>
                    </div>
                    <a class="btn btn-sm btn-outline-light rounded-pill" href="../login.php">Switch Role</a>
                </div>
            </header>

            <div class="user-auth-body">
                <?php if ($errorMessage !== ''): ?>
                    <div class="alert alert-danger rounded-3 py-2"><?php echo htmlspecialchars($errorMessage); ?></div>
                <?php endif; ?>

                <form action="../actions/user_log_in.php" method="post" class="row g-3">
                    <div class="col-12">
                        <label for="user_email" class="form-label fw-semibold">Booking Email</label>
                        <input type="email" id="user_email" name="user_email" class="form-control form-control-lg" placeholder="you@example.com" required>
                    </div>
                    <div class="col-12">
                        <label for="user_phone" class="form-label fw-semibold">Phone Number</label>
                        <input type="text" id="user_phone" name="user_phone" class="form-control form-control-lg" placeholder="09XXXXXXXXX" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-portal-primary btn-lg w-100 fw-semibold">
                            Open Customer Dashboard
                        </button>
                    </div>
                </form>

                <div class="auth-note mt-4">
                    First time renter? Complete a booking first in <a href="../fleet.php" class="fw-semibold text-decoration-none">Fleet</a>, then return here to view trip status.
                </div>
            </div>
        </article>
    </div>
</body>

</html>
