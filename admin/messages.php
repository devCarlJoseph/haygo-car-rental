<?php
require_once 'header.php';
require_once '../config/config.php';

session_start();

$query = "SELECT * FROM messages";
$messages = $conn->query($query);


if (!isset($_SESSION['admin_id'])) {
    header('Location: log_in.php');
    exit();
}
?>

<!-- Main Wrapper -->
<div id="wrapper">

    <!-- ASIDE: Left-Side Sidebar/Offcanvas -->
    <!-- Note: Offcanvas is hidden by default and becomes fixed/visible on desktop via CSS -->
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
                    <a href="customer.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark">
                        <i class="bi bi-people-fill fs-5"></i>
                        <span>Customers</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="messages.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark" style="background-color: #F8E1DA !important; color: #84635B !important">
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
    <!-- END ASIDE -->


    <!-- Main Content Wrapper (Now using class="main-content" for desktop push) -->
    <div class="main-content flex-grow-1">
        <main class="container py-5">
            <header class="mb-5 p-4 rounded-4 shadow-sm d-flex align-items-center" style="background-color: #84635B; color: #F8E1DA">

                <!-- Menu Toggle Button (Visible only on mobile/tablet) -->
                <!-- Uses the new bg-rental-primary class -->
                <button class="btn btn-lg me-3 text-white shadow-sm mobile-menu-toggle d-lg-none bg-rental-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar-offcanvas" aria-controls="sidebar-offcanvas">
                    <i class="bi bi-list"></i>
                </button>

                <div>
                    <h1 class="display-5 mb-0 fw-medium">User Inquiry Message</h1>
                </div>
            </header>

            <!-- Messages Grid -->
            <div class="row row-cols-1 row-cols-md-2 g-4" id="message-container">

                <!-- --- Message Card Template (Alice Johnson) --- -->
                <div class="col">
                    <?php while ($m_data = $messages->fetch_assoc()) : ?>
                        <div class="card archive-card">
                            <div class="card-header bg-white border-bottom-0 pb-2">
                                <h5 class="card-title fw-bold text-body-emphasis mb-1">
                                    <i class="bi bi-person-circle me-2 text-rental-primary"></i><?php echo $m_data['fullname']; ?>
                                </h5>
                            </div>
                            <div class="card-body pt-2">
                                <!-- Contact Details & Date -->
                                <ul class="list-unstyled small mb-4 row gx-2">
                                    <li class="col-12 d-flex align-items-center mb-1 text-dark">
                                        <i class="bi bi-telephone-fill me-2" style="color: #84635B;"></i>
                                        <span class="contact-detail"><?php echo $m_data['contact_num'] ?></span>
                                    </li>
                                    <li class="col-12 d-flex align-items-center text-muted">
                                        <i class="bi bi-calendar-event-fill me-2" style="color: #84635B;"></i>
                                        <span class="fw-medium"><?php echo $m_data['created_date']; ?></span>
                                    </li>
                                </ul>

                                <!-- Message Content -->
                                <p class="fw-bold mb-2 text-rental-primary" style="border-top: 1px solid #dee2e6; padding-top: 1rem;">Inquiry Message:</p>
                                <div class="message-content">
                                    <?php echo $m_data['inquiry']; ?>
                                </div>

                                <!-- Actions Section -->
                                <div class="mt-4 pt-3 border-top d-flex justify-content-end">
                                    <a href="../actions/delete_messages.php?id=<?php echo $m_data['id']; ?>"
                                        class="btn btn-sm shadow-sm"
                                        style="background-color: #84635B; color: #F8E1DA"
                                        onclick="return confirm('Are you sure you want to delete this inquiry?');">
                                        <i class="bi bi-trash me-1"></i> Delete Inquiry
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <!-- End Messages Grid -->
        </main>
    </div>
</div>

<?php
require_once 'footer.php';
?>