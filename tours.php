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

<!-- Hero Section -->
<section class="page-hero bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3"><?php echo $lang['nav']['tours']; ?></h1>
                <p class="lead"><?php echo $lang['featured_tours']['description']; ?></p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <img src="https://scontent.fjog3-1.fna.fbcdn.net/v/t39.30808-1/299145099_405229158364332_5414342160323321439_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=100&ccb=1-7&_nc_sid=2d3e12&_nc_eui2=AeFBt_spKn6WJoEIk_VfObb2fhfV7X5TXmh-F9XtflNeaM87gb4cOnh9upW-R56vexeUNAPw6fuq5hygQ4-wshYK&_nc_ohc=chsdBb2X33QQ7kNvwGZC6v2&_nc_oc=AdleVRmxGHeXEVMgjN7QytZzzQp2pALzfEkNnMnysJl5431vICMZ_Tb2jR1Jk-b5Gmc&_nc_zt=24&_nc_ht=scontent.fjog3-1.fna&_nc_gid=fqb3oXs52LzE9LHA5a6Y8Q&oh=00_AfOOCY3uz-3DgXF39RIOcnusf_3GadCWhFULTWTHklv9zA&oe=686A82AF" alt="Tours" class="img-fluid" style="max-height: 200px;">
            </div>
        </div>
    </div>
</section>

<!-- Filters Section -->
<section class="filters-section py-4 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 class="mb-3 mb-md-0">Filter by Category:</h5>
            </div>
            <div class="col-md-6">
                <div class="btn-group flex-wrap" role="group">
                    <button type="button" class="btn btn-outline-primary filter-btn active" data-filter="all">
                        All Tours
                    </button>
                    <button type="button" class="btn btn-outline-primary filter-btn" data-filter="Cultural">
                        Cultural
                    </button>
                    <button type="button" class="btn btn-outline-primary filter-btn" data-filter="Adventure">
                        Adventure
                    </button>
                    <button type="button" class="btn btn-outline-primary filter-btn" data-filter="Beach">
                        Beach
                    </button>
                    <button type="button" class="btn btn-outline-primary filter-btn" data-filter="Luxury">
                        Luxury
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tours Listing -->
<section class="tours-listing py-5">
    <div class="container">
        <div class="row g-4" id="toursContainer">
            <?php
            // Extended tour list with more options
            $all_tours = array_merge($lang['tours'], [
                [
                    'id' => 4,
                    'name' => $_SESSION['lang'] == 'id' ? 'Pantai Raja Ampat' : 'Raja Ampat Marine Paradise',
                    'slug' => 'raja-ampat-marine',
                    'duration' => $_SESSION['lang'] == 'id' ? '6 hari / 5 malam' : '6 days / 5 nights',
                    'short_description' => $_SESSION['lang'] == 'id' ?
                        'Selami keindahan bawah laut terbaik di dunia dengan keanekaragaman hayati laut yang luar biasa.' :
                        'Dive into the world\'s best underwater paradise with extraordinary marine biodiversity.',
                    'image' => 'https://ext.same-assets.com/3037775497/3480226330.jpeg',
                    'price_display' => $_SESSION['lang'] == 'id' ? 'Rp 25.000.000' : '$1,699',
                    'featured' => false,
                    'category' => 'Adventure'
                ],
                [
                    'id' => 5,
                    'name' => $_SESSION['lang'] == 'id' ? 'Wisata Kuliner Jakarta' : 'Jakarta Food & Culture Tour',
                    'slug' => 'jakarta-food-culture',
                    'duration' => $_SESSION['lang'] == 'id' ? '3 hari / 2 malam' : '3 days / 2 nights',
                    'short_description' => $_SESSION['lang'] == 'id' ?
                        'Jelajahi ibukota Indonesia melalui cita rasa kuliner dan warisan budayanya yang beragam.' :
                        'Explore Indonesia\'s capital through its diverse culinary flavors and cultural heritage.',
                    'image' => 'https://ext.same-assets.com/3037775497/1453229239.jpeg',
                    'price_display' => $_SESSION['lang'] == 'id' ? 'Rp 4.500.000' : '$299',
                    'featured' => false,
                    'category' => 'Cultural'
                ],
                [
                    'id' => 6,
                    'name' => $_SESSION['lang'] == 'id' ? 'Gili Islands Santai' : 'Gili Islands Relaxation',
                    'slug' => 'gili-islands-relaxation',
                    'duration' => $_SESSION['lang'] == 'id' ? '4 hari / 3 malam' : '4 days / 3 nights',
                    'short_description' => $_SESSION['lang'] == 'id' ?
                        'Bersantai di pantai-pantai eksotis dengan air jernih dan suasana yang tenang.' :
                        'Relax on exotic beaches with crystal-clear waters and peaceful atmosphere.',
                    'image' => 'https://ext.same-assets.com/3037775497/621702335.jpeg',
                    'price_display' => $_SESSION['lang'] == 'id' ? 'Rp 8.500.000' : '$575',
                    'featured' => false,
                    'category' => 'Beach'
                ],
                [
                    'id' => 7,
                    'name' => $_SESSION['lang'] == 'id' ? 'Pengalaman Mewah Bali' : 'Bali Luxury Experience',
                    'slug' => 'bali-luxury-experience',
                    'duration' => $_SESSION['lang'] == 'id' ? '5 hari / 4 malam' : '5 days / 4 nights',
                    'short_description' => $_SESSION['lang'] == 'id' ?
                        'Nikmati kemewahan terbaik Bali dengan resort bintang 5 dan pengalaman eksklusif.' :
                        'Enjoy the finest luxury in Bali with 5-star resorts and exclusive experiences.',
                    'image' => 'https://ext.same-assets.com/3037775497/2151977197.jpeg',
                    'price_display' => $_SESSION['lang'] == 'id' ? 'Rp 35.000.000' : '$2,399',
                    'featured' => false,
                    'category' => 'Luxury'
                ],
                [
                    'id' => 8,
                    'name' => $_SESSION['lang'] == 'id' ? 'Bromo Tengger Semeru' : 'Bromo Tengger Semeru Adventure',
                    'slug' => 'bromo-adventure',
                    'duration' => $_SESSION['lang'] == 'id' ? '3 hari / 2 malam' : '3 days / 2 nights',
                    'short_description' => $_SESSION['lang'] == 'id' ?
                        'Saksi keajaiban sunrise di Gunung Bromo dan jelajahi kawah aktif yang menakjubkan.' :
                        'Witness the magical sunrise at Mount Bromo and explore stunning active craters.',
                    'image' => 'https://ext.same-assets.com/3037775497/3188466586.jpeg',
                    'price_display' => $_SESSION['lang'] == 'id' ? 'Rp 3.500.000' : '$235',
                    'featured' => true,
                    'category' => 'Adventure'
                ],
                [
                    'id' => 9,
                    'name' => $_SESSION['lang'] == 'id' ? 'Toba & Budaya Batak' : 'Lake Toba & Batak Culture',
                    'slug' => 'lake-toba-culture',
                    'duration' => $_SESSION['lang'] == 'id' ? '4 hari / 3 malam' : '4 days / 3 nights',
                    'short_description' => $_SESSION['lang'] == 'id' ?
                        'Jelajahi danau vulkanik terbesar di dunia dan budaya unik suku Batak.' :
                        'Explore the world\'s largest volcanic lake and unique Batak culture.',
                    'image' => 'https://ext.same-assets.com/3037775497/914017416.jpeg',
                    'price_display' => $_SESSION['lang'] == 'id' ? 'Rp 6.500.000' : '$435',
                    'featured' => false,
                    'category' => 'Cultural'
                ]
            ]);

            foreach ($all_tours as $tour): ?>
            <div class="col-lg-4 col-md-6">
                <div class="tour-card" data-category="<?php echo $tour['category']; ?>">
                    <div class="tour-image">
                        <img src="<?php echo $tour['image']; ?>" alt="<?php echo $tour['name']; ?>" class="img-fluid">
                        <?php if ($tour['featured']): ?>
                        <span class="tour-badge"><?php echo $lang['common']['featured']; ?></span>
                        <?php endif; ?>
                        <div class="tour-overlay">
                            <div class="tour-actions-overlay">
                                <a href="tour-detail.php?id=<?php echo $tour['id']; ?>" class="btn btn-light btn-sm">
                                    <i class="fas fa-eye"></i> <?php echo $lang['common']['view_details']; ?>
                                </a>
                                <button class="btn btn-primary btn-sm add-to-bucket" data-item="<?php echo $tour['name']; ?>">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tour-content">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="tour-duration"><?php echo $tour['duration']; ?></span>
                            <span class="badge bg-primary"><?php echo $tour['category']; ?></span>
                        </div>
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

        <!-- Load More Button -->
        <div class="text-center mt-5">
            <button class="btn btn-outline-primary btn-lg" onclick="loadMoreTours()">
                <i class="fas fa-plus"></i> Load More Tours
            </button>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="h1 mb-3">Ready to Start Your Indonesian Adventure?</h2>
                <p class="lead mb-0">Contact our travel experts to create your perfect itinerary.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact.php" class="btn btn-light btn-lg">
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
}

.tour-card {
    position: relative;
    overflow: hidden;
}

.tour-overlay {
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
}

.tour-card:hover .tour-overlay {
    opacity: 1;
}

.tour-actions-overlay {
    display: flex;
    gap: 0.5rem;
}

.filter-btn.active {
    background-color: var(--primary-red);
    border-color: var(--primary-red);
    color: white;
}

.badge {
    font-size: 0.75rem;
}

.cta-section {
    background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
}
</style>

<script>
function loadMoreTours() {
    // Simulate loading more tours
    const button = event.target;
    const originalText = button.innerHTML;

    button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
    button.disabled = true;

    setTimeout(() => {
        showToast('No more tours to load!', 'info');
        button.innerHTML = originalText;
        button.disabled = false;
    }, 1500);
}
</script>

<?php include 'includes/footer.php'; ?>
