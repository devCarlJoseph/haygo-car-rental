<?php 
    require_once 'header.php'
?>

    <!-- Header Section -->
    <div class="header-bg">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Contact Hay Go Car Rental</h1>
            <p class="lead text-white-50">
                We're ready to help you with your booking, query, or feedback. Your journey is our priority!
            </p>
        </div>
    </div>

    <!-- Main Content Area -->
    <main class="container mb-5">
        <div class="row justify-content-center">
            
            <!-- Contact Form Card -->
            <div class="col-lg-8">
                <div class="card contact-card">
                    <div class="card-body">
                        <h2 class="card-title h3 mb-4 fw-bold text-center" style="color: var(--haygo-dark);">Send Us a Message</h2>
                        
                        <form id="contactForm" class="needs-validation" novalidate>
                            
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="contactName" class="form-label fw-semibold">Your Full Name</label>
                                <input type="text" class="form-control" id="contactName" placeholder="e.g., Alex Johnson" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>

                            <!-- Phone Number Field -->
                            <div class="mb-3">
                                <label for="contactPhone" class="form-label fw-semibold">Phone Number</label>
                                <input type="tel" class="form-control" id="contactPhone" placeholder="e.g., (123) 456-7890" required pattern="^[\d\s\-\(\)]+$">
                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                            </div>

                            <!-- Message Field -->
                            <div class="mb-4">
                                <label for="contactMessage" class="form-label fw-semibold">Message / Inquiry Details</label>
                                <textarea class="form-control" id="contactMessage" rows="5" placeholder="Tell us about your booking needs or concern..." required></textarea>
                                <div class="invalid-feedback">A message is required.</div>
                            </div>
                            
                            <div class="d-grid">
                                <button id="submitButton" type="submit" class="btn btn-submit btn-lg">
                                    Send Message <i class="bi bi-send-fill ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Information Panel -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h3 class="card-title h5 mb-4 fw-bold" style="color: var(--haygo-teal);">Quick Contact Info</h3>
                        
                        <ul class="list-unstyled space-y-3">
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-telephone-fill me-3 fs-4" style="color: var(--haygo-coral);"></i>
                                <div>
                                    <p class="mb-0 fw-bold">24/7 Support Line</p>
                                    <p class="text-muted mb-0">+1 (555) RENT-A-CAR</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-envelope-fill me-3 fs-4" style="color: var(--haygo-coral);"></i>
                                <div>
                                    <p class="mb-0 fw-bold">Email Reservations</p>
                                    <p class="text-muted mb-0">bookings@haygo.com</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-geo-alt-fill me-3 fs-4" style="color: var(--haygo-coral);"></i>
                                <div>
                                    <p class="mb-0 fw-bold">Headquarters</p>
                                    <p class="text-muted mb-0">101 Global Drive, City Center, CA 90210</p>
                                </div>
                            </li>
                        </ul>

                        <!-- Map Location Placeholder -->
                        <h3 class="card-title h5 mb-3 fw-bold pt-3 border-top" style="color: var(--haygo-teal);">Our Location</h3>
                        <img src="https://placehold.co/400x200/00A38C/FFFFFF?text=Hay+Go+HQ+Location" 
                             alt="Map Placeholder" class="img-fluid rounded shadow-sm w-100 mb-2">
                        
                        <div class="pt-2">
                            <small class="text-muted">Office hours: Mon-Fri, 9am - 5pm.</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Submission Modal -->
    <div class="modal fade" id="submissionModal" tabindex="-1" aria-labelledby="submissionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="submissionModalLabel"><i class="bi bi-check-circle-fill me-2"></i> Inquiry Received!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalBodyText">
                    <!-- Dynamic message goes here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php 
    require_once 'footer.php';
?>