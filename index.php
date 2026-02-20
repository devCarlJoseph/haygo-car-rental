<?php
require_once 'header.php';
require_once 'config/config.php'; // Correct path for DB connection

// Fetch vehicles for the home page (using mysqli)
$query = "SELECT * FROM vehicles LIMIT 12";
$result = mysqli_query($conn, $query);
$vehicles = mysqli_fetch_all($result, MYSQLI_ASSOC);

session_start();

unset($_SESSION['pickupDate'], $_SESSION['dropoffDate']);

?>

<main class="bg-white">
    <!-- Hero Section: Full width with centered text -->
    <section id="hero-section">
        <div class="container text-center">
            <h1 class="display-3 fw-bold text-white mb-3" style="letter-spacing: -0.02em;">RENT A CAR IN <span class="haygo-primary">CEBU</span></h1>
            <p class="fs-4 text-white opacity-75">Book cars – pay zero commission!</p>
        </div>
    </section>

    <!-- Tabbed Search Module -->
    <div class="container search-tabs-container">
        <ul class="nav nav-tabs search-nav-tabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-all">All Cars</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-monthly">Monthly</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-weekly">Weekly</button>
            </li>
        </ul>
        <div class="search-module-card tab-content">
            <div class="tab-pane fade show active" id="tab-all">
                <form action="actions/search_fleet.php" method="post" class="row g-3 align-items-end">
                    <div class="col-md-3">
                        <label class="form-label small fw-bold text-muted">Makes</label>
                        <select class="form-select border-0 bg-light" name="make">
                            <option selected>Select Makes</option>
                            <option>Toyota</option>
                            <option>Hyundai</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label small fw-bold text-muted">Models</label>
                        <select class="form-select border-0 bg-light" name="model">
                            <option selected>Select Models</option>
                            <option>Accent</option>
                            <option>Raize</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label small fw-bold text-muted">Types</label>
                        <select class="form-select border-0 bg-light" name="type">
                            <option selected>Select Types</option>
                            <option>Sedan</option>
                            <option>SUV</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-search l-button w-100 py-2">
                            <i class="ri-search-line"></i> Search
                        </button>
                    </div>
                </form>
            </div>
            <!-- Monthly and Weekly tabs would have similar forms -->
        </div>
    </div>

    <!-- Why Choose Us -->
    <section class="py-5 mt-5">
        <div class="container text-center py-5">
            <h2 class="fw-bold haygo-dark mb-5">Why Choose Us?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4">
                        <div class="icon-box bg-danger bg-opacity-10 text-danger rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 70px; height: 70px;">
                            <i class="ri-price-tag-3-line fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Best Price</h4>
                        <p class="text-muted small">We offer competitive local rates with absolute transparency in pricing.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4">
                        <div class="icon-box bg-info bg-opacity-10 text-info rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 70px; height: 70px;">
                            <i class="ri-shield-check-line fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Trusted by Thousands</h4>
                        <p class="text-muted small">Over 5,000 satisfied customers across Cebu and the Visayas region.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4">
                        <div class="icon-box bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 70px; height: 70px;">
                            <i class="ri-customer-service-2-line fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">24/7 Personal Service</h4>
                        <p class="text-muted small">Local support that treats you like family, every step of the way.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Cars -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="fw-bold haygo-dark text-center mb-4">Featured Cars</h2>
            <div class="d-flex justify-content-center gap-3 mb-5">
                <button class="btn btn-white border rounded-pill px-4 py-2 small fw-bold active">Economy</button>
                <button class="btn btn-white border rounded-pill px-4 py-2 small fw-bold">Luxury</button>
                <button class="btn btn-white border rounded-pill px-4 py-2 small fw-bold">Sedan</button>
            </div>
            
            <div class="row g-4">
                <?php 
                // Using a slice of vehicles for Featured section
                $featured = array_slice($vehicles, 0, 4);
                if (count($featured) > 0):
                    foreach ($featured as $car): 
                    ?>
                    <div class="col-lg-6">
                        <div class="featured-car-card">
                            <div class="featured-car-img" style="background-image: url('uploads/vehicles/<?php echo $car['car_image']; ?>');"></div>
                            <div class="featured-car-body">
                                <h5 class="fw-bold mb-3"><?php echo $car['car_name']; ?></h5>
                                <div class="mb-3 small text-muted">
                                    <div class="mb-1"><span class="fw-bold text-dark">Day:</span> <?php echo number_format($car['car_price'], 0); ?> OMR</div>
                                    <div class="mb-1"><span class="fw-bold text-dark">Weekly:</span> <?php echo number_format($car['car_price'] * 6, 0); ?> OMR</div>
                                    <div class="mb-1"><span class="fw-bold text-dark">Monthly:</span> <?php echo number_format($car['car_price'] * 20, 0); ?> OMR</div>
                                </div>
                                <div class="d-flex gap-3 small border-top pt-2">
                                    <span><i class="ri-gas-station-line me-1"></i> Petrol</span>
                                    <span><i class="ri-settings-3-line me-1"></i> Automatic</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; 
                else: ?>
                    <div class="col-12 text-center text-muted">No featured vehicles available at the moment.</div>
                <?php endif; ?>
            </div>
            <div class="text-center mt-4">
                <a href="fleet.php" class="btn btn-link text-haygo-primary fw-bold text-decoration-none">View All <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>

    <!-- Browse By Type -->
    <section class="py-5">
        <div class="container py-5">
            <h2 class="fw-bold haygo-dark text-center mb-5">Browse By Type</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <a href="fleet.php?type=Hatchback" class="type-grid-item">
                        <img src="src/assets/images/cars/Hatchback/Honda Jazz.webp" alt="Compact">
                        <div class="type-overlay">
                            <h4>Hatchback</h4>
                            <span>15 Vehicles</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="fleet.php?type=Sedan" class="type-grid-item">
                        <img src="src/assets/images/cars/Sedan/Toyota Camry(2023).avif" alt="Sedan">
                        <div class="type-overlay">
                            <h4>Sedan</h4>
                            <span>22 Vehicles</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="fleet.php?type=SUV" class="type-grid-item">
                        <img src="src/assets/images/cars/SUV/Honda CR-V.jpg" alt="SUV">
                        <div class="type-overlay">
                            <h4>SUV</h4>
                            <span>18 Vehicles</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="fleet.php?type=Luxury" class="type-grid-item">
                        <img src="src/assets/images/cars/Sedan/Mercedes-Benz C-Class (2023).jpg" alt="Luxury">
                        <div class="type-overlay">
                            <h4>Luxury</h4>
                            <span>8 Vehicles</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="fleet.php?type=Van" class="type-grid-item">
                        <img src="src/assets/images/cars/Hatchback/Volkswagen Golf.jpg" alt="Vans">
                        <div class="type-overlay">
                            <h4>Vans & Others</h4>
                            <span>12 Vehicles</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Cars (Standard Grid) -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="fw-bold haygo-dark text-center mb-5">Popular Cars</h2>
            <div class="row g-4">
                <?php 
                $popular = array_slice($vehicles, 4, 4);
                foreach ($popular as $car): 
                ?>
                    <div class="col-md-3 car-item">
                        <div class="card car-card h-100">
                             <div class="car-image-container" style="background-image: url('uploads/vehicles/<?php echo $car['car_image']; ?>'); background-size: cover; background-position: center; height: 160px;"></div>
                             <div class="card-body p-3">
                                 <h6 class="fw-bold mb-2"><?php echo $car['car_name']; ?></h6>
                                 <div class="small text-muted mb-3">
                                     <div>Day: <?php echo number_format($car['car_price'], 0); ?> OMR</div>
                                     <div>Weekly: <?php echo number_format($car['car_price'] * 6, 0); ?> OMR</div>
                                     <div>Monthly: <?php echo number_format($car['car_price'] * 20, 0); ?> OMR</div>
                                 </div>
                                 <div class="d-flex gap-2 small opacity-75">
                                     <span><i class="ri-gas-station-line"></i></span>
                                     <span><i class="ri-settings-3-line"></i></span>
                                 </div>
                             </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Duo Banner -->
    <section class="py-5">
        <div class="container">
            <div class="row g-0 cta-banner-two">
                <div class="col-md-6">
                    <div class="cta-promo cta-promo-gold">
                        <div class="mb-4 d-flex align-items-center"><i class="ri-car-line fs-1 me-3"></i></div>
                        <h2 class="fw-bold mb-3">Best Prices</h2>
                        <p class="mb-4">Get the absolute lowest rates in the market with our price-match guarantee.</p>
                        <a href="fleet.php" class="btn btn-dark rounded-pill px-4 fw-bold">Check Prices</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cta-promo cta-promo-blue">
                        <div class="mb-4 d-flex align-items-center"><i class="ri-steering-2-line fs-1 me-3"></i></div>
                        <h2 class="fw-bold mb-3 text-white">Find The Perfect Car For Rent</h2>
                        <p class="mb-4 text-white opacity-75">From compact commuters to luxury voyagers, we have it all.</p>
                        <a href="fleet.php" class="btn btn-light rounded-pill px-4 fw-bold">Rent Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once 'footer.php';
?>
