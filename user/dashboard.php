<?php
session_start();

require_once '../config/config.php';

if (!isset($_SESSION['user_customer'])) {
    header('Location: log_in.php');
    exit();
}

$bookingModel = new Booking();
$bookings = $bookingModel->getByEmail($_SESSION['user_customer']['email']);

$today = date('Y-m-d');
$totalTrips = count($bookings);
$activeTrips = 0;
$completedTrips = 0;
$cancelledTrips = 0;

foreach ($bookings as $booking) {
    if (in_array($booking['status'], ['pending', 'confirmed'], true) && $booking['return_date'] >= $today) {
        $activeTrips++;
    }
    if ($booking['status'] === 'completed') {
        $completedTrips++;
    }
    if ($booking['status'] === 'cancelled') {
        $cancelledTrips++;
    }
}

$statusMessage = '';
$messageType = 'success';

if (isset($_GET['updated'])) {
    $statusMessage = 'Booking was cancelled successfully.';
}
if (isset($_GET['error'])) {
    $messageType = 'danger';
    $statusMessage = 'Unable to process that action. Please refresh and try again.';
}

function statusClass($status)
{
    return match ($status) {
        'pending' => 'status-pill status-pending',
        'confirmed' => 'status-pill status-confirmed',
        'completed' => 'status-pill status-completed',
        default => 'status-pill status-cancelled',
    };
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Trips | HayGo</title>
    <link rel="stylesheet" href="../src/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../src/assets/css/portal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="user-dashboard-page">
    <main class="container dashboard-shell">
        <section class="dashboard-header-card">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div>
                    <p class="text-uppercase small mb-1 tracking text-white-50">Customer Portal</p>
                    <h1 class="h3 fw-bold mb-1">Welcome, <?php echo htmlspecialchars($_SESSION['user_customer']['name']); ?></h1>
                    <p class="mb-0 text-white-50">Manage your bookings and track live reservation status.</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="../fleet.php" class="btn btn-light rounded-pill px-4">Book New Trip</a>
                    <a href="../actions/user_log_out.php" class="btn btn-outline-light rounded-pill px-4">Logout</a>
                </div>
            </div>
        </section>

        <?php if ($statusMessage !== ''): ?>
            <div class="alert alert-<?php echo $messageType; ?> rounded-3"><?php echo htmlspecialchars($statusMessage); ?></div>
        <?php endif; ?>

        <section class="row g-3 mb-4">
            <div class="col-sm-6 col-lg-3">
                <div class="dashboard-kpi">
                    <p class="mb-1 text-muted">Total Trips</p>
                    <p class="kpi-value mb-0"><?php echo $totalTrips; ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="dashboard-kpi">
                    <p class="mb-1 text-muted">Active / Upcoming</p>
                    <p class="kpi-value mb-0"><?php echo $activeTrips; ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="dashboard-kpi">
                    <p class="mb-1 text-muted">Completed</p>
                    <p class="kpi-value mb-0"><?php echo $completedTrips; ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="dashboard-kpi">
                    <p class="mb-1 text-muted">Cancelled</p>
                    <p class="kpi-value mb-0"><?php echo $cancelledTrips; ?></p>
                </div>
            </div>
        </section>

        <section>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="h4 fw-bold mb-0">My Reservations</h2>
                <small class="text-muted">Email: <?php echo htmlspecialchars($_SESSION['user_customer']['email']); ?></small>
            </div>

            <?php if (empty($bookings)): ?>
                <div class="trip-card">
                    <p class="mb-2 fw-semibold">No bookings found yet.</p>
                    <p class="trip-meta mb-3">Start by choosing a vehicle and dates from the fleet page.</p>
                    <a href="../fleet.php" class="btn btn-portal-primary rounded-pill px-4">Browse Fleet</a>
                </div>
            <?php else: ?>
                <?php foreach ($bookings as $booking): ?>
                    <?php
                    $canCancel = in_array($booking['status'], ['pending', 'confirmed'], true)
                        && $booking['booking_date'] >= $today;
                    ?>
                    <article class="trip-card">
                        <div class="d-flex flex-wrap justify-content-between align-items-start gap-2">
                            <div>
                                <p class="mb-1 fw-bold">Booking #<?php echo (int) $booking['id']; ?></p>
                                <p class="trip-meta mb-0">
                                    <?php echo date('M d, Y', strtotime($booking['booking_date'])); ?>
                                    to
                                    <?php echo date('M d, Y', strtotime($booking['return_date'])); ?>
                                </p>
                            </div>
                            <span class="<?php echo statusClass($booking['status']); ?>">
                                <?php echo htmlspecialchars(ucfirst($booking['status'])); ?>
                            </span>
                        </div>

                        <hr>

                        <div class="row g-2 trip-meta">
                            <div class="col-md-3"><strong>Vehicle ID:</strong> <?php echo (int) $booking['vehicle_id']; ?></div>
                            <div class="col-md-3"><strong>Total:</strong> PHP <?php echo number_format((float) $booking['total_price'], 2); ?></div>
                            <div class="col-md-3"><strong>Phone:</strong> <?php echo htmlspecialchars($booking['phone_num']); ?></div>
                            <div class="col-md-3"><strong>License:</strong> <?php echo htmlspecialchars($booking['lic_id']); ?></div>
                        </div>

                        <?php if ($canCancel): ?>
                            <form action="../actions/user_cancel_booking.php" method="post" class="mt-3"
                                onsubmit="return confirm('Cancel this booking?');">
                                <input type="hidden" name="booking_id" value="<?php echo (int) $booking['id']; ?>">
                                <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3">Cancel Booking</button>
                            </form>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
    </main>
</body>

</html>
