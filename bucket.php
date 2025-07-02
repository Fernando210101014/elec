<?php
session_start();

// Set default language
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

// Handle language switching
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'id'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Load language file
$lang = include "lang/{$_SESSION['lang']}.php";

include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-heart me-3"></i><?php echo $lang['nav']['bucket_list']; ?>
                </h1>
                <p class="lead">Save your favorite tours and experiences to plan your perfect Indonesian adventure.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="bucket-stats">
                    <div class="stat-item">
                        <span class="stat-number" id="bucketStatsCount">0</span>
                        <span class="stat-label">Saved Tours</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bucket List Content -->
<section class="bucket-content py-5">
    <div class="container">
        <!-- Bucket List Header -->
        <div class="bucket-header mb-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="section-title mb-0">Your Saved Experiences</h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <button class="btn btn-outline-danger" onclick="clearBucketList()" id="clearAllBtn" style="display: none;">
                        <i class="fas fa-trash"></i> <?php echo $lang['common']['clear_all']; ?>
                    </button>
                </div>
            </div>
        </div>

        <!-- Bucket List Items -->
        <div class="row g-4" id="bucketListContainer">
            <!-- Items will be loaded by JavaScript -->
        </div>

        <!-- Send Request Section -->
        <div class="send-request-section mt-5" id="sendRequestSection" style="display: none;">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title mb-0">
                        <i class="fas fa-paper-plane me-2"></i>Ready to Book Your Adventure?
                    </h4>
                </div>
                <div class="card-body">
                    <p class="card-text">Send us your bucket list and we'll create a customized itinerary with the best prices and recommendations.</p>

                    <form id="bucketRequestForm" onsubmit="submitBucketRequest(event)">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" name="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Preferred Travel Dates</label>
                                <input type="text" class="form-control" name="travel_dates" placeholder="e.g., June 2024">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Budget Range (Optional)</label>
                            <select class="form-select" name="budget">
                                <option value="">Select budget range...</option>
                                <option value="budget">Budget (Under $1,000)</option>
                                <option value="mid-range">Mid-range ($1,000 - $3,000)</option>
                                <option value="luxury">Luxury ($3,000+)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Additional Requests</label>
                            <textarea class="form-control" name="requests" rows="3" placeholder="Any special requirements, dietary needs, or preferences..."></textarea>
                        </div>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Our travel experts will review your bucket list and contact you within 24 hours with a personalized itinerary and quote.
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-paper-plane"></i> <?php echo $lang['common']['send_request']; ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recommended Tours -->
<section class="recommended-tours py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Discover More Adventures</h2>
            <p class="section-description">Add more amazing experiences to your bucket list</p>
        </div>

        <div class="row g-4">
            <?php foreach (array_slice($lang['tours'], 0, 3) as $tour): ?>
            <div class="col-lg-4 col-md-6">
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="<?php echo $tour['image']; ?>" alt="<?php echo $tour['name']; ?>" class="img-fluid">
                        <?php if ($tour['featured']): ?>
                        <span class="tour-badge"><?php echo $lang['common']['featured']; ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="tour-content">
                        <span class="tour-duration"><?php echo $tour['duration']; ?></span>
                        <h3 class="tour-title"><?php echo $tour['name']; ?></h3>
                        <p class="tour-description"><?php echo $tour['short_description']; ?></p>
                        <div class="tour-price">
                            <span class="price-from"><?php echo $lang['common']['from']; ?></span>
                            <span class="price-amount"><?php echo $tour['price_display']; ?></span>
                        </div>
                        <div class="tour-actions">
                            <a href="tour-detail.php?id=<?php echo $tour['id']; ?>" class="btn btn-outline-primary">
                                <?php echo $lang['common']['view_details']; ?>
                            </a>
                            <button class="btn btn-primary add-to-bucket" data-item="<?php echo $tour['name']; ?>">
                                <?php echo $lang['common']['add_to_bucket']; ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-4">
            <a href="tours.php" class="btn btn-primary btn-lg">
                <?php echo $lang['common']['view_all_tours']; ?>
            </a>
        </div>
    </div>
</section>

<style>
.page-hero {
    margin-top: -76px;
    padding-top: 150px;
    background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
}

.bucket-stats {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    padding: 2rem;
    text-align: center;
    backdrop-filter: blur(10px);
}

.stat-number {
    display: block;
    font-size: 3rem;
    font-weight: bold;
    color: white;
}

.stat-label {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.9);
}

.bucket-item {
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.bucket-item:hover {
    transform: translateY(-5px);
    border-color: var(--primary-red);
    box-shadow: 0 0.5rem 1rem rgba(179, 0, 0, 0.2);
}

.bucket-item-image {
    height: 200px;
    overflow: hidden;
    border-radius: 10px;
}

.bucket-item-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.bucket-item:hover .bucket-item-image img {
    transform: scale(1.1);
}

.bucket-item-content {
    padding: 1.5rem;
}

.bucket-item-title {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: var(--text-dark);
}

.bucket-item-date {
    font-size: 0.9rem;
    color: var(--text-gray);
    margin-bottom: 1rem;
}

.bucket-actions {
    display: flex;
    gap: 0.5rem;
    justify-content: space-between;
}

.send-request-section {
    animation: fadeInUp 0.6s ease-out;
}

.empty-bucket {
    text-align: center;
    padding: 4rem 2rem;
}

.empty-bucket i {
    font-size: 5rem;
    color: var(--text-gray);
    margin-bottom: 2rem;
}

.empty-bucket h3 {
    color: var(--text-gray);
    margin-bottom: 1rem;
}

.empty-bucket p {
    color: var(--text-gray);
    margin-bottom: 2rem;
}
</style>

<script>
// Initialize bucket list page
document.addEventListener('DOMContentLoaded', function() {
    renderBucketList();
    updateBucketStats();
});

function renderBucketList() {
    const container = document.getElementById('bucketListContainer');
    const sendRequestSection = document.getElementById('sendRequestSection');
    const clearAllBtn = document.getElementById('clearAllBtn');

    if (bucketList.length === 0) {
        container.innerHTML = `
            <div class="col-12">
                <div class="empty-bucket">
                    <i class="fas fa-heart"></i>
                    <h3>Your bucket list is empty</h3>
                    <p>Start exploring our amazing tours and add your favorites to create your dream Indonesian adventure!</p>
                    <a href="tours.php" class="btn btn-primary btn-lg">
                        <i class="fas fa-search"></i> Browse Tours
                    </a>
                </div>
            </div>
        `;
        sendRequestSection.style.display = 'none';
        clearAllBtn.style.display = 'none';
        return;
    }

    container.innerHTML = bucketList.map(item => `
        <div class="col-lg-4 col-md-6">
            <div class="card bucket-item h-100">
                <div class="bucket-item-image">
                    <img src="https://ext.same-assets.com/3037775497/3480226330.jpeg" alt="${item.name}" class="img-fluid">
                </div>
                <div class="bucket-item-content">
                    <h3 class="bucket-item-title">${item.name}</h3>
                    <p class="bucket-item-date">
                        <i class="fas fa-calendar me-2"></i>Added on ${formatDate(item.dateAdded)}
                    </p>
                    <div class="bucket-actions">
                        <a href="tours.php" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-eye"></i> View Details
                        </a>
                        <button onclick="removeFromBucket(${item.id})" class="btn btn-outline-danger btn-sm">
                            <i class="fas fa-trash"></i> ${document.querySelector('[data-lang="remove"]')?.textContent || 'Remove'}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `).join('');

    sendRequestSection.style.display = 'block';
    clearAllBtn.style.display = 'inline-block';
}

function updateBucketStats() {
    const statsCount = document.getElementById('bucketStatsCount');
    if (statsCount) {
        statsCount.textContent = bucketList.length;
    }
}

function submitBucketRequest(event) {
    event.preventDefault();

    if (bucketList.length === 0) {
        showToast('Please add some tours to your bucket list first.', 'warning');
        return;
    }

    const form = event.target;
    const formData = new FormData(form);

    // Basic validation
    const name = formData.get('name');
    const email = formData.get('email');

    if (!name || !email) {
        showToast('Please fill in your name and email address.', 'warning');
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

    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending Request...';
    submitBtn.disabled = true;

    setTimeout(() => {
        showToast('Request sent successfully! Our team will contact you within 24 hours with a customized itinerary.', 'success');
        form.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;

        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }, 2000);
}

// Override the removeFromBucket function to update the page
const originalRemoveFromBucket = window.removeFromBucket;
window.removeFromBucket = function(itemId) {
    originalRemoveFromBucket(itemId);
    renderBucketList();
    updateBucketStats();
};

// Override the clearBucketList function to update the page
const originalClearBucketList = window.clearBucketList;
window.clearBucketList = function() {
    if (confirm('Are you sure you want to clear your entire bucket list?')) {
        bucketList = [];
        localStorage.setItem('bucketList', JSON.stringify(bucketList));
        updateBucketCount();
        renderBucketList();
        updateBucketStats();
        showToast('Bucket list cleared!', 'info');
    }
};
</script>

<?php include 'includes/footer.php'; ?>
