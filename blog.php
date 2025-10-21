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
    </div>
    <div class="carousel-inner">

        <!-- Slide 1: Coastal Drive -->
        <div class="carousel-item active carousel-item-custom"
            style="background-image: url('https://placehold.co/1200x600/1F7A8C/FFFFFF?text=Coastal+Road+Trip');">
            <div class="carousel-caption d-none d-md-block text-center">
                <h5 class="fw-bold fs-2">Coastal Drives & Sunset Views</h5>
                <p class="lead">Discover the scenic routes our clients love.</p>
            </div>
        </div>

        <!-- Slide 2: Mountain Trail -->
        <div class="carousel-item carousel-item-custom"
            style="background-image: url('https://placehold.co/1200x600/2C3E50/A9F044?text=Mountain+Road+Adventure');">
            <div class="carousel-caption d-none d-md-block text-center">
                <h5 class="fw-bold fs-2">Highland Trails and Mountain Passes</h5>
                <p class="lead">The best vehicles for off-road exploration.</p>
            </div>
        </div>

        <!-- Slide 3: City Drive -->
        <div class="carousel-item carousel-item-custom"
            style="background-image: url('https://placehold.co/1200x600/A9F044/2C3E50?text=Urban+City+Exploration');">
            <div class="carousel-caption d-none d-md-block text-center text-dark">
                <h5 class="fw-bold fs-2">Urban Adventures Await</h5>
                <p class="lead">Find parking tips and city guides.</p>
            </div>
        </div>

        <!-- Slide 4: Desert -->
        <div class="carousel-item carousel-item-custom"
            style="background-image: url('https://placehold.co/1200x600/94A3B8/1F7A8C?text=Desert+Open+Road');">
            <div class="carousel-caption d-none d-md-block text-center">
                <h5 class="fw-bold fs-2">Desert Trails & Open Skies</h5>
                <p class="lead">Plan your remote escape with our top rental picks.</p>
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
        <button id="new-post-btn" type="button" class="btn bg-accent text-dark fw-bold py-3 px-5 rounded-pill shadow"
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
        <button class="btn btn-outline-secondary filter-btn filter-btn-active rounded-pill" data-category="all">All
            Posts</button>
        <button class="btn btn-outline-secondary filter-btn rounded-pill" data-category="guides">Travel Guides</button>
        <button class="btn btn-outline-secondary filter-btn rounded-pill" data-category="tips">Rental Tips</button>
        <button class="btn btn-outline-secondary filter-btn rounded-pill" data-category="vehicles">Vehicle
            Reviews</button>
        <button class="btn btn-outline-secondary filter-btn rounded-pill" data-category="news">Company News</button>
        <button class="btn btn-outline-secondary filter-btn rounded-pill" data-category="community">Community
            Posts</button>
    </div>

    <!-- Post Grid Container -->
    <div id="post-grid" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Posts will be injected here by JavaScript -->
        <div id="loading-indicator" class="col-12 text-center py-5 fs-5 text-muted">
            <i class="ri-loader-4-line ri-spin fs-3 me-2 text-primary"></i> Loading posts...
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