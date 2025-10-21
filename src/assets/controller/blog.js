
// --- Configuration and State ---
const userId = 'user-' + Math.random().toString(16).slice(2, 10);
const userName = 'Community Member';
const MAX_FILE_SIZE_BYTES = 1000000; // 1MB limit for Base64 storage
let posts = []; // In-memory storage for all posts

// Hardcoded initial editorial content (UPDATED)
const initialPosts = [
    {
        id: 1,
        title: "Charging on the Go: A Guide to Renting Electric Vehicles",
        category: "vehicles",
        contentSnippet: "New to EVs? Learn how to find charging stations and maximize your range on a rental road trip.",
        imageUrl: "https://placehold.co/600x400/2C3E50/FFFFFF?text=EV+Charging",
        timestamp: "2025-10-21T10:00:00.000Z",
        authorName: "Hay Go Editorial",
    },
    {
        id: 2,
        title: "Hidden Fees Decoded: What to Watch Out for in Your Rental Contract",
        category: "tips",
        contentSnippet: "We reveal the common charges like cleaning fees and late return penalties, and how to avoid them.",
        imageUrl: "https://placehold.co/600x400/1F7A8C/FFFFFF?text=Rental+Contract",
        timestamp: "2025-10-18T09:00:00.000Z",
        authorName: "Hay Go Editorial",
    },
    {
        id: 3,
        title: "The Perfect Road Trip Playlist and Snack List for Any Journey",
        category: "guides",
        contentSnippet: "From crunchy car snacks to classic driving tunes, we've got your entertainment covered.",
        imageUrl: "https://placehold.co/600x400/A9F044/2C3E50?text=Road+Trip+Snacks",
        timestamp: "2025-10-10T09:00:00.000Z",
        authorName: "Hay Go Editorial",
    },
    {
        id: 4,
        title: "Introducing Hay Go Platinum: New Loyalty Perks for 2026",
        category: "news",
        contentSnippet: "Get ready for priority check-in, free upgrades, and exclusive member discounts starting next year.",
        imageUrl: "https://placehold.co/600x400/1F7A8C/FFFFFF?text=Platinum+Perks",
        timestamp: "2025-09-25T09:00:00.000Z",
        authorName: "Hay Go Editorial",
    },
    {
        id: 5,
        title: "Why You Should Always Take Photos Before Driving Off",
        category: "tips",
        contentSnippet: "Protect yourself from unfair damage claims with this simple, two-minute pre-rental routine.",
        imageUrl: "https://placehold.co/600x400/A9F044/2C3E50?text=Pre-Rental+Check",
        timestamp: "2025-09-15T09:00:00.000Z",
        authorName: "Hay Go Editorial",
    },
];

document.getElementById('user-id-display').textContent = userId.substring(0, 8) + '...';

// --- Utility Functions ---

function fileToBase64(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
}

function createPostCard(post) {
    const date = new Date(post.timestamp);
    const formattedDate = date.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });

    const categoryText = post.category.charAt(0).toUpperCase() + post.category.slice(1);
    const primaryColorClass = post.category === 'guides' || post.category === 'vehicles' ? 'text-accent' : 'text-primary';
    const fallbackText = post.authorName === userName ? 'Community Image' : 'Image Missing';
    const authorDisplay = post.authorName === userName ?
        `${userName} (${post.authorId.substring(0, 4)}...)` :
        post.authorName;

    const cardHtml = `
                <div class="col post-card-item" data-category="${post.category}">
                    <article class="card h-100 rounded-4 post-card">
                        <div class="ratio ratio-4x3 bg-light rounded-top-4 overflow-hidden">
                            <img src="${post.imageUrl}" class="card-img-top object-fit-cover opacity-75" alt="${post.title}" 
                                 onerror="this.onerror=null;this.src='https://placehold.co/600x400/94A3B8/ffffff?text=${fallbackText}'">
                        </div>
                        <div class="card-body p-4">
                            <small class="${primaryColorClass} fw-bold text-uppercase d-block mb-2">${categoryText}</small>
                            <h3 class="card-title fs-4 fw-bold mb-3 lh-sm" style="color: var(--bs-body-color);">
                                <a href="#" class="text-decoration-none text-reset">${post.title}</a>
                            </h3>
                            <p class="card-text text-muted mb-4" style="--bs-line-clamp: 3; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                ${post.contentSnippet}
                            </p>
                            <div class="card-footer bg-white border-0 p-0">
                                <span class="small text-secondary">
                                    ${formattedDate} | By ${authorDisplay}
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
            `;
    return cardHtml;
}

function renderPosts() {
    const grid = document.getElementById('post-grid');
    const loadingIndicator = document.getElementById('loading-indicator');

    // Check if loadingIndicator exists before manipulating it (fixes the previous error)
    if (loadingIndicator) {
        loadingIndicator.classList.remove('d-flex');
        loadingIndicator.style.display = 'none';
    }

    // Sort posts by timestamp (newest first)
    posts.sort((a, b) => new Date(b.timestamp) - new Date(a.timestamp));

    grid.innerHTML = ''; // Clear existing posts

    let postsHtml = '';
    posts.forEach(post => {
        postsHtml += createPostCard(post);
    });

    grid.innerHTML = postsHtml;

    // Apply current filter after rendering
    const activeBtn = document.querySelector('.filter-btn-active');
    const currentCategory = activeBtn ? activeBtn.dataset.category : 'all';
    filterPosts(currentCategory);
}

function filterPosts(category) {
    const postCards = document.querySelectorAll('.post-card-item');

    postCards.forEach(card => {
        const cardCategory = card.dataset.category;
        const cardAuthor = card.querySelector('.card-footer span').textContent;

        let show = false;

        if (category === 'all') {
            show = true;
        } else if (category === 'community') {
            // Show only posts created by the generic "Community Member" user
            show = cardAuthor.includes(userName);
        } else {
            show = cardCategory === category;
        }

        card.style.display = show ? 'block' : 'none';
    });
}


// --- Event Handlers ---

// 1. Initial Load
document.addEventListener('DOMContentLoaded', () => {
    posts = initialPosts;
    renderPosts();
});

// 2. File Input Preview
document.getElementById('post-file').addEventListener('change', function (event) {
    const file = event.target.files[0];
    const previewContainer = document.getElementById('image-preview');
    const previewImg = document.getElementById('preview-img');
    const messageEl = document.getElementById('form-message');

    if (file) {
        if (file.size > MAX_FILE_SIZE_BYTES) {
            messageEl.textContent = 'Error: Image file is too large (must be < 1MB).';
            event.target.value = ''; // Clear the input
            previewContainer.classList.add('d-none');
            return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
            previewImg.src = e.target.result;
            previewContainer.classList.remove('d-none');
            messageEl.textContent = '';
        };
        reader.readAsDataURL(file);
    } else {
        previewContainer.classList.add('d-none');
    }
});

// 3. Form Submission
document.getElementById('new-post-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    const form = e.target;
    const submitBtn = document.getElementById('submit-btn');
    const messageEl = document.getElementById('form-message');
    const imageFile = form['post-file'].files[0];
    const modal = bootstrap.Modal.getInstance(document.getElementById('postModal'));

    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="ri-loader-4-line ri-spin me-2"></i> Publishing...';
    messageEl.textContent = '';

    let postImageUrl = null;
    if (imageFile) {
        try {
            postImageUrl = await fileToBase64(imageFile);
        } catch (error) {
            console.error("Error converting file to Base64: ", error);
            messageEl.textContent = 'Error processing image file.';
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="ri-send-plane-line me-2"></i> Publish Contribution';
            return;
        }
    }

    if (!postImageUrl) {
        postImageUrl = `https://placehold.co/600x400/94A3B8/2C3E50?text=${encodeURIComponent(form['post-title'].value.substring(0, 15).toUpperCase())}`;
    }

    const newPost = {
        id: posts.length + 1, // Simple ID generation
        title: form['post-title'].value.trim(),
        category: form['post-category'].value,
        contentSnippet: form['post-snippet'].value.trim(),
        imageUrl: postImageUrl,
        timestamp: new Date().toISOString(),
        authorId: userId,
        authorName: userName,
    };

    // Add new post to in-memory array
    posts.push(newPost);
    renderPosts(); // Re-render the grid

    messageEl.textContent = 'Post published successfully!';
    messageEl.classList.remove('text-danger');
    messageEl.classList.add('text-success');

    setTimeout(() => {
        modal.hide();
        form.reset();
        document.getElementById('image-preview').classList.add('d-none');
    }, 800);

    submitBtn.disabled = false;
    submitBtn.innerHTML = '<i class="ri-send-plane-line me-2"></i> Publish Contribution';
});

// 4. Filtering
document.getElementById('filter-bar').addEventListener('click', (event) => {
    const button = event.target.closest('.filter-btn');
    if (!button) return;

    const filterButtons = document.querySelectorAll('.filter-btn');
    filterButtons.forEach(btn => btn.classList.remove('filter-btn-active'));

    button.classList.add('filter-btn-active');

    const category = button.dataset.category;
    filterPosts(category);
});
