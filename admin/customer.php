<?php
require_once 'header.php';
require_once '../config/config.php';

$query = "SELECT * FROM customers ORDER BY id DESC";
$customers = $conn->query($query);

session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: log_in.php');
    exit();
}


?>

<!-- Mobile Menu Toggle Button (Visible on Small Screens) -->
<button class="d-lg-none position-fixed top-0 end-0 mt-3 me-3 z-3 btn bg-rental-primary text-white shadow-lg p-2 rounded-3"
    type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar-offcanvas" aria-controls="sidebar-offcanvas">
    <i class="bi bi-list fs-4"></i>
</button>

<!-- Sidebar / Navigation (Bootstrap Offcanvas) -->
<aside class="offcanvas offcanvas-start p-4 d-flex flex-column shadow-lg" style="background-color: #84635B; color: #F8E1DA" tabindex="-1"
    id="sidebar-offcanvas" aria-labelledby="offcanvasLabel" data-bs-scroll="true">

    <div class="mb-5 p-2 d-none d-lg-block">
        <h1 class="fs-4 fw-bolder tracking-tight text-center">HAYGO</h1>
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
                <a href="customer.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark" style="background-color: #F8E1DA !important; color: #84635B !important">
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

    <!-- Header / Action Button -->
    <header class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-5">
        <div class="mb-3 mb-md-0">
            <h2 class="fs-2 fw-bold text-dark">Customer Directory</h2>
        </div>
    </header>

    <!-- Search and Filter Controls -->
    <section class="mb-4">
        <div class="row g-3">
            <div class="col-12 col-md-12">
                <div class="input-group rounded-3 shadow-sm bg-white">
                    <span class="input-group-text bg-white border-0 rounded-start-3"><i class="bi bi-search text-secondary"></i></span>
                    <input type="text" class="form-control border-0 focus-ring-0" placeholder="Search by name, email, or phone number..."
                        aria-label="Search customer">
                </div>
            </div>
        </div>
    </section>

    <!-- Customer List Table -->
    <section class="card p-4 rounded-4 shadow-sm">
        <div class="table-responsive rounded-3 border border-light">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">ID</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Customer Name</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Email</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Phone</th>
                        <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Date of Birth</th>
                        <th scope="col" class="px-3 py-3 text-center text-xs text-secondary text-uppercase">Action</th>
                    </tr>
                </thead>
                <tbody id="customer-table-body">
                    <?php while ($c_data = $customers->fetch_assoc()): ?>
                        <tr>
                            <td class="px-3 py-3 text-sm fw-medium text-dark"><?php echo $c_data['id']; ?></td>
                            <td class="px-3 py-3 text-sm fw-medium text-dark"><?php echo $c_data['customer_name']; ?></td>
                            <td class="px-3 py-3 text-sm text-secondary"><?php echo $c_data['email']; ?></td>
                            <td class="px-3 py-3 text-sm text-secondary"><?php echo $c_data['phone']; ?></td>
                            <td class="px-3 py-3 text-sm text-secondary"><?php echo $c_data['date_of_birth']; ?></td>
                            <td class="text-center">
                                <button class="btn btn-sm me-1 editBtn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editCustomerModal"
                                    data-id="<?= $c_data['id']; ?>"
                                    data-name="<?= $c_data['customer_name']; ?>"
                                    data-email="<?= $c_data['email']; ?>"
                                    data-phone="<?= $c_data['phone']; ?>"
                                    data-dob="<?= $c_data['date_of_birth']; ?>">
                                    <i class="ri-edit-line me-1"></i>Edit
                                </button>

                                <button class="btn btn-sm btn-outline-danger deleteBtn" onclick="confirmDelete(<?php echo $c_data['id']; ?>)">
                                    <i class="ri-delete-bin-line me-1"></i>Delete
                                </button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <nav aria-label="Customer list pagination" class="mt-4 d-flex justify-content-center">
            <ul class="pagination mb-0 rounded-3 shadow-sm">
                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="page-item active" aria-current="page"><a class="page-link bg-rental-primary border-rental-primary" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
            </ul>
        </nav>

    </section>

</main>

<!-- Edit Customer Modal -->
<div class="modal fade" id="editCustomerModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <form id="edit-customer-form" action="../actions/update_customer.php" method="post">
                <div class="modal-header border-bottom rounded-top-4" style="background-color: #84635B;">
                    <h5 class="modal-title fw-bold text-white" id="editCustomerModalLabel">
                        Edit Customer: <span id="modal-customer-name"></span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <!-- Hidden ID field -->
                    <input type="hidden" id="edit-customer-id" name="id">

                    <div class="mb-3">
                        <label for="edit-customer-name" class="form-label fw-semibold">Customer Name</label>
                        <input type="text" class="form-control rounded-3" id="edit-customer-name" name="customer_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-customer-email" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control rounded-3" id="edit-customer-email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-customer-phone" class="form-label fw-semibold">Phone</label>
                        <input type="text" class="form-control rounded-3" id="edit-customer-phone" name="phone" required>
                    </div>
                    <div class="mb-4">
                        <label for="edit-customer-dob" class="form-label fw-semibold">Date of Birth</label>
                        <input type="date" class="form-control rounded-3" id="edit-customer-dob" name="date_of_birth" required>
                    </div>

                    <!-- Save button will be inside the footer -->
                </div>
                <div class="modal-footer d-flex justify-content-between border-top">
                    <span class="text-sm text-secondary">Customer ID: <span id="modal-customer-id-footer"></span></span>
                    <div>
                        <button type="button" class="btn btn-outline-secondary rounded-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn bg-rental-primary text-white hover-bg-rental-dark rounded-3" name="save">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php
require_once 'footer.php'
?>