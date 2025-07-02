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
                    <i class="fas fa-question-circle me-3"></i>Frequently Asked Questions
                </h1>
                <p class="lead">Everything you need to know about traveling to Indonesia with RedTravel Adventures</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="hero-contact">
                    <div class="contact-item mb-2">
                        <i class="fas fa-phone me-2"></i>
                        <span><?php echo $lang['contact']['phone']; ?></span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope me-2"></i>
                        <span><?php echo $lang['contact']['email']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Search -->
<section class="faq-search py-4 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" id="faqSearch" placeholder="Search frequently asked questions...">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Categories -->
<section class="faq-categories py-3 bg-light">
    <div class="container">
        <div class="category-filter text-center">
            <button class="btn btn-outline-primary category-btn active" data-category="all">All Questions</button>
            <button class="btn btn-outline-primary category-btn" data-category="booking">Booking & Payment</button>
            <button class="btn btn-outline-primary category-btn" data-category="travel">Travel Information</button>
            <button class="btn btn-outline-primary category-btn" data-category="tours">Tours & Itineraries</button>
            <button class="btn btn-outline-primary category-btn" data-category="safety">Health & Safety</button>
            <button class="btn btn-outline-primary category-btn" data-category="general">General Information</button>
        </div>
    </div>
</section>

<!-- FAQ Content -->
<section class="faq-content py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Booking & Payment -->
                <div class="faq-category" data-category="booking">
                    <h3 class="category-title">
                        <i class="fas fa-credit-card text-primary me-2"></i>Booking & Payment
                    </h3>

                    <div class="accordion" id="bookingFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#booking1">
                                    How do I book a tour with RedTravel Adventures?
                                </button>
                            </h2>
                            <div id="booking1" class="accordion-collapse collapse show" data-bs-parent="#bookingFAQ">
                                <div class="accordion-body">
                                    You can book through our website, call us directly, or visit our office in Ubud. We require a 25% deposit to secure your booking, with the balance due 30 days before departure. We accept credit cards, bank transfers, and PayPal.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#booking2">
                                    What is your cancellation policy?
                                </button>
                            </h2>
                            <div id="booking2" class="accordion-collapse collapse" data-bs-parent="#bookingFAQ">
                                <div class="accordion-body">
                                    Cancellations 45+ days before departure: 10% fee. 30-44 days: 25% fee. 15-29 days: 50% fee. Less than 15 days: 100% fee. We strongly recommend travel insurance to protect your investment.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#booking3">
                                    Do you offer group discounts?
                                </button>
                            </h2>
                            <div id="booking3" class="accordion-collapse collapse" data-bs-parent="#bookingFAQ">
                                <div class="accordion-body">
                                    Yes! Groups of 6+ people receive a 10% discount, and groups of 10+ receive a 15% discount. Contact us for custom group pricing and special arrangements.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Travel Information -->
                <div class="faq-category" data-category="travel">
                    <h3 class="category-title">
                        <i class="fas fa-plane text-primary me-2"></i>Travel Information
                    </h3>

                    <div class="accordion" id="travelFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#travel1">
                                    Do I need a visa to visit Indonesia?
                                </button>
                            </h2>
                            <div id="travel1" class="accordion-collapse collapse" data-bs-parent="#travelFAQ">
                                <div class="accordion-body">
                                    Most nationalities can obtain a 30-day visa on arrival for $35 USD, or apply for a free 30-day visa exemption online. For longer stays, you may need a different visa type. Check with Indonesian consulates for your specific requirements.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#travel2">
                                    What's the best time to visit Indonesia?
                                </button>
                            </h2>
                            <div id="travel2" class="accordion-collapse collapse" data-bs-parent="#travelFAQ">
                                <div class="accordion-body">
                                    Indonesia has a tropical climate year-round. Dry season (April-October) is best for most activities. Wet season (November-March) has afternoon showers but is great for surfing and fewer crowds. Each region has slightly different patterns.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#travel3">
                                    What should I pack for Indonesia?
                                </button>
                            </h2>
                            <div id="travel3" class="accordion-collapse collapse" data-bs-parent="#travelFAQ">
                                <div class="accordion-body">
                                    Light, breathable clothing, sunscreen, insect repellent, comfortable walking shoes, rain jacket, modest clothing for temples, swimwear, and any personal medications. We'll provide a detailed packing list with your tour confirmation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tours & Itineraries -->
                <div class="faq-category" data-category="tours">
                    <h3 class="category-title">
                        <i class="fas fa-route text-primary me-2"></i>Tours & Itineraries
                    </h3>

                    <div class="accordion" id="toursFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tours1">
                                    Can you customize existing tours?
                                </button>
                            </h2>
                            <div id="tours1" class="accordion-collapse collapse" data-bs-parent="#toursFAQ">
                                <div class="accordion-body">
                                    Absolutely! All our tours can be customized to your preferences, budget, and schedule. We can add extra days, change accommodations, include special activities, or modify the itinerary to suit your interests.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tours2">
                                    What's included in the tour price?
                                </button>
                            </h2>
                            <div id="tours2" class="accordion-collapse collapse" data-bs-parent="#toursFAQ">
                                <div class="accordion-body">
                                    Tour prices typically include accommodations, daily breakfast, transportation, English-speaking guide, entrance fees, and specified activities. International flights, travel insurance, personal expenses, and tips are usually not included.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tours3">
                                    What size are your tour groups?
                                </button>
                            </h2>
                            <div id="tours3" class="accordion-collapse collapse" data-bs-parent="#toursFAQ">
                                <div class="accordion-body">
                                    We keep groups small for a more personal experience. Most group tours have 6-12 people maximum. We also offer private tours for couples or families who prefer a more exclusive experience.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Health & Safety -->
                <div class="faq-category" data-category="safety">
                    <h3 class="category-title">
                        <i class="fas fa-shield-alt text-primary me-2"></i>Health & Safety
                    </h3>

                    <div class="accordion" id="safetyFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#safety1">
                                    Do I need vaccinations for Indonesia?
                                </button>
                            </h2>
                            <div id="safety1" class="accordion-collapse collapse" data-bs-parent="#safetyFAQ">
                                <div class="accordion-body">
                                    No vaccinations are mandatory, but Hepatitis A & B, Typhoid, and Japanese Encephalitis are recommended. Malaria prophylaxis may be needed for certain remote areas. Consult your doctor or travel clinic 6-8 weeks before departure.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#safety2">
                                    Is Indonesia safe for tourists?
                                </button>
                            </h2>
                            <div id="safety2" class="accordion-collapse collapse" data-bs-parent="#safetyFAQ">
                                <div class="accordion-body">
                                    Yes, Indonesia is generally very safe for tourists. We work with experienced local guides, use reputable accommodations, and maintain high safety standards. Our guides are trained in first aid and emergency procedures.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#safety3">
                                    What about travel insurance?
                                </button>
                            </h2>
                            <div id="safety3" class="accordion-collapse collapse" data-bs-parent="#safetyFAQ">
                                <div class="accordion-body">
                                    Travel insurance is strongly recommended and covers medical emergencies, trip cancellation, lost luggage, and emergency evacuation. We can recommend reliable insurance providers or you can purchase through your preferred company.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- General Information -->
                <div class="faq-category" data-category="general">
                    <h3 class="category-title">
                        <i class="fas fa-info-circle text-primary me-2"></i>General Information
                    </h3>

                    <div class="accordion" id="generalFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general1">
                                    What currency is used in Indonesia?
                                </button>
                            </h2>
                            <div id="general1" class="accordion-collapse collapse" data-bs-parent="#generalFAQ">
                                <div class="accordion-body">
                                    Indonesian Rupiah (IDR) is the local currency. USD and EUR are widely accepted in tourist areas. ATMs are common in cities and tourist areas. Credit cards are accepted in hotels and restaurants, but carry cash for small vendors and remote areas.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general2">
                                    What languages are spoken in Indonesia?
                                </button>
                            </h2>
                            <div id="general2" class="accordion-collapse collapse" data-bs-parent="#generalFAQ">
                                <div class="accordion-body">
                                    Bahasa Indonesia is the official language. English is widely spoken in tourist areas, hotels, and restaurants. Our guides are fluent in English. Learning a few basic Indonesian phrases is appreciated by locals.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general3">
                                    How is the internet connectivity in Indonesia?
                                </button>
                            </h2>
                            <div id="general3" class="accordion-collapse collapse" data-bs-parent="#generalFAQ">
                                <div class="accordion-body">
                                    WiFi is available in most hotels, restaurants, and cafes in tourist areas. 4G coverage is good in cities and popular destinations. Remote areas may have limited connectivity. We recommend purchasing a local SIM card for reliable mobile data.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Help -->
<section class="quick-help py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Still Have Questions?</h2>
            <p class="section-description">Our team is here to help you plan your perfect Indonesian adventure</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="help-card text-center">
                    <div class="help-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h4>Call Us</h4>
                    <p>Speak directly with our travel experts</p>
                    <a href="tel:<?php echo $lang['contact']['phone']; ?>" class="btn btn-primary">
                        <?php echo $lang['contact']['phone']; ?>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="help-card text-center">
                    <div class="help-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>Email Us</h4>
                    <p>Send us your questions and we'll respond within 24 hours</p>
                    <a href="mailto:<?php echo $lang['contact']['email']; ?>" class="btn btn-primary">
                        Send Email
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="help-card text-center">
                    <div class="help-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h4>Live Chat</h4>
                    <p>Chat with our team during business hours</p>
                    <button class="btn btn-primary" onclick="openLiveChat()">
                        Start Chat
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Tours CTA -->
<section class="popular-tours-cta py-5">
    <div class="container">
        <div class="cta-content text-center">
            <h2 class="section-title">Ready to Explore Indonesia?</h2>
            <p class="section-description">Browse our most popular tours and start planning your adventure</p>
            <div class="cta-buttons">
                <a href="tours.php" class="btn btn-primary btn-lg me-3">
                    <i class="fas fa-search"></i> Browse Tours
                </a>
                <a href="contact.php" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-phone"></i> Contact Us
                </a>
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

.hero-contact {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    padding: 1.5rem;
    backdrop-filter: blur(10px);
}

.contact-item {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.1rem;
}

.search-box {
    background: white;
    border-radius: 50px;
    padding: 0.5rem;
    box-shadow: var(--shadow);
}

.search-box .form-control {
    border: none;
    background: transparent;
    border-radius: 50px;
    padding: 1rem 1.5rem;
}

.search-box .form-control:focus {
    box-shadow: none;
    outline: none;
}

.search-box .btn {
    border-radius: 50px;
    padding: 1rem 2rem;
}

.category-filter {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    justify-content: center;
}

.category-btn {
    border-radius: 25px;
    transition: all 0.3s ease;
}

.category-btn.active {
    background-color: var(--primary-red);
    border-color: var(--primary-red);
    color: white;
}

.faq-category {
    margin-bottom: 3rem;
}

.category-title {
    color: var(--text-dark);
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid var(--primary-red);
}

.accordion-button {
    font-weight: 600;
    color: var(--text-dark);
    background-color: var(--bg-light);
}

.accordion-button:not(.collapsed) {
    background-color: var(--primary-red);
    color: white;
}

.accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(179, 0, 0, 0.25);
}

.accordion-item {
    border: 1px solid var(--border-light);
    margin-bottom: 0.5rem;
    border-radius: 10px;
    overflow: hidden;
}

.accordion-body {
    background-color: white;
    line-height: 1.7;
}

.help-card {
    background: white;
    padding: 2.5rem 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
    transition: transform 0.3s ease;
    height: 100%;
}

.help-card:hover {
    transform: translateY(-5px);
}

.help-icon {
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

.cta-content {
    background: white;
    padding: 4rem 3rem;
    border-radius: 20px;
    box-shadow: var(--shadow-lg);
}

.cta-buttons {
    margin-top: 2rem;
}

@media (max-width: 768px) {
    .category-filter {
        flex-direction: column;
        align-items: center;
    }

    .category-btn {
        width: 100%;
        max-width: 300px;
    }

    .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        align-items: center;
    }

    .cta-buttons .btn {
        width: 100%;
        max-width: 300px;
    }
}
</style>

<script>
// FAQ Search functionality
document.getElementById('faqSearch').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
        const question = item.querySelector('.accordion-button').textContent.toLowerCase();
        const answer = item.querySelector('.accordion-body').textContent.toLowerCase();

        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
            item.style.display = 'block';
        } else {
            item.style.display = searchTerm ? 'none' : 'block';
        }
    });
});

// Category filtering
document.querySelectorAll('.category-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const category = this.getAttribute('data-category');

        // Update active button
        document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        // Show/hide categories
        document.querySelectorAll('.faq-category').forEach(cat => {
            if (category === 'all') {
                cat.style.display = 'block';
            } else {
                const catCategory = cat.getAttribute('data-category');
                cat.style.display = catCategory === category ? 'block' : 'none';
            }
        });
    });
});

// Live chat functionality (simulated)
function openLiveChat() {
    showToast('Live chat feature coming soon! Please call or email us for immediate assistance.', 'info');
}

// Initialize with all categories visible
document.addEventListener('DOMContentLoaded', function() {
    // Set initial state
    document.querySelectorAll('.faq-category').forEach(cat => {
        cat.style.display = 'block';
    });
});
</script>

<?php include 'includes/footer.php'; ?>
