<?php
require_once 'header.php';
require_once '../config/config.php';

session_start();

$query = "SELECT * FROM vehicles ORDER BY id DESC";
$result = $conn->query($query);

if (!isset($_SESSION['admin_id'])) {
    header('Location: log_in.php');
    exit();
}




?>

<body class="min-vh-100">

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
                    <a href="dashboard.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                        <i class="bi bi-speedometer2 fs-5"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <!-- Fleet Management is the active page -->
                    <a href="fleet.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 bg-rental-primary text-white fw-semibold shadow-sm active-nav">
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
                <h2 class="fs-2 fw-bold text-dark">Vehicle Inventory Catalog</h2>
                <p class="text-sm text-secondary">Manage rental specifications, pricing, and details for all available vehicles.</p>
            </div>
            <!-- Add New Vehicle Button (Updated to trigger modal) -->
            <button class="btn btn-lg bg-rental-primary text-white hover-bg-rental-dark d-flex align-items-center gap-2 shadow-lg border-0 rounded-3"
                data-bs-toggle="modal" data-bs-target="#addVehicleModal">
                <i class="bi bi-plus fs-5"></i>
                <span>Add New Vehicle</span>
            </button>
        </header>

        <!-- Search and Filter Bar -->
        <section class="d-flex flex-column flex-lg-row gap-3 mb-5">
            <!-- Search Input -->
            <div class="input-group flex-grow-1">
                <span class="input-group-text bg-white border-end-0 rounded-start-3" id="basic-addon1"><i class="bi bi-search text-secondary"></i></span>
                <input type="text" id="search-input" class="form-control border-start-0 rounded-end-3 p-2" placeholder="Search by Car Name or Description..." aria-label="Search">
            </div>

            <!-- Type Filter (Only filter remaining) -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle rounded-3 border-secondary-subtle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="type-filter-btn">
                    Type: All
                </button>
                <ul class="dropdown-menu" id="type-filter-menu">
                    <li><a class="dropdown-item filter-link" href="#" data-filter-type="type" data-filter-value="All">All Types</a></li>
                    <li><a class="dropdown-item filter-link" href="#" data-filter-type="type" data-filter-value="Sedan">Sedan</a></li>
                    <li><a class="dropdown-item filter-link" href="#" data-filter-type="type" data-filter-value="SUV">SUV</a></li>
                    <li><a class="dropdown-item filter-link" href="#" data-filter-type="type" data-filter-value="Van">Van</a></li>
                    <li><a class="dropdown-item filter-link" href="#" data-filter-type="type" data-filter-value="Luxury">Luxury</a></li>
                    <li><a class="dropdown-item filter-link" href="#" data-filter-type="type" data-filter-value="Electric">Electric</a></li>
                </ul>
            </div>
        </section>


        <!-- Vehicle List Table -->
        <section class="card p-4 rounded-4 shadow-sm">
            <h3 class="fs-5 fw-semibold text-dark mb-4">Current Vehicle Inventory</h3>
            <div class="table-responsive rounded-3 border border-light">
                <table class="table table-striped table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Vechile Id</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Image</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Car Name & Description</th>
                            <th scope="col" class="px-3 py-3 text-center text-xs text-secondary text-uppercase">Type</th>
                            <th scope="col" class="px-3 py-3 text-center text-xs text-secondary text-uppercase">Transmission</th>
                            <th scope="col" class="px-3 py-3 text-center text-xs text-secondary text-uppercase">Specs</th>
                            <th scope="col" class="px-3 py-3 text-start text-xs text-secondary text-uppercase">Daily Price</th>
                            <th scope="col" class="px-3 py-3 text-center text-xs text-secondary text-uppercase">Action</th>
                        </tr>
                    </thead>

                    <tbody id="vehicleTableBody">
                        <?php while ($data = $result->fetch_assoc()): ?>
                            <tr>
                                <td class="text-center"><?php echo $data['id']; ?></td>
                                <td>
                                    <img src="../uploads/vehicles/<?php echo $data['car_image']; ?>"
                                        alt="Car Image"
                                        style="width: 70px; height: 50px; object-fit: contain; border-radius: 6px;">
                                </td>

                                <td>
                                    <strong><?php echo $data['car_name']; ?></strong><br>
                                    <span class="text-muted small"><?php echo $data['car_description']; ?></span>
                                </td>

                                <td class="text-center"><?php echo $data['car_type']; ?></td>

                                <td class="text-center">
                                    <?php echo $data['transmission']; ?>
                                </td>

                                <td class="text-center">
                                    <?php echo $data['seats']; ?> Seats •
                                    <?php echo $data['bags']; ?> Bags
                                </td>

                                <td class="text-center">₱<?php echo number_format($data['car_price'], 2); ?></td>

                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-primary editBtn"
                                        data-id="<?php echo $data['id']; ?>"
                                        data-name="<?php echo $data['car_name']; ?>"
                                        data-desc="<?php echo $data['car_description']; ?>"
                                        data-type="<?php echo $data['car_type']; ?>"
                                        data-trans="<?php echo $data['transmission']; ?>"
                                        data-seats="<?php echo $data['seats']; ?>"
                                        data-bags="<?php echo $data['bags']; ?>"
                                        data-price="<?php echo $data['car_price']; ?>"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editVehicleModal">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="confirmDelete(<?php echo $data['id']; ?>)">Delete</button>

                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination/View All Footer -->
            <div class="mt-4 d-flex justify-content-between align-items-center">
                <span id="showing-count" class="text-sm text-secondary">Showing vehicles</span>
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

    <!-- Modal for Edit -->

    <div class="modal fade" id="editVehicleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="../actions/update_vehicle.php" method="post">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title fw-semibold">Edit Vehicle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body row g-3">

                        <input type="hidden" id="edit_id" name="id">

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Car Name</label>
                            <input type="text" id="edit_name" name="car_name" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Vehicle Type</label>
                            <select id="edit_type" name="car_type" class="form-select" required>
                                <option value="">Choose Type</option>
                                <option value="Sedan">Sedan</option>
                                <option value="SUV">SUV/Crossover</option>
                                <option value="Van">Van/MPV</option>
                                <option value="Hatchback">Hatchback</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Description</label>
                            <input type="text" id="edit_desc" name="car_description" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Transmission</label>
                            <select id="edit_trans" name="transmission" class="form-select" required>
                                <option value="Automatic">Automatic</option>
                                <option value="Manual">Manual</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label fw-semibold">Seats</label>
                            <input type="number" id="edit_seats" name="seats" class="form-control" required>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label fw-semibold">Bags</label>
                            <input type="number" id="edit_bags" name="bags" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Daily Price</label>
                            <div class="input-group">
                                <span class="input-group-text">₱</span>
                                <input type="number" id="edit_price" name="car_price" class="form-control" required step="0.01">
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="update">Update Vehicle</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <!-- Modal for Adding New Vehicle -->
    <div class="modal fade" id="addVehicleModal" tabindex="-1" aria-labelledby="addVehicleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-4 shadow-lg">
                <div class="modal-header bg-dark text-white rounded-top-4">
                    <h5 class="modal-title fw-bold" id="addVehicleModalLabel">Add New Vehicle to Catalog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../actions/new_vehicle.php" id="addNewVehicleForm" method="post" enctype="multipart/form-data">
                    <div class="modal-body p-4">
                        <div class="row g-3">

                            <div class="col-12">
                                <label for="carName" class="form-label fw-semibold">Car Name</label>
                                <input type="text" class="form-control rounded-3" id="carName" name="car_name" required placeholder="Make, Model, and Year">
                            </div>

                            <div class="col-12">
                                <label for="carDescription" class="form-label fw-semibold">Car Description</label>
                                <input type="text" class="form-control rounded-3" id="carDescription" name="car_description" required placeholder="A short, catchy description for renters.">
                            </div>

                            <div class="col-md-6">
                                <label for="seats" class="form-label fw-semibold">Number of Seats</label>
                                <input type="number" class="form-control rounded-3" id="seats" name="seats" required min="1" max="15" value="5">
                            </div>

                            <div class="col-md-6">
                                <label for="bags" class="form-label fw-semibold">Number of Bags</label>
                                <input type="number" class="form-control rounded-3" id="bags" name="bags" required min="0" max="10" value="2">
                            </div>

                            <div class="col-md-6">
                                <label for="transmission" class="form-label fw-semibold">Transmission</label>
                                <select id="transmission" class="form-select rounded-3" name="transmission" required>
                                    <option value="Automatic">Automatic</option>
                                    <option value="Manual">Manual</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="carType" class="form-label fw-semibold">Vehicle Type</label>
                                <select id="carType" class="form-select rounded-3" name="car_type" required>
                                    <option value="">Choose Type</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="SUV">SUV/Crossover</option>
                                    <option value="Van">Van/MPV</option>
                                    <option value="Hatchback">Hatchback</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="carPrice" class="form-label fw-semibold">Daily Rental Price</label>
                                <div class="input-group">
                                    <span class="input-group-text rounded-start-3">₱</span>
                                    <input type="number" class="form-control rounded-end-3" id="carPrice" name="car_price" required min="1" step="0.01" placeholder="e.g., 2500.00">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="carImage" class="form-label fw-semibold">Car Image</label>
                                <input type="file" class="form-control rounded-3" id="carImage" name="car_image" required>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-secondary rounded-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="submit" class="btn bg-rental-primary text-white hover-bg-rental-dark rounded-3">
                            <i class="bi bi-save me-2"></i>Save Vehicle
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <?php
    require_once 'footer.php';
    ?>