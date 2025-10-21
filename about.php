<?php
require_once 'header.php';
?>
<main>
    <!-- About Us Hero Section -->
    <section class="hero-about">
        <div class="container position-relative">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <h1 class="display-3 fw-bolder mb-3 haygo-about">
                        The Future of Car Rental in Cebu
                    </h1>
                    <p class="lead haygo-about mb-0" style="opacity: 0.9;">
                        We started Hay Go with one goal: to eliminate the paperwork, the queues, and the confusion of traditional car rental. We are building the most seamless, transparent, and digitally native rental experience in the Philippines.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission and Story Section -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="display-6 fw-bolder text-haygo-dark mb-4">Our Story: Frustration Fueled Our Innovation</h2>
                    <p class="fs-5 text-secondary">
                        We’ve been in your shoes frustrated by the paperwork, hidden charges, and long waits that come with traditional car rentals. We knew there had to be a better way. That’s why we created Hay Go founded by tech-savvy locals and travel pros who believe your trip should begin with excitement, not stress.
                    </p>
                    <p class="fs-6 text-secondary mb-4">
                        With digital contracts, instant confirmations, and a seamless, mobile-first experience, we put you in control from the start. And because we’re focused on Cebu and the Visayas, we truly understand the roads, the culture, and the unique needs of travelers here.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="src/assets/images/about.png"
                        alt="Digital contract illustration"
                        class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-5 haygo-light-bg">
        <div class="container py-5">
            <h2 class="display-6 fw-bolder text-haygo-dark mb-5 text-center">Our Core Values</h2>

            <div class="row g-4">
                <!-- Value 1: Transparency -->
                <div class="col-md-4">
                    <div class="card value-card border-0 rounded-3 p-4 bg-white h-100 shadow-sm">
                        <i class="ri-eye-line haygo-accent display-5 mb-3"></i>
                        <h3 class="fs-4 fw-bold text-haygo-dark mb-2">Transparency</h3>
                        <p class="text-secondary">
                            What you see is what you pay. We guarantee no hidden fees, clear insurance policies, and straightforward pricing displayed up front.
                        </p>
                    </div>
                </div>

                <!-- Value 2: Reliability -->
                <div class="col-md-4">
                    <div class="card value-card border-0 rounded-3 p-4 bg-white h-100 shadow-sm">
                        <i class="ri-shield-check-line haygo-accent display-5 mb-3"></i>
                        <h3 class="fs-4 fw-bold text-haygo-dark mb-2">Reliability</h3>
                        <p class="text-secondary">
                            Our fleet is meticulously maintained and sanitized. Every vehicle is backed by 24/7 dedicated roadside assistance, giving you peace of mind.
                        </p>
                    </div>
                </div>

                <!-- Value 3: Innovation -->
                <div class="col-md-4">
                    <div class="card value-card border-0 rounded-3 p-4 bg-white h-100 shadow-sm">
                        <i class="ri-global-line haygo-accent display-5 mb-3"></i>
                        <h3 class="fs-4 fw-bold text-haygo-dark mb-2">Innovation</h3>
                        <p class="text-secondary">
                            We utilize the latest technology for instant booking, digital verification, and touchless check-in and check-out processes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: Testimonials Carousel -->
    <section class="haygo-primary-bg py-5 text-white">
        <div class="container py-5">
            <h2 class="display-6 fw-bolder haygo-normal-text mb-5 text-center">What Our Customers Say</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">

                <!-- Carousel Content (UPDATED CONTENT) -->
                <div class="carousel-inner text-center">
                    <!-- Testimonial 1: Focus on Digital Contract Speed -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <i class="ri-double-quotes-l haygo-accent display-4 mb-3"></i>
                                <p class="testimonial-text haygo-normal-text mb-4">
                                    "The efficiency of Hay Go is unmatched. I signed the contract digitally before I even left the airport. The entire process, from booking to key collection, took less than five minutes. No more lines!"
                                </p>
                                <p class="fw-bold fs-5 haygo-accent mb-0">- Ryan G., Travel Blogger</p>
                                <p class="small text-light" style="opacity: 0.8;">Rented a Crossover SUV in Mactan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2: Focus on Local Knowledge and Support -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <i class="ri-double-quotes-l haygo-accent display-4 mb-3"></i>
                                <p class="testimonial-text haygo-normal-text mb-4">
                                    "We drove to Malapascua, and the Hay Go team gave us excellent advice on road conditions and local stops. Their local focus made all the difference—it felt like renting from a friend."
                                </p>
                                <p class="fw-bold fs-5 haygo-accent mb-0">- The Perez Family, California</p>
                                <p class="small text-light" style="opacity: 0.8;">Rented a Family Van for a week-long tour.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3: Focus on Vehicle Quality and Reliability -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <i class="ri-double-quotes-l haygo-accent display-4 mb-3"></i>
                                <p class="testimonial-text haygo-normal-text mb-4">
                                    "The car was spotless, new, and ran flawlessly. I needed support late one evening, and their 24/7 line answered immediately. True reliability when you need it most. Five stars."
                                </p>
                                <p class="fw-bold fs-5 haygo-accent mb-0">- Marcus D., Business Traveler</p>
                                <p class="small text-light" style="opacity: 0.8;">Rented a Premium Sedan for a work trip.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: Why Choose Us (USPs) -->
    <section class="py-5 haygo-light-bg">
        <div class="container py-5">
            <h2 class="display-6 fw-bolder text-haygo-dark mb-5 text-center">Why Choose Hay Go?</h2>
            <div class="row g-4 text-center">

                <!-- USP 1: Speed -->
                <div class="col-md-4">
                    <i class="ri-timer-line haygo-accent display-3 mb-3"></i>
                    <h3 class="fs-4 fw-bold haygo-normal-text mb-2">Instant Booking</h3>
                    <p class="text-secondary">
                        Get confirmation in seconds, not hours. Our automated system means your car is reserved immediately.
                    </p>
                </div>

                <!-- USP 2: Location -->
                <div class="col-md-4">
                    <i class="ri-map-pin-2-line haygo-accent display-3 mb-3"></i>
                    <h3 class="fs-4 fw-bold haygo-normal-text mb-2">Local Cebu Focus</h3>
                    <p class="text-secondary">
                        We're local experts. Get tips, support, and vehicles perfectly suited for Philippine roads and traffic.
                    </p>
                </div>

                <!-- USP 3: Support -->
                <div class="col-md-4">
                    <i class="ri-customer-service-line haygo-accent display-3 mb-3"></i>
                    <h3 class="fs-4 fw-bold haygo-normal-text mb-2">24/7 Dedicated Support</h3>
                    <p class="text-secondary">
                        Roadside assistance and customer care are available around the clock for total peace of mind.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Our Team -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <h2 class="display-6 fw-bolder text-haygo-dark mb-5 text-center">Meet The Faces Behind the System</h2>
            <div class="row g-4 justify-content-center">

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 rounded-4 p-4 text-center shadow-sm h-100">
                        <img src="src/assets/images/back.jpg"
                            alt="Team member profile photo"
                            class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid var(--haygo-secondary);">
                        <h4 class="fs-5 fw-bold text-haygo-dark mb-1">Carl Joseph Sumagang</h4>
                        <p class="small haygo-primary-text fw-semibold mb-2">Back End Developer</p>
                        <p class="small text-secondary mb-0">Carl is responsible for developing and maintaining the server-side logic of the system. He ensures seamless communication between the frontend and the database by building secure APIs, managing data processing, and optimizing overall system performance. His work focuses on the core functionality that powers the application behind the scenes.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 rounded-4 p-4 text-center shadow-sm h-100">
                        <img src="src/assets/images/front.jpg"
                            alt="Team member profile photo"
                            class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid var(--haygo-primary);">
                        <h4 class="fs-5 fw-bold text-haygo-dark mb-1">Jerreh Romer Salera</h4>
                        <p class="small haygo-primary-text fw-semibold mb-2">Front End Developer</p>
                        <p class="small text-secondary mb-0">Jerreh designs and develops the visual and interactive aspects of the system. He focuses on creating a user-friendly interface that aligns with modern web standards. His responsibilities include implementing responsive layouts, integrating backend data into the UI, and ensuring a smooth and engaging user experience.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 rounded-4 p-4 text-center shadow-sm h-100">
                        <img src="src/assets/images/lead.jpg"
                            alt="Team member profile photo"
                            class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid var(--haygo-secondary);">
                        <h4 class="fs-5 fw-bold text-haygo-dark mb-1">James Ian Escabas</h4>
                        <p class="small haygo-primary-text fw-semibold mb-2">Project Manager / Team Leader</p>
                        <p class="small text-secondary mb-0">James oversees the entire project development process, ensuring that all tasks are organized, assigned, and completed efficiently. He manages communication among team members, sets milestones, and ensures the project meets its goals and deadlines. His leadership ensures the team stays focused and aligned with the project’s vision.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 rounded-4 p-4 text-center shadow-sm h-100">
                        <img src="src/assets/images/nancy.jpg"
                            class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid var(--haygo-primary);">
                        <h4 class="fs-5 fw-bold text-haygo-dark mb-1">Documentation Specialist</h4>
                        <p class="small haygo-primary-text fw-semibold mb-2">Head of Marketing & Community</p>
                        <p class="small text-secondary mb-0">Nancy is in charge of preparing and maintaining all project-related documentation. She creates clear and comprehensive reports, user manuals, and technical documents that detail the system’s features, functionality, and development process. Her work ensures that the project is well-documented for future reference and usability.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 rounded-4 p-4 text-center shadow-sm h-100">
                        <img src="src/assets/images/miguel.jpg"
                            alt="Team member profile photo"
                            class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid var(--haygo-secondary);">
                        <h4 class="fs-5 fw-bold text-haygo-dark mb-1">Miguel Carillo</h4>
                        <p class="small haygo-primary-text fw-semibold mb-2">Quality Assurance Tester</p>
                        <p class="small text-secondary mb-0">Miguel is responsible for testing the system to identify bugs, performance issues, and inconsistencies. He conducts both manual and automated testing to ensure the system meets quality standards. His attention to detail helps guarantee that the final product is stable, reliable, and user-ready.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
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

</main>

<?php
require_once 'footer.php';
?>