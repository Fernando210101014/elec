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
                    <i class="fas fa-leaf me-3"></i><?php echo $lang['nav']['sustainability']; ?>
                </h1>
                <p class="lead">Protecting Indonesia's natural beauty and supporting local communities for future generations</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Carbon Neutral Tours</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Overview -->
<section class="sustainability-overview py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="overview-content">
                    <h2 class="section-title">Our Commitment to Sustainable Tourism</h2>
                    <p class="lead">At RedTravel Adventures, we believe that travel should enrich lives while preserving the incredible natural and cultural heritage of Indonesia.</p>
                    <p>We are committed to responsible tourism practices that minimize our environmental impact, support local communities, and ensure that the beauty of Indonesia remains intact for future generations to enjoy.</p>
                    <div class="commitment-badges">
                        <div class="badge-item">
                            <i class="fas fa-certificate text-success"></i>
                            <span>Green Travel Certified</span>
                        </div>
                        <div class="badge-item">
                            <i class="fas fa-leaf text-success"></i>
                            <span>Carbon Neutral Operations</span>
                        </div>
                        <div class="badge-item">
                            <i class="fas fa-hands-helping text-success"></i>
                            <span>Community Partner</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="overview-image">
                    <img src="https://ext.same-assets.com/3037775497/3480226330.jpeg" alt="Sustainable Tourism" class="img-fluid rounded-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Initiatives -->
<section class="initiatives-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Sustainability Initiatives</h2>
            <p class="section-description">Concrete actions we take to protect Indonesia's environment and communities</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="initiative-card">
                    <div class="initiative-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h4>Waste Reduction</h4>
                    <p>We minimize single-use plastics, promote reusable water bottles, and partner with accommodations that have robust recycling programs.</p>
                    <ul class="initiative-list">
                        <li>Plastic-free tour packages</li>
                        <li>Reusable water bottle provision</li>
                        <li>Zero-waste meal planning</li>
                        <li>Local recycling partnerships</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="initiative-card">
                    <div class="initiative-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h4>Conservation Support</h4>
                    <p>We actively support conservation efforts across Indonesia, from reforestation projects to wildlife protection initiatives.</p>
                    <ul class="initiative-list">
                        <li>Tree planting programs</li>
                        <li>Wildlife conservation funding</li>
                        <li>Marine protection projects</li>
                        <li>Habitat restoration support</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="initiative-card">
                    <div class="initiative-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Community Empowerment</h4>
                    <p>We work directly with local communities to ensure tourism benefits are shared and cultural heritage is preserved.</p>
                    <ul class="initiative-list">
                        <li>Local guide employment</li>
                        <li>Community-based tourism</li>
                        <li>Traditional craft support</li>
                        <li>Educational programs</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="initiative-card">
                    <div class="initiative-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h4>Green Transportation</h4>
                    <p>We prioritize eco-friendly transportation options and offset carbon emissions from all our tour activities.</p>
                    <ul class="initiative-list">
                        <li>Electric vehicle fleet</li>
                        <li>Carbon offset programs</li>
                        <li>Public transport integration</li>
                        <li>Bicycle tour options</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="initiative-card">
                    <div class="initiative-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h4>Eco-Accommodations</h4>
                    <p>We partner exclusively with accommodations that meet our sustainability standards and environmental criteria.</p>
                    <ul class="initiative-list">
                        <li>Green-certified hotels</li>
                        <li>Solar-powered facilities</li>
                        <li>Water conservation systems</li>
                        <li>Local material construction</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="initiative-card">
                    <div class="initiative-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>Education & Awareness</h4>
                    <p>We educate travelers about sustainable practices and the importance of protecting Indonesia's natural environment.</p>
                    <ul class="initiative-list">
                        <li>Pre-trip sustainability briefings</li>
                        <li>Environmental education tours</li>
                        <li>Cultural sensitivity training</li>
                        <li>Conservation awareness programs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Metrics -->
<section class="impact-metrics py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Environmental Impact</h2>
            <p class="section-description">Measuring our progress towards a more sustainable future</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="metric-card text-center">
                    <div class="metric-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <div class="metric-number">5,000+</div>
                    <div class="metric-label">Trees Planted</div>
                    <div class="metric-description">Through our reforestation partnerships across Indonesia</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="metric-card text-center">
                    <div class="metric-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <div class="metric-number">500,000L</div>
                    <div class="metric-label">Plastic Saved</div>
                    <div class="metric-description">Single-use plastic bottles eliminated through our programs</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="metric-card text-center">
                    <div class="metric-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="metric-number">$250,000</div>
                    <div class="metric-label">Community Investment</div>
                    <div class="metric-description">Direct economic impact to local communities annually</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="metric-card text-center">
                    <div class="metric-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="metric-number">100%</div>
                    <div class="metric-label">Carbon Neutral</div>
                    <div class="metric-description">All tour emissions offset through verified programs</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Traveler Guidelines -->
<section class="traveler-guidelines py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">How You Can Travel Responsibly</h2>
            <p class="section-description">Simple ways you can help protect Indonesia's environment during your visit</p>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="guidelines-container">
                    <div class="guideline-item">
                        <div class="guideline-icon">
                            <i class="fas fa-bottle-water"></i>
                        </div>
                        <div class="guideline-content">
                            <h5>Bring a Reusable Water Bottle</h5>
                            <p>Reduce plastic waste by using our provided reusable bottles and refilling at safe water stations.</p>
                        </div>
                    </div>

                    <div class="guideline-item">
                        <div class="guideline-icon">
                            <i class="fas fa-camera"></i>
                        </div>
                        <div class="guideline-content">
                            <h5>Respect Wildlife and Nature</h5>
                            <p>Keep a safe distance from animals, don't feed wildlife, and follow all park guidelines.</p>
                        </div>
                    </div>

                    <div class="guideline-item">
                        <div class="guideline-icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div class="guideline-content">
                            <h5>Support Local Communities</h5>
                            <p>Buy local products, eat at family-owned restaurants, and hire local guides when possible.</p>
                        </div>
                    </div>

                    <div class="guideline-item">
                        <div class="guideline-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="guideline-content">
                            <h5>Respect Local Culture</h5>
                            <p>Learn about local customs, dress appropriately, and be mindful of cultural sensitivities.</p>
                        </div>
                    </div>

                    <div class="guideline-item">
                        <div class="guideline-icon">
                            <i class="fas fa-trash-alt"></i>
                        </div>
                        <div class="guideline-content">
                            <h5>Leave No Trace</h5>
                            <p>Take only photos, leave only footprints, and dispose of waste properly.</p>
                        </div>
                    </div>

                    <div class="guideline-item">
                        <div class="guideline-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <div class="guideline-content">
                            <h5>Conserve Water and Energy</h5>
                            <p>Use resources mindfully at accommodations and support properties with green practices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partnerships -->
<section class="partnerships py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Conservation Partners</h2>
            <p class="section-description">Working together to protect Indonesia's natural heritage</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="partner-card text-center">
                    <div class="partner-logo">
                        <i class="fas fa-paw"></i>
                    </div>
                    <h5>Wildlife Conservation Society</h5>
                    <p>Supporting orangutan and tiger conservation in Sumatra and Borneo.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="partner-card text-center">
                    <div class="partner-logo">
                        <i class="fas fa-water"></i>
                    </div>
                    <h5>Marine Protection Foundation</h5>
                    <p>Protecting coral reefs and marine ecosystems in Raja Ampat and Komodo.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="partner-card text-center">
                    <div class="partner-logo">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h5>Indonesian Forest Alliance</h5>
                    <p>Supporting reforestation and sustainable forestry practices nationwide.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="partner-card text-center">
                    <div class="partner-logo">
                        <i class="fas fa-village"></i>
                    </div>
                    <h5>Community Tourism Network</h5>
                    <p>Empowering local communities through sustainable tourism development.</p>
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
                <h2 class="h1 mb-3">Travel Responsibly with Us</h2>
                <p class="lead mb-0">Join us in protecting Indonesia's incredible natural beauty while creating unforgettable memories.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="tours.php" class="btn btn-light btn-lg">
                    <i class="fas fa-leaf"></i> Book Sustainable Tours
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

.hero-stats {
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

.commitment-badges {
    margin-top: 2rem;
}

.badge-item {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
    font-weight: 500;
}

.badge-item i {
    margin-right: 1rem;
    font-size: 1.2rem;
}

.initiative-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
    height: 100%;
    transition: transform 0.3s ease;
}

.initiative-card:hover {
    transform: translateY(-5px);
}

.initiative-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #28a745, #20c997);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    color: white;
    font-size: 1.5rem;
}

.initiative-list {
    list-style: none;
    padding: 0;
    margin-top: 1rem;
}

.initiative-list li {
    padding: 0.25rem 0;
    position: relative;
    padding-left: 1.5rem;
    font-size: 0.9rem;
    color: var(--text-gray);
}

.initiative-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #28a745;
    font-weight: bold;
}

.metric-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
    transition: transform 0.3s ease;
}

.metric-card:hover {
    transform: translateY(-5px);
}

.metric-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary-red), var(--primary-red-light));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: white;
    font-size: 2rem;
}

.metric-number {
    font-size: 2.5rem;
    font-weight: bold;
    color: var(--primary-red);
    margin-bottom: 0.5rem;
}

.metric-label {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.metric-description {
    font-size: 0.9rem;
    color: var(--text-gray);
}

.guidelines-container {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
}

.guideline-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 2rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid var(--border-light);
}

.guideline-item:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.guideline-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #28a745, #20c997);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1.5rem;
    color: white;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.guideline-content h5 {
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.guideline-content p {
    color: var(--text-gray);
    margin: 0;
}

.partner-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
    transition: transform 0.3s ease;
}

.partner-card:hover {
    transform: translateY(-5px);
}

.partner-logo {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #28a745, #20c997);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: white;
    font-size: 2rem;
}

.cta-section {
    background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
}

@media (max-width: 768px) {
    .guideline-item {
        flex-direction: column;
        text-align: center;
    }

    .guideline-icon {
        margin: 0 auto 1rem;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
