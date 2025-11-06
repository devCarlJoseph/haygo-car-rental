<?php 
    require_once 'header.php';
?>
    <!-- Mobile Menu Toggle Button (Visible on Small Screens) -->
    <button class="d-lg-none position-fixed top-0 end-0 mt-3 me-3 z-3 btn bg-rental-primary text-white shadow-lg p-2 rounded-3"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar-offcanvas" aria-controls="sidebar-offcanvas">
        <i class="bi bi-list fs-4"></i>
    </button>

    <!-- Sidebar / Navigation (Bootstrap Offcanvas) -->
    <aside class="offcanvas offcanvas-start bg-dark text-white p-4 d-flex flex-column shadow-lg" tabindex="-1"
        id="sidebar-offcanvas" aria-labelledby="offcanvasLabel" data-bs-scroll="true">

        <!-- Offcanvas Header (Mobile only) -->
        <div class="offcanvas-header d-lg-none p-0 pb-3 mb-4 border-bottom border-secondary-subtle">
            <h5 class="offcanvas-title fs-4 fw-bolder text-rental-primary" id="offcanvasLabel">CAR<span class="text-white">RENT</span></h5>
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="mb-5 p-2 d-none d-lg-block">
            <h1 class="fs-4 fw-bolder tracking-tight text-rental-primary">CAR<span class="text-white">RENT</span></h1>
            <p class="text-sm text-secondary mb-0">Management Suite</p>
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
                        <span class="ms-auto badge rounded-pill text-bg-success">12 New</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="customer.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                        <i class="bi bi-people-fill fs-5"></i>
                        <span>Customers</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="reports.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                        <i class="bi bi-graph-up fs-5"></i>
                        <span>Reports & Analytics</span>
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
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-secondary-subtle bg-opacity-10 text-white">
                <div class="rounded-circle bg-rental-primary d-flex align-items-center justify-content-center text-white fw-bold" style="width: 40px; height: 40px;">SD</div>
                <div>
                    <p class="mb-0 fw-semibold fs-6">Senior Dev</p>
                    <p class="mb-0 small text-secondary">Admin</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <!-- The margin-left is applied via CSS media query to this class. Removed w-100 to prevent layout conflicts. -->
    <main class="main-content flex-grow-1 p-4 p-md-5">

        <!-- Header / Action Button -->
        <header class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-5">
            <div class="mb-3 mb-md-0">
                <h2 class="fs-2 fw-bold text-dark">System Dashboard</h2>
                <p class="text-sm text-secondary">Welcome back, Senior Dev. Here is the operational overview for November 2025.</p>
            </div>
        </header>

        <!-- 1. Key Metrics Cards -->
        <!-- Adding some extra sections to ensure the page scrolls to test the fixed sidebar -->
        <div style="height: 10vh; visibility: hidden;">Spacer</div>
        <section class="row g-4 mb-5">

            <!-- Card 1: Total Fleet -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card p-4 rounded-4 shadow-sm border-start border-5 border-rental-primary h-100 metric-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-sm text-secondary mb-1 fw-medium">Total Fleet Size</p>
                            <p class="fs-1 fw-bold text-dark mb-0">210</p>
                        </div>
                        <div class="p-3 rounded-5 bg-rental-primary bg-opacity-10 text-rental-primary">
                            <i class="bi bi-car-front-fill fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Currently Rented -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card p-4 rounded-4 shadow-sm border-start border-5 border-info h-100 metric-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-sm text-secondary mb-1 fw-medium">Currently Rented</p>
                            <p class="fs-1 fw-bold text-dark mb-0">168</p>
                            <span class="small text-info fw-semibold mt-1 d-block">+14% last month</span>
                        </div>
                        <div class="p-3 rounded-5 bg-info bg-opacity-10 text-info">
                            <i class="bi bi-arrow-repeat fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: Available Cars -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card p-4 rounded-4 shadow-sm border-start border-5 border-success h-100 metric-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-sm text-secondary mb-1 fw-medium">Available Today</p>
                            <h3 class="fs-1 fw-bold text-dark mb-0">42</h3>
                            <span class="small text-secondary mt-2 d-block">Ready for booking</span>
                        </div>
                        <div class="p-3 rounded-5 bg-success bg-opacity-10 text-success">
                            <i class="bi bi-check-circle-fill fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4: Monthly Revenue Target -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card p-4 rounded-4 shadow-sm border-start border-5 border-warning h-100 metric-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-sm text-secondary mb-1 fw-medium">Monthly Revenue</p>
                            <h3 class="fw-bold text-dark mb-0" style="font-size: 1.9rem;">$124,500</h3>
                            <span class="small text-danger fw-semibold mt-4 d-block">-2.1% from target</span>
                        </div>
                        <div class="p-3 rounded-5 bg-warning bg-opacity-10 text-warning">
                            <i class="bi bi-currency-dollar fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. Charts and Utilization Section -->
        <section class="row g-4 mb-5">
            <!-- Utilization Chart (Placeholder) -->
            <div class="col-12 col-lg-8">
                <div class="card p-4 rounded-4 shadow-sm h-100">
                    <h3 class="fs-5 fw-semibold text-dark mb-4">Fleet Utilization Rate (Last 30 Days)</h3>
                    <div class="d-flex align-items-center justify-content-center text-secondary bg-light border border-dashed rounded-3" style="min-height: 300px;">
                        [Placeholder for Area Chart showing 80% average utilization]
                    </div>
                    <div class="mt-4 d-flex justify-content-between small text-secondary">
                        <p class="mb-0">Average Rate: <span class="fw-bold text-info">80%</span></p>
                        <p class="mb-0">Highest Utilization: <span class="fw-bold">95%</span></p>
                    </div>
                </div>
            </div>

            <!-- Booking Channel Split (Placeholder) -->
            <div class="col-12 col-lg-4">
                <div class="card p-4 rounded-4 shadow-sm h-100">
                    <h3 class="fs-5 fw-semibold text-dark mb-4">Bookings by Channel</h3>
                    <div class="d-flex align-items-center justify-content-center text-secondary bg-light border border-dashed rounded-3" style="min-height: 300px;">
                        [Placeholder for Pie Chart showing Channel Split]
                    </div>
                    <ul class="list-unstyled mt-4 small space-y-2">
                        <li class="d-flex justify-content-between align-items-center text-dark py-1">Online Direct: <span class="fw-semibold text-rental-primary">45%</span></li>
                        <li class="d-flex justify-content-between align-items-center text-dark py-1">Third-Party Aggregator: <span class="fw-semibold text-info">30%</span></li>
                        <li class="d-flex justify-content-between align-items-center text-dark py-1">Phone/Walk-in: <span class="fw-semibold text-success">25%</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 3. Recent Bookings Table -->
        <section class="card p-4 rounded-4 shadow-sm">
            <h3 class="fs-5 fw-semibold text-dark mb-4">Recent & Upcoming Bookings</h3>
            <div class="table-responsive rounded-3 border border-light">
                <table class="table table-striped table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Booking ID</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Customer</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Vehicle</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Status</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Pickup/Dropoff</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">#BK9001</td>
                            <td class="px-3 py-3 text-sm text-secondary">Jane Smith</td>
                            <td class="px-3 py-3 text-sm text-secondary">BMW 3 Series</td>
                            <td class="px-3 py-3">
                                <span class="badge text-bg-warning text-uppercase py-1 px-2 rounded-pill fw-semibold">Upcoming</span>
                            </td>
                            <td class="px-3 py-3 text-sm text-secondary">11/7 - 11/10</td>
                            <td class="px-3 py-3 text-sm fw-semibold text-rental-primary">$450.00</td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">#BK9000</td>
                            <td class="px-3 py-3 text-sm text-secondary">Michael Lee</td>
                            <td class="px-3 py-3 text-sm text-secondary">Toyota Corolla</td>
                            <td class="px-3 py-3">
                                <span class="badge text-bg-success text-uppercase py-1 px-2 rounded-pill fw-semibold">Completed</span>
                            </td>
                            <td class="px-3 py-3 text-sm text-secondary">11/1 - 11/5</td>
                            <td class="px-3 py-3 text-sm fw-semibold text-rental-primary">$280.00</td>
                        </tr>
                        <!-- Row 3 -->
                        <tr>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">#BK8999</td>
                            <td class="px-3 py-3 text-sm text-secondary">Alex Johnson</td>a
                            <td class="px-3 py-3 text-sm text-secondary">Ford Transit Van</td>
                            <td class="px-3 py-3">
                                <span class="badge text-bg-danger text-uppercase py-1 px-2 rounded-pill fw-semibold">Overdue</span>
                            </td>
                            <td class="px-3 py-3 text-sm text-secondary">10/25 - 11/6</td>
                            <td class="px-3 py-3 text-sm fw-semibold text-rental-primary">$920.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4 d-flex justify-content-end">
                <button class="btn btn-link text-decoration-none text-rental-primary fw-medium transition hover-bg-rental-dark p-2 rounded-3">View All Bookings &rarr;</button>
            </div>
        </section>

    </main>

    <!-- Load Bootstrap 5 JS Bundle -->
<?php 
    require_once 'footer.php';
?>