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
                    <i class="fas fa-phone me-3"></i><?php echo $lang['contact']['title']; ?>
                </h1>
                <p class="lead"><?php echo $lang['contact']['subtitle']; ?></p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="contact-hero-icon">
                    <i class="fas fa-envelope" style="font-size: 6rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="contact-info py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4>Office Address</h4>
                    <p><?php echo $lang['contact']['address']; ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h4>Phone Number</h4>
                    <p><a href="tel:<?php echo $lang['contact']['phone']; ?>"><?php echo $lang['contact']['phone']; ?></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>Email Address</h4>
                    <p><a href="mailto:<?php echo $lang['contact']['email']; ?>"><?php echo $lang['contact']['email']; ?></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4>Office Hours</h4>
                    <p><?php echo $lang['contact']['hours']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map -->
<section class="contact-form-section py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact-form-container">
                    <h2 class="section-title mb-4">Send Us a Message</h2>
                    <p class="text-muted mb-4">Have questions about our tours or need a custom itinerary? We'd love to hear from you!</p>

                    <form id="contactForm" onsubmit="submitContactForm(event)">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><?php echo $lang['contact']['form']['name']; ?> *</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><?php echo $lang['contact']['form']['email']; ?> *</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><?php echo $lang['contact']['form']['phone']; ?></label>
                                <input type="tel" class="form-control" name="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><?php echo $lang['contact']['form']['subject']; ?></label>
                                <select class="form-select" name="subject">
                                    <option value="">Select a topic...</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="booking">Tour Booking</option>
                                    <option value="custom">Custom Itinerary</option>
                                    <option value="support">Customer Support</option>
                                    <option value="partnership">Partnership</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><?php echo $lang['contact']['form']['message']; ?> *</label>
                            <textarea class="form-control" name="message" rows="6" required placeholder="Tell us about your travel plans, questions, or how we can help you..."></textarea>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="newsletterCheck" name="newsletter">
                                <label class="form-check-label" for="newsletterCheck">
                                    Subscribe to our newsletter for travel tips and special offers
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-paper-plane"></i> <?php echo $lang['contact']['form']['submit']; ?>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Map & Additional Info -->
            <div class="col-lg-6">
                <div class="map-container mb-4">
                    <h3 class="mb-3">Find Our Office</h3>
                    <div class="map-embed">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.2088848676813!2d115.26384431478227!3d-8.670458293842684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241e21b2fe90f%3A0xe8ebc5a96e27422c!2sUbud%2C%20Gianyar%20Regency%2C%20Bali%2C%20Indonesia!5e0!3m2!1sen!2s!4v1704366543762!5m2!1sen!2s"
                            width="100%"
                            height="350"
                            style="border:0; border-radius: 10px;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Quick Contact Options -->
                <div class="quick-contact">
                    <h3 class="mb-3">Quick Contact</h3>
                    <div class="quick-contact-options">
                        <a href="tel:<?php echo $lang['contact']['phone']; ?>" class="quick-contact-btn">
                            <i class="fas fa-phone"></i>
                            <div>
                                <span class="btn-title">Call Us Now</span>
                                <span class="btn-subtitle"><?php echo $lang['contact']['phone']; ?></span>
                            </div>
                        </a>

                        <a href="mailto:<?php echo $lang['contact']['email']; ?>" class="quick-contact-btn">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <span class="btn-title">Email Us</span>
                                <span class="btn-subtitle"><?php echo $lang['contact']['email']; ?></span>
                            </div>
                        </a>

                        <a href="https://wa.me/6236112345" target="_blank" class="quick-contact-btn">
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <span class="btn-title">WhatsApp</span>
                                <span class="btn-subtitle">Chat with us instantly</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Office Features -->
                <div class="office-features mt-4">
                    <h4 class="mb-3">Why Visit Our Office?</h4>
                    <ul class="features-list">
                        <li><i class="fas fa-check text-primary me-2"></i>Free travel consultation</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Browse photo albums of destinations</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Meet our experienced travel experts</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Comfortable meeting space with refreshments</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Free parking available</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="contact-faq py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-description">Quick answers to common questions about our tours and services</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="contactFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How far in advance should I book my tour?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                We recommend booking at least 2-4 weeks in advance, especially during peak seasons (June-August and December-January). This ensures better availability for accommodations and activities.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Do you offer custom itineraries?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Yes! We specialize in creating personalized itineraries based on your interests, budget, and travel dates. Contact us to discuss your dream Indonesian adventure.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What's included in the tour price?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Each tour includes different services. Generally, our tours include accommodations, daily breakfast, transportation, English-speaking guide, and entrance fees. Check individual tour details for specific inclusions.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Do you provide travel insurance?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                We strongly recommend travel insurance but it's not included in our tour prices. We can help you find suitable travel insurance options or you can purchase it independently.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What's your cancellation policy?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Our cancellation policy varies by tour and timing. Generally, cancellations 30+ days before departure incur minimal fees, while cancellations within 14 days may incur higher fees. Contact us for specific terms.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.page-hero {
    margin-top: -76px;
    padding-top: 150px;
    background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
}

.contact-info-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
    transition: all 0.3s ease;
    height: 100%;
}

.contact-info-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.contact-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary-red), var(--primary-red-light));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 2rem;
}

.contact-info-card h4 {
    color: var(--text-dark);
    margin-bottom: 1rem;
}

.contact-info-card p {
    color: var(--text-gray);
    margin: 0;
}

.contact-info-card a {
    color: var(--primary-red);
    text-decoration: none;
    font-weight: 500;
}

.contact-info-card a:hover {
    color: var(--primary-red-dark);
}

.contact-form-container {
    background: white;
    padding: 2.5rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
}

.form-control,
.form-select {
    border-radius: 10px;
    border: 2px solid var(--border-light);
    padding: 0.75rem 1rem;
    transition: border-color 0.3s ease;
}

.form-control:focus,
.form-select:focus {
    border-color: var(--primary-red);
    box-shadow: 0 0 0 0.2rem rgba(179, 0, 0, 0.25);
}

.map-embed {
    box-shadow: var(--shadow);
    border-radius: 10px;
    overflow: hidden;
}

.quick-contact {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
}

.quick-contact-options {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.quick-contact-btn {
    display: flex;
    align-items: center;
    padding: 1rem;
    background: var(--bg-light);
    border-radius: 10px;
    text-decoration: none;
    color: var(--text-dark);
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.quick-contact-btn:hover {
    background: var(--primary-red);
    color: white;
    transform: translateX(5px);
}

.quick-contact-btn i {
    font-size: 1.5rem;
    margin-right: 1rem;
    width: 30px;
    text-align: center;
}

.btn-title {
    display: block;
    font-weight: 600;
    font-size: 1.1rem;
}

.btn-subtitle {
    display: block;
    font-size: 0.9rem;
    opacity: 0.8;
}

.office-features {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
}

.features-list {
    list-style: none;
    padding: 0;
}

.features-list li {
    padding: 0.5rem 0;
    display: flex;
    align-items: center;
}

.accordion-button {
    font-weight: 600;
    color: var(--text-dark);
}

.accordion-button:not(.collapsed) {
    background-color: var(--primary-red);
    color: white;
}

.accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(179, 0, 0, 0.25);
}

@media (max-width: 768px) {
    .contact-form-container,
    .quick-contact,
    .office-features {
        margin-bottom: 2rem;
    }

    .quick-contact-options {
        gap: 0.75rem;
    }

    .quick-contact-btn {
        padding: 0.75rem;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
