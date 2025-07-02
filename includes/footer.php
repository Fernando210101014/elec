<!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <!-- Company Info -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-logo mb-3">
                        <i class="fas fa-map-marked-alt text-primary"></i>
                        <span class="logo-text"><?php echo $lang['site']['name']; ?></span>
                    </div>
                    <p class="footer-description"><?php echo $lang['site']['description']; ?></p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="index.php"><?php echo $lang['nav']['home']; ?></a></li>
                        <li><a href="tours.php"><?php echo $lang['nav']['tours']; ?></a></li>
                        <li><a href="travel-styles.php"><?php echo $lang['nav']['travel_styles']; ?></a></li>
                        <li><a href="about.php"><?php echo $lang['nav']['about']; ?></a></li>
                        <li><a href="faq.php"><?php echo $lang['nav']['faq']; ?></a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-title">Support</h5>
                    <ul class="footer-links">
                        <li><a href="contact.php"><?php echo $lang['nav']['contact']; ?></a></li>
                        <li><a href="sustainability.php"><?php echo $lang['nav']['sustainability']; ?></a></li>
                        <li><a href="bucket.php"><?php echo $lang['nav']['bucket_list']; ?></a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy Policy</a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="footer-title"><?php echo $lang['common']['contact_info']; ?></h5>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo $lang['contact']['address']; ?></span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span><?php echo $lang['contact']['phone']; ?></span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span><?php echo $lang['contact']['email']; ?></span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <span><?php echo $lang['contact']['hours']; ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php echo $lang['site']['name']; ?>. <?php echo $lang['common']['all_rights_reserved']; ?></p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0"><?php echo $lang['common']['follow_us']; ?>:
                        <a href="#" class="text-primary">Facebook</a> |
                        <a href="#" class="text-primary">Instagram</a> |
                        <a href="#" class="text-primary">Twitter</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>

    <!-- Bucket List Notification -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="bucketToast" class="toast" role="alert">
            <div class="toast-header">
                <i class="fas fa-heart text-primary me-2"></i>
                <strong class="me-auto">Bucket List</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body" id="toastMessage">
                Item added to bucket list!
            </div>
        </div>
    </div>
</body>
</html>
