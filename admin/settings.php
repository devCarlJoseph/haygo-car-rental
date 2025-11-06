<?php 
    require_once 'header.php';
?>

    <button class="d-lg-none position-fixed top-0 end-0 mt-3 me-3 z-3 btn bg-rental-primary text-white shadow-lg p-2 rounded-3"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar-offcanvas" aria-controls="sidebar-offcanvas">
        <i class="bi bi-list fs-4"></i>
    </button>

    <aside class="offcanvas offcanvas-start bg-dark text-white p-4 d-flex flex-column shadow-lg" tabindex="-1"
        id="sidebar-offcanvas" aria-labelledby="offcanvasLabel" data-bs-scroll="true">

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
                    <a href="dashboard.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
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
                    <!-- Reports is the active page -->
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

    <main class="main-content flex-grow-1 p-4 p-md-5">

        <!-- Header -->
        <header class="mb-5">
            <h2 class="fs-2 fw-bold text-dark">System Settings</h2>
        </header>

        <!-- PASSWORD CHANGE -->
        <section class="card p-4 rounded-4 shadow-sm mb-5">
            <h4 class="fw-semibold mb-4 text-dark">Change Password</h4>

            <form class="row g-4">
                <div class="col-md-6">
                    <label class="form-label fw-medium text-secondary">Current Password</label>
                    <input type="password" class="form-control p-3 rounded-3">
                </div>

                <div class="col-md-6"></div>

                <div class="col-md-6">
                    <label class="form-label fw-medium text-secondary">New Password</label>
                    <input type="password" class="form-control p-3 rounded-3">
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-medium text-secondary">Confirm Password</label>
                    <input type="password" class="form-control p-3 rounded-3">
                </div>

                <div class="col-12 text-end">
                    <button class="btn bg-dark text-white px-4 py-2 rounded-3">Update Password</button>
                </div>
            </form>
        </section>
       
        <section class="card p-4 rounded-4 shadow-sm mt-5 border-0 bg-light">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="fw-semibold text-dark mb-1">Sign Out</h5>
                    <p class="text-secondary small mb-0">You will be logged out of the dashboard.</p>
                </div>
                <a href="log_in.php" class="btn btn-danger px-4 py-2 rounded-3">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
            </div>
        </section>

    </main>

<?php 
    require_once 'footer.php';
?>