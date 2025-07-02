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
<section class="hero-section">
    <div class="hero-slider">
        <div class="hero-slide active" style="background-image: url('https://ext.same-assets.com/3037775497/3480226330.jpeg');">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title"><?php echo $lang['hero']['title']; ?></h1>
                    <p class="hero-subtitle"><?php echo $lang['hero']['subtitle']; ?></p>
                    <div class="hero-buttons">
                        <a href="tours.php" class="btn btn-primary btn-lg"><?php echo $lang['hero']['cta_primary']; ?></a>
                        <a href="travel-styles.php" class="btn btn-outline-light btn-lg"><?php echo $lang['hero']['cta_secondary']; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('https://ext.same-assets.com/3037775497/621702335.jpeg');">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title"><?php echo $lang['hero']['title_2']; ?></h1>
                    <p class="hero-subtitle"><?php echo $lang['hero']['subtitle_2']; ?></p>
                    <div class="hero-buttons">
                        <a href="tours.php" class="btn btn-primary btn-lg"><?php echo $lang['hero']['cta_primary']; ?></a>
                        <a href="contact.php" class="btn btn-outline-light btn-lg"><?php echo $lang['hero']['cta_contact']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-controls">
        <button class="hero-prev" onclick="changeSlide(-1)">‹</button>
        <button class="hero-next" onclick="changeSlide(1)">›</button>
    </div>
</section>

<!-- Welcome Section -->
<section class="welcome-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title"><?php echo $lang['welcome']['greeting']; ?></h2>
                <h3 class="section-subtitle"><?php echo $lang['welcome']['title']; ?></h3>
                <div class="welcome-text">
                    <p><?php echo $lang['welcome']['text_1']; ?></p>
                    <p><?php echo $lang['welcome']['text_2']; ?></p>
                    <p><?php echo $lang['welcome']['text_3']; ?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://scontent.fjog3-1.fna.fbcdn.net/v/t39.30808-1/299145099_405229158364332_5414342160323321439_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=100&ccb=1-7&_nc_sid=2d3e12&_nc_eui2=AeFBt_spKn6WJoEIk_VfObb2fhfV7X5TXmh-F9XtflNeaM87gb4cOnh9upW-R56vexeUNAPw6fuq5hygQ4-wshYK&_nc_ohc=chsdBb2X33QQ7kNvwGZC6v2&_nc_oc=AdleVRmxGHeXEVMgjN7QytZzzQp2pALzfEkNnMnysJl5431vICMZ_Tb2jR1Jk-b5Gmc&_nc_zt=24&_nc_ht=scontent.fjog3-1.fna&_nc_gid=fqb3oXs52LzE9LHA5a6Y8Q&oh=00_AfOOCY3uz-3DgXF39RIOcnusf_3GadCWhFULTWTHklv9zA&oe=686A82AF" alt="Travel Indonesia" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Travel Styles Section -->
<section class="travel-styles-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title"><?php echo $lang['travel_styles']['title']; ?></h2>
            <p class="section-description"><?php echo $lang['travel_styles']['description']; ?></p>
        </div>

        <div class="row g-4">
            <?php foreach ($lang['travel_styles']['styles'] as $style): ?>
            <div class="col-lg-4 col-md-6">
                <div class="travel-style-card">
                    <div class="card-image">
                        <img src="<?php echo $style['image']; ?>" alt="<?php echo $style['name']; ?>" class="img-fluid">
                        <div class="card-overlay">
                            <h3 class="card-title"><?php echo $style['name']; ?></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $style['description']; ?></p>
                        <div class="card-actions">
                            <a href="travel-styles.php#<?php echo $style['slug']; ?>" class="btn btn-outline-primary btn-sm"><?php echo $lang['common']['learn_more']; ?></a>
                            <button class="btn btn-primary btn-sm add-to-bucket" data-item="<?php echo $style['name']; ?>"><?php echo $lang['common']['add_to_bucket']; ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Featured Tours Section -->
<section class="featured-tours-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title"><?php echo $lang['featured_tours']['title']; ?></h2>
            <p class="section-description"><?php echo $lang['featured_tours']['description']; ?></p>
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
                            <a href="tour-detail.php?id=<?php echo $tour['id']; ?>" class="btn btn-outline-primary"><?php echo $lang['common']['view_details']; ?></a>
                            <button class="btn btn-primary add-to-bucket" data-item="<?php echo $tour['name']; ?>"><?php echo $lang['common']['add_to_bucket']; ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-4">
            <a href="tours.php" class="btn btn-primary btn-lg"><?php echo $lang['common']['view_all_tours']; ?></a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section py-5 bg-primary text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-white"><?php echo $lang['testimonials']['title']; ?></h2>
        </div>

        <div class="testimonial-slider">
            <?php foreach ($lang['testimonials']['reviews'] as $testimonial): ?>
            <div class="testimonial-slide">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="testimonial-content">
                            <div class="testimonial-quote">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p class="testimonial-text"><?php echo $testimonial['text']; ?></p>
                            <div class="testimonial-author">
                                <h5><?php echo $testimonial['name']; ?></h5>
                                <span><?php echo $testimonial['location']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
