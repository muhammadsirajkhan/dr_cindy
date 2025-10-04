<?php

/**
 * Template Name: Home Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>



<?php
$banner = get_field('banner');
$image = $banner['image'] ?? '';
$super_title = $banner['super_title'] ?? '';
$title = $banner['title'] ?? '';
$content = $banner['content'] ?? '';
$link = $banner['link'] ?? '';

?>
<section class="home-banner">
    <div class="image">
        <img src="<?php echo $image ?? ''; ?>" alt="<?php echo $title ?? ''; ?>">
    </div>
    <div class="container-wrap">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <span class="sub-title"><?php echo $super_title ?? ''; ?></span>
                        <h1><?php echo $title ?? ''; ?></h1>
                        <?php echo $content ?? ''; ?>
                        <a href="<?php echo $link['url'] ?? '#'; ?>"
                            class="btn"><?php echo $link['title'] ?? 'Schedule Appointment'; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<?php
$welcome = get_field('welcome');
$image_1 = $welcome['image_1'] ?? '';
$image_2 = $welcome['image_2'] ?? '';
$title = $welcome['title'] ?? '';
$sub_title = $welcome['sub_title'] ?? '';
$content = $welcome['content'] ?? '';
$link = $welcome['link'] ?? '';

?>
<!-- About Section -->
<section class="about section" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-12 mb-lg-0 mb-5">
                <div class="about-content px-xl-5">
                    <div class="title-wrap">
                        <h2 class="title"><?php echo $title; ?></h2>
                        <h3 class="sub-title"><?php echo $sub_title; ?></h3>
                    </div>
                    <p>
                        <?php echo $content; ?>
                    </p>
                    <a href="<?php echo $link['url']; ?>" class="btn btn-learn-more"><?php echo $link['title']; ?></a>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="about-images px-xl-5">
                    <div class="image-top">
                        <img src="<?php echo $image_1; ?>" alt="<?php echo $title; ?>" class="img-fluid">
                    </div>
                    <div class="image-bottom">
                        <img src="<?php echo $image_2; ?>" alt="<?php echo $title; ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<!-- About Doctor Section -->

<?php
$about = get_field('about');
$image = $about['image'] ?? '';
$super_title = $about['super_title'] ?? '';
$title = $about['title'] ?? '';
$sub_title = $about['sub_title'] ?? '';
$content = $about['content'] ?? '';

?>
<section class="about-doctor">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-12 mb-lg-0 mb-5">
                <div class="image px-lg-4">
                    <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="title-wrap">
                    <span class="super-title"><?php echo $super_title; ?></span>
                    <h2 class="title"><?php echo $title; ?></h2>
                    <h3 class="sub-title"><?php echo $sub_title; ?></h3>
                </div>
                <div class="content">
                    <p><?php echo $content; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$featured = get_field('featured');
$image = $featured['image'] ?? '';
$title = $featured['title'] ?? '';
$sub_title = $featured['sub_title'] ?? '';
$content = $featured['content'] ?? '';
$items = $featured['items'] ?? '';


$link_1 = $featured['link_1'] ?? '';


?>
<!-- Featured Services Section -->
<section class="featured-services text-white"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/feature-bg.png');">
    <div class="container">
        <div class="title-wrap text-center mb-6xl">
            <span class="super-title"><?php echo $super_title; ?></span>
            <h2 class="title"><?php echo $title; ?></h2>
            <h3 class="sub-title"><?php echo $sub_title; ?></h3>
        </div>
        <div class="row">
            <?php foreach ($items as $key => $item): ?>
                <div class="col text-center">
                    <div class="service-item">
                        <div class="icon-circle">
                            <img src="<?php echo $item['image'] ?? ''; ?>" alt="" class="img-fluid">
                        </div>
                        <?php echo $item['content'] ?? ''; ?>
                        <a href="<?php echo $item['link']['url'] ?? ''; ?>"
                            class="read-more"><?php echo $item['link']['title'] ?? ''; ?> <i
                                class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<hr>

<?php
$insurance = get_field('insurance');
// print_r($insurance);
$super_title = $insurance['super_title'];
$title = $insurance['title'];
$sub_title = $insurance['sub_title'];
$items = $insurance['items'];
?>
<section class="insurance">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="title-wrap text-center mb-6xl">
                    <span class="super-title"><?php echo $super_title; ?></span>
                    <h2 class="title"><?php echo $title; ?></h2>
                    <h3 class="sub-title"><?php echo $sub_title; ?></h3>
                </div>

                <div class="insurance-slider">
                    <div class="swiper insurance-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($items as $key => $item): ?>
                                <div class="swiper-slide">
                                    <div class="logo-item">
                                        <img src="<?php echo $item['image'] ?? ''; ?>" alt="Insurance Logo"
                                            class="img-fluid">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Pagination -->
                        <div class="swiper-pagination insurance-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
</section>
<hr>
<?php
$testimonials = get_field('testimonials');
// print_r($testimonials);
$super_title = $testimonials['super_title'];
$title = $testimonials['title'];
$items = $testimonials['items'];
?>
<!-- Hero Section -->
<section class="testimonials-section" id="testimonials"
    style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-1-4.png');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12">
                <div class="title-wrap text-start">
                    <div class="title-inner">
                        <span class="super-title"><?php echo $super_title; ?></span>
                        <h2 class="title"><?php echo $title; ?></h2>
                    </div>
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-1-1.png" alt=""
                        class="test-side-image">
                </div>
                <div class="testimonials-slider">
                    <div class="swiper testimonials-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($items as $key => $item): ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p><?php echo $item['content'] ?? ''; ?></p>
                                        </div>
                                        <div class="author-info">
                                            <div class="author-name">
                                                <h4><?php echo $item['name'] ?? ''; ?></h4>
                                                <span><?php echo $item['position'] ?? ''; ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Pagination -->
                        <div class="swiper-pagination testimonials-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>