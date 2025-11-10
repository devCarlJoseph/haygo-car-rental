<?php
require_once 'header.php';

session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: log_in.php');
    exit();
}

?>
<!-- Mobile Menu Toggle Button -->
<button class="d-lg-none position-fixed top-0 end-0 mt-3 me-3 z-3 btn bg-rental-primary text-white shadow-lg p-2 rounded-3"
    type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar-offcanvas" aria-controls="sidebar-offcanvas">
    <i class="bi bi-list fs-4"></i>
</button>

<!-- Sidebar / Navigation -->
<aside class="offcanvas offcanvas-start bg-dark text-white p-4 d-flex flex-column shadow-lg" tabindex="-1"
    id="sidebar-offcanvas" aria-labelledby="offcanvasLabel" data-bs-scroll="true">

    <div class="mb-5 p-2 d-none d-lg-block">
        <h1 class="fs-4 fw-bolder tracking-tight text-center text-rental-primary">HAYGO</h1>
    </div>

    <nav class="flex-grow-1">
        <ul class="nav flex-column space-y-2">
            <li class="nav-item mb-2">
                <a href="dashboard.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 bg-rental-primary text-white fw-semibold shadow-sm active-nav">
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
        </ul>
    </nav>

    <!-- User/Settings Section -->
    <div class="mt-auto pt-4 border-top border-secondary-subtle">
        <a href="settings.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark mb-2">
            <i class="bi bi-gear-fill fs-5"></i>
            <span>Settings</span>
        </a>
        <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-secondary bg-opacity-10 text-white">
            <img src="../uploads/admin/<?= $_SESSION['admin_profile'] ?>" style="width: 40px; height: 40px; object-fit: cover" class="rounded-circle">
            <div>
                <p class="mb-0 fw-semibold fs-6"><?= $_SESSION['admin_username']; ?></p>
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
        <p class="text-sm text-secondary">Key performance indicators and visualizations for business insights.</p>
    </header>

    <!-- 1. KPI Cards Row -->
    <section class="row g-4 mb-5" id="kpi-cards">

    </section>

    <!-- 2. Charts Row -->
    <section class="row g-4 mb-5">
        <!-- Monthly Revenue Chart (8 columns on large screens) -->
        <div class="col-lg-8">
            <div class="card p-4 rounded-4 shadow-sm h-100">
                <h3 class="fs-5 fw-semibold mb-3 border-bottom pb-2">Monthly Revenue Trend</h3>
                <div class="d-flex justify-content-center flex-grow-1" style="max-height: 350px;">
                    <canvas id="monthlyRevenueChart"></canvas>
                </div>

            </div>
        </div>
        <!-- Booking Status Distribution Chart (4 columns on large screens) -->
        <div class="col-lg-4">
            <div class="card p-4 rounded-4 shadow-sm h-100 d-flex flex-column justify-content-center">
                <h3 class="fs-5 fw-semibold mb-3 border-bottom pb-2">Booking Status Distribution</h3>
                <!-- Ensure a fixed height container for the chart to prevent layout shifts -->
                <div class="d-flex justify-content-center flex-grow-1" style="max-height: 350px;">
                    <canvas id="statusDistributionChart"></canvas>
                </div>
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
                <tbody id="topVehiclesTableBody">
                    <!-- Top vehicles data will be inserted here by JavaScript -->
                </tbody>
            </table>
        </div>
    </section>
</main>

<?php
require_once 'footer.php';
?>