<?php 
    require_once 'header.php';
?>

    <!-- Header and Hero Section -->
    <div class="hero-section bg-hg-blue text-white">
        <div class="container text-center">
            <h1 class="display-4 fw-bolder mb-2">
                Hay Go Help Center
            </h1>
            <p class="lead opacity-75 mb-5">
                Find quick answers and support for your car rental needs.
            </p>

            <!-- Search Bar (Placeholder Functionality) -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-0 rounded-start-pill ps-4 pe-0" id="search-addon"><i class="ri-search-line text-muted"></i></span>
                        <input type="text" id="searchFaq" placeholder="Search FAQs, bookings, or policies..."
                            class="form-control rounded-end-pill py-3 search-input" aria-label="Search" aria-describedby="search-addon">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content (FAQ Accordions) -->
    <main class="py-5">
        <!-- Applying custom class to limit width to approx 70% -->
        <div class="container faq-container">

            <h2 class="text-3xl font-bold mb-5 text-center text-hg-dark">Frequently Asked Questions</h2>

            <!-- FAQ Accordion Container -->
            <div class="accordion accordion-flush" id="faqAccordion">

                <!-- 1. BOOKING & RESERVATION -->
                <div class="card bg-light p-3 mb-3 rounded-4 border-0 shadow-sm">
                    <h3 class="h5 mb-0 text-hg-blue fw-bold"><i class="ri-book-open-line me-2"></i> 1. Booking & Reservation</h3>
                </div>

                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            How do I make a reservation?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can easily book a car on our main website. Select your <strong>pick-up and drop-off locations</strong>, dates, and times. Browse the available vehicle options, choose the one that suits your needs, and complete the reservation by entering your details and payment information.
                        </div>
                    </div>
                </div>

                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Can I modify or cancel my booking?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, you can modify or cancel most bookings up to <strong>48 hours before</strong> your scheduled pick-up time. Please log in to your account, go to 'My Reservations', and follow the prompts. Cancellation fees may apply depending on the time of cancellation.
                        </div>
                    </div>
                </div>

                <!-- 2. PICKUP & DROP-OFF -->
                <div class="card bg-light p-3 mt-4 mb-3 rounded-4 border-0 shadow-sm">
                    <h3 class="h5 mb-0 text-hg-blue fw-bold"><i class="ri-car-line me-2"></i> 2. Pickup & Drop-off</h3>
                </div>

                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What documents do I need to bring for pickup?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You must present a valid <strong>Driver's License</strong>, a primary government-issued <strong>Photo ID</strong> (like a passport), and the <strong>Credit Card</strong> used for the reservation (must be in the driver's name).
                        </div>
                    </div>
                </div>

                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Can I drop off the car at a different location?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We offer one-way rentals between select Hay Go locations. This option may incur a <strong>one-way fee</strong>, which will be clearly shown during the booking process. Please select your desired drop-off location when making the reservation.
                        </div>
                    </div>
                </div>

                <!-- 3. PAYMENTS & FEES -->
                <div class="card bg-light p-3 mt-4 mb-3 rounded-4 border-0 shadow-sm">
                    <h3 class="h5 mb-0 text-hg-blue fw-bold"><i class="ri-wallet-3-line me-2"></i> 3. Payments & Fees</h3>
                </div>

                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            What forms of payment do you accept?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We primarily accept major <strong>Credit Cards</strong> (Visa, Mastercard, Amex) for the rental deposit and final payment. Debit cards and prepaid cards may be used for the final payment, but a credit card is usually required for the initial security deposit.
                        </div>
                    </div>
                </div>

                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Is there a security deposit? How much is it?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, a security deposit is required and is typically <strong>PhP 5,000 to PhP 10,000</strong>, depending on the vehicle class. This deposit is temporarily held (authorized) on your credit card and released once the vehicle is returned without damage and with a full fuel tank.
                        </div>
                    </div>
                </div>

                <!-- 4. VEHICLE & USAGE -->
                <div class="card bg-light p-3 mt-4 mb-3 rounded-4 border-0 shadow-sm">
                    <h3 class="h5 mb-0 text-hg-blue fw-bold"><i class="ri-road-map-line me-2"></i> 4. Vehicle & Usage</h3>
                </div>

                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            What is the fuel policy?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We operate on a <strong>Full-to-Full</strong> fuel policy. You must return the vehicle with the same level of fuel as when you picked it up. If the fuel tank is not full upon return, a refueling charge plus a service fee will apply.
                        </div>
                    </div>
                </div>

                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            What is the minimum age to rent a car?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The primary driver must be at least <strong>21 years old</strong> and hold a valid driver's license for a minimum of two years. Drivers aged 21-24 may be subject to a young driver surcharge, which will be calculated during the booking process.
                        </div>
                    </div>
                </div>

            </div>

            <!-- Contact Section (Call to Action) -->
            <div class="text-center mt-5 p-4 p-md-5 rounded-4 shadow-lg"
                style="background: linear-gradient(135deg, #EBF8FF 0%, #FFFFFF 100%); border: 1px solid #D1E8F4;">
                <h3 class="h2 fw-bolder mb-3 text-hg-blue">Need Immediate Help?</h3>
                <p class="lead text-secondary mb-4 max-w-lg mx-auto">
                    If our FAQs didn't cover it, our 24/7 Hay Go support team is standing by. Start a live chat now!
                </p>
                <button type="button" class="btn btn-lg btn-hg-lime" data-bs-toggle="modal" data-bs-target="#chatModal">
                    <i class="ri-chat-3-line me-2"></i> Chat with a Support Bot
                </button>
            </div>
        </div>
    </main>


    <!-- --- CHATBOT MODAL HTML (Bootstrap Modal Component) --- -->
    <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <!-- The modal-dialog width is now controlled by the custom CSS targeting #chatModal .modal-dialog -->
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Header -->
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="chatModalLabel">
                        <i class="ri-robot-2-line me-2"></i> Hay Go Support Bot
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Messages Display -->
                <div class="modal-body p-0 d-flex flex-column" style="height: 100%;">
                    <div id="chatMessages" class="chat-messages">
                        <!-- Initial message will be added by JS on modal show -->
                    </div>
                </div>

                <!-- Input Area -->
                <div class="chat-input-area">
                    <form id="chatForm" class="d-flex">
                        <input type="text" id="chatInput" placeholder="Type your query here..."
                            class="form-control rounded-start-pill border-2 me-2" style="border-color: #d1d5db;">
                        <button type="submit" class="btn btn-hg-lime rounded-end-pill px-4" title="Send">
                            <i class="ri-send-plane-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- --- END CHATBOT MODAL HTML --- -->
    <?php
    require_once 'footer.php';
    ?>