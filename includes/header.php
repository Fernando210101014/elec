<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['site']['name']; ?> - <?php echo $lang['site']['tagline']; ?></title>
    <meta name="description" content="<?php echo $lang['site']['description']; ?>">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <div class="logo">
                    <i class="fas fa-map-marked-alt text-primary"></i>
                    <span class="logo-text"><?php echo $lang['site']['name']; ?></span>
                </div>
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><?php echo $lang['nav']['home']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tours.php"><?php echo $lang['nav']['tours']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="travel-styles.php"><?php echo $lang['nav']['travel_styles']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><?php echo $lang['nav']['about']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sustainability.php"><?php echo $lang['nav']['sustainability']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php"><?php echo $lang['nav']['faq']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><?php echo $lang['nav']['contact']; ?></a>
                    </li>
                </ul>

                <!-- Right Side Items -->
                <div class="navbar-nav">
                    <!-- Bucket List -->
                    <a class="nav-link bucket-link" href="bucket.php">
                        <i class="fas fa-heart"></i>
                        <span class="bucket-text"><?php echo $lang['nav']['bucket_list']; ?></span>
                        <span class="bucket-count" id="bucketCount">0</span>
                    </a>

                    <!-- Language Switcher -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <?php if ($_SESSION['lang'] == 'en'): ?>
                                <img src="https://flagcdn.com/16x12/gb.png" alt="English"> EN
                            <?php else: ?>
                                <img src="https://flagcdn.com/16x12/id.png" alt="Indonesian"> ID
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="?lang=en">
                                    <img src="https://flagcdn.com/16x12/gb.png" alt="English"> English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="?lang=id">
                                    <img src="https://flagcdn.com/16x12/id.png" alt="Indonesian"> Indonesia
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
