<?php

/**
 * Template Name: Contact Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
<section class="home-banner inner-banner banner-slider-section">
    <div class="image">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/10/Banner-8.png"
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
            <div class="col-lg-10 col-12">
                <div class="form-wrapper">
                    <div class="title-wrap text-center mb-6xl">
                        <span class="super-title secondary-color">Optometrist</span>
                        <h2 class="title">Dr. Cindy Joseph</h2>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>1A Quaker Ridge Road, New Rochelle, NY, 10804</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>914.602.0114</span>
                        </div>
                    </div>

                    <!-- Replace the ID below with your actual Contact Form 7 ID -->
                    <div class="patient-form">
                        <?php echo do_shortcode('[contact-form-7 id="6718121" title="Patient form"]'); ?>
                    </div>

                    <!-- 
                    ===========================================
                    CONTACT FORM 7 CODE TO COPY TO YOUR FORM
                    ===========================================
                    
                    Copy the code below and paste it in your Contact Form 7 form editor:
                    
                    <div class="cf7-row">
                        <div class="cf7-col-3">
                            <label>First Name <span class="star">*</span></label>
                            [text* first-name placeholder "Type name..."]
                        </div>
                        <div class="cf7-col-3">
                            <label>Last Name <span class="star">*</span></label>
                            [text* last-name placeholder "Type name..."]
                        </div>
                        <div class="cf7-col-3">
                            <label>MI</label>
                            [text mi placeholder "Type MI..."]
                        </div>
                        <div class="cf7-col-3">
                            <label>Date <span class="star">*</span></label>
                            [date* date-field]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-12">
                            <label>Parent/Guardian (for Minor Children):</label>
                            [text parent-guardian placeholder "Type here..."]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-6">
                            <label>Date of Birth <span class="star">*</span></label>
                            [date* date-birth]
                        </div>
                        <div class="cf7-col-6">
                            <label>Occupation <span class="star">*</span></label>
                            [text* occupation placeholder "Type Here..."]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-3">
                            <label>Address <span class="star">*</span></label>
                            [text* address placeholder "Type here..."]
                        </div>
                        <div class="cf7-col-3">
                            <label>City <span class="star">*</span></label>
                            [text* city placeholder "Type Here..."]
                        </div>
                        <div class="cf7-col-3">
                            <label>State <span class="star">*</span></label>
                            [text* state placeholder "Type Here..."]
                        </div>
                        <div class="cf7-col-3">
                            <label>Zip <span class="star">*</span></label>
                            [text* zip placeholder "Type Here..."]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-4">
                            <label>Telephone: Home <span class="star">*</span></label>
                            [tel* phone-home placeholder "Type Here..."]
                        </div>
                        <div class="cf7-col-4">
                            <label>Cell <span class="star">*</span></label>
                            [tel* phone-cell placeholder "Type Here..."]
                        </div>
                        <div class="cf7-col-4">
                            <label>Work <span class="star">*</span></label>
                            [tel* phone-work placeholder "Type Here..."]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-12">
                            <label>E-mail <span class="star">*</span></label>
                            [email* email-field placeholder "(Recall Notification by Email only)"]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-6 two-in-one">
                            <div class="radio-boxes">
                                <label>New Patient <span class="star">*</span></label>
                                [radio new-patient use_label_element class:radio-option "Yes" "No"]
                            </div>
                            
                           <div class="cf7-col">
                             <label>Referred By</label>
                             [text referred-by placeholder "Type here..."]
                            </div> 
                        </div>
                       
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-6">
                            <label>Last Eye Exam <span class="star">*</span></label>
                            [text* last-eye-exam placeholder "Type Here..."]
                        </div>
                        <div class="cf7-col-6">
                            <label>Reason For Today's Exam <span class="star">*</span></label>
                            [text* reason-exam placeholder "Type Here..."]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-12">
                            <label>Describe Any Previous Injury, Disease Or Surgery Of The Eyes <span class="star">*</span></label>
                            [text* previous-injury placeholder "Type Here..."]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-12 radio-boxes-full">
                            <div class="radio-boxes">
                                <label>Contact Lens Wearer: Yes/No If NO, Are You Interested In Contact Lenses <span class="star">*</span></label>
                                [radio contact-lens use_label_element class:radio-option "Yes" "No"]
                            </div>
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-12">
                            <label>Type of Insurance <span class="star">*</span></label>
                            [text* insurance-type placeholder "Type Here..."]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-12">
                            <div class="radio-boxes">
                                <label>Do You Wear Glasses <span class="star">*</span></label>
                                [radio glasses use_label_element class:radio-option "Distance" "Reader" "Bifocal" "Progressive"]
                            </div>
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-6">
                            <label>Last Medical Exam <span class="star">*</span></label>
                            [text* last-medical-exam placeholder "Type Here..."]
                        </div>
                        <div class="cf7-col-6">
                            <label>Primary Care Physician <span class="star">*</span></label>
                            [text* primary-care placeholder "Type Here..."]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-12">
                            <label>List All Medications You Are Currently Taking (Including Contraceptives) <span class="star">*</span></label>
                            [text* medications placeholder "Type Here..."]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-6">
                            <label>Seasonal Allergies <span class="star">*</span></label>
                            [text* seasonal-allergies1 placeholder "Type Here..."]
                        </div>
                        <div class="cf7-col-6">
                            <label>Seasonal Allergies <span class="star">*</span></label>
                            [text* seasonal-allergies2 placeholder "Type Here..."]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-12">
                            <div class="radio-boxes">
                                <label>Family History (select any that apply) <span class="star">*</span></label>
                                [checkbox* family-history use_label_element class:radio-option "Diabetes" "Hypertension" "Glaucoma" "Macular Degeneration" "Retinal Detachment"]
                            </div>
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-12">
                            <div class="hipaa-section">
                                <label>HIPAA PRIVACY POLICY <span class="star">*</span></label>
                                 [checkbox* hipaa-one use_label_element "I give Dr. Cindy Josephyne consent to use or disclose my protected health information to carry out treatment as well as health care operations to assure quality reviews."]
                                 [checkbox* hipaa-two use_label_element "I have been informed that I may revoke this authorization before my first service if no that I have the right to review any changes to the privacy policy of this practice."]
                                 [checkbox* hipaa-three use_label_element "I understand I may revoke this consent at any time by making a request in writing."]
                                 [checkbox* hipaa-four use_label_element "I have provided a copy of my card here so, at the completion of my contact information and I consent to having my contact card be sent to me by email, if applicable."]
                                
                            </div>
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-6">
                            <label>Patient Signature <span class="star">*</span></label>
                            [signature* patient-signature color:#000000 backcolor:#dddddd width:300 height:200 id:10 class:signature_class]
                        </div>
                        <div class="cf7-col-6">
                            <label>Date <span class="star">*</span></label>
                            [date* signature-date]
                        </div>
                    </div>

                    <div class="cf7-row">
                        <div class="cf7-col-12 text-center">
                            [submit "Submit Form"]
                        </div>
                    </div>
                    
                    -->
                </div>
            </div>
        </div>
    </div>



    </div>
</section>
<hr>
<?php get_footer(); ?>