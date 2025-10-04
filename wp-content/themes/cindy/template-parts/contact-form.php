<?php

/**
 * Template Name: Contact Form Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
<section class="home-banner inner-banner banner-slider-section">
    <div class="image">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Banner-7.png"
            alt="<?php echo $title ?? ''; ?>">
    </div>
    <div class="container-wrap">

        <div class="swiper banner-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row justify-content-center align-items-end">
                            <div class="col-lg-8 col-12">
                                <div class="content">
                                    <span class="sub-title">New Patient Information </span>
                                    <h1>See Clearly Today</h1>
                                    <p>
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49 9"
                                            width="49" height="9">
                                            <style>
                                            .a {
                                                fill: #fff
                                            }
                                            </style>
                                            <path class="a" d="m49 0v1h-48v-1zm-4 8v1h-14v-1z" />
                                        </svg>Clear Vision Today, Healthy Eyes Tomorrow
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49 9"
                                            width="49" height="9">
                                            <style>
                                            .a {
                                                fill: #fff
                                            }
                                            </style>
                                            <path class="a" d="m1 0v1h48v-1zm4 8v1h14v-1z" />
                                        </svg>
                                    </p>
                                    <span class="small">
                                        Welcome! Please complete this form to help us provide you with the best possible
                                        care. We need your basic details to create and update your patient record.Your
                                        eye history helps us understand your vision needs and provide tailored care.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row justify-content-center align-items-end">
                            <div class="col-lg-8 col-12">
                                <div class="content">
                                    <h1>Meet the Doctor</h1>
                                    <p>
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49 9"
                                            width="49" height="9">
                                            <style>
                                            .a {
                                                fill: #fff
                                            }
                                            </style>
                                            <path class="a" d="m49 0v1h-48v-1zm-4 8v1h-14v-1z" />
                                        </svg>Expert Care with a Personal Touch
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49 9"
                                            width="49" height="9">
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
            </div>


        </div>
        <div class="dual-page-wrap">
            <div class="arrow-wrap">
                <div class=" banner-next">
                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 16" width="29" height="16">
                        <style>
                        .a {
                            fill: #fff
                        }
                        </style>
                        <path fill-rule="evenodd" class="a"
                            d="m20.7 15.9q0.2 0.1 0.3 0.1 0.2 0 0.3-0.1l7.6-7.6q0.1-0.1 0.1-0.3 0-0.2-0.1-0.3l-7.6-7.6q-0.1-0.1-0.3-0.1-0.1 0-0.3 0.1l-0.2 0.3q-0.1 0.1-0.1 0.3 0 0.2 0.1 0.3l6.4 6.4h-26.5q-0.1 0-0.3 0.1-0.1 0.2-0.1 0.3v0.4q0 0.2 0.1 0.3 0.2 0.1 0.3 0.1h26.5l-6.4 6.4q-0.1 0.2-0.1 0.3 0 0.2 0.1 0.3z" />
                    </svg>
                </div>
                <div class=" banner-prev">
                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 16" width="29" height="16">
                        <style>
                        .a {
                            fill: #fff
                        }
                        </style>
                        <path fill-rule="evenodd" class="a"
                            d="m8.3 15.9q-0.2 0.1-0.3 0.1-0.2 0-0.3-0.1l-7.6-7.6q-0.1-0.1-0.1-0.3 0-0.2 0.1-0.3l7.6-7.6q0.1-0.1 0.3-0.1 0.1 0 0.3 0.1l0.2 0.3q0.1 0.1 0.1 0.3 0 0.2-0.1 0.3l-6.4 6.4h26.5q0.1 0 0.3 0.1 0.1 0.2 0.1 0.3v0.4q0 0.2-0.1 0.3-0.2 0.1-0.3 0.1h-26.5l6.4 6.4q0.1 0.2 0.1 0.3 0 0.2-0.1 0.3z" />
                    </svg>
                </div>
            </div>
            <div class="pagination-wrap">
                <div class="swiper-pagination banner-pagination-bullets"></div>
                <div class="swiper-pagination banner-pagination"></div>
            </div>
        </div>
    </div>


</section>
<hr>
<section class="form-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="contact-left">
                    <div class="title-wrap mb-6xl">
                        <span class="super-title primary-color"> Office Information & Location</span>
                        <h2 class="title">We’d Love to Hear From You</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    <div class="contact-card-wrap">
                        <div class="contact-card">
                            <div class="icon">
                                <img src="<?php echo get_site_url( ); ?>/wp-content/uploads/2025/10/phone.png" alt="">
                            </div>
                            <div class="info">
                                <h5>Call Us Now!</h5>
                                <span>914.602.0114</span>
                            </div>
                        </div>
                        <div class="contact-card">
                            <div class="icon">
                                <img src="<?php echo get_site_url( ); ?>/wp-content/uploads/2025/10/envelope-open.png" alt="">
                            </div>
                            <div class="info">
                                <h5>Email Us</h5>
                                <span>info@seewithdrcindy.com</span>
                            </div>
                        </div>
                        <div class="contact-card">
                            <div class="icon">
                                <img src="<?php echo get_site_url( ); ?>/wp-content/uploads/2025/10/map-marker-alt.png" alt="">
                            </div>
                            <div class="info">
                                <h5>Meet Us</h5>
                                <span>1A Quaker Ridge Road, New Rochelle, NY, 10804</span>
                            </div>
                        </div>
                        <div class="contact-card">
                            <div class="icon">
                                <img src="<?php echo get_site_url( ); ?>/wp-content/uploads/2025/10/clock.png" alt="">
                            </div>
                            <div class="info">
                                <h5>Hours of operation</h5>
                                <span>Tue & Wed 10AM-4:30PM</span>
                                <span>Thu 10AM-6PM</span>
                                <span>Fri 10AM-4PM</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="booking-form">
                    <h2>Book Your Appointment</h2>

                    <!-- 
                    ========================================================
                    CONTACT FORM 7 CODE - COPY AND PASTE INTO CF7 EDITOR
                    ========================================================
                    
                    <div class="cf7-form-row">
                        <div class="cf7-form-group">
                            <label>Your Name<span>*</span></label>
                            [text* your-name placeholder "Enter Your Name"]
                        </div>
                    </div>

                    <div class="cf7-form-row cf7-double">
                        <div class="cf7-form-group cf7-half">
                            <label>Your Email Address<span>*</span></label>
                            [email* your-email placeholder "Enter Your Email"]
                        </div>
                        <div class="cf7-form-group cf7-half">
                            <label>Your Phone Number</label>
                            [tel your-phone placeholder "Enter Your Number"]
                        </div>
                    </div>

                    <div class="cf7-form-row">
                        <div class="cf7-form-group">
                            <label>Enter Your Message<span>*</span></label>
                            [textarea* your-message placeholder "Enter Your Message..."]
                        </div>
                    </div>

                    <div class="cf7-form-row">
                        <div class="cf7-form-group cf7-submit-group">
                            [submit "SUBMIT NOW"]
                        </div>
                    </div>
                    
                    ========================================================
                    END OF CONTACT FORM 7 CODE
                    ========================================================
                    -->

                    <!-- Your Contact Form 7 shortcode will go here -->
                    <?php echo do_shortcode('[contact-form-7 id="c235022" title="Contact Form"]'); ?>

                </div>
            </div>
        </div>
    </div>



    </div>
</section>
<hr>
<?php get_footer(); ?>