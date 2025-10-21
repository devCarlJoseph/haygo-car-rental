<?php
require_once 'header.php';
?>

<!-- Hero Section (Clean Banner) -->
<section id="hero-section">
    <div class="container text-center">
        <h2 class="display-5 fw-bolder mb-3">
            Your Road Trip Starts in Cebu.
        </h2>
        <p class="lead mb-0 fs-5">
            Search, book, and drive away with confidence across the Visayas.
        </p>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!-- Search Module Container -->
                <div class="search-module p-4 p-md-5 mx-auto" style="max-width: 1000px;">
                    <h2 class="fs-4 fw-bold mb-4 text-center text-haygo-dark">Find Your Cebu Ride</h2>
                    <form id="rentalSearchForm" class="row g-3 g-lg-4 align-items-end">

                        <!-- Location Input -->
                        <div class="col-12 col-md-5 col-lg-4">
                            <label for="pickupLocation" class="form-label fw-semibold text-secondary mb-1">
                                <i class="bi bi-geo-alt text-haygo-accent me-1"></i> Location
                            </label>
                            <input type="text" id="pickupLocation" name="pickupLocation"
                                value="Mactan-Cebu International Airport (CEB)" required
                                class="form-control form-control-lg rounded-3" placeholder="City, airport, or address">
                        </div>

                        <!-- Pick-up Date Input (Trigger for Calendar Modal) -->
                        <div class="col-6 col-md-3 col-lg-3">
                            <label for="pickupDateDisplay" class="form-label fw-semibold text-secondary mb-1">
                                <i class="bi bi-calendar-check text-haygo-accent me-1"></i> Pick-up
                            </label>
                            <input type="text" id="pickupDateDisplay" class="form-control form-control-lg rounded-3"
                                readonly value="" placeholder="Select Date" data-bs-toggle="modal"
                                data-bs-target="#calendarModal" required>
                            <input type="hidden" id="pickupDate" name="pickupDate">
                        </div>

                        <!-- Drop-off Date Input (Trigger for Calendar Modal) -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <label for="dropoffDateDisplay" class="form-label fw-semibold text-secondary mb-1">
                                <i class="bi bi-calendar-x text-haygo-accent me-1"></i> Drop-off
                            </label>
                            <input type="text" id="dropoffDateDisplay" class="form-control form-control-lg rounded-3"
                                readonly value="" placeholder="Select Date" data-bs-toggle="modal"
                                data-bs-target="#calendarModal" required>
                            <input type="hidden" id="dropoffDate" name="dropoffDate">
                        </div>

                        <!-- Search Button (Primary Lime) -->
                        <div class="col-12 col-lg-2">
                            <button type="submit"
                                class="btn btn-haygo-primary btn-lg w-100 fw-semibold rounded-3 shadow-sm">
                                Search
                            </button>
                        </div>

                        <div class="col-12 mt-3">
                            <p id="form-message" class="text-center small mb-0"></p>
                        </div>
                    </form>
                </div>
                <!-- End Search Module Container -->
            </div>
        </div>
    </div>
</section>

<!-- Booking Form Widget -->

<section id="about-us" class="about py-5 py-md-5">
    <div class="container py-5">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h3 class="testing text-uppercase fs-6 fw-bold mb-2 letter-spacing-wide">Why Choose Hay go?</h3>
                <h2 class="display-6 fw-bolder text-haygo-dark mb-4">
                    Your Cebu Adventure Starts with Our <span class="testing">Commitment</span>
                </h2>
                <p class="lead text-secondary">
                    Founded in Cebu, we are dedicated to simplifying island travel. Our mission is to provide more
                    than just a car—we deliver reliability, local knowledge, and transparent service so you can
                    focus on the journey.
                </p>
            </div>
        </div>

        <div class="row g-5 text-center">

            <!-- Commitment Pillar 1: Local Expertise -->
            <div class="col-md-4">
                <div class="c-round icon-box rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center text-white shadow-lg"
                    style="width: 80px; height: 80px;">
                    <i class="fas fa-map-marked-alt fs-3"></i>
                </div>
                <h4 class="fs-5 fw-bold text-haygo-dark mb-2">Deep Local Expertise</h4>
                <p class="text-secondary">
                    We're based in the Visayas, so we know the best routes, the local roads, and the hidden gems.
                    Your trip planner and navigator, all in one.
                </p>
            </div>

            <!-- Commitment Pillar 2: Reliability & Safety -->
            <div class="col-md-4">
                <div class="c-round icon-box rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center text-white shadow-lg"
                    style="width: 80px; height: 80px;">
                    <i class="fas fa-shield-alt fs-3"></i>
                </div>
                <h4 class="fs-5 fw-bold text-haygo-dark mb-2">Guaranteed Reliability</h4>
                <p class="text-secondary">
                    Our entire fleet is regularly inspected and maintained above industry standards to ensure
                    maximum safety and zero breakdowns on your adventure.
                </p>
            </div>

            <!-- Commitment Pillar 3: Transparent Pricing -->
            <div class="col-md-4">
                <div class="c-round icon-box rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center text-white shadow-lg"
                    style="width: 80px; height: 80px;">
                    <i class="fas fa-tags fs-3"></i>
                </div>
                <h4 class="fs-5 fw-bold text-haygo-dark mb-2">Transparent Pricing</h4>
                <p class="text-secondary">
                    What you see is what you pay. We offer straightforward, competitive rates with no hidden fees or
                    surprise charges upon return.
                </p>
            </div>
        </div>

        <div class="text-center mt-5 pt-4">
            <a href="#" class="l-button btn btn-lg fw-bold px-5 py-3 rounded-3">Learn More About Our
                Team</a>
        </div>

    </div>
</section>

<!-- NEW: HOW IT WORKS SECTION -->
<section id="how-it-works" class="py-5 bg-white pt-5">
    <div class="container container-xl py-5 text-center">
        <h2 class="fs-2 fw-bold text-haygo-dark mb-3">Your Journey Simplified</h2>
        <p class="fs-5 text-secondary mb-5">From booking to driving, we make it effortless.</p>

        <div class="row g-5 justify-content-center">
            <!-- Step 1 (Search) -->
            <div class="col-12 col-md-4">
                <div class="icon-box rounded-circle d-inline-flex align-items-center justify-content-center bg-haygo-light text-haygo-accent fw-bold mb-4"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-search fs-3"></i>
                </div>
                <h3 class="fs-5 fw-semibold text-haygo-dark mb-2">1. Find Your Vehicle</h3>
                <p class="text-secondary">Explore thousands of options tailored to your needs and location.</p>
            </div>

            <!-- Step 2 (Secure Booking) -->
            <div class="col-12 col-md-4">
                <div class="icon-box rounded-circle d-inline-flex align-items-center justify-content-center bg-haygo-light text-haygo-accent fw-bold mb-4"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-credit-card-2-back fs-3"></i>
                </div>
                <h3 class="fs-5 fw-semibold text-haygo-dark mb-2">2. Secure Your Booking</h3>
                <p class="text-secondary">Confirm with our secure payment gateway for immediate confirmation.</p>
            </div>

            <!-- Step 3 (Pick Up Keys) -->
            <div class="col-12 col-md-4">
                <div class="icon-box rounded-circle d-inline-flex align-items-center justify-content-center bg-haygo-light text-haygo-accent fw-bold mb-4"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-key fs-3"></i>
                </div>
                <h3 class="fs-5 fw-semibold text-haygo-dark mb-2">3. Grab the Keys</h3>
                <p class="text-secondary">Pick up your sanitized car and enjoy your journey worry-free.</p>
            </div>
        </div>
    </div>
</section>
<!-- END NEW SECTION -->

<!-- CALENDAR MODAL (The requested output design) -->
<div class="modal fade" id="calendarModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg p-3">
            <div class="modal-header border-0 pb-2">
                <h5 class="modal-title fw-bold text-haygo-dark">Select Your Rental Dates</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body pt-0" id="calendar-container">

                <!-- Current Selection Display -->
                <div class="d-flex justify-content-between align-items-center mb-3 p-3 bg-light rounded-3 border">
                    <div>
                        <span class="small text-muted d-block">Pick-up</span>
                        <strong id="selected-pickup-display" class="fs-5 text-haygo-dark">- -</strong>
                    </div>
                    <i class="bi bi-arrow-right text-haygo-accent fs-4 mx-3"></i>
                    <div>
                        <span class="small text-muted d-block">Drop-off</span>
                        <strong id="selected-dropoff-display" class="fs-5 text-haygo-dark">- -</strong>
                    </div>
                    <button id="clearDatesButton"
                        class="btn btn-sm btn-outline-secondary ms-4 rounded-pill">Clear</button>
                </div>

                <!-- Month Navigation -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <button id="prevMonth" class="btn btn-outline-dark rounded-circle me-2"><i
                            class="bi bi-chevron-left"></i></button>
                    <button id="nextMonth" class="btn btn-outline-dark rounded-circle ms-2"><i
                            class="bi bi-chevron-right"></i></button>
                </div>

                <!-- Calendar Grid Wrapper (Two Months for Desktop/Tablet) -->
                <div id="calendar-months-wrapper">
                    <!-- Calendar 1 will be rendered here -->
                </div>
            </div>

            <div class="modal-footer border-0 pt-0">
                <button id="confirmDatesButton" type="button"
                    class="btn btn-haygo-primary btn-lg rounded-pill w-100" disabled data-bs-dismiss="modal">
                    Confirm Dates
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END CALENDAR MODAL -->

<section id="categories" class="py-5 about">
    <div class="container container-xl py-5">
        <h2 class="fs-2 fw-bold text-haygo-dark mb-3 text-center">Our Cebu Fleet: Designed for Island Exploration
        </h2>
        <p class="fs-5 text-secondary mb-5 text-center">Navigate Cebu City and the provinces with the perfect
            vehicle for every road.</p>

        <div class="row g-4">
            <!-- Category 1: The Metro Commuter (Small/Hatchback) -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm border-0 category-card h-100 rounded-3">
                    <div class="card-body p-4 text-center">
                        <!-- Icon: Car Front (Lime Accent) -->
                        <div class="icon-box rounded-circle mx-auto mb-3 bg-haygo-light text-haygo-accent"
                            style="width: 70px; height: 70px; line-height: 70px;">
                            <i class="bi bi-car-front-fill fs-3"></i>
                        </div>
                        <h3 class="fs-5 fw-bold mb-1 text-haygo-dark">The Metro Commuter</h3>
                        <p class="text-secondary small">Fuel-efficient hatchbacks, ideal for tight Mandaue and Cebu
                            City traffic.</p>
                        <a href="#"
                            class="l-button btn text-haygo-primary border-haygo-primary mt-2">View
                            Economy Fleet</a>
                    </div>
                </div>
            </div>
            <!-- Category 2: The Island Voyager (Mid-size SUV) -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm border-0 category-card h-100 rounded-3">
                    <div class="card-body p-4 text-center">
                        <!-- Icon: SUV/Jeep (Lime Accent) -->
                        <div class="icon-box rounded-circle mx-auto mb-3 bg-haygo-light text-haygo-accent"
                            style="width: 70px; height: 70px; line-height: 70px;">
                            <i class="bi bi-truck-flatbed fs-3"></i>
                        </div>
                        <h3 class="fs-5 fw-bold mb-1 text-haygo-dark">The Island Voyager</h3>
                        <p class="text-secondary small">Comfortable, sturdy mid-size SUVs for exploring Moalboal,
                            Oslob, and the mountains.</p>
                        <a href="#"
                            class="l-button btn text-haygo-primary border-haygo-primary mt-2">View
                            SUV Fleet</a>
                    </div>
                </div>
            </div>
            <!-- Category 3: The Barkada Hauler (AUVs/Vans) -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm border-0 category-card h-100 rounded-3">
                    <div class="card-body p-4 text-center">
                        <!-- Icon: Van (Lime Accent) -->
                        <div class="icon-box rounded-circle mx-auto mb-3 bg-haygo-light text-haygo-accent"
                            style="width: 70px; height: 70px; line-height: 70px;">
                            <i class="bi bi-bus-front fs-3"></i>
                        </div>
                        <h3 class="fs-5 fw-bold mb-1 text-haygo-dark">The Barkada Hauler</h3>
                        <p class="text-secondary small">7-seater AUVs and vans perfect for family outings, airport
                            transfers, and group tours (barkada).</p>
                        <a href="#"
                            class="l-button btn text-haygo-primary border-haygo-primary mt-2">View
                            Family Vans</a>
                    </div>
                </div>
            </div>
            <!-- Category 4: The Executive Ride (Premium/Luxury) -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm border-0 category-card h-100 rounded-3">
                    <div class="card-body p-4 text-center">
                        <!-- Icon: VIP (Lime Accent) -->
                        <div class="icon-box rounded-circle mx-auto mb-3 bg-haygo-light text-haygo-accent"
                            style="width: 70px; height: 70px; line-height: 70px;">
                            <i class="bi bi-person-workspace fs-3"></i>
                        </div>
                        <h3 class="fs-5 fw-bold mb-1 text-haygo-dark">The Executive Ride</h3>
                        <p class="text-secondary small">High-end sedans and premium SUVs for business travel and
                            luxury resort hopping.</p>
                        <a href="#"
                            class="l-button btn text-haygo-primary border-haygo-primary mt-2">View
                            Premium Models</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reviews" class="py-5 bg-white">
    <div class="container container-xl py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fs-2 fw-bold text-haygo-dark mb-3">Our 4.9/5 Trust Score</h2>
                <p class="fs-5 text-secondary mb-4">We prioritize your experience. See why thousands choose Hay Go.
                </p>

                <div class="d-flex flex-wrap gap-4">
                    <!-- Trust Metric 1 (Lime accent) -->
                    <div class="text-center">
                        <span class="display-6 fw-bold text-haygo-accent d-block">99%</span>
                        <span class="text-secondary small">Cleanliness Rating</span>
                    </div>
                    <!-- Trust Metric 2 (Lime accent) -->
                    <div class="text-center">
                        <span class="display-6 fw-bold text-haygo-accent d-block">24/7</span>
                        <span class="text-secondary small">Roadside Assistance</span>
                    </div>
                    <!-- Trust Metric 3 (Lime accent) -->
                    <div class="text-center">
                        <span class="display-6 fw-bold text-haygo-accent d-block">100+</span>
                        <span class="text-secondary small">Global Locations</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card (Primary Blue Border) -->
            <div class="col-lg-6">
                <div class="card shadow-lg border-top border-5 border-haygo-primary h-100 p-3 rounded-4">
                    <div class="card-body">
                        <p class="fs-5 fst-italic text-haygo-dark">
                            "Fast, reliable, and straightforward. The app made check-in a breeze. I had the keys in
                            hand within minutes, ready to start my vacation. This is how renting a car should be."
                        </p>
                        <div class="mt-4">
                            <div class="text-warning mb-1">
                                <!-- Using Bootstrap default yellow warning for stars -->
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <p class="fw-bold mb-0 text-haygo-dark">Jessica M., Frequent Traveler</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Section (Light Gray-Blue Background) -->
<section id="faq" class="py-5 about">
    <div class="container container-xl py-5">
        <h2 class="fs-2 fw-bold text-haygo-dark mb-3 text-center">Common Questions</h2>
        <p class="fs-5 text-secondary mb-5 text-center">Need more details? We're here to help.</p>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">

                    <!-- FAQ Item 1 (Uses new collapse and focus styles) -->
                    <div class="accordion-item rounded-3 mb-3 shadow-sm border">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button fw-semibold text-haygo-dark" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Do I need to pay a deposit for the rental?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Yes, a security deposit is pre-authorized on your credit card at pickup. The amount
                                depends on the vehicle class and insurance options chosen, and it is released once
                                the car is returned undamaged.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item rounded-3 mb-3 shadow-sm border">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-semibold text-haygo-dark" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Are additional drivers allowed?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Additional drivers are permitted, but they must be registered on the rental
                                agreement at the time of pickup, meet all age requirements, and present a valid
                                driver's license. A small daily fee may apply.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item rounded-3 mb-3 shadow-sm border">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-semibold text-haygo-dark" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                What happens if I return the car late?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary">
                                Late returns are subject to an hourly charge up to a full day's rental rate. If you
                                anticipate a delay, please contact the rental location immediately to discuss
                                extension options.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURED DEAL SECTION (Matches System/Vehicle Focus) -->
<section class="py-5 bg-white">
    <div class="container container-xl py-5">
        <div class="card shadow-lg border-0 bg-haygo-light rounded-4 overflow-hidden">
            <div class="row g-0 align-items-center">
                <!-- Text Content (Ocean Blue) -->
                <div class="col-lg-6 p-4 p-md-5">
                    <h3 class="fs-6 fw-bold text-uppercase text-haygo-accent mb-2">LIMITED TIME OFFER</h3>
                    <h2 class="display-5 fw-bolder text-haygo-dark mb-4">
                        Weekend Special: <span class="text-haygo-primary">Mid-Size SUV</span>
                    </h2>
                    <p class="fs-5 text-secondary mb-4">
                        Take on the islands with extra space and comfort. Book for 3 days and get the 4th day free!
                        Perfect for a trip to Oslob or Bantayan Island.
                    </p>
                    <ul class="list-unstyled mb-4 text-haygo-dark">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-haygo-accent me-2"></i> Free 4th day
                            rental</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-haygo-accent me-2"></i> Unlimited
                            mileage included</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-haygo-accent me-2"></i> Seats 5
                            comfortably with baggage</li>
                    </ul>
                    <!-- Button is Lime Accent, contrasting with the dark card content -->
                    <button class="btn btn-haygo-primary btn-lg fw-bold px-5 rounded-3 shadow-md">
                        See Deal & Reserve
                    </button>
                </div>

                <!-- Image Placeholder (Deep Blue for contrast) -->
                <div class="col-lg-6 d-none d-lg-block">
                    <!-- Image uses the primary brand color for consistency -->
                    <img src="src/assets/images/hero-suv.jpg"
                        alt="Image of a mid-size SUV on special offer" class="img-fluid mr-5"
                        style="object-fit: cover; width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-haygo-dark py-5 mt-5">
    <div class="container text-center text-white">
        <h3 class="fw-bold mb-3">Ready to Start Your Cebu Adventure?</h3>
        <p class="lead mb-4 opacity-75">Secure your perfect vehicle now and pay nothing until pick-up.</p>
        <button class="btn btn-lg btn-haygo-primary text-haygo-dark fw-bold px-5 rounded-pill shadow-lg">
            <i class="bi bi-search me-2"></i> Search Now
        </button>
    </div>
</section>

<?php
require_once 'footer.php';
?>