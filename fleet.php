<?php
require_once 'header.php';
require_once 'config/config.php';

$query = "SELECT * FROM vehicles";
$result = $conn->query($query);

session_start();

$pickup_date = $_SESSION['pickupDate'] ?? '';
$dropoff_date = $_SESSION['dropoffDate'] ?? '';
$rental_days = 0;

if ($pickup_date && $dropoff_date) {
    $startDate = new DateTime($pickup_date);
    $endDate = new DateTime($dropoff_date);
    $interval = $startDate->diff($endDate);
    $rental_days = $interval->days;
    if ($rental_days < 1) $rental_days = 1;
}

?>

<main>
    <section class="hero-fleet">
        <div class="container text-center">
            <h1 class="display-4 fw-bolder mb-3 haygo-primary-text pt-5">Our Modern & Reliable Fleet</h1>
            <p class="lead haygo-primary-text">
                Showing cars available from <span id="displayStartDate"></span> to <span id="displayEndDate"></span>.
            </p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-4">

                    <div class="filter-options card shadow-sm p-4 bg-white">
                        <h3 class="fs-5 fw-bold text-haygo-dark mb-3 border-bottom pb-2">Refine Search</h3>

                        <div class="mb-4">
                            <label for="searchName" class="form-label small fw-semibold">Search by Name</label>
                            <input type="text" class="form-control form-control-sm rounded-pill" placeholder="e.g., Vios, Rush" id="searchName">
                        </div>

                        <div class="mb-4">
                            <h4 class="fs-6 fw-semibold text-haygo-dark mb-3">Max Price (per day)</h4>
                            <input type="range" class="form-range" min="1000" max="5000" step="100" value="5000" id="priceRange">
                            <div class="small text-center"><span class="fw-bold text-haygo-blue" id="maxPriceDisplay">₱ 5,000</span></div>
                        </div>
                        <button class="btn btn-sm f-button rounded-pill mt-2" onclick="resetFilters()">Reset Filters</button>
                    </div>
                </div>

                <!-- Car Listings -->
                <div class="col-lg-9 col-md-8">

                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <button class="btn f-button btn-sm filter-quick-btn" data-type="All" onclick="quickFilter('All')">All Types</button>
                        <button class="btn f-button btn-sm filter-quick-btn" data-type="Sedan" onclick="quickFilter('Sedan')">Sedan</button>
                        <button class="btn f-button btn-sm filter-quick-btn" data-type="SUV" onclick="quickFilter('SUV')">SUV / Crossover</button>
                        <button class="btn f-button btn-sm filter-quick-btn" data-type="Van" onclick="quickFilter('Van')">Van / MPV</button>
                        <button class="btn f-button btn-sm filter-quick-btn" data-type="Hatchback" onclick="quickFilter('Hatchback')">Hatchback</button>
                    </div>

                    <h2 class="fs-4 fw-bold text-haygo-dark mb-4">Showing Available Vehicles</h2>


                    <div class="row g-4">
                        <?php while ($data = $result->fetch_assoc()): ?>
                            <div class="col-sm-6 col-lg-4">
                                <div class="card car-card shadow-sm h-100">
                                    <div class="text-center d-flex align-items-center justify-content-center"
                                        style="background-image: url('uploads/vehicles/<?php echo $data['car_image']; ?>'); 
                   background-size: cover; 
                   background-position: center; 
                   height: 200px; 
                   background-repeat: no-repeat;">
                                    </div>
                                    <div class="card-body p-4">
                                        <h5 class="card-title fw-bold text-haygo-dark mb-1"><?php echo $data['car_name']; ?></h5>
                                        <p class="small text-secondary mb-3"><?php echo $data['car_description']; ?></p>

                                        <div class="d-flex justify-content-evenly small mb-3">
                                            <span class="text-nowrap" style="font-size: 1rem; font-weight: 600">
                                                <i class="ri-user-3-line haygo-accent me-1" style="font-size: 1.5rem"></i>
                                                <?php echo $data['seats']; ?>
                                            </span>
                                            <span class="text-nowrap" style="font-size: 1rem; font-weight: 600">
                                                <i class="ri-briefcase-line haygo-accent me-1" style="font-size: 1.5rem"></i>
                                                <?php echo $data['bags']; ?>
                                            </span>
                                            <span class="text-nowrap" style="font-size: 1rem; font-weight: 600">
                                                <i class="ri-gas-station-line haygo-accent me-1" style="font-size: 1.5rem"></i>
                                                <?php echo $data['transmission']; ?>
                                            </span>
                                        </div>

                                        <div class="text-center mt-3">
                                            <h3 class="small fw-normal text-secondary mb-0">Car Price Per Day </h3>
                                            <p class="fs-3 fw-bolder text-haygo-blue mb-0">
                                                ₱<?php echo number_format($data['car_price'], 2); ?>
                                            </p>

                                            <button class="btn fleet-button rounded-pill w-100 mt-2 selectCarBtn"
                                                data-id="<?php echo $data['id']; ?>"
                                                data-name="<?php echo htmlspecialchars($data['car_name'], ENT_QUOTES); ?>"
                                                data-price="<?php echo $data['car_price']; ?>"
                                                data-pickup="<?php echo htmlspecialchars($_POST['pickupDate'] ?? '', ENT_QUOTES); ?>"
                                                data-dropoff="<?php echo htmlspecialchars($_POST['dropoffDate'] ?? '', ENT_QUOTES); ?>">
                                                Select Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>


                    <div id="no-results-message" class="text-center py-5" style="display: none;">
                        <i class="ri-alert-line display-4 text-secondary mb-3"></i>
                        <p class="lead text-secondary">No vehicles match your current filter criteria.</p>
                        <button class="btn btn-sm f-button rounded-pill" onclick="resetFilters()">Clear Filters</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hidden rental days for JS -->
    <span id="rentalDays" data-days="<?php echo $rental_days; ?>" style="display:none;"></span>


</main>


<!-- Booking Confirmation Modal (Multi-Step) -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-xl">
            <form id="bookingForm" action="actions/bookings.php" method="post">
                <div class="modal-header bg-haygo-blue text-white rounded-top-xl">
                    <h5 class="modal-title fw-bold" id="bookingModalLabel">Step 1 of 3: Booking Summary</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body p-4 text-haygo-dark">
                    <div class="progress mb-4" role="progressbar" aria-label="Booking Progress" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" id="bookingProgressBar" style="width: 33%"></div>
                    </div>

                    <div id="booking-steps">
                        <!-- Step 1: Summary -->
                        <div class="booking-step" data-step="1">
                            <h4 class="fw-bold mb-3 text-haygo-blue">1. Rental Overview</h4>
                            <p class="lead fw-medium mb-3">You are about to book:</p>

                            <p id="selectedCarName" class="fw-bold fs-5 mb-1"></p>
                            <p id="selectedCarDescription" class="text-secondary mb-2"></p>

                            <input type="hidden" name="vehicle_id">
                            <input type="hidden" name="daily_price">

                            <hr>
                            <dl class="row small mb-0">
                                <dt class="col-sm-5 fw-bold">Pick-up Date:</dt>
                                <dd class="col-sm-7">
                                    <input style="border: none;" type="text" name="pick_up" id="pick_up" value="<?php echo htmlspecialchars($pickup_date); ?>" readonly>
                                </dd>


                                <dt class="col-sm-5 fw-bold">Return Date:</dt>
                                <dd class="col-sm-7">
                                    <input style="border: none;" type="text" name="drop_off" id="drop_off" value="<?php echo htmlspecialchars($dropoff_date); ?>" readonly>
                                </dd>

                                <dt class="col-sm-5 fw-bold">Rental Duration:</dt>
                                <dd class="col-sm-7"><span>
                                        <?php
                                        if ($rental_days == 1) {
                                            echo $rental_days . ' Day';
                                        } else {
                                            echo $rental_days . ' Days';
                                        }
                                        ?>
                                    </span></dd>
                            </dl>


                            <hr class="mt-3">
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fs-5 fw-bold text-haygo-blue">TOTAL PRICE:</span>
                                <p class="fs-4 fw-bolder text-haygo-dark">₱<span id="totalPriceFooter"> </span></p>
                                <input type="hidden" name="total_price" id="totalPriceInput">
                            </div>
                        </div>

                        <!-- Step 2: Customer Details & Document Upload -->
                        <div class="booking-step" data-step="2" style="display:none;">
                            <h4 class="fw-bold mb-3 text-haygo-blue">2. Enter Details & Upload License</h4>
                            <p class="text-secondary mb-4">Provide your information and upload a clear image of your valid Driver's License or Government ID.</p>

                            <hr class="my-4">

                            <input type="hidden" name="vehicle_id" id="vehicleIdInput">

                            <h5 class="fw-bold mb-3 text-haygo-dark">Contact & ID Information</h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label small fw-semibold">Full Name *</label>
                                    <input type="text" name="fullname" id="fullname" class="form-control rounded" placeholder="Juan Dela Cruz">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label small fw-semibold">Email Address *</label>
                                    <input type="email" name="email" id="email" class="form-control rounded" placeholder="example@mail.com">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label small fw-semibold">Phone Number *</label>
                                    <input type="tel" name="phone_num" id="phone_num" class="form-control rounded" placeholder="09XX-XXX-XXXX">
                                </div>
                                <div class="col-md-6">
                                    <label for="licenseNumber" class="form-label small fw-semibold">Driver's License / ID Number *</label>
                                    <input type="text" name="lic_id" id="lic_id" class="form-control rounded" placeholder="DL-XXX-XXX">
                                </div>
                                <div class="col-md-6">
                                    <label for="date" class="form-label small fw-semibold">Date of Birth *</label>
                                    <input type="date" name="birth" id="birth" class="form-control rounded">
                                </div>
                            </div>


                            <hr class="my-4">

                            <!-- Document Upload Section -->
                            <!-- 
                            <h5 class="fw-bold mb-3 text-haygo-dark">Driver's License Image Upload</h5>
                            <div class="mb-3">
                                <label for="licenseImageFile" class="form-label small fw-semibold">Upload License Image *</label>
                                <input class="form-control rounded" type="file" name="lic_image" accept="image/png, image/jpeg">
                                <div class="invalid-feedback">A license image is required for verification.</div>
                            </div>

                            <p class="small text-muted mb-2">Image Preview:</p>
                            <div class="border rounded-lg p-2 text-center bg-light">
                                <img id="licenseImagePreview" src="" alt="License Image Preview"
                                    style="display:none; max-width: 100%; height: 200px; object-fit: contain;">
                                <p id="licenseImagePlaceholder" class="text-secondary small py-5">
                                    <i class="ri-file-image-line display-6 d-block mb-2"></i>
                                    No image selected.
                                </p>
                            </div>
                                    -->
                        </div>

                        <!-- Step 3: Confirmation & Payment -->
                        <div class="booking-step" data-step="3" style="display:none;">
                            <h4 class="fw-bold mb-3 text-haygo-blue">3. Final Review & Complete</h4>
                            <p class="text-secondary mb-4">Review your details and acknowledge the payment instruction to complete.</p>

                            <div class="card p-3 mb-4 bg-light">
                                <h5 class="fw-bold border-bottom pb-2 mb-2">Booking Summary</h5>
                                <dl class="row small mb-0">
                                    <dt class="col-sm-4">Car:</dt>
                                    <dd class="col-sm-8 fw-bold text-haygo-dark" id="summaryCar"></dd>

                                    <dt class="col-sm-4">Dates:</dt>
                                    <dd class="col-sm-8" id="summaryDates"></dd>

                                    <dt class="col-sm-4">Renter:</dt>
                                    <dd class="col-sm-8" id="summaryRenter"></dd>

                                    <dt class="col-sm-4">Contact:</dt>
                                    <dd class="col-sm-8">
                                        <span id="summaryEmail"></span> / <span id="summaryPhone"></span>
                                    </dd>

                                    <dt class="col-sm-4 text-success fw-bold">FINAL TOTAL:</dt>
                                    <dd class="col-sm-8 fs-5 fw-bolder text-success" id="summaryTotal"></dd>
                                </dl>
                            </div>


                            <h5 class="fw-bold mb-3 text-haygo-dark">Payment Instruction</h5>
                            <div class="alert alert-warning small">
                                <i class="ri-alert-line me-2"></i>
                                You will pay the full amount upon pick-up. By clicking 'Complete Booking', you confirm this reservation. And when you click the 'Cancel', you're booking will be cancelled.
                            </div>
                        </div>

                    </div>
                </div>

                <input type="hidden" name="booking_id" id="bookingIdInput">

                <!-- Footer and Navigation Buttons -->
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn p-btn rounded-pill" id="prevStepBtn" style="display:none;">
                        <i class="ri-arrow-left-line me-1"></i> Previous
                    </button>
                    <button type="button" class="btn c-btn rounded-pill" id="cancelBtn">Cancel</button>
                    <button type="button" class="btn pro-btn" id="nextStepBtn">
                        Proceed to Details & Upload <i class="ri-arrow-right-line ms-1"></i>
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- Generic Message Modal -->
<div class="modal fade" id="messageModal" tabisndex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
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