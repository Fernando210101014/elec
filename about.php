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
                    <i class="fas fa-users me-3"></i><?php echo $lang['nav']['about']; ?> Us
                </h1>
                <p class="lead">Passionate about creating unforgettable Indonesian adventures since 2015</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="hero-stats">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="stat-item">
                                <span class="stat-number">2500+</span>
                                <span class="stat-label">Happy Travelers</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-item">
                                <span class="stat-number">150+</span>
                                <span class="stat-label">Tours Offered</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-item">
                                <span class="stat-number">8</span>
                                <span class="stat-label">Years Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Story -->
<section class="company-story py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="story-content">
                    <h2 class="section-title">Our Story</h2>
                    <p class="lead">Born from a passion for sharing Indonesia's incredible beauty and rich culture with the world.</p>
                    <p>RedTravel Adventures was founded in 2015 by a group of Indonesian travel enthusiasts who wanted to showcase the authentic beauty of their homeland. What started as a small local tour operator has grown into a leading travel agency specializing in unique Indonesian experiences.</p>
                    <p>We believe that travel should be transformative, connecting people with new cultures, breathtaking landscapes, and unforgettable memories. Our deep local knowledge and passion for exceptional service ensure that every journey with us becomes a story worth telling.</p>
                    <div class="story-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-heart text-primary"></i>
                            <span>Locally owned and operated</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-leaf text-primary"></i>
                            <span>Committed to sustainable tourism</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-users text-primary"></i>
                            <span>Supporting local communities</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="story-image">
                    <img src="https://ext.same-assets.com/3037775497/3480226330.jpeg" alt="Our Story" class="img-fluid rounded-lg">
                    <div class="image-badge">
                        <span>Established 2015</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="mission-vision py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To create authentic, sustainable, and transformative travel experiences that showcase the true beauty of Indonesia while supporting local communities and preserving our natural heritage.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To be Indonesia's most trusted travel partner, recognized for our commitment to excellence, sustainability, and authentic cultural experiences that create lasting memories.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Our Values</h3>
                    <ul class="values-list">
                        <li>Authenticity in every experience</li>
                        <li>Respect for local cultures</li>
                        <li>Environmental responsibility</li>
                        <li>Exceptional customer service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Meet Our Team</h2>
            <p class="section-description">The passionate people behind your Indonesian adventures</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://ext.same-assets.com/3037775497/407596124.jpeg" alt="Team Member" class="img-fluid">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Andi Wijaya</h4>
                        <span class="team-role">Founder & CEO</span>
                        <p>With 15 years in the tourism industry, Andi's vision drives our commitment to authentic Indonesian experiences.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://ext.same-assets.com/3037775497/3188466586.jpeg" alt="Team Member" class="img-fluid">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Sarah Chen</h4>
                        <span class="team-role">Head of Operations</span>
                        <p>Sarah ensures every tour runs smoothly with her attention to detail and operational excellence.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://ext.same-assets.com/3037775497/3490837470.jpeg" alt="Team Member" class="img-fluid">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Made Sutrisno</h4>
                        <span class="team-role">Cultural Experience Director</span>
                        <p>Made's deep knowledge of Indonesian culture creates authentic and meaningful experiences for our guests.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="team-image">
                        <img src="https://ext.same-assets.com/3037775497/2789562138.jpeg" alt="Team Member" class="img-fluid">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Lisa Thompson</h4>
                        <span class="team-role">Customer Experience Manager</span>
                        <p>Lisa's dedication to customer satisfaction ensures every traveler has an exceptional journey with us.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-us py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Why Choose RedTravel Adventures?</h2>
            <p class="section-description">What sets us apart in the Indonesian travel landscape</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h4>Local Expertise</h4>
                    <p>Our team consists of local experts who know Indonesia's hidden gems and can provide authentic insights into the culture and destinations.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4>Sustainable Tourism</h4>
                    <p>We're committed to responsible travel practices that protect Indonesia's environment and support local communities.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Safety First</h4>
                    <p>Your safety is our priority. We maintain the highest safety standards and work with certified partners throughout Indonesia.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4>Personalized Service</h4>
                    <p>Every traveler is unique. We customize our tours to match your interests, budget, and travel style for a truly personal experience.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4>24/7 Support</h4>
                    <p>Our support team is available around the clock to assist you before, during, and after your Indonesian adventure.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h4>Unique Experiences</h4>
                    <p>We offer exclusive access to experiences you won't find anywhere else, from private cultural ceremonies to hidden natural wonders.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Awards & Recognition -->
<section class="awards-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Awards & Recognition</h2>
            <p class="section-description">Honored to be recognized for our commitment to excellence</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="award-card text-center">
                    <div class="award-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h5>Best Tour Operator</h5>
                    <p>Indonesia Tourism Awards 2023</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="award-card text-center">
                    <div class="award-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Excellence in Service</h5>
                    <p>TripAdvisor Travelers' Choice 2023</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="award-card text-center">
                    <div class="award-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h5>Sustainable Tourism</h5>
                    <p>Green Travel Certification 2022</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="award-card text-center">
                    <div class="award-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5>Community Champion</h5>
                    <p>Local Community Support Award 2021</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="h1 mb-3">Ready to Discover Indonesia with Us?</h2>
                <p class="lead mb-0">Join thousands of happy travelers who have experienced the magic of Indonesia with RedTravel Adventures.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="cta-buttons">
                    <a href="tours.php" class="btn btn-light btn-lg me-2 mb-2">
                        <i class="fas fa-search"></i> Browse Tours
                    </a>
                    <a href="contact.php" class="btn btn-outline-light btn-lg mb-2">
                        <i class="fas fa-phone"></i> Contact Us
                    </a>
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

.hero-stats {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    padding: 2rem;
    backdrop-filter: blur(10px);
}

.stat-number {
    display: block;
    font-size: 2rem;
    font-weight: bold;
    color: white;
}

.stat-label {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.9);
}

.story-content {
    padding: 2rem 0;
}

.story-highlights {
    margin-top: 2rem;
}

.highlight-item {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
    font-weight: 500;
}

.highlight-item i {
    margin-right: 1rem;
    font-size: 1.2rem;
}

.story-image {
    position: relative;
}

.image-badge {
    position: absolute;
    top: 2rem;
    right: 2rem;
    background: var(--primary-red);
    color: white;
    padding: 1rem 1.5rem;
    border-radius: 25px;
    font-weight: bold;
}

.value-card {
    background: white;
    padding: 2.5rem 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
    text-align: center;
    height: 100%;
    transition: transform 0.3s ease;
}

.value-card:hover {
    transform: translateY(-5px);
}

.value-icon {
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

.values-list {
    list-style: none;
    padding: 0;
    text-align: left;
}

.values-list li {
    padding: 0.5rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.values-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary-red);
    font-weight: bold;
}

.team-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: all 0.3s ease;
}

.team-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.team-image {
    position: relative;
    height: 300px;
    overflow: hidden;
}

.team-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.team-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(179, 0, 0, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.team-card:hover .team-overlay {
    opacity: 1;
}

.team-social {
    display: flex;
    gap: 1rem;
}

.team-social a {
    width: 40px;
    height: 40px;
    background: white;
    color: var(--primary-red);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: transform 0.3s ease;
}

.team-social a:hover {
    transform: scale(1.1);
}

.team-info {
    padding: 2rem;
    text-align: center;
}

.team-info h4 {
    margin-bottom: 0.5rem;
    color: var(--text-dark);
}

.team-role {
    color: var(--primary-red);
    font-weight: 600;
    display: block;
    margin-bottom: 1rem;
}

.feature-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
    text-align: center;
    height: 100%;
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
}

.feature-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--primary-red), var(--primary-red-light));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 1.5rem;
}

.award-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
    transition: transform 0.3s ease;
}

.award-card:hover {
    transform: translateY(-5px);
}

.award-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #ffd700, #ffed4e);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: #8b5a00;
    font-size: 1.5rem;
}

.cta-section {
    background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
}

.cta-buttons {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
}

@media (max-width: 768px) {
    .story-image {
        margin-top: 2rem;
    }

    .cta-buttons {
        justify-content: center;
        margin-top: 2rem;
    }

    .cta-buttons .btn {
        width: 100%;
        margin: 0.5rem 0;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
