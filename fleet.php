<?php
session_start();

require_once 'header.php';
require_once 'config/config.php';

$pickup_date = $_SESSION['pickupDate'] ?? '';
$dropoff_date = $_SESSION['dropoffDate'] ?? '';
$loggedCustomer = $_SESSION['user_customer'] ?? null;

$canBook = false;
$rental_days = 0;

if ($pickup_date && $dropoff_date) {
    $canBook = true;

    $startDate = new DateTime($pickup_date);
    $endDate = new DateTime($dropoff_date);
    $interval = $startDate->diff($endDate);
    $rental_days = $interval->days;
    if ($rental_days < 1) $rental_days = 1;
}

$vehicleModel = new Vehicle();
$vehicles = $vehicleModel->getAvailable($pickup_date ?: null, $dropoff_date ?: null);

?>

<main class="bg-white">
    <!-- Slim Hero -->
    <div class="hero-fleet position-relative">
        <div class="container text-center py-5">
        </div>
    </div>

    <!-- Dark Search Bar -->
    <div class="container">
        <div class="fleet-search-bar px-4 py-3">
            <form action="actions/search_fleet.php" method="post" class="row g-2 align-items-center">
                <div class="col-md-2">
                    <select class="form-select" name="condition">
                        <option selected>Condition</option>
                        <option value="economy">Economy</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select" name="make">
                        <option selected>Select Makes</option>
                        <option value="toyota">Toyota</option>
                        <option value="hyundai">Hyundai</option>
                        <option value="mitsubishi">Mitsubishi</option>
                        <option value="mg">MG</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select" name="model">
                        <option selected>Select Models</option>
                        <option value="accent">Accent</option>
                        <option value="montero">Montero</option>
                        <option value="raize">Raize</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select" name="type">
                        <option selected>Select Types</option>
                        <option value="sedan">Sedan</option>
                        <option value="suv">SUV</option>
                        <option value="van">Van</option>
                    </select>
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <a href="#" class="advanced-toggle ms-2"><i class="ri-settings-4-line"></i> Advanced</a>
                </div>
                <div class="col-md-2">
                    <button type="submit" name="search" class="btn btn-search w-100">
                        <i class="ri-search-line"></i> Search
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Content Section -->
    <section class="fleet-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h2 fw-bold haygo-dark mb-1">Cars List</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fleet-breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cars List</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- Results Bar -->
            <div class="fleet-results-bar d-flex justify-content-between align-items-center">
                <div class="small text-muted">
                    Showing 1 – <?php echo count($vehicles); ?> of <?php echo count($vehicles); ?> results
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-2">
                        <span class="small text-muted">Sort by:</span>
                        <select class="form-select form-select-sm border-0 bg-light" style="width: auto;">
                            <option selected>Default</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                    </div>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-light"><i class="ri-grid-fill"></i></button>
                        <button class="btn btn-light"><i class="ri-list-check"></i></button>
                    </div>
                </div>
            </div>

            <!-- Car Grid -->
            <div class="row g-4 mb-5">
                <?php foreach ($vehicles as $data): ?>
                    <div class="col-sm-6 col-lg-4 col-xl-3 car-item" 
                         data-name="<?php echo strtolower($data['car_name']); ?>"
                         data-type="<?php echo $data['car_type']; ?>"
                         data-price="<?php echo $data['car_price']; ?>">
                        <div class="card car-card h-100">
                            <div class="car-image-container" style="background-image: url('uploads/vehicles/<?php echo $data['car_image']; ?>'); background-size: cover; background-position: center; height: 180px;">
                            </div>
                            <div class="card-body p-4">
                                <h5 class="fw-bold haygo-dark mb-3"><?php echo $data['car_name']; ?></h5>
                                
                                <!-- Price List -->
                                <div class="price-list mb-4">
                                    <div class="car-price-item">
                                        <span class="price-label"><?php echo number_format($data['car_price'], 0); ?> OMR</span>
                                        <span class="price-value">/ Day</span>
                                    </div>
                                    <div class="car-price-item">
                                        <span class="price-label"><?php echo number_format($data['car_price'] * 6, 0); ?> OMR</span>
                                        <span class="price-value">/ Week</span>
                                    </div>
                                    <div class="car-price-item">
                                        <span class="price-label"><?php echo number_format($data['car_price'] * 20, 0); ?> OMR</span>
                                        <span class="price-value">/ Month</span>
                                    </div>
                                </div>

                                <!-- Features List -->
                                <div class="d-flex gap-3 small text-muted mb-0 pt-2 border-top">
                                    <div class="d-flex align-items-center">
                                        <i class="ri-gas-station-line me-1"></i> Petrol
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="ri-settings-3-line me-1"></i> Automatic
                                    </div>
                                </div>
                            </div>
                            <!-- Rent Button (Hidden or styled as overlay in ref, but we keep accessible) -->
                             <button class="btn btn-primary w-100 rounded-0 border-0 py-2 selectCarBtn" 
                                     data-id="<?php echo $data['id']; ?>"
                                     data-name="<?php echo htmlspecialchars($data['car_name'], ENT_QUOTES); ?>"
                                     data-price="<?php echo $data['car_price']; ?>"
                                     <?php if (!$canBook) echo 'disabled style="background: #ccc;"'; else echo 'style="background: var(--haygo-primary);"'; ?>>
                                     <?php echo $canBook ? 'Select Car' : 'Select Dates First'; ?>
                             </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-custom justify-content-center">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </li>
                </ul>
            </nav>
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
                                    <input type="text" name="fullname" id="fullname" class="form-control rounded"
                                        value="<?php echo htmlspecialchars($loggedCustomer['name'] ?? ''); ?>"
                                        placeholder="Juan Dela Cruz">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label small fw-semibold">Email Address *</label>
                                    <input type="email" name="email" id="email" class="form-control rounded"
                                        value="<?php echo htmlspecialchars($loggedCustomer['email'] ?? ''); ?>"
                                        placeholder="example@mail.com">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label small fw-semibold">Phone Number *</label>
                                    <input type="tel" name="phone_num" id="phone_num" class="form-control rounded"
                                        value="<?php echo htmlspecialchars($loggedCustomer['phone'] ?? ''); ?>"
                                        placeholder="09XX-XXX-XXXX">
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
