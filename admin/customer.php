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
            <h5 class="offcanvas-title fs-4 fw-bolder text-rental-primary" id="offcanvasLabel">CAR<span
                    class="text-white">RENT</span></h5>
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="mb-5 p-2 d-none d-lg-block">
            <h1 class="fs-4 fw-bolder tracking-tight text-rental-primary">CAR<span class="text-white">RENT</span></h1>
            <p class="text-sm text-secondary mb-0">Management Suite</p>
        </div>

        <nav class="flex-grow-1">
            <ul class="nav flex-column space-y-2">
                <li class="nav-item mb-2">
                    <a href="dashboard.php"
                        class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                        <i class="bi bi-speedometer2 fs-5"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="fleet.php"
                        class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                        <i class="bi bi-car-front-fill fs-5"></i>
                        <span>Vehicle Catalog</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="bookings.php"
                        class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                        <i class="bi bi-calendar-check fs-5"></i>
                        <span>Bookings</span>
                        <span class="ms-auto badge rounded-pill text-bg-success">12 New</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="customer.php"
                        class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 bg-rental-primary text-white fw-semibold shadow-sm active-nav">
                        <i class="bi bi-people-fill fs-5"></i>
                        <span>Customers</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="reports.php"
                        class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                        <i class="bi bi-graph-up fs-5"></i>
                        <span>Reports & Analytics</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- User/Settings Section -->
        <div class="mt-auto pt-4 border-top border-secondary-subtle">
            <a href="settings.php"
                class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark mb-2">
                <i class="bi bi-gear-fill fs-5"></i>
                <span>Settings</span>
            </a>
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-secondary-subtle bg-opacity-10 text-white">
                <div class="rounded-circle bg-rental-primary d-flex align-items-center justify-content-center text-white fw-bold"
                    style="width: 40px; height: 40px;">SD</div>
                <div>
                    <p class="mb-0 fw-semibold fs-6">Senior Dev</p>
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
                <p class="text-sm text-secondary">Manage all registered clients based on database schema.</p>
            </div>
            <button
                class="btn btn-lg bg-rental-primary text-white hover-bg-rental-dark d-flex align-items-center gap-2 shadow-lg border-0 rounded-3">
                <i class="bi bi-person-plus-fill fs-5"></i>
                <span>Add New Customer</span>
            </button>
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
            <h3 class="fs-6 fw-semibold text-dark mb-4">5 Client Records Found (Database Preview)</h3>
            <div class="table-responsive rounded-3 border border-light">
                <table class="table table-striped table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">ID</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Customer Name</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Email</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Phone</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Date of Birth</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody id="customer-table-body">
                        <!-- Customer 1 -->
                        <tr>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">1001</td>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">Elena Rodriguez</td>
                            <td class="px-3 py-3 text-sm text-secondary">elena.rod@mail.com</td>
                            <td class="px-3 py-3 text-sm text-secondary">(555) 123-4567</td>
                            <td class="px-3 py-3 text-sm text-secondary">1990-04-15</td>
                            <td class="px-3 py-3">
                                <button class="btn btn-sm btn-outline-secondary border-0 text-rental-primary edit-btn" title="Edit Profile"
                                    data-bs-toggle="modal" data-bs-target="#editCustomerModal"
                                    data-id="1001"
                                    data-name="Elena Rodriguez"
                                    data-email="elena.rod@mail.com"
                                    data-phone="(555) 123-4567"
                                    data-dob="1990-04-15">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger border-0 text-danger" title="Delete Record"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Customer 2 -->
                        <tr>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">1002</td>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">Marcus Johnson</td>
                            <td class="px-3 py-3 text-sm text-secondary">marcus.j@corp.net</td>
                            <td class="px-3 py-3 text-sm text-secondary">(555) 987-6543</td>
                            <td class="px-3 py-3 text-sm text-secondary">1985-11-20</td>
                            <td class="px-3 py-3">
                                <button class="btn btn-sm btn-outline-secondary border-0 text-rental-primary edit-btn" title="Edit Profile"
                                    data-bs-toggle="modal" data-bs-target="#editCustomerModal"
                                    data-id="1002"
                                    data-name="Marcus Johnson"
                                    data-email="marcus.j@corp.net"
                                    data-phone="(555) 987-6543"
                                    data-dob="1985-11-20">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger border-0 text-danger" title="Delete Record"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Customer 3 -->
                        <tr>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">1003</td>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">Sarah Chen</td>
                            <td class="px-3 py-3 text-sm text-secondary">sarah.chen@email.com</td>
                            <td class="px-3 py-3 text-sm text-secondary">(555) 345-1234</td>
                            <td class="px-3 py-3 text-sm text-secondary">2000-08-01</td>
                            <td class="px-3 py-3">
                                <button class="btn btn-sm btn-outline-secondary border-0 text-rental-primary edit-btn" title="Edit Profile"
                                    data-bs-toggle="modal" data-bs-target="#editCustomerModal"
                                    data-id="1003"
                                    data-name="Sarah Chen"
                                    data-email="sarah.chen@email.com"
                                    data-phone="(555) 345-1234"
                                    data-dob="2000-08-01">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger border-0 text-danger" title="Delete Record"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Customer 4 -->
                        <tr>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">1004</td>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">David Geller</td>
                            <td class="px-3 py-3 text-sm text-secondary">dgeller@internet.co</td>
                            <td class="px-3 py-3 text-sm text-secondary">(555) 678-9012</td>
                            <td class="px-3 py-3 text-sm text-secondary">1976-02-29</td>
                            <td class="px-3 py-3">
                                <button class="btn btn-sm btn-outline-secondary border-0 text-rental-primary edit-btn" title="Edit Profile"
                                    data-bs-toggle="modal" data-bs-target="#editCustomerModal"
                                    data-id="1004"
                                    data-name="David Geller"
                                    data-email="dgeller@internet.co"
                                    data-phone="(555) 678-9012"
                                    data-dob="1976-02-29">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger border-0 text-danger" title="Delete Record"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Customer 5 -->
                        <tr>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">1005</td>
                            <td class="px-3 py-3 text-sm fw-medium text-dark">Maria Santos</td>
                            <td class="px-3 py-3 text-sm text-secondary">maria.santos@biz.org</td>
                            <td class="px-3 py-3 text-sm text-secondary">(555) 210-5432</td>
                            <td class="px-3 py-3 text-sm text-secondary">1995-12-10</td>
                            <td class="px-3 py-3">
                                <button class="btn btn-sm btn-outline-secondary border-0 text-rental-primary edit-btn" title="Edit Profile"
                                    data-bs-toggle="modal" data-bs-target="#editCustomerModal"
                                    data-id="1005"
                                    data-name="Maria Santos"
                                    data-email="maria.santos@biz.org"
                                    data-phone="(555) 210-5432"
                                    data-dob="1995-12-10">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger border-0 text-danger" title="Delete Record"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
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


        <!-- Extra content to force scrolling -->
        <div style="height: 20vh;" class="d-flex align-items-center justify-content-center text-secondary border border-dashed rounded-3 mt-5">
            [End of Content]
        </div>

    </main>

    <!-- Edit Customer Modal -->
    <div class="modal fade" id="editCustomerModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow-lg">
                <div class="modal-header bg-light border-bottom rounded-top-4">
                    <h5 class="modal-title fw-bold text-rental-primary" id="editCustomerModalLabel">
                        Edit Customer: <span id="modal-customer-name"></span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="edit-customer-form">
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
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between border-top">
                    <span class="text-sm text-secondary">Customer ID: <span id="modal-customer-id-footer"></span></span>
                    <div>
                        <button type="button" class="btn btn-outline-secondary rounded-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn bg-rental-primary text-white hover-bg-rental-dark rounded-3" form="edit-customer-form">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
    require_once 'footer.php'
?>