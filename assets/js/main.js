// =========================
// GLOBAL VARIABLES
// =========================
let currentSlide = 0;
let bucketList = JSON.parse(localStorage.getItem('bucketList')) || [];
let slideInterval;

// =========================
// INITIALIZATION
// =========================
document.addEventListener('DOMContentLoaded', function() {
    initializeHeroSlider();
    initializeBucketList();
    initializeTooltips();
    initializeScrollAnimations();
    updateBucketCount();
});

// =========================
// HERO SLIDER
// =========================
function initializeHeroSlider() {
    const slides = document.querySelectorAll('.hero-slide');
    if (slides.length <= 1) return;

    // Start auto-slide
    slideInterval = setInterval(nextSlide, 5000);

    // Pause on hover
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', () => clearInterval(slideInterval));
        heroSection.addEventListener('mouseleave', () => {
            slideInterval = setInterval(nextSlide, 5000);
        });
    }
}

function changeSlide(direction) {
    const slides = document.querySelectorAll('.hero-slide');
    if (slides.length <= 1) return;

    slides[currentSlide].classList.remove('active');

    currentSlide += direction;

    if (currentSlide >= slides.length) {
        currentSlide = 0;
    } else if (currentSlide < 0) {
        currentSlide = slides.length - 1;
    }

    slides[currentSlide].classList.add('active');
}

function nextSlide() {
    changeSlide(1);
}

// =========================
// BUCKET LIST FUNCTIONALITY
// =========================
function initializeBucketList() {
    // Add event listeners to all "Add to Bucket" buttons
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('add-to-bucket') || e.target.closest('.add-to-bucket')) {
            e.preventDefault();
            const button = e.target.classList.contains('add-to-bucket') ? e.target : e.target.closest('.add-to-bucket');
            const itemName = button.getAttribute('data-item');
            addToBucket(itemName, button);
        }
    });
}

function addToBucket(itemName, button) {
    if (!itemName) return;

    // Check if item already exists
    const existingItem = bucketList.find(item => item.name === itemName);

    if (existingItem) {
        showToast('Item already in bucket list!', 'warning');
        return;
    }

    // Add to bucket list
    const newItem = {
        id: Date.now(),
        name: itemName,
        dateAdded: new Date().toISOString()
    };

    bucketList.push(newItem);
    localStorage.setItem('bucketList', JSON.stringify(bucketList));

    // Update UI
    updateBucketCount();
    updateButtonState(button, true);
    showToast('Added to bucket list!', 'success');

    // Add animation
    button.classList.add('btn-success');
    button.innerHTML = '<i class="fas fa-check"></i> Added';

    setTimeout(() => {
        button.classList.remove('btn-success');
        button.innerHTML = '<i class="fas fa-heart"></i> In Bucket';
        button.classList.add('btn-outline-success');
    }, 1500);
}

function removeFromBucket(itemId) {
    bucketList = bucketList.filter(item => item.id !== itemId);
    localStorage.setItem('bucketList', JSON.stringify(bucketList));
    updateBucketCount();
    showToast('Removed from bucket list!', 'info');
}

function clearBucketList() {
    if (confirm('Are you sure you want to clear your entire bucket list?')) {
        bucketList = [];
        localStorage.setItem('bucketList', JSON.stringify(bucketList));
        updateBucketCount();
        showToast('Bucket list cleared!', 'info');

        // Refresh bucket page if we're on it
        if (window.location.pathname.includes('bucket.php')) {
            location.reload();
        }
    }
}

function updateBucketCount() {
    const countElement = document.getElementById('bucketCount');
    if (countElement) {
        countElement.textContent = bucketList.length;
        countElement.style.display = bucketList.length > 0 ? 'flex' : 'none';
    }
}

function updateButtonState(button, isAdded) {
    if (isAdded) {
        button.classList.remove('btn-primary');
        button.classList.add('btn-outline-success');
        button.innerHTML = '<i class="fas fa-heart"></i> In Bucket';
    } else {
        button.classList.remove('btn-outline-success');
        button.classList.add('btn-primary');
        button.innerHTML = '<i class="fas fa-heart"></i> Add to Bucket';
    }
}

// =========================
// TOAST NOTIFICATIONS
// =========================
function showToast(message, type = 'success') {
    const toastElement = document.getElementById('bucketToast');
    const toastMessage = document.getElementById('toastMessage');

    if (!toastElement || !toastMessage) return;

    // Set message and style
    toastMessage.textContent = message;

    // Remove existing classes
    toastElement.classList.remove('bg-success', 'bg-warning', 'bg-info', 'bg-danger');

    // Add appropriate class
    switch (type) {
        case 'success':
            toastElement.classList.add('bg-success');
            break;
        case 'warning':
            toastElement.classList.add('bg-warning');
            break;
        case 'info':
            toastElement.classList.add('bg-info');
            break;
        case 'error':
            toastElement.classList.add('bg-danger');
            break;
    }

    // Show toast
    const toast = new bootstrap.Toast(toastElement);
    toast.show();
}

// =========================
// SCROLL ANIMATIONS
// =========================
function initializeScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
            }
        });
    }, observerOptions);

    // Observe elements
    document.querySelectorAll('.travel-style-card, .tour-card, .section-title').forEach(el => {
        observer.observe(el);
    });
}

// =========================
// TOOLTIPS
// =========================
function initializeTooltips() {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
}

// =========================
// TOUR FILTERING (for tours page)
// =========================
function filterTours(category) {
    const tourCards = document.querySelectorAll('.tour-card');
    const filterButtons = document.querySelectorAll('.filter-btn');

    // Update active button
    filterButtons.forEach(btn => btn.classList.remove('active'));
    document.querySelector(`[data-filter="${category}"]`).classList.add('active');

    // Filter tours
    tourCards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');

        if (category === 'all' || cardCategory === category) {
            card.style.display = 'block';
            card.classList.add('fade-in-up');
        } else {
            card.style.display = 'none';
        }
    });
}

// =========================
// IMAGE GALLERY (for tour details)
// =========================
function openGallery(imageSrc, imageAlt) {
    const modal = document.createElement('div');
    modal.className = 'modal fade';
    modal.innerHTML = `
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">${imageAlt}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-0">
                    <img src="${imageSrc}" alt="${imageAlt}" class="img-fluid w-100">
                </div>
            </div>
        </div>
    `;

    document.body.appendChild(modal);
    const bsModal = new bootstrap.Modal(modal);
    bsModal.show();

    modal.addEventListener('hidden.bs.modal', () => {
        document.body.removeChild(modal);
    });
}

// =========================
// CONTACT FORM (for contact page)
// =========================
function submitContactForm(event) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);

    // Basic validation
    const name = formData.get('name');
    const email = formData.get('email');
    const message = formData.get('message');

    if (!name || !email || !message) {
        showToast('Please fill in all required fields.', 'warning');
        return;
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        showToast('Please enter a valid email address.', 'warning');
        return;
    }

    // Simulate form submission
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;

    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    submitBtn.disabled = true;

    setTimeout(() => {
        showToast('Message sent successfully! We\'ll get back to you soon.', 'success');
        form.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 2000);
}

// =========================
// SMOOTH SCROLLING
// =========================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// =========================
// UTILITY FUNCTIONS
// =========================
function formatPrice(price) {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR'
    }).format(price);
}

function formatDate(dateString) {
    return new Date(dateString).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

// =========================
// BUCKET LIST PAGE FUNCTIONS
// =========================
function renderBucketList() {
    const bucketContainer = document.getElementById('bucketListContainer');
    if (!bucketContainer) return;

    if (bucketList.length === 0) {
        bucketContainer.innerHTML = `
            <div class="text-center py-5">
                <i class="fas fa-heart text-muted" style="font-size: 4rem;"></i>
                <h3 class="mt-3 text-muted">Your bucket list is empty</h3>
                <p class="text-muted">Start adding tours and experiences you'd like to visit!</p>
                <a href="tours.php" class="btn btn-primary">Browse Tours</a>
            </div>
        `;
        return;
    }

    bucketContainer.innerHTML = bucketList.map(item => `
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 bucket-item">
                <div class="card-body">
                    <h5 class="card-title">${item.name}</h5>
                    <p class="card-text text-muted">Added on ${formatDate(item.dateAdded)}</p>
                    <button onclick="removeFromBucket(${item.id})" class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-trash"></i> Remove
                    </button>
                </div>
            </div>
        </div>
    `).join('');
}

// =========================
// INITIALIZE ON SPECIFIC PAGES
// =========================
window.addEventListener('load', function() {
    // Initialize bucket list page
    if (window.location.pathname.includes('bucket.php')) {
        renderBucketList();
    }

    // Initialize tour filtering
    if (window.location.pathname.includes('tours.php')) {
        // Set up filter buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter');
                filterTours(filter);
            });
        });
    }

    // Update button states based on bucket list
    document.querySelectorAll('.add-to-bucket').forEach(button => {
        const itemName = button.getAttribute('data-item');
        const isInBucket = bucketList.some(item => item.name === itemName);
        if (isInBucket) {
            updateButtonState(button, true);
        }
    });
});

// =========================
// EXPORT FUNCTIONS FOR GLOBAL ACCESS
// =========================
window.changeSlide = changeSlide;
window.addToBucket = addToBucket;
window.removeFromBucket = removeFromBucket;
window.clearBucketList = clearBucketList;
window.filterTours = filterTours;
window.openGallery = openGallery;
window.submitContactForm = submitContactForm;
window.renderBucketList = renderBucketList;