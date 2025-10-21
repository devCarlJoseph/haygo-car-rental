<?php
    require_once 'header.php';
?>
    <main>
        <!-- About Us Hero Section -->
        <section class="hero-about">
            <div class="container position-relative">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10">
                        <h1 class="display-3 fw-bolder mb-3 text-white">
                            The Future of Car Rental in Cebu 
                            <span class="d-block mt-3">[Image of modern city skyline]</span>
                        </h1>
                        <p class="lead text-light mb-0" style="opacity: 0.9;">
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
                        <h2 class="display-6 fw-bolder text-haygo-dark mb-4">Our Story: Born Out of Frustration</h2>
                        <p class="fs-5 text-secondary">
                            Like many travelers and residents, we were tired of the manual processes—the endless forms, the hidden fees, and the long waits at the counter. We knew there was a better way. Hay Go was founded by a team of tech enthusiasts and local travel experts who believe your vacation or business trip shouldn't start with a headache.
                        </p>
                        <p class="fs-6 text-secondary mb-4">
                            By leveraging **digital contracts**, **instant booking confirmations**, and a simple, mobile-first platform, we put the power back in your hands. Our focus on **Cebu and the Visayas** ensures that we understand the unique infrastructure and specific needs of driving in this beautiful region.
                        </p>
                        <a href="#" class="btn btn-lime rounded-pill px-4 py-2">
                            See Our Digital Difference
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://placehold.co/600x400/F0F0F0/2C3E50?text=Digital+Contract+Mockup" 
                             onerror="this.onerror=null;this.src='https://placehold.co/600x400/F0F0F0/2C3E50?text=Digital+Contract+Mockup';"
                             alt="Digital contract illustration" 
                             class="img-fluid rounded-4 shadow-lg">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Core Values Section -->
        <section class="py-5 bg-haygo-light">
            <div class="container py-5">
                <h2 class="display-6 fw-bolder text-haygo-dark mb-5 text-center">Our Core Values</h2>
                
                <div class="row g-4">
                    <!-- Value 1: Transparency -->
                    <div class="col-md-4">
                        <div class="card value-card border-0 rounded-3 p-4 bg-white h-100 shadow-sm">
                            <i class="ri-eye-line text-haygo-lime display-5 mb-3"></i>
                            <h3 class="fs-4 fw-bold text-haygo-dark mb-2">Transparency</h3>
                            <p class="text-secondary">
                                What you see is what you pay. We guarantee no hidden fees, clear insurance policies, and straightforward pricing displayed up front.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Value 2: Reliability -->
                    <div class="col-md-4">
                        <div class="card value-card border-0 rounded-3 p-4 bg-white h-100 shadow-sm">
                            <i class="ri-shield-check-line text-haygo-lime display-5 mb-3"></i>
                            <h3 class="fs-4 fw-bold text-haygo-dark mb-2">Reliability</h3>
                            <p class="text-secondary">
                                Our fleet is meticulously maintained and sanitized. Every vehicle is backed by 24/7 dedicated roadside assistance, giving you peace of mind.
                            </p>
                        </div>
                    </div>

                    <!-- Value 3: Innovation -->
                    <div class="col-md-4">
                        <div class="card value-card border-0 rounded-3 p-4 bg-white h-100 shadow-sm">
                            <i class="ri-global-line text-haygo-lime display-5 mb-3"></i>
                            <h3 class="fs-4 fw-bold text-haygo-dark mb-2">Innovation</h3>
                            <p class="text-secondary">
                                We utilize the latest technology for instant booking, digital verification, and touchless check-in and check-out processes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        ---

        <!-- NEW SECTION: Testimonials Carousel -->
        <section class="py-5 bg-haygo-blue text-white">
            <div class="container py-5">
                <h2 class="display-6 fw-bolder mb-5 text-center">What Our Customers Say</h2>
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    
                    <!-- Carousel Indicators (optional) -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <!-- Carousel Content (UPDATED CONTENT) -->
                    <div class="carousel-inner text-center">
                        <!-- Testimonial 1: Focus on Digital Contract Speed -->
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <i class="ri-double-quotes-l text-haygo-lime display-4 mb-3"></i>
                                    <p class="testimonial-text mb-4">
                                        "The efficiency of Hay Go is unmatched. I signed the contract digitally before I even left the airport. The entire process, from booking to key collection, took less than five minutes. No more lines!"
                                    </p>
                                    <p class="fw-bold fs-5 text-haygo-lime mb-0">- Ryan G., Travel Blogger</p>
                                    <p class="small text-light" style="opacity: 0.8;">Rented a Crossover SUV in Mactan.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Testimonial 2: Focus on Local Knowledge and Support -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <i class="ri-double-quotes-l text-haygo-lime display-4 mb-3"></i>
                                    <p class="testimonial-text mb-4">
                                        "We drove to Malapascua, and the Hay Go team gave us excellent advice on road conditions and local stops. Their local focus made all the difference—it felt like renting from a friend."
                                    </p>
                                    <p class="fw-bold fs-5 text-haygo-lime mb-0">- The Perez Family, California</p>
                                    <p class="small text-light" style="opacity: 0.8;">Rented a Family Van for a week-long tour.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3: Focus on Vehicle Quality and Reliability -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <i class="ri-double-quotes-l text-haygo-lime display-4 mb-3"></i>
                                    <p class="testimonial-text mb-4">
                                        "The car was spotless, new, and ran flawlessly. I needed support late one evening, and their 24/7 line answered immediately. True reliability when you need it most. Five stars."
                                    </p>
                                    <p class="fw-bold fs-5 text-haygo-lime mb-0">- Marcus D., Business Traveler</p>
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

        ---

        <!-- NEW SECTION: Why Choose Us (USPs) -->
        <section class="py-5 bg-haygo-light">
            <div class="container py-5">
                <h2 class="display-6 fw-bolder text-haygo-dark mb-5 text-center">Why Choose Hay Go?</h2>
                <div class="row g-4 text-center">
                    
                    <!-- USP 1: Speed -->
                    <div class="col-md-4">
                        <i class="ri-timer-line text-haygo-blue display-3 mb-3"></i>
                        <h3 class="fs-4 fw-bold text-haygo-dark mb-2">Instant Booking</h3>
                        <p class="text-secondary">
                            Get confirmation in seconds, not hours. Our automated system means your car is reserved immediately.
                        </p>
                    </div>
                    
                    <!-- USP 2: Location -->
                    <div class="col-md-4">
                        <i class="ri-map-pin-2-line text-haygo-blue display-3 mb-3"></i>
                        <h3 class="fs-4 fw-bold text-haygo-dark mb-2">Local Cebu Focus</h3>
                        <p class="text-secondary">
                            We're local experts. Get tips, support, and vehicles perfectly suited for Philippine roads and traffic.
                        </p>
                    </div>

                    <!-- USP 3: Support -->
                    <div class="col-md-4">
                        <i class="ri-customer-service-line text-haygo-blue display-3 mb-3"></i>
                        <h3 class="fs-4 fw-bold text-haygo-dark mb-2">24/7 Dedicated Support</h3>
                        <p class="text-secondary">
                            Roadside assistance and customer care are available around the clock for total peace of mind.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        ---

        <!-- NEW SECTION: Meet Our Team (UPDATED WITH 5 MEMBERS) -->
        <section class="py-5 bg-white">
            <div class="container py-5">
                <h2 class="display-6 fw-bolder text-haygo-dark mb-5 text-center">Meet Our Dedicated Team</h2>
                <div class="row g-4 justify-content-center">
                    
                    <!-- Team Member 1: Founder (Changed to col-lg-4 for 3-across layout) -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 rounded-4 p-4 text-center shadow-sm h-100">
                            <img src="https://placehold.co/150x150/1F7A8C/FFFFFF?text=J.D." 
                                 onerror="this.onerror=null;this.src='https://placehold.co/150x150/1F7A8C/FFFFFF?text=J.D.';"
                                 alt="Team member profile photo" 
                                 class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid var(--haygo-lime);">
                            <h4 class="fs-5 fw-bold text-haygo-dark mb-1">Jude Delos Reyes</h4>
                            <p class="small text-haygo-blue fw-semibold mb-2">Founder & CEO</p>
                            <p class="small text-secondary mb-0">Visionary behind Hay Go's digital-first rental platform.</p>
                        </div>
                    </div>
                    
                    <!-- Team Member 2: Operations (Changed to col-lg-4 for 3-across layout) -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 rounded-4 p-4 text-center shadow-sm h-100">
                            <img src="https://placehold.co/150x150/A9F044/2C3E50?text=A.C." 
                                 onerror="this.onerror=null;this.src='https://placehold.co/150x150/A9F044/2C3E50?text=A.C.';"
                                 alt="Team member profile photo" 
                                 class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid var(--haygo-blue);">
                            <h4 class="fs-5 fw-bold text-haygo-dark mb-1">Anna Cruz</h4>
                            <p class="small text-haygo-blue fw-semibold mb-2">Head of Fleet Operations</p>
                            <p class="small text-secondary mb-0">Ensuring every car meets the highest standards of safety and cleanliness.</p>
                        </div>
                    </div>
                    
                    <!-- Team Member 3: Technology (Changed to col-lg-4 for 3-across layout) -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 rounded-4 p-4 text-center shadow-sm h-100">
                            <img src="https://placehold.co/150x150/1F7A8C/FFFFFF?text=R.T." 
                                 onerror="this.onerror=null;this.src='https://placehold.co/150x150/1F7A8C/FFFFFF?text=R.T.';"
                                 alt="Team member profile photo" 
                                 class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid var(--haygo-lime);">
                            <h4 class="fs-5 fw-bold text-haygo-dark mb-1">Ramon Torres</h4>
                            <p class="small text-haygo-blue fw-semibold mb-2">Lead Technology Architect</p>
                            <p class="small text-secondary mb-0">Building the platform that powers instant booking and digital verification.</p>
                        </div>
                    </div>

                    <!-- Team Member 4: Marketing (NEW) -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 rounded-4 p-4 text-center shadow-sm h-100">
                            <img src="https://placehold.co/150x150/A9F044/2C3E50?text=M.L." 
                                 onerror="this.onerror=null;this.src='https://placehold.co/150x150/A9F044/2C3E50?text=M.L.';"
                                 alt="Team member profile photo" 
                                 class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid var(--haygo-blue);">
                            <h4 class="fs-5 fw-bold text-haygo-dark mb-1">Maria Lopez</h4>
                            <p class="small text-haygo-blue fw-semibold mb-2">Head of Marketing & Community</p>
                            <p class="small text-secondary mb-0">Connecting with our customers and growing the Hay Go brand across the Visayas.</p>
                        </div>
                    </div>

                    <!-- Team Member 5: Customer Success (NEW) -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 rounded-4 p-4 text-center shadow-sm h-100">
                            <img src="https://placehold.co/150x150/1F7A8C/FFFFFF?text=B.S." 
                                 onerror="this.onerror=null;this.src='https://placehold.co/150x150/1F7A8C/FFFFFF?text=B.S.';"
                                 alt="Team member profile photo" 
                                 class="rounded-circle mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid var(--haygo-lime);">
                            <h4 class="fs-5 fw-bold text-haygo-dark mb-1">Benigno "Benny" Santos</h4>
                            <p class="small text-haygo-blue fw-semibold mb-2">Director of Customer Success</p>
                            <p class="small text-secondary mb-0">Overseeing the 24/7 support system and continuous service improvement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-5 bg-haygo-blue">
            <div class="container py-5 text-center">
                <h2 class="display-6 fw-bolder text-white mb-3">Ready to Experience the Hay Go Difference?</h2>
                <p class="lead text-light mb-4" style="opacity: 0.9;">
                    Book your next adventure with the fastest and most reliable rental service in the region.
                </p>
                <a href="#" class="btn btn-lime rounded-pill py-3 px-5 fw-bold shadow-lg">
                    Start Your Booking Now
                </a>
            </div>
        </section>

    </main>

<?php 
    require_once 'footer.php';
?>