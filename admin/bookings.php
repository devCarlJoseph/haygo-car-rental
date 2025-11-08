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

    <div class="offcanvas-header d-lg-none p-0 pb-3 mb-4 border-bottom border-secondary-subtle">
        <h5 class="offcanvas-title fs-4 fw-bolder text-rental-primary" id="offcanvasLabel">CAR<span class="text-white">RENT</span></h5>
        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="mb-5 p-2 d-none d-lg-block">
        <h1 class="fs-4 fw-bolder tracking-tight text-center text-rental-primary">HAYGO</h1>
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
                <a href="bookings.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 bg-rental-primary text-white fw-semibold shadow-sm active-nav">
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

    <!-- Header / Action Button -->
    <header class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-5">
        <div class="mb-3 mb-md-0">
            <h2 class="fs-2 fw-bold text-dark">Bookings Management</h2>
            <p class="text-sm text-secondary">View, filter, and manage all current and past vehicle reservations.</p>
        </div>
    </header>

    <!-- Search and Filter Bar -->
    <section class="d-flex flex-column flex-lg-row gap-3 mb-5">
        <!-- Search Input -->
        <div class="input-group flex-grow-1">
            <span class="input-group-text bg-white border-end-0 rounded-start-3" id="basic-addon1"><i class="bi bi-search text-secondary"></i></span>
            <input type="text" id="search-input" class="form-control border-start-0 rounded-end-3 p-2" placeholder="Search by Customer Name, Email, or Vehicle Name..." aria-label="Search">
        </div>

        <!-- Status Filter -->
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle rounded-3 border-secondary-subtle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="status-filter-btn">
                Status: All
            </button>
            <ul class="dropdown-menu" id="status-filter-menu">
                <li><a class="dropdown-item filter-link" href="#" data-filter-value="All">All Statuses</a></li>
                <li><a class="dropdown-item filter-link" href="#" data-filter-value="Confirmed">Confirmed</a></li>
                <li><a class="dropdown-item filter-link" href="#" data-filter-value="Pending">Pending</a></li>
                <li><a class="dropdown-item filter-link" href="#" data-filter-value="Completed">Completed</a></li>
                <li><a class="dropdown-item filter-link" href="#" data-filter-value="Cancelled">Cancelled</a></li>
            </ul>
        </div>
    </section>


    <!-- Booking List Table -->
    <section class="card p-4 rounded-4 shadow-sm">
        <h3 class="fs-5 fw-semibold text-dark mb-4">Recent Reservations</h3>
        <div class="table-responsive rounded-3 border border-light">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Booking ID</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Customer Name</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Email</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Vehicle Name</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Booking Date</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Status</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Action</th>
                    </tr>
                </thead>
                <!-- The table body will be populated dynamically by JavaScript -->
                <tbody id="bookingTableBody">
                    <!-- Booking rows will be inserted here -->
                </tbody>
            </table>
        </div>

        <!-- Pagination/View All Footer -->
        <div class="mt-4 d-flex justify-content-between align-items-center">
            <span id="showing-count" class="text-sm text-secondary">Showing 8 bookings</span>
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link bg-rental-primary border-rental-primary" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-rental-primary" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-rental-primary" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </section>

</main>

<!-- Modal for Viewing Booking Details -->
<div class="modal fade" id="viewDetailsModal" tabindex="-1" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-dark text-white rounded-top-4">
                <h5 class="modal-title fw-bold" id="viewDetailsModalLabel">Booking Details #<span id="detail-booking-id"></span></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" id="detail-modal-body">
                <!-- Content will be injected here by JavaScript -->
                <div class="row g-4">
                    <!-- Customer Details -->
                    <div class="col-md-6">
                        <h6 class="text-rental-primary border-bottom pb-2 mb-3"><i class="bi bi-person-circle me-2"></i>Customer Information</h6>
                        <dl class="row small mb-0">
                            <dt class="col-4">Name:</dt>
                            <dd class="col-8 fw-semibold" id="detail-customer-name"></dd>
                            <dt class="col-4">Email:</dt>
                            <dd class="col-8" id="detail-email"></dd>
                            <dt class="col-4">Phone:</dt>
                            <dd class="col-8" id="detail-phone"></dd>
                            <dt class="col-4">License ID:</dt>
                            <dd class="col-8" id="detail-lic-id"></dd>
                        </dl>
                    </div>

                    <!-- Vehicle & Booking Details -->
                    <div class="col-md-6">
                        <h6 class="text-rental-primary border-bottom pb-2 mb-3"><i class="bi bi-car-front-fill me-2"></i>Vehicle & Rental</h6>
                        <dl class="row small mb-0">
                            <dt class="col-4">Vehicle:</dt>
                            <dd class="col-8 fw-semibold" id="detail-vehicle-name"></dd>
                            <dt class="col-4">Booking Date:</dt>
                            <dd class="col-8" id="detail-booking-date"></dd>
                            <dt class="col-4">Status:</dt>
                            <dd class="col-8" id="detail-status"></dd>
                            <dt class="col-4">Total Price:</dt>
                            <dd class="col-8 fw-bold text-success" id="detail-total"></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-outline-secondary rounded-3" data-bs-dismiss="modal">Close</button>
                <!-- Dynamic Action Buttons Container -->
                <div id="modal-action-buttons">
                    <button type="button" id="modal-complete-btn" class="btn btn-success rounded-3 me-2" style="display: none;"><i class="bi bi-check-circle me-2"></i>Mark as Completed</button>
                    <button type="button" id="modal-cancel-btn" class="btn btn-danger rounded-3" style="display: none;"><i class="bi bi-x-circle me-2"></i>Cancel Booking</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>