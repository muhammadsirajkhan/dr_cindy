<?php

/**
 * Template Name: About Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
<section class="home-banner inner-banner">
    <div class="image">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Banner-7.png"
            alt="<?php echo $title ?? ''; ?>">
    </div>
    <div class="container-wrap">
        <div class="container">
            <div class="row justify-content-center align-items-end">
                <div class="col-lg-8 col-12">
                    <div class="content">
                        <h1>Meet the Doctor</h1>
                        <p>
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49 9" width="49"
                                height="9">
                                <style>
                                    .a {
                                        fill: #fff
                                    }
                                </style>
                                <path class="a" d="m49 0v1h-48v-1zm-4 8v1h-14v-1z" />
                            </svg>Expert Care with a Personal Touch
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49 9" width="49"
                                height="9">
                                <style>
                                    .a {
                                        fill: #fff
                                    }
                                </style>
                                <path class="a" d="m1 0v1h48v-1zm4 8v1h14v-1z" />
                            </svg>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$about = get_field('about', 7);
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
<hr>

<?php
// $section_4 = get_field('section_4');
// $content = $section_4['content'];
?>

<section class="plan-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="content text-center">
                    <!-- <div class="content px-3"><?php echo $content; ?></div> -->
                    <div class="content px-3">
                        <span class="sub-title">Meet the team</span>
                        <h2>The Optical Team</h2>
                        <p>The Optical Shop is an independent, family-owned and operated business in the Wykagyl
                            community of New Rochelle. With over 25 years of experience in the industry they strive to
                            give their customers individualized care. Essie Giraldi and her daughter, Danielle
                            Cirasella, along with their team of opticians and Optometrist, Dr Cindy Joseph, look forward
                            to servicing the community’s optical needs.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<hr>
<?php get_footer(); ?>