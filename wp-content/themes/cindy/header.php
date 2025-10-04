<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>See With Dr. Cindy - Optometry Practice</title>
	<!-- <base href="http://localhost/dr_cindy/"> -->
	<!-- Normalize CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.min.css">

	<!-- Bootstrap 5.3.2 CSS -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Swiper CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<!-- Local Fonts -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/stylesheet.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/variables.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header -->
	<?php
	$header_logo = get_field('header_logo', 'option');
	$button_1 = get_field('button_1', 'option');
	$button_2 = get_field('button_2', 'option');
	$button_3 = get_field('button_3', 'option');
	?>
	<header class="main-header">
		<nav class="navbar navbar-expand-xl navbar-dark">
			<div class="container">



				<div class="row align-items-center" style="    width: 100%;">
					<!-- Left side navigation - takes 1/3 of space -->
					<div class="col-lg-6 col-8"><a class="navbar-brand m-0 d-xl-none d-block"
							href="<?php echo home_url(); ?>">
							<div class="brand-text">
								<img src="<?php echo $header_logo ?? ''; ?>" alt="">
							</div>
						</a></div>
					<div class="col-lg-6 text-end col-4"><button class="navbar-toggler" type="button"
							data-bs-toggle="collapse" data-bs-target="#navbarNav">
							<span class="navbar-toggler-icon"></span>
						</button></div>
					<div class="col-lg-5 col-12">
						<div class="collapse navbar-collapse" id="navbarNav">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'menu-1',
								'menu_class' => 'navbar-nav',
								'container' => false,
								'fallback_cb' => false,
							));
							?>
							<div class="navbar-actions d-xl-none d-flex">
								<a href="<?php echo $button_1['url'] ?? ''; ?>" class="btn btn-link me-2">
									<?php echo $button_1['title'] ?? ''; ?>
								</a>
								<a href="<?php echo $button_2['url'] ?? ''; ?>" class="btn btn-link btn-2 me-2">
									<i class="fa-solid fa-phone-volume"></i> <?php echo $button_2['title'] ?? ''; ?>
								</a>
								<a href="<?php echo $button_3['url'] ?? ''; ?>" class="btn btn-appointment">
									<?php echo $button_3['title'] ?? ''; ?>
								</a>
							</div>
						</div>
					</div>

					<!-- Centered Logo/Brand - takes 1/3 of space -->
					<div class="col-lg-2 col-12 d-flex justify-content-center">
						<a class="navbar-brand m-0 d-xl-block d-none" href="<?php echo home_url(); ?>">
							<div class="brand-text">
								<img src="<?php echo $header_logo ?? ''; ?>" alt="">
							</div>
						</a>
					</div>

					<!-- Right side actions - takes 1/3 of space -->
					<div class="col-lg-5 col-12">
						<div class="navbar-actions d-xl-flex d-none">
							<a href="<?php echo $button_1['url'] ?? ''; ?>" class="btn btn-link me-2">
								<?php echo $button_1['title'] ?? ''; ?>
							</a>
							<a href="<?php echo $button_2['url'] ?? ''; ?>" class="btn btn-link btn-2 me-2">
								<i class="fa-solid fa-phone-volume"></i> <?php echo $button_2['title'] ?? ''; ?>
							</a>
							<a href="<?php echo $button_3['url'] ?? ''; ?>" class="btn btn-appointment">
								<?php echo $button_3['title'] ?? ''; ?>
							</a>
						</div>
					</div>
				</div>

			</div>
		</nav>
	</header>

	<!-- Main Content -->
	<main>