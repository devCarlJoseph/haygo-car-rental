<?php
require_once 'header.php';
require_once '../config/config.php';

session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: log_in.php');
    exit();
}

$revQuery = $conn->query("SELECT SUM(total_price) AS revenue FROM bookings WHERE status='completed'");
$revRow = $revQuery->fetch_assoc();
$totalRevenue = $revRow['revenue'] ?? 0;

$pendingQuery = $conn->query("SELECT COUNT(*) AS pending FROM bookings WHERE status='pending'");
$pendingRow = $pendingQuery->fetch_assoc();
$pendingCount = $pendingRow['pending'];

$vehicleQuery = $conn->query("SELECT COUNT(*) AS totalVehicles FROM vehicles");
$vehicleRow = $vehicleQuery->fetch_assoc();
$totalVehicles = $vehicleRow['totalVehicles'];

$customerQuery = $conn->query("SELECT COUNT(*) AS customers FROM customers");
$customerRow = $customerQuery->fetch_assoc();
$newCustomers = $customerRow['customers'];

$statusQuery = $conn->query("
    SELECT 
        SUM(status='confirmed') AS confirmed,
        SUM(status='pending') AS pending,
        SUM(status='cancelled') AS cancelled,
        SUM(status='completed') AS completed
    FROM bookings
");

$status = $statusQuery->fetch_assoc();

$confirmed = $status['confirmed'];
$pending   = $status['pending'];
$cancelled = $status['cancelled'];
$completed = $status['completed'];

$total = $confirmed + $pending + $cancelled + $completed;
if ($total == 0) {
    $total = 1;
}

$confirmedPercent = round(($confirmed / $total) * 100);
$pendingPercent   = round(($pending / $total) * 100);
$cancelledPercent = round(($cancelled / $total) * 100);
$completedPercent = round(($completed / $total) * 100);

$topVehiclesQuery = "
    SELECT v.car_name, COUNT(b.id) AS total_bookings, SUM(b.total_price) AS revenue
    FROM vehicles v
    LEFT JOIN bookings b ON v.id = b.vehicle_id
    GROUP BY v.id
    ORDER BY total_bookings DESC, revenue DESC
    LIMIT 5
";

$result = $conn->query($topVehiclesQuery);
$rank = 1;


?>

<button class="d-lg-none position-fixed top-0 end-0 mt-3 me-3 z-3 btn bg-rental-primary text-white shadow-lg p-2 rounded-3"
    type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar-offcanvas" aria-controls="sidebar-offcanvas">
    <i class="bi bi-list fs-4"></i>
</button>

<aside class="offcanvas offcanvas-start p-4 d-flex flex-column shadow-lg" style="background-color: #84635B; color: #F8E1DA" tabindex="-1"
    id="sidebar-offcanvas" aria-labelledby="offcanvasLabel" data-bs-scroll="true">

    <div class="mb-5 p-2 d-none d-lg-block">
        <h1 class="fs-4 fw-bolder tracking-tight text-center">HAYGO</h1>
    </div>

    <nav class="flex-grow-1">
        <ul class="nav flex-column space-y-2">
            <li class="nav-item mb-2">
                <a href="dashboard.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 fw-semibold shadow-sm active-nav" style="background-color: #F8E1DA !important; color: #84635B !important">
                    <i class="bi bi-speedometer2 fs-5"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="fleet.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                    <i class="bi bi-car-front-fill fs-5"></i>
                    <span>Vehicle Catalog</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="bookings.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                    <i class="bi bi-calendar-check fs-5"></i>
                    <span>Bookings</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="customer.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                    <i class="bi bi-people-fill fs-5"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="messages.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                    <i class="bi bi-chat-dots-fill fs-5"></i>
                    <span>Messages</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- User/Settings Section -->
    <div class="mt-auto pt-4 border-top border-secondary-subtle">
        <a href="settings.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark mb-2">
            <i class="bi bi-gear-fill fs-5"></i>
            <span>Settings</span>
        </a>
        <div class="d-flex align-items-center gap-3 p-3 rounded-3 text-white" style="background-color: #F8E1DA !important;">
            <!-- IMPORTANT: Using PHP variables for image source and username -->
            <img src="../uploads/admin/<?= $_SESSION['admin_profile'] ?>" style="width: 45px; height: 45px; object-fit: cover" class="rounded-circle">
            <div>
                <p class="mb-0 fw-semibold fs-6" style="color: #84635B"><?= $_SESSION['admin_username']; ?></p>
                <p class="mb-0 small text-secondary">Admin</p>
            </div>
        </div>
    </div>
</aside>

<!-- Main Content Area -->
<main class="main-content flex-grow-1 p-4 p-md-5">

    <!-- Header -->
    <header class="mb-5">
        <h2 class="fs-2 fw-bold text-dark">Dashboard</h2>
    </header>

    <section class="row g-4 mb-5" id="kpi-cards">
        <div class="col-xl-3 col-md-6">
            <div class="card p-4 rounded-4 shadow-sm h-100 border-start border-5 border-success">
                <p class="text-uppercase text-muted mb-2 small fw-semibold">Total Revenue</p>
                <h3 class="fs-2 fw-bold text-dark">₱<?= number_format($totalRevenue, 2) ?></h3>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card p-4 rounded-4 shadow-sm h-100 border-start border-5 border-warning">
                <p class="text-uppercase text-muted mb-2 small fw-semibold">Pending Bookings</p>
                <h3 class="fs-2 fw-bold text-dark"><?= $pendingCount ?></h3>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card p-4 rounded-4 shadow-sm h-100 border-start border-5 border-primary">
                <p class="text-uppercase text-muted mb-2 small fw-semibold">Total Vehicles</p>
                <h3 class="fs-2 fw-bold text-dark"><?= $totalVehicles ?></h3>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card p-4 rounded-4 shadow-sm h-100 border-start border-5" style="border-color: var(--haygo-primary) !important;">
                <p class="text-uppercase text-muted mb-2 small fw-semibold">New Customers</p>
                <h3 class="fs-2 fw-bold text-dark"><?= $newCustomers ?></h3>
            </div>
        </div>
    </section>

    <!-- 2. Charts Row - NOW PURE BOOTSTRAP/HTML -->
    <section class="row g-4 mb-5">
        <!-- Monthly Revenue Trend (Simulated Bar Chart) -->
        <div class="col-lg-8">
            <div class="card p-4 rounded-4 shadow-sm h-100">
                <h3 class="fs-5 fw-semibold mb-3 border-bottom pb-2">Monthly Revenue Trend</h3>
                <div class="d-flex justify-content-between align-items-end flex-grow-1 p-3" style="height: 350px;">

                    <!-- Month 1: Jan -->
                    <div class="text-center flex-grow-1 mx-1 d-flex flex-column justify-content-end">
                        <div class="bar-chart-month d-flex flex-column justify-content-end">
                            <div class="bar-chart-bar" style="height: 40%; background-color: #ced4da;"></div>
                        </div>
                        <small class="text-muted mt-1">Jan</small>
                    </div>

                    <!-- Month 2: Feb -->
                    <div class="text-center flex-grow-1 mx-1 d-flex flex-column justify-content-end">
                        <div class="bar-chart-month d-flex flex-column justify-content-end">
                            <div class="bar-chart-bar" style="height: 55%; background-color: var(--haygo-primary);"></div>
                        </div>
                        <small class="text-muted mt-1">Feb</small>
                    </div>

                    <!-- Month 3: Mar -->
                    <div class="text-center flex-grow-1 mx-1 d-flex flex-column justify-content-end">
                        <div class="bar-chart-month d-flex flex-column justify-content-end">
                            <div class="bar-chart-bar" style="height: 70%; background-color: #ced4da;"></div>
                        </div>
                        <small class="text-muted mt-1">Mar</small>
                    </div>

                    <!-- Month 4: Apr -->
                    <div class="text-center flex-grow-1 mx-1 d-flex flex-column justify-content-end">
                        <div class="bar-chart-month d-flex flex-column justify-content-end">
                            <div class="bar-chart-bar" style="height: 90%; background-color: var(--haygo-primary);"></div>
                        </div>
                        <small class="text-muted mt-1">Apr</small>
                    </div>

                    <!-- Month 5: May -->
                    <div class="text-center flex-grow-1 mx-1 d-flex flex-column justify-content-end">
                        <div class="bar-chart-month d-flex flex-column justify-content-end">
                            <div class="bar-chart-bar" style="height: 85%; background-color: #ced4da;"></div>
                        </div>
                        <small class="text-muted mt-1">May</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Status Distribution (Static List/Legend) -->
        <div class="col-lg-4">
            <div class="card p-4 rounded-4 shadow-sm h-100 d-flex flex-column">
                <h3 class="fs-5 fw-semibold mb-3 border-bottom pb-2">Booking Status Distribution</h3>

                <ul class="list-group list-group-flush flex-grow-1 justify-content-center">

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-circle-fill text-primary me-2"></i> Completed Bookings
                        </span>
                        <span class="badge text-bg-primary rounded-pill">
                            <?= $completedPercent ?>% (<?= $completed ?>)
                        </span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-circle-fill text-success me-2"></i> Confirmed Bookings
                        </span>
                        <span class="badge text-bg-success rounded-pill">
                            <?= $confirmedPercent ?>% (<?= $confirmed ?>)
                        </span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-circle-fill text-warning me-2"></i> Pending Review
                        </span>
                        <span class="badge text-bg-warning rounded-pill">
                            <?= $pendingPercent ?>% (<?= $pending ?>)
                        </span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-circle-fill text-danger me-2"></i> Cancelled/Failed
                        </span>
                        <span class="badge text-bg-danger rounded-pill">
                            <?= $cancelledPercent ?>% (<?= $cancelled ?>)
                        </span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center fw-bold text-muted">
                        Total
                        <span><?= $total ?></span>
                    </li>

                </ul>
            </div>
        </div>

    </section>

    <!-- 3. Top Vehicles Table -->
    <section class="card p-4 rounded-4 shadow-sm">
        <h3 class="fs-5 fw-semibold text-dark mb-4">Top 5 Performing Vehicles</h3>
        <div class="table-responsive rounded-3 border border-light">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Rank</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Vehicle Name</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Total Bookings</th>
                        <th scope="col" class="px-3 py-3 text-end text-xs text-secondary text-uppercase">Revenue Generated</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td class="px-3 py-3 fw-bold"><?= $rank ?></td>
                            <td class="px-3 py-3"><?= htmlspecialchars($row['car_name']) ?></td>
                            <td class="px-3 py-3"><?= $row['total_bookings'] ?></td>
                            <td class="px-3 py-3 text-end fw-bold text-success">₱<?= number_format($row['revenue'] ?? 0, 2) ?></td>
                        </tr>
                    <?php $rank++;
                    endwhile; ?>
                </tbody>

            </table>
        </div>
    </section>
</main>

<?php
require_once 'footer.php';
?>