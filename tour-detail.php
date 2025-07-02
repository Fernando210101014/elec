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

// Get tour ID from URL
$tour_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Find the tour (you could also extend this with database lookup)
$tour = null;
foreach ($lang['tours'] as $t) {
    if ($t['id'] == $tour_id) {
        $tour = $t;
        break;
    }
}

// If tour not found, redirect to tours page
if (!$tour) {
    header('Location: tours.php');
    exit;
}

include 'includes/header.php';
?>

<!-- Tour Hero Section -->
<section class="tour-hero" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo $tour['image']; ?>');">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-8">
                <div class="tour-hero-content text-white">
                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white-50"><?php echo $lang['nav']['home']; ?></a></li>
                            <li class="breadcrumb-item"><a href="tours.php" class="text-white-50"><?php echo $lang['nav']['tours']; ?></a></li>
                            <li class="breadcrumb-item active text-white"><?php echo $tour['name']; ?></li>
                        </ol>
                    </nav>

                    <?php if ($tour['featured']): ?>
                    <span class="badge bg-primary mb-3 fs-6"><?php echo $lang['common']['featured']; ?></span>
                    <?php endif; ?>

                    <h1 class="display-4 fw-bold mb-3"><?php echo $tour['name']; ?></h1>
                    <p class="lead mb-4"><?php echo $tour['short_description']; ?></p>

                    <div class="tour-meta d-flex flex-wrap gap-4 mb-4">
                        <div class="meta-item">
                            <i class="fas fa-clock text-primary"></i>
                            <span class="ms-2"><?php echo $tour['duration']; ?></span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-tag text-primary"></i>
                            <span class="ms-2"><?php echo $tour['category']; ?></span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-dollar-sign text-primary"></i>
                            <span class="ms-2"><?php echo $lang['common']['from']; ?> <?php echo $tour['price_display']; ?></span>
                        </div>
                    </div>

                    <div class="hero-actions">
                        <button class="btn btn-primary btn-lg me-3" data-bs-toggle="modal" data-bs-target="#bookingModal">
                            <i class="fas fa-calendar-alt"></i> <?php echo $lang['common']['book_now']; ?>
                        </button>
                        <button class="btn btn-outline-light btn-lg add-to-bucket" data-item="<?php echo $tour['name']; ?>">
                            <i class="fas fa-heart"></i> <?php echo $lang['common']['add_to_bucket']; ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tour Details -->
<section class="tour-details py-5">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Tour Overview -->
                <div class="tour-section mb-5">
                    <h2 class="section-title">Tour Overview</h2>
                    <p class="lead"><?php echo $tour['short_description']; ?></p>
                    <p>Experience the beauty and culture of Indonesia with this carefully crafted tour that combines the best destinations, comfortable accommodations, and expert local guides.</p>
                </div>

                <!-- Itinerary -->
                <div class="tour-section mb-5">
                    <h2 class="section-title"><?php echo $lang['common']['itinerary']; ?></h2>
                    <div class="itinerary-container">
                        <?php foreach ($tour['itinerary'] as $index => $day): ?>
                        <div class="itinerary-item">
                            <div class="itinerary-day">
                                <div class="day-number"><?php echo $index + 1; ?></div>
                            </div>
                            <div class="itinerary-content">
                                <h5 class="itinerary-title"><?php echo $day; ?></h5>
                                <p class="itinerary-description">
                                    Detailed activities and experiences for this day of your journey through Indonesia.
                                </p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Photo Gallery -->
                <div class="tour-section mb-5">
                    <h2 class="section-title"><?php echo $lang['common']['gallery']; ?></h2>
                    <div class="gallery-grid">
                        <?php foreach ($tour['gallery'] as $index => $image): ?>
                        <div class="gallery-item" onclick="openGallery('<?php echo $image; ?>', '<?php echo $tour['name']; ?> - Image <?php echo $index + 1; ?>')">
                            <img src="<?php echo $image; ?>" alt="<?php echo $tour['name']; ?>" class="img-fluid">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Includes -->
                <div class="tour-section mb-5">
                    <h2 class="section-title"><?php echo $lang['common']['includes']; ?></h2>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-success mb-3"><i class="fas fa-check-circle"></i> Included</h5>
                            <ul class="includes-list">
                                <?php foreach ($tour['includes'] as $include): ?>
                                <li><i class="fas fa-check text-success"></i> <?php echo $include; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-warning mb-3"><i class="fas fa-exclamation-circle"></i> Not Included</h5>
                            <ul class="includes-list">
                                <li><i class="fas fa-times text-warning"></i> International flights</li>
                                <li><i class="fas fa-times text-warning"></i> Travel insurance</li>
                                <li><i class="fas fa-times text-warning"></i> Personal expenses</li>
                                <li><i class="fas fa-times text-warning"></i> Tips and gratuities</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="tour-sidebar">
                    <!-- Booking Card -->
                    <div class="booking-card bg-light p-4 rounded-lg mb-4">
                        <h4 class="booking-title mb-3">Book This Tour</h4>
                        <div class="price-display mb-3">
                            <span class="price-label"><?php echo $lang['common']['from']; ?></span>
                            <span class="price-amount"><?php echo $tour['price_display']; ?></span>
                            <span class="price-note">per person</span>
                        </div>

                        <div class="booking-form">
                            <div class="mb-3">
                                <label class="form-label">Departure Date</label>
                                <input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Travelers</label>
                                <select class="form-select">
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4+ Adults</option>
                                </select>
                            </div>
                            <button class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                <i class="fas fa-calendar-alt"></i> Book Now
                            </button>
                            <button class="btn btn-outline-primary w-100 add-to-bucket" data-item="<?php echo $tour['name']; ?>">
                                <i class="fas fa-heart"></i> Add to Bucket List
                            </button>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="contact-card bg-primary text-white p-4 rounded-lg mb-4">
                        <h5 class="mb-3">Need Help?</h5>
                        <div class="contact-item mb-2">
                            <i class="fas fa-phone me-2"></i>
                            <span><?php echo $lang['contact']['phone']; ?></span>
                        </div>
                        <div class="contact-item mb-3">
                            <i class="fas fa-envelope me-2"></i>
                            <span><?php echo $lang['contact']['email']; ?></span>
                        </div>
                        <a href="contact.php" class="btn btn-light btn-sm">
                            <i class="fas fa-comments"></i> Contact Us
                        </a>
                    </div>

                    <!-- Share -->
                    <div class="share-card p-4 border rounded-lg">
                        <h5 class="mb-3">Share This Tour</h5>
                        <div class="share-buttons">
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-outline-info btn-sm">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-outline-success btn-sm">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Tours -->
<section class="related-tours py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">You Might Also Like</h2>
        <div class="row g-4">
            <?php
            $related_tours = array_filter($lang['tours'], function($t) use ($tour) {
                return $t['id'] != $tour['id'] && $t['category'] == $tour['category'];
            });
            $related_tours = array_slice($related_tours, 0, 3);

            foreach ($related_tours as $related_tour): ?>
            <div class="col-lg-4 col-md-6">
                <div class="tour-card">
                    <div class="tour-image">
                        <img src="<?php echo $related_tour['image']; ?>" alt="<?php echo $related_tour['name']; ?>" class="img-fluid">
                    </div>
                    <div class="tour-content">
                        <span class="tour-duration"><?php echo $related_tour['duration']; ?></span>
                        <h3 class="tour-title"><?php echo $related_tour['name']; ?></h3>
                        <p class="tour-description"><?php echo $related_tour['short_description']; ?></p>
                        <div class="tour-price">
                            <span class="price-from"><?php echo $lang['common']['from']; ?></span>
                            <span class="price-amount"><?php echo $related_tour['price_display']; ?></span>
                        </div>
                        <div class="tour-actions">
                            <a href="tour-detail.php?id=<?php echo $related_tour['id']; ?>" class="btn btn-outline-primary">
                                <?php echo $lang['common']['view_details']; ?>
                            </a>
                            <button class="btn btn-primary add-to-bucket" data-item="<?php echo $related_tour['name']; ?>">
                                <?php echo $lang['common']['add_to_bucket']; ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Book Tour: <?php echo $tour['name']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="bookingForm" onsubmit="submitBooking(event)">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Full Name *</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email *</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-control" name="phone" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nationality</label>
                            <input type="text" class="form-control" name="nationality">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Departure Date *</label>
                            <input type="date" class="form-control" name="departure_date" min="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Number of Travelers *</label>
                            <select class="form-select" name="travelers" required>
                                <option value="">Select...</option>
                                <option value="1">1 Adult</option>
                                <option value="2">2 Adults</option>
                                <option value="3">3 Adults</option>
                                <option value="4">4+ Adults</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Special Requests</label>
                        <textarea class="form-control" name="requests" rows="3" placeholder="Any special dietary requirements, accessibility needs, or other requests..."></textarea>
                    </div>
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i>
                        This is a booking inquiry. Our team will contact you within 24 hours to confirm availability and provide payment details.
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="bookingForm" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i> Submit Booking Request
                </button>
            </div>
        </div>
    </div>
</div>

<style>
.tour-hero {
    min-height: 100vh;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    display: flex;
    align-items: center;
    margin-top: -76px;
    padding-top: 76px;
}

.breadcrumb {
    background: none;
    padding: 0;
}

.breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, 0.5);
}

.tour-meta {
    font-size: 1.1rem;
}

.meta-item {
    display: flex;
    align-items: center;
    color: rgba(255, 255, 255, 0.9);
}

.itinerary-container {
    position: relative;
}

.itinerary-item {
    display: flex;
    margin-bottom: 2rem;
    position: relative;
}

.itinerary-item::before {
    content: '';
    position: absolute;
    left: 30px;
    top: 60px;
    bottom: -30px;
    width: 2px;
    background: var(--primary-red);
}

.itinerary-item:last-child::before {
    display: none;
}

.itinerary-day {
    flex-shrink: 0;
    margin-right: 1.5rem;
}

.day-number {
    width: 60px;
    height: 60px;
    background: var(--primary-red);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2rem;
}

.itinerary-content {
    flex: 1;
    padding-top: 0.5rem;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
}

.gallery-item {
    position: relative;
    aspect-ratio: 4/3;
    overflow: hidden;
    border-radius: 10px;
    cursor: pointer;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    color: white;
    font-size: 1.5rem;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.includes-list {
    list-style: none;
    padding: 0;
}

.includes-list li {
    padding: 0.5rem 0;
    display: flex;
    align-items: center;
}

.includes-list i {
    margin-right: 0.5rem;
    width: 16px;
}

.tour-sidebar {
    position: sticky;
    top: 100px;
}

.booking-card {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
}

.price-display {
    text-align: center;
    border: 2px solid var(--primary-red);
    border-radius: 10px;
    padding: 1rem;
}

.price-amount {
    display: block;
    font-size: 2rem;
    font-weight: bold;
    color: var(--primary-red);
}

.price-label,
.price-note {
    font-size: 0.9rem;
    color: var(--text-gray);
}

.share-buttons {
    display: flex;
    gap: 0.5rem;
}

.contact-item {
    display: flex;
    align-items: center;
}

@media (max-width: 768px) {
    .tour-hero {
        background-attachment: scroll;
        min-height: 70vh;
    }

    .hero-actions {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .tour-sidebar {
        position: static;
        top: auto;
        margin-top: 2rem;
    }
}
</style>

<script>
function submitBooking(event) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);

    // Basic validation
    const requiredFields = ['name', 'email', 'phone', 'departure_date', 'travelers'];
    let isValid = true;

    requiredFields.forEach(field => {
        if (!formData.get(field)) {
            isValid = false;
        }
    });

    if (!isValid) {
        showToast('Please fill in all required fields.', 'warning');
        return;
    }

    // Simulate form submission
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;

    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
    submitBtn.disabled = true;

    setTimeout(() => {
        showToast('Booking request submitted successfully! We\'ll contact you within 24 hours.', 'success');
        bootstrap.Modal.getInstance(document.getElementById('bookingModal')).hide();
        form.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 2000);
}
</script>

<?php include 'includes/footer.php'; ?>
