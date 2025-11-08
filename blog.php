<?php
require_once 'header.php';
?>

<!-- Blog Hero Section: Carousel -->
<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">

        <!-- Slide 1: Coastal Drive -->
        <div class="carousel-item active carousel-item-custom"
            style="background-image: url('src/assets/images/kawasan.jpg'); background-size: cover; ">
            <div class="carousel-caption d-none d-md-block text-center" style="width: 50rem;">
                <h1 class="fw-bold" style="font-size: 5rem">Kawasan Falls</h1>
                <p class="lead">Discover the scenic routes our clients love.</p>
            </div>
        </div>

        <!-- Slide 2: Mountain Trail -->
        <div class="carousel-item carousel-item-custom"
            style="background-image: url('src/assets/images/osmena.jpg'); background-size: cover; ">
            <div class="carousel-caption d-none d-md-block text-center" style="width: 50rem;">
                <h1 class="fw-bold" style="font-size: 5rem">Osmeña Peak</h1>
                <p class="lead">Discover the scenic routes our clients love.</p>
            </div>
        </div>

        <!-- Slide 3: City Drive -->
        <div class="carousel-item carousel-item-custom"
            style="background-image: url('src/assets/images/safari.jpeg'); background-size: cover; ">
            <div class="carousel-caption d-none d-md-block text-center" style="width: 50rem;">
                <h1 class="fw-bold" style="font-size: 5rem">Cebu Safari</h1>
                <p class="lead">Discover the scenic routes our clients love.</p>
            </div>
        </div>

        <!-- Slide 4: Desert -->
        <div class="carousel-item carousel-item-custom"
            style="background-image: url('src/assets/images/simala.webp'); background-size: cover; ">
            <div class="carousel-caption d-none d-md-block text-center" style="width: 50rem;">
                <h1 class="fw-bold" style="font-size: 5rem">Simala Shrine Sibonga</h1>
                <p class="lead">Discover the scenic routes our clients love.</p>
            </div>
        </div>

        <div class="carousel-item carousel-item-custom"
            style="background-image: url('src/assets/images/ocean\ park.jpg'); background-size: cover; ">
            <div class="carousel-caption d-none d-md-block text-center" style="width: 50rem;">
                <h1 class="fw-bold" style="font-size: 5rem">Cebu Ocean Park</h1>
                <p class="lead">Discover the scenic routes our clients love.</p>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Create New Post Button Section -->
<section class="py-4 bg-light border-bottom border-light text-center">
    <div class="container">
        <h2 class="h5 fw-bold mb-3" style="color: var(--bs-body-color);">
            Contribute to the Hay Go Community
        </h2>
        <!-- New Post Button -->
        <button id="new-post-btn" type="button" class="contribution haygo-secondary-bg haygo-hover border border-none text-dark fw-bold py-3 px-5 rounded-pill shadow"
            data-bs-toggle="modal" data-bs-target="#postModal">
            <i class="ri-quill-pen-line me-2"></i> Submit a Contribution
        </button>
    </div>
</section>

<!-- Main Content Area: Filters and Grid -->
<main class="container py-5 py-md-5">

    <!-- Filter Bar -->
    <div id="filter-bar"
        class="d-flex flex-wrap gap-2 mb-5 pb-3 border-bottom border-2 justify-content-center justify-content-md-start">
        <button class="f-btn btn btn-outline-secondary filter-btn rounded-pill" data-category="all">All
            Posts</button>
        <button class="f-btn btn btn-outline-secondary filter-btn rounded-pill" data-category="guides">Travel Guides</button>
        <button class="f-btn btn btn-outline-secondary filter-btn rounded-pill" data-category="tips">Rental Tips</button>
        <button class="f-btn btn btn-outline-secondary filter-btn rounded-pill" data-category="vehicles">Vehicle
            Reviews</button>
        <button class="f-btn btn btn-outline-secondary filter-btn rounded-pill" data-category="news">Company News</button>
        <button class="f-btn btn btn-outline-secondary filter-btn rounded-pill" data-category="community">Community
            Posts</button>
    </div>

    <!-- Post Grid Container -->
    <div id="post-grid" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col post-card-item" data-category="${post.category}">
            <article class="card h-100 rounded-4 post-card">
                <div class="ratio ratio-4x3 bg-light rounded-top-4 overflow-hidden">
                    <img src="${post.imageUrl}" class="card-img-top object-fit-cover opacity-75" alt="BLOG IMAGE">
                </div>
                <div class=" card-body p-4">
                    <small class="${primaryColorClass} fw-bold text-uppercase d-block mb-2">Category</small>
                    <h3 class="card-title fs-4 fw-bold mb-3 lh-sm">
                        <a href="#" class="text-decoration-none text-reset">Post Title</a>
                    </h3>
                    <p class="card-text text-muted mb-4" style="--bs-line-clamp: 3; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                        Content Snippet
                    </p>
                    <div class="card-footer bg-white border-0 p-0">
                        <span class="small text-secondary">
                            Created Date | By Author Name
                        </span>
                    </div>
                </div>
            </article>
        </div>
    </div>
</main>

<!-- Modal Form for New Post -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <!-- Modal Header -->
            <div class="modal-header border-bottom">
                <h5 class="modal-title fw-bold" id="postModalLabel">Submit a New Community Contribution</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body (Form) -->
            <form id="new-post-form" class="p-4">
                <!-- Title -->
                <div class="mb-3">
                    <label for="post-title" class="form-label fw-bold">Post Title</label>
                    <input type="text" id="post-title" required class="form-control form-control-lg rounded-3 border-2"
                        placeholder="A descriptive title">
                </div>

                <!-- Category -->
                <div class="mb-3">
                    <label for="post-category" class="form-label fw-bold">Category</label>
                    <select id="post-category" required class="form-select form-select-lg rounded-3 border-2">
                        <option value="" disabled selected>Select a category</option>
                        <option value="guides">Travel Guides</option>
                        <option value="tips">Rental Tips</option>
                        <option value="vehicles">Vehicle Reviews</option>
                        <option value="news">Company News</option>
                        <option value="community">Community (General)</option>
                    </select>
                </div>

                <!-- Content Snippet -->
                <div class="mb-3">
                    <label for="post-snippet" class="form-label fw-bold">Content Snippet (Max 150 chars)</label>
                    <textarea id="post-snippet" rows="3" maxlength="150" required
                        class="form-control rounded-3 border-2"
                        placeholder="A short summary for the card view"></textarea>
                </div>

                <!-- Image File Input -->
                <div class="mb-4">
                    <label for="post-file" class="form-label fw-bold">Upload Image File (Optional, < 1MB)</label>
                            <input type="file" id="post-file" accept="image/*" class="form-control rounded-3">
                            <div id="image-preview" class="mt-3 d-none">
                                <p class="text-muted small mb-1">Preview:</p>
                                <img id="preview-img" src="" class="img-thumbnail rounded-3" style="max-height: 100px;"
                                    alt="Image Preview">
                            </div>
                </div>

                <div class="mb-3">
                    <label for="post-title" class="form-label fw-bold">Author Name</label>
                    <input type="text" id="post-title" required class="form-control form-control-lg rounded-3 border-2"
                        placeholder="Juan Dela Cruz">
                </div>

                <!-- Submit Button -->
                <button type="submit" id="submit-btn" class="btn btn-primary btn-lg w-100 fw-bold rounded-3 shadow-lg">
                    <i class="ri-send-plane-line me-2"></i> Publish Contribution
                </button>
                <p id="form-message" class="text-center small mt-2 text-danger"></p>
            </form>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>