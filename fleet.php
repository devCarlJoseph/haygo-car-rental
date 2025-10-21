<?php 
    require_once 'header.php';
?>

    <main>
        <!-- Fleet Hero Section -->
        <section class="hero-fleet">
            <div class="container text-center">
                <h1 class="display-4 fw-bolder mb-3 text-white">Our Modern & Reliable Fleet</h1>
                <p class="lead text-light opacity-75">
                    Showing cars available from <span id="displayStartDate"></span> to <span id="displayEndDate"></span>.
                </p>
            </div>
        </section>

        <!-- Main Content: Filters and Car Listings -->
        <section class="py-5">
            <div class="container">
                <div class="row g-4">
                    
                    <!-- Sidebar Column (Refine Filters only) -->
                    <div class="col-lg-3 col-md-4">
                        
                        <!-- Refine Search Filters -->
                        <div class="filter-options card shadow-sm p-4 bg-white">
                            <h3 class="fs-5 fw-bold text-haygo-dark mb-3 border-bottom pb-2">Refine Search</h3>
                            
                            <!-- Search Bar -->
                            <div class="mb-4">
                                <label for="searchName" class="form-label small fw-semibold">Search by Name</label>
                                <input type="text" class="form-control form-control-sm rounded-pill" placeholder="e.g., Vios, Rush" id="searchName">
                            </div>
                            
                            <!-- Price Range Slider -->
                            <div class="mb-4">
                                <h4 class="fs-6 fw-semibold text-haygo-dark mb-3">Max Price (per day)</h4>
                                <input type="range" class="form-range" min="1000" max="5000" step="100" value="5000" id="priceRange">
                                <div class="small text-center"><span class="fw-bold text-haygo-blue" id="maxPriceDisplay">₱ 5,000</span></div>
                            </div>

                            <!-- Reset Button -->
                            <button class="btn btn-sm btn-outline-secondary rounded-pill mt-2" onclick="resetFilters()">Reset Filters</button>
                        </div>
                    </div>
                    
                    <!-- Car Listings Grid -->
                    <div class="col-lg-9 col-md-8">
                        
                        <!-- Quick Filter Row (Primary way to filter by type) -->
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <!-- Note: 'active' class is added/removed by JS -->
                            <button class="btn btn-outline-secondary btn-sm filter-quick-btn" data-type="All" onclick="quickFilter('All')">All Types</button>
                            <button class="btn btn-outline-secondary btn-sm filter-quick-btn" data-type="Sedan" onclick="quickFilter('Sedan')">Sedan</button>
                            <button class="btn btn-outline-secondary btn-sm filter-quick-btn" data-type="SUV" onclick="quickFilter('SUV')">SUV / Crossover</button>
                            <button class="btn btn-outline-secondary btn-sm filter-quick-btn" data-type="Van" onclick="quickFilter('Van')">Van / MPV</button>
                            <button class="btn btn-outline-secondary btn-sm filter-quick-btn" data-type="Hatchback" onclick="quickFilter('Hatchback')">Hatchback</button>
                        </div>

                        <!-- Car count display -->
                        <h2 class="fs-4 fw-bold text-haygo-dark mb-4">Showing <span id="carCountDisplay">0</span> Available Vehicles</h2>
                        
                        <!-- Listing container where cars will be injected -->
                        <div class="row g-4" id="car-listings">
                            <!-- Car cards will be injected here by JavaScript -->
                        </div>
                        
                        <!-- No results message -->
                        <div id="no-results-message" class="text-center py-5" style="display: none;">
                            <i class="ri-alert-line display-4 text-secondary mb-3"></i>
                            <p class="lead text-secondary">No vehicles match your current filter criteria.</p>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" onclick="resetFilters()">Clear Filters</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Booking Confirmation Modal (Multi-Step) -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-xl">
                <div class="modal-header bg-haygo-blue text-white rounded-top-xl">
                    <h5 class="modal-title fw-bold" id="bookingModalLabel">Step 1 of 3: Booking Summary</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body p-4 text-haygo-dark">
                    <!-- Step Indicator -->
                    <div class="progress mb-4" role="progressbar" aria-label="Booking Progress" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" id="bookingProgressBar" style="width: 33%"></div>
                    </div>
                    
                    <div id="booking-steps">
                        
                        <!-- Step 1: Summary -->
                        <div class="booking-step" data-step="1">
                            <h4 class="fw-bold mb-3 text-haygo-blue">1. Rental Overview</h4>
                            <p class="lead fw-medium mb-3">You are about to book:</p>
                            <h4 class="fw-bolder text-haygo-dark" id="modalCarName"></h4>
                            
                            <hr>

                            <dl class="row small mb-0">
                                <dt class="col-sm-5 fw-bold">Pick-up Date:</dt>
                                <dd class="col-sm-7" id="modalStartDate"></dd>

                                <dt class="col-sm-5 fw-bold">Return Date:</dt>
                                <dd class="col-sm-7" id="modalEndDate"></dd>
                                
                                <dt class="col-sm-5 fw-bold">Rental Duration:</dt>
                                <dd class="col-sm-7"><span id="modalRentalDays"></span> Days</dd>
                            </dl>
                            
                            <hr class="mt-3">
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fs-5 fw-bold text-haygo-blue">TOTAL PRICE:</span>
                                <span class="fs-4 fw-bolder text-haygo-dark" id="modalTotalPrice"></span>
                            </div>
                        </div>
                        
                        <!-- Step 2: Customer Details & Document Upload (COMBINED STEP) -->
                        <div class="booking-step" data-step="2" style="display:none;">
                            <h4 class="fw-bold mb-3 text-haygo-blue">2. Enter Details & Upload License</h4>
                            <p class="text-secondary mb-4">Provide your information and upload a clear image of your valid Driver's License or Government ID.</p>
                            
                            <hr class="my-4">
                            
                            <!-- Contact Information Section -->
                            <h5 class="fw-bold mb-3 text-haygo-dark">Contact & ID Information</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label small fw-semibold">Full Name *</label>
                                    <input type="text" class="form-control rounded" id="fullName" placeholder="Juan Dela Cruz">
                                    <div class="invalid-feedback">Full name is required.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label small fw-semibold">Email Address *</label>
                                    <input type="email" class="form-control rounded" id="email" placeholder="example@mail.com">
                                    <div class="invalid-feedback">A valid email is required.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label small fw-semibold">Phone Number *</label>
                                    <input type="tel" class="form-control rounded" id="phone" placeholder="09XX-XXX-XXXX">
                                    <div class="invalid-feedback">Phone number is required.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="licenseNumber" class="form-label small fw-semibold">Driver's License / ID Number *</label>
                                    <input type="text" class="form-control rounded" id="licenseNumber" placeholder="DL-XXX-XXX">
                                    <div class="invalid-feedback">License/ID number is required.</div>
                                endo fof the loop
                                </div>
                            </div>

                            <hr class="my-4">

                            <!-- Document Upload Section -->
                            <h5 class="fw-bold mb-3 text-haygo-dark">Driver's License Image Upload</h5>
                            <div class="mb-3">
                                <label for="licenseImageFile" class="form-label small fw-semibold">Upload License Image *</label>
                                <input class="form-control rounded" type="file" id="licenseImageFile" accept="image/png, image/jpeg">
                                <div class="invalid-feedback">A license image is required for verification.</div>
                            </div>
                            
                            <p class="small text-muted mb-2">Image Preview (Simulated Upload):</p>
                            <div class="border rounded-lg p-2 text-center bg-light">
                                <img id="licenseImagePreview" src="" alt="License Image Preview" 
                                    style="display:none; max-width: 100%; height: 200px; object-fit: contain;">
                                <p id="licenseImagePlaceholder" class="text-secondary small py-5">
                                    <i class="ri-file-image-line display-6 d-block mb-2"></i>
                                    No image selected.
                                </p>
                            </div>

                            <p class="small text-muted mt-3 mb-0">* All fields are mandatory to proceed.</p>
                        </div>

                        <!-- Step 3: Confirmation & Payment (Moved from Step 4) -->
                        <div class="booking-step" data-step="3" style="display:none;">
                            <h4 class="fw-bold mb-3 text-haygo-blue">3. Final Review & Complete</h4>
                            <p class="text-secondary mb-4">Review your details and acknowledge the payment instruction to complete.</p>
                            
                            <div class="card p-3 mb-4 bg-light">
                                <h5 class="fw-bold border-bottom pb-2 mb-2">Booking Summary</h5>
                                <dl class="row small mb-0">
                                    <dt class="col-sm-4">Car:</dt>
                                    <dd class="col-sm-8 fw-bold text-haygo-dark" id="reviewCarName"></dd>
                                    <dt class="col-sm-4">Dates:</dt>
                                    <dd class="col-sm-8" id="reviewDates"></dd>
                                    <dt class="col-sm-4">Renter:</dt>
                                    <dd class="col-sm-8" id="reviewFullName"></dd>
                                    <dt class="col-sm-4">Contact:</dt>
                                    <dd class="col-sm-8"><span id="reviewEmail"></span> / <span id="reviewPhone"></span></dd>
                                    <dt class="col-sm-4 text-success fw-bold">FINAL TOTAL:</dt>
                                    <dd class="col-sm-8 fs-5 fw-bolder text-success" id="reviewTotal"></dd>
                                </dl>
                            </div>
                            
                            <h5 class="fw-bold mb-3 text-haygo-dark">Payment Instruction (Simulated)</h5>
                            <div class="alert alert-warning small">
                                <i class="ri-alert-line me-2"></i>
                                **NOTE:** This is a simulation. You will pay the full amount upon pick-up. By clicking 'Complete Booking', you confirm this reservation.
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="acknowledged" id="paymentInstruction" required>
                                <label class="form-check-label small" for="paymentInstruction">
                                    I acknowledge that the **₱ <span id="reviewTotalSmall"></span>** will be settled at the time of vehicle collection.
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                
                <!-- Footer and Navigation Buttons -->
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" id="prevStepBtn" style="display:none;" onclick="prevStep()">
                        <i class="ri-arrow-left-line me-1"></i> Previous
                    </button>
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal" id="cancelBtn">Cancel</button>
                    <button type="button" class="btn btn-lime rounded-pill" id="nextStepBtn" onclick="nextStep()">Proceed to Details & Upload <i class="ri-arrow-right-line ms-1"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Generic Message Modal (for success/error messages) -->
    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-xl">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="messageModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <p id="messageModalBody" class="lead"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php 
    require_once 'footer.php';
?>