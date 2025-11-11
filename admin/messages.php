<?php
require_once 'header.php';
?>

<!-- Main Wrapper -->
<div id="wrapper">

    <!-- ASIDE: Left-Side Sidebar/Offcanvas -->
    <!-- Note: Offcanvas is hidden by default and becomes fixed/visible on desktop via CSS -->
    <aside id="sidebar-offcanvas" class="offcanvas offcanvas-start bg-dark text-white p-4 d-flex flex-column shadow-lg" tabindex="-1"
        aria-labelledby="offcanvasLabel" data-bs-scroll="true">

        <div class="offcanvas-header mb-3 p-2 d-flex justify-content-between align-items-center">
            <h1 class="fs-4 fw-bolder tracking-tight text-rental-primary" id="offcanvasLabel">HAYGO</h1>
            <!-- Close button for mobile (hidden on desktop via CSS) -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>


        <nav class="flex-grow-1">
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <!-- Active Link uses the new bg-rental-primary variable -->
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
                    <a href="messages.php" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 active-nav text-white fw-semibold shadow-sm">
                        <i class="bi bi-chat-dots-fill fs-5"></i>
                        <span>Messages</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- User/Settings Section -->
        <div class="mt-auto pt-4 border-top border-secondary-subtle">
            <a href="#" class="nav-link d-flex align-items-center gap-3 p-3 rounded-3 text-white transition hover-bg-rental-dark mb-2">
                <i class="bi bi-gear-fill fs-5"></i>
                <span>Settings</span>
            </a>
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-secondary bg-opacity-10 text-white">
                <img src="https://placehold.co/40x40/AB8B7D/ffffff?text=AD" alt="Admin Profile" style="width: 40px; height: 40px; object-fit: cover" class="rounded-circle">
                <div>
                    <p class="mb-0 fw-semibold fs-6">Admin User</p>
                    <p class="mb-0 small text-secondary">Administrator</p>
                </div>
            </div>
        </div>
    </aside>
    <!-- END ASIDE -->


    <!-- Main Content Wrapper (Now using class="main-content" for desktop push) -->
    <div class="main-content flex-grow-1">
        <main class="container py-5">
            <header class="mb-5 p-4 rounded-4 shadow-sm bg-white d-flex align-items-center">

                <!-- Menu Toggle Button (Visible only on mobile/tablet) -->
                <!-- Uses the new bg-rental-primary class -->
                <button class="btn btn-lg me-3 text-white shadow-sm mobile-menu-toggle d-lg-none bg-rental-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar-offcanvas" aria-controls="sidebar-offcanvas">
                    <i class="bi bi-list"></i>
                </button>

                <div>
                    <h1 class="display-6 fw-extrabold text-dark mb-0">User Inquiry Archive</h1>
                    <p class="lead text-secondary mb-0 small">A centralized, **read-only** log of customer messages.</p>
                </div>
            </header>

            <!-- Messages Grid -->
            <div class="row row-cols-1 row-cols-md-2 g-4" id="message-container">

                <!-- --- Message Card Template (Alice Johnson) --- -->
                <div class="col">
                    <div class="card archive-card">
                        <div class="card-header bg-white border-bottom-0 pb-2">
                            <h5 class="card-title fw-bold text-body-emphasis mb-1">
                                <i class="bi bi-person-circle me-2 text-rental-primary"></i>Alice Johnson
                            </h5>
                        </div>
                        <div class="card-body pt-2">
                            <!-- Contact Details & Date -->
                            <ul class="list-unstyled small mb-4 row gx-2">
                                <li class="col-12 d-flex align-items-center mb-1 text-dark">
                                    <i class="bi bi-telephone-fill me-2 text-success"></i>
                                    <span class="contact-detail">+1 (555) 123-4567</span>
                                </li>
                                <li class="col-12 d-flex align-items-center text-muted">
                                    <i class="bi bi-calendar-event-fill me-2 text-warning"></i>
                                    <span class="fw-medium">Received: 2025-10-25 10:30:00</span>
                                </li>
                            </ul>

                            <!-- Message Content -->
                            <p class="fw-bold mb-2 text-rental-primary" style="border-top: 1px solid #dee2e6; padding-top: 1rem;">Inquiry Message:</p>
                            <div class="message-content">
                                Dear Admin Team,

                                I am very interested in booking the Sedan Model X for a week starting next month, specifically from November 10th to November 17th. Could you please confirm its availability for those exact dates and provide the total cost, including all taxes and fees?

                                Thank you for your quick assistance.

                                Best regards,
                                Alice Johnson
                            </div>

                            <!-- Actions Section -->
                            <div class="mt-4 pt-3 border-top d-flex justify-content-end">
                                <button
                                    class="btn btn-sm btn-danger shadow-sm"
                                    onclick="deleteInquiry(this)">
                                    <i class="bi bi-trash me-1"></i> Delete Inquiry
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- --- Message Card Template (Bob Smith) --- -->
                <div class="col">
                    <div class="card archive-card">
                        <div class="card-header bg-white border-bottom-0 pb-2">
                            <h5 class="card-title fw-bold text-body-emphasis mb-1">
                                <i class="bi bi-person-circle me-2 text-rental-primary"></i>Bob Smith
                            </h5>
                        </div>
                        <div class="card-body pt-2">
                            <!-- Contact Details & Date -->
                            <ul class="list-unstyled small mb-4 row gx-2">
                                <li class="col-12 d-flex align-items-center mb-1 text-dark">
                                    <i class="bi bi-telephone-fill me-2 text-success"></i>
                                    <span class="contact-detail">+1 (555) 987-6543</span>
                                </li>
                                <li class="col-12 d-flex align-items-center text-muted">
                                    <i class="bi bi-calendar-event-fill me-2 text-warning"></i>
                                    <span class="fw-medium">Received: 2025-10-24 15:45:00</span>
                                </li>
                            </ul>

                            <!-- Message Content -->
                            <p class="fw-bold mb-2 text-rental-primary" style="border-top: 1px solid #dee2e6; padding-top: 1rem;">Inquiry Message:</p>
                            <div class="message-content">
                                Hello,

                                I was charged a late fee of $50, but I returned the vehicle exactly on time (14:00 on 2025-10-24). Please review the return log and correct this charge on my invoice #9876. I look forward to your prompt resolution.

                                Thanks,
                                Bob Smith
                            </div>

                            <!-- Actions Section -->
                            <div class="mt-4 pt-3 border-top d-flex justify-content-end">
                                <button
                                    class="btn btn-sm btn-danger shadow-sm"
                                    onclick="deleteInquiry(this)">
                                    <i class="bi bi-trash me-1"></i> Delete Inquiry
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- --- Message Card Template (Charlie Brown) --- -->
                <div class="col">
                    <div class="card archive-card">
                        <div class="card-header bg-white border-bottom-0 pb-2">
                            <h5 class="card-title fw-bold text-body-emphasis mb-1">
                                <i class="bi bi-person-circle me-2 text-rental-primary"></i>Charlie Brown
                            </h5>
                        </div>
                        <div class="card-body pt-2">
                            <!-- Contact Details & Date -->
                            <ul class="list-unstyled small mb-4 row gx-2">
                                <li class="col-12 d-flex align-items-center mb-1 text-dark">
                                    <i class="bi bi-telephone-fill me-2 text-success"></i>
                                    <span class="contact-detail">+1 (555) 333-1111</span>
                                </li>
                                <li class="col-12 d-flex align-items-center text-muted">
                                    <i class="bi bi-calendar-event-fill me-2 text-warning"></i>
                                    <span class="fw-medium">Received: 2025-10-23 09:12:00</span>
                                </li>
                            </ul>

                            <!-- Message Content -->
                            <p class="fw-bold mb-2 text-rental-primary" style="border-top: 1px solid #dee2e6; padding-top: 1rem;">Inquiry Message:</p>
                            <div class="message-content">
                                We require a fleet of 5 vehicles for 6 months for a corporate project. What is the best long-term rental discount you can offer for this volume? Please send a quote to my corporate email address.
                            </div>

                            <!-- Actions Section -->
                            <div class="mt-4 pt-3 border-top d-flex justify-content-end">
                                <button
                                    class="btn btn-sm btn-danger shadow-sm"
                                    onclick="deleteInquiry(this)">
                                    <i class="bi bi-trash me-1"></i> Delete Inquiry
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- --- Message Card Template (Emma Davis) --- -->
                <div class="col">
                    <div class="card archive-card">
                        <div class="card-header bg-white border-bottom-0 pb-2">
                            <h5 class="card-title fw-bold text-body-emphasis mb-1">
                                <i class="bi bi-person-circle me-2 text-rental-primary"></i>Emma Davis
                            </h5>
                        </div>
                        <div class="card-body pt-2">
                            <!-- Contact Details & Date -->
                            <ul class="list-unstyled small mb-4 row gx-2">
                                <li class="col-12 d-flex align-items-center mb-1 text-dark">
                                    <i class="bi bi-telephone-fill me-2 text-success"></i>
                                    <span class="contact-detail">+1 (555) 777-2222</span>
                                </li>
                                <li class="col-12 d-flex align-items-center text-muted">
                                    <i class="bi bi-calendar-event-fill me-2 text-warning"></i>
                                    <span class="fw-medium">Received: 2025-10-25 11:15:00</span>
                                </li>
                            </ul>

                            <!-- Message Content -->
                            <p class="fw-bold mb-2 text-rental-primary" style="border-top: 1px solid #dee2e6; padding-top: 1rem;">Inquiry Message:</p>
                            <div class="message-content">
                                I need clarification on the comprehensive insurance options for the SUV class vehicle. Which one covers accidental damage completely, and does it include roadside assistance for flat tires? I'm booking for my family trip next weekend.
                            </div>

                            <!-- Actions Section -->
                            <div class="mt-4 pt-3 border-top d-flex justify-content-end">
                                <button
                                    class="btn btn-sm btn-danger shadow-sm"
                                    onclick="deleteInquiry(this)">
                                    <i class="bi bi-trash me-1"></i> Delete Inquiry
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Messages Grid -->

            <footer class="mt-5 pt-4 border-top text-center text-muted small">
                Archive access log. All contact information is for record keeping only.
            </footer>
        </main>
    </div>
</div>

<!-- Load Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<!-- Custom JS for Simulation -->
<script>
    /**
     * Simulates the deletion of an inquiry card by removing the element
     * and displaying a temporary success message.
     * @param {HTMLElement} buttonElement - The button element that was clicked.
     */
    function deleteInquiry(buttonElement) {
        // Find the closest parent column element (which holds the card)
        const col = buttonElement.closest('.col');
        // Safely get the sender name
        const senderElement = col.querySelector('.card-title');
        const sender = senderElement ? senderElement.textContent.trim() : 'Unknown Sender';

        // Create a temporary success message (using alert but as a Bootstrap dismissal box)
        const successMessage = document.createElement('div');
        successMessage.className = 'alert alert-success alert-dismissible fade show w-100 mt-3';
        successMessage.setAttribute('role', 'alert');
        successMessage.innerHTML = `
                Inquiry from <strong>${sender}</strong> has been successfully archived/deleted.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;

        // Insert the success message right before the main message grid
        const mainHeader = document.querySelector('header');
        if (mainHeader && mainHeader.parentNode) {
            mainHeader.parentNode.insertBefore(successMessage, mainHeader.nextSibling);
        }

        // Remove the card's column element to simulate deletion
        if (col) {
            col.remove();
        }

        console.log(`Simulated deletion of inquiry from: ${sender}`);
    }
</script>
</body>

</html>