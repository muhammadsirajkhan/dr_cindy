<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-theme
 */



$footer_logo = get_field('footer_logo', 'option');
$footer_content = get_field('footer_content', 'option');
$footer_title_1 = get_field('footer_title_1', 'option');
$footer_title_2 = get_field('footer_title_2', 'option');
$office_hours = get_field('office_hours', 'option');
$address = get_field('address', 'option');
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$copyright = get_field('copyright', 'option');
$terms_link = get_field('terms_link', 'option');
$complaint_link = get_field('complaint_link', 'option');
$map = get_field('map', 'option');
?>




</main>
<section class="map-section">
	<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52809972.582145326!2d-161.4707710359371!3d36.1114029076984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1759275435272!5m2!1sen!2s"
		width="100%" height="1040" style="border:0;" allowfullscreen="" loading="lazy"
		referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- Footer -->
<footer class="main-footer">
	<div class="container">
		<div class="footer-wrap">
			<div class="row footer-top">
				<div class="col-xl-4 col-12">
					<div class="footer-info">
						<a href="<?php echo get_site_url(); ?>"><img src="<?php echo $footer_logo ?? ''; ?>" alt=""></a>
						<?php echo $footer_content ?? ''; ?>
					</div>
				</div>
				<div class="col-xl-8 col-12">
					<div class="footer-top-right">
						<span class="title-1"><?php echo $footer_title_1 ?? ''; ?></span>
						<span class="title-2"><?php echo $footer_title_2 ?? ''; ?></span>
					</div>
				</div>
			</div>
			<div class="row footer-center">
				<!-- Newsletter Section -->
				<div class="col-xl-4 mb-4">
					<div class="footer-subscribe">
						<h5>Subscribe to Our Newsletter</h5>
						<div class="newsletter-footer">
							<?php echo do_shortcode('[contact-form-7 id="400dabe" title="Contact form 1"]'); ?>
						</div>
					</div>
					<!-- Social Media -->
					<div class="social-links mt-3">
						<a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
						<a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
						<a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
						<a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
				<div class="col-xl-8 col-12">
					<div class="footer-bottom-right">
						<div class="row">
							<!-- Links Section -->
							<div class="col-lg-4 mb-4">
								<h5>Links</h5>
								<?php
								wp_nav_menu(array(
									'theme_location' => 'menu-2',
									'menu_class' => 'footer-links',
									'container' => false,
									'fallback_cb' => false,
								));
								?>
							</div>
							<!-- Office Hours Section -->
							<div class="col-lg-4 mb-4">
								<h5>Office Hours</h5>
								<div class="office-hours">
									<?php echo $office_hours ?? ''; ?>
								</div>
							</div>
							<!-- Contact Info Section -->
							<div class="col-lg-4 mb-4">
								<h5>Contact Us</h5>
								<div class="contact-info">
									<div class="contact-item">
										<i class="fas fa-map-marker-alt"></i>
										<span><?php echo $address ?? ''; ?></span>
									</div>
									<div class="contact-item">
										<i class="fas fa-phone"></i>
										<span><?php echo $phone ?? ''; ?></span>
									</div>
									<div class="contact-item">
										<i class="fas fa-envelope"></i>
										<span><?php echo $email ?? ''; ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- Footer Bottom -->

		</div>
		<div class="footer-bottom">
			<div class="row">
				<div class="col-md-6">
					<p><?php echo $copyright ?? ''; ?></p>
				</div>
				<div class="col-md-6 text-end">
					<a href="<?php echo $terms_link['url'] ?? ''; ?>"
						class="footer-link"><?php echo $terms_link['title'] ?? ''; ?></a>
					<span class="mx-2">|</span>
					<a href="<?php echo $complaint_link['url'] ?? ''; ?>"
						class="footer-link"><?php echo $complaint_link['title'] ?? ''; ?></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Bootstrap JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>

<!-- Swiper JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>

<!-- Custom JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>