<?php 

    require_once 'header.php'

?>

    <!-- Header Section -->
    <div class="header-bg">
        <div class="header-overlay"></div>
        <div class="position-relative">
            <div class="container text-center">
                <h1 class="display-4 fw-bold haygo-about">Contact Hay Go Car Rental</h1>
                <p class="lead haygo-primary fw-medium">
                    We're ready to help you with your booking, query, or feedback. Your journey is our priority!
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <main class="container mb-5">
        <div class="row justify-content-center">
            
            <!-- Contact Form Card -->
            <div class="col-lg-8 c-card">
                <div class="card contact-card">
                    <div class="card-body ">
                        <h2 class="send card-title haygo-accent h3 mb-4 fw-bold text-center">Send Us a Message</h2>
                        
                        <form action="actions/messages.php" id="contactForm" class="needs-validation" method="post">
                            
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="contactName" class="form-label fw-semibold haygo-primary-text">Your Full Name</label>
                                <input type="text" name="fullname" class="form-control" id="contactName" placeholder="e.g., Alex Johnson" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>

                            <!-- Phone Number Field -->
                            <div class="mb-3">
                                <label for="contactPhone" class="form-label fw-semibold haygo-primary-text">Phone Number</label>
                                <input type="tel" name="phone_num" class="form-control" id="contactPhone" placeholder="e.g., (123) 456-7890" required pattern="^[\d\s\-\(\)]+$">
                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                            </div>

                            <!-- Message Field -->
                            <div class="mb-4">
                                <label for="contactMessage" class="form-label fw-semibold haygo-primary-text">Message / Inquiry Details</label>
                                <textarea class="form-control" name="message" id="contactMessage" rows="5" placeholder="Tell us about your booking needs or concern..." required></textarea>
                                <div class="invalid-feedback">A message is required.</div>
                            </div>
                            
                            <div class="d-grid">
                                <button id="submitButton" name="send" type="submit" class="btn btn-submit btn-lg">
                                    Send Message </i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Information Panel -->
            <div class="col-lg-4 mt-4 mt-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h3 class="card-title haygo-secondary h5 mb-4 fw-bold">Quick Contact Info</h3>
                        
                        <ul class="list-unstyled space-y-3">
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-telephone-fill me-3 fs-4 haygo-accent"></i>
                                <div>
                                    <p class="mb-0 fw-bold">24/7 Support Line</p>
                                    <p class="text-muted mb-0">+63 922 519 1453</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-envelope-fill me-3 fs-4 haygo-accent"></i>
                                <div>
                                    <p class="mb-0 fw-bold">Email Reservations</p>
                                    <p class="text-muted mb-0">bookings@haygo.com</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-geo-alt-fill me-3 fs-4 haygo-accent"></i>
                                <div>
                                    <p class="mb-0 fw-bold">Headquarters</p>
                                    <p class="text-muted mb-0">101 Global Drive, City Center, CA 90210</p>
                                </div>
                            </li>
                        </ul>

                        <!-- Map Location Placeholder -->
                        <h3 class="card-title h5 mb-3 fw-bold pt-3 border-top haygo-primary-text">Our Location</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1761106535546!6m8!1m7!1sZpq1DFgy6YCTaDBRDGBHZg!2m2!1d10.25297982431566!2d123.948622894924!3f143.1792595311604!4f-25.169059014031617!5f0.7820865974627469" width="600" height="550" class="img-fluid rounded shadow-sm w-100 mb-2" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
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