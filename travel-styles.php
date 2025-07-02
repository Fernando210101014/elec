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
                    <i class="fas fa-compass me-3"></i><?php echo $lang['travel_styles']['title']; ?>
                </h1>
                <p class="lead"><?php echo $lang['travel_styles']['description']; ?></p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">6</span>
                        <span class="stat-label">Travel Styles</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Travel Styles Grid -->
<section class="travel-styles-grid py-5">
    <div class="container">
        <?php foreach ($lang['travel_styles']['styles'] as $index => $style): ?>
        <div class="travel-style-section <?php echo $index % 2 == 0 ? '' : 'reverse'; ?>" id="<?php echo $style['slug']; ?>">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 <?php echo $index % 2 == 0 ? 'order-lg-1' : 'order-lg-2'; ?>">
                    <div class="style-image">
                        <img src="<?php echo $style['image']; ?>" alt="<?php echo $style['name']; ?>" class="img-fluid rounded-lg">
                        <div class="image-overlay">
                            <div class="overlay-content">
                                <h3 class="overlay-title"><?php echo $style['name']; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 <?php echo $index % 2 == 0 ? 'order-lg-2' : 'order-lg-1'; ?>">
                    <div class="style-content">
                        <div class="style-number">0<?php echo $index + 1; ?></div>
                        <h2 class="style-title"><?php echo $style['name']; ?></h2>
                        <p class="style-description"><?php echo $style['description']; ?></p>

                        <div class="style-features">
                            <?php
                            $features = [
                                'cultural' => [
                                    'Ancient temples & historical sites',
                                    'Traditional art & craft workshops',
                                    'Local cultural experiences',
                                    'Expert cultural guides'
                                ],
                                'beach' => [
                                    'Pristine white sand beaches',
                                    'Crystal clear waters',
                                    'Water sports & activities',
                                    'Beachfront accommodations'
                                ],
                                'adventure' => [
                                    'Jungle trekking & hiking',
                                    'Wildlife encounters',
                                    'Volcano exploration',
                                    'Extreme sports activities'
                                ],
                                'luxury' => [
                                    '5-star resort accommodations',
                                    'Private transportation',
                                    'Exclusive experiences',
                                    'Personal concierge service'
                                ],
                                'family' => [
                                    'Family-friendly activities',
                                    'Educational experiences',
                                    'Safe & comfortable travel',
                                    'Kid-friendly accommodations'
                                ],
                                'romance' => [
                                    'Romantic dinner settings',
                                    'Couples spa treatments',
                                    'Private beach experiences',
                                    'Sunset viewing spots'
                                ]
                            ];

                            $style_features = isset($features[$style['slug']]) ? $features[$style['slug']] : [
                                'Unique experiences',
                                'Expert local guides',
                                'Comfortable accommodations',
                                'Memorable moments'
                            ];
                            ?>

                            <ul class="features-list">
                                <?php foreach ($style_features as $feature): ?>
                                <li><i class="fas fa-check text-primary me-2"></i><?php echo $feature; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="style-actions">
                            <a href="tours.php?category=<?php echo $style['name']; ?>" class="btn btn-primary">
                                <i class="fas fa-search"></i> View <?php echo $style['name']; ?> Tours
                            </a>
                            <button class="btn btn-outline-primary add-to-bucket" data-item="<?php echo $style['name']; ?> Experience">
                                <i class="fas fa-heart"></i> Add to Bucket List
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Travel Planning Guide -->
<section class="travel-planning py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Choose Your Perfect Travel Style</h2>
            <p class="section-description">Not sure which style suits you best? Take our quick quiz or read our travel guide.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="planning-card text-center">
                    <div class="planning-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <h4>Travel Style Quiz</h4>
                    <p>Answer a few quick questions to discover your ideal Indonesian adventure style.</p>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quizModal">
                        <i class="fas fa-play"></i> Take Quiz
                    </button>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="planning-card text-center">
                    <div class="planning-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h4>Best Time to Visit</h4>
                    <p>Learn about Indonesia's seasons and the best times to visit for different activities.</p>
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#seasonModal">
                        <i class="fas fa-info-circle"></i> Learn More
                    </button>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="planning-card text-center">
                    <div class="planning-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h4>Custom Consultation</h4>
                    <p>Speak with our travel experts to create a personalized itinerary just for you.</p>
                    <a href="contact.php" class="btn btn-outline-primary">
                        <i class="fas fa-comments"></i> Contact Expert
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Style Comparison -->
<section class="style-comparison py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Compare Travel Styles</h2>
            <p class="section-description">Quick overview to help you choose the right experience</p>
        </div>

        <div class="comparison-table-container">
            <div class="table-responsive">
                <table class="table comparison-table">
                    <thead>
                        <tr>
                            <th>Style</th>
                            <th>Duration</th>
                            <th>Budget Range</th>
                            <th>Best For</th>
                            <th>Activity Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="style-name">
                                <img src="https://ext.same-assets.com/3037775497/3490837470.jpeg" alt="Cultural" class="style-thumb">
                                Cultural Heritage
                            </td>
                            <td>5-8 days</td>
                            <td>$500-$1,500</td>
                            <td>History lovers, Art enthusiasts</td>
                            <td><span class="activity-level moderate">Moderate</span></td>
                        </tr>
                        <tr>
                            <td class="style-name">
                                <img src="https://ext.same-assets.com/3037775497/3480226330.jpeg" alt="Beach" class="style-thumb">
                                Island Paradise
                            </td>
                            <td>4-7 days</td>
                            <td>$400-$1,200</td>
                            <td>Beach lovers, Relaxation seekers</td>
                            <td><span class="activity-level low">Low</span></td>
                        </tr>
                        <tr>
                            <td class="style-name">
                                <img src="https://ext.same-assets.com/3037775497/2789562138.jpeg" alt="Adventure" class="style-thumb">
                                Adventure & Wildlife
                            </td>
                            <td>6-10 days</td>
                            <td>$800-$2,000</td>
                            <td>Adventure seekers, Nature lovers</td>
                            <td><span class="activity-level high">High</span></td>
                        </tr>
                        <tr>
                            <td class="style-name">
                                <img src="https://ext.same-assets.com/3037775497/2151977197.jpeg" alt="Luxury" class="style-thumb">
                                Luxury Experience
                            </td>
                            <td>5-12 days</td>
                            <td>$2,000-$5,000+</td>
                            <td>Luxury travelers, Special occasions</td>
                            <td><span class="activity-level low">Low</span></td>
                        </tr>
                        <tr>
                            <td class="style-name">
                                <img src="https://ext.same-assets.com/3037775497/688580463.jpeg" alt="Family" class="style-thumb">
                                Family Adventures
                            </td>
                            <td>4-8 days</td>
                            <td>$600-$1,800</td>
                            <td>Families with children</td>
                            <td><span class="activity-level moderate">Moderate</span></td>
                        </tr>
                        <tr>
                            <td class="style-name">
                                <img src="https://ext.same-assets.com/3037775497/220314189.jpeg" alt="Romance" class="style-thumb">
                                Romantic Getaway
                            </td>
                            <td>4-7 days</td>
                            <td>$800-$2,500</td>
                            <td>Couples, Honeymoons</td>
                            <td><span class="activity-level low">Low</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Quiz Modal -->
<div class="modal fade" id="quizModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Travel Style Quiz</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="quizContainer">
                    <div class="quiz-question">
                        <h4>What type of vacation do you prefer?</h4>
                        <div class="quiz-options">
                            <button class="quiz-option" data-value="cultural">Exploring historical sites and museums</button>
                            <button class="quiz-option" data-value="beach">Relaxing on beautiful beaches</button>
                            <button class="quiz-option" data-value="adventure">Outdoor adventures and wildlife</button>
                            <button class="quiz-option" data-value="luxury">Luxury resorts and fine dining</button>
                        </div>
                    </div>
                </div>
                <div id="quizResult" style="display: none;">
                    <div class="text-center">
                        <h4>Your Perfect Travel Style:</h4>
                        <div id="resultContent"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

.travel-style-section {
    padding: 4rem 0;
    border-bottom: 1px solid var(--border-light);
}

.travel-style-section:last-child {
    border-bottom: none;
}

.style-image {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    height: 400px;
}

.style-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
    padding: 2rem;
    color: white;
}

.overlay-title {
    font-size: 2rem;
    font-weight: bold;
    margin: 0;
}

.style-content {
    padding: 2rem 0;
}

.style-number {
    font-size: 4rem;
    font-weight: bold;
    color: var(--primary-red);
    opacity: 0.3;
    line-height: 1;
    margin-bottom: 1rem;
}

.style-title {
    font-size: 2.5rem;
    font-weight: bold;
    color: var(--text-dark);
    margin-bottom: 1.5rem;
}

.style-description {
    font-size: 1.2rem;
    color: var(--text-gray);
    margin-bottom: 2rem;
    line-height: 1.7;
}

.features-list {
    list-style: none;
    padding: 0;
    margin-bottom: 2rem;
}

.features-list li {
    padding: 0.5rem 0;
    display: flex;
    align-items: center;
    font-size: 1.1rem;
}

.style-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.planning-card {
    background: white;
    padding: 2.5rem 2rem;
    border-radius: 15px;
    box-shadow: var(--shadow);
    transition: all 0.3s ease;
    height: 100%;
}

.planning-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.planning-icon {
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

.comparison-table-container {
    background: white;
    border-radius: 15px;
    box-shadow: var(--shadow);
    overflow: hidden;
}

.comparison-table {
    margin: 0;
}

.comparison-table th {
    background: var(--primary-red);
    color: white;
    font-weight: 600;
    border: none;
    padding: 1.5rem 1rem;
}

.comparison-table td {
    padding: 1.5rem 1rem;
    vertical-align: middle;
    border-color: var(--border-light);
}

.style-name {
    display: flex;
    align-items: center;
    font-weight: 600;
}

.style-thumb {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 1rem;
}

.activity-level {
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
}

.activity-level.low {
    background: #d4edda;
    color: #155724;
}

.activity-level.moderate {
    background: #fff3cd;
    color: #856404;
}

.activity-level.high {
    background: #f8d7da;
    color: #721c24;
}

.quiz-question h4 {
    text-align: center;
    margin-bottom: 2rem;
}

.quiz-options {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.quiz-option {
    background: var(--bg-light);
    border: 2px solid var(--border-light);
    padding: 1rem;
    border-radius: 10px;
    text-align: left;
    transition: all 0.3s ease;
    cursor: pointer;
}

.quiz-option:hover {
    background: var(--primary-red);
    color: white;
    border-color: var(--primary-red);
}

@media (max-width: 768px) {
    .travel-style-section.reverse .row {
        flex-direction: column-reverse;
    }

    .style-actions {
        flex-direction: column;
    }

    .style-actions .btn {
        width: 100%;
    }

    .style-number {
        font-size: 3rem;
    }

    .style-title {
        font-size: 2rem;
    }
}
</style>

<script>
// Simple quiz functionality
document.querySelectorAll('.quiz-option').forEach(option => {
    option.addEventListener('click', function() {
        const value = this.getAttribute('data-value');
        showQuizResult(value);
    });
});

function showQuizResult(style) {
    const results = {
        cultural: {
            title: 'Cultural Heritage Explorer',
            description: 'You love learning about history, art, and traditions. Indonesia\'s rich cultural heritage in places like Yogyakarta and Bali will fascinate you.',
            recommendation: 'Try our "Bali Cultural Discovery" or "Java Heritage Explorer" tours.'
        },
        beach: {
            title: 'Island Paradise Seeker',
            description: 'You prefer relaxation and beautiful beaches. Indonesia\'s pristine islands like Gili and Raja Ampat are perfect for you.',
            recommendation: 'Try our "Gili Islands Relaxation" or beach-focused Bali tours.'
        },
        adventure: {
            title: 'Adventure & Wildlife Enthusiast',
            description: 'You seek excitement and unique wildlife experiences. Komodo dragons and jungle adventures await you.',
            recommendation: 'Try our "Komodo National Park Adventure" or Borneo wildlife tours.'
        },
        luxury: {
            title: 'Luxury Experience Connoisseur',
            description: 'You appreciate the finer things in life. Indonesia offers world-class luxury resorts and exclusive experiences.',
            recommendation: 'Try our "Bali Luxury Experience" or premium resort packages.'
        }
    };

    const result = results[style];
    const resultContent = document.getElementById('resultContent');

    resultContent.innerHTML = `
        <div class="result-card p-4 bg-light rounded">
            <h3 class="text-primary">${result.title}</h3>
            <p class="mb-3">${result.description}</p>
            <p class="fw-bold">${result.recommendation}</p>
            <a href="tours.php" class="btn btn-primary mt-2">Explore Tours</a>
        </div>
    `;

    document.getElementById('quizContainer').style.display = 'none';
    document.getElementById('quizResult').style.display = 'block';
}
</script>

<?php include 'includes/footer.php'; ?>
