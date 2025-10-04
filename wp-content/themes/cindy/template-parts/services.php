<?php

/**
 * Template Name: Services Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
<section class="home-banner inner-banner">
    <div class="image">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Banner-2.png"
            alt="<?php echo $title ?? ''; ?>">
    </div>
    <div class="container-wrap">
        <div class="container">
            <div class="row justify-content-center align-items-end">
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h1>Healthy Eyes</h1>
                        <p> <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49 9" width="49"
                                height="9">
                                <style>
                                    .a {
                                        fill: #fff
                                    }
                                </style>
                                <path class="a" d="m49 0v1h-48v-1zm-4 8v1h-14v-1z" />
                            </svg>Clear Vision. Personalized Care<svg version="1.2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 49 9" width="49" height="9">
                                <style>
                                    .a {
                                        fill: #fff
                                    }
                                </style>
                                <path class="a" d="m1 0v1h48v-1zm4 8v1h14v-1z" />
                            </svg></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<?php
$tabs = get_field('tabs');
// print_r($tabs);
$super_title = $tabs['super_title'];
$title = $tabs['title'];
$items = $tabs['items'];
?>
<section class="tabs-section">
    <div class="container">
        <div class="title-wrap text-center mb-6xl">
            <span class="super-title"><?php echo $super_title ?? ''; ?></span>
            <h2 class="title"><?php echo $title ?? ''; ?></h2>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="servicesTabs" role="tablist">

                    <?php foreach ($items as $index => $item): ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>"
                                id="service<?php echo $index + 1; ?>-tab" data-bs-toggle="tab"
                                data-bs-target="#service<?php echo $index + 1; ?>" type="button" role="tab"
                                aria-controls="service<?php echo $index + 1; ?>"
                                aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"><?php echo esc_html($item['title']); ?></button>
                        </li>
                    <?php endforeach; ?>



                </ul>

                <!-- Tab panes -->
                <div class="tab-content" id="servicesTabContent">


                    <?php foreach ($items as $index => $item): ?>
                        <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>"
                            id="service<?php echo $index + 1; ?>" role="tabpanel"
                            aria-labelledby="service<?php echo $index + 1; ?>-tab">
                            <div class="tab-content tab-cus"
                                style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-2-3.png');">
                                <div class="row align-items-center">
                                    <div class="col-md-5 col-12">
                                        <img src="<?php echo esc_url($item['image']); ?>" class="img-fluid"
                                            alt="<?php echo esc_attr($item['title']); ?>">
                                    </div>
                                    <div class="col-md-7 col-12">
                                        <div class="content text-white"><?php echo $item['content']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>
<?php
$section_1 = get_field('section_1');
$super_title = $section_1['super_title'];
$content = $section_1['content'];
$image = $section_1['image'];
?>
<section class="zigzag zigzag-1">
    <div class="container">
        <div class="row align-items-center">
            <div class=" col-lg-6 col-12 mb-lg-0 mb-5">
                <div class="content">
                    <span class="super-title"><?php echo esc_html($super_title); ?></span>
                    <?php echo $content; ?>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="image">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-5.png" alt="side image"
                        class="side-image">
                    <img src="<?php echo esc_url($image); ?>" class="img-fluid"
                        alt="<?php echo esc_attr($super_title); ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<?php
$section_2 = get_field('section_2');
$super_title = $section_2['super_title'];
$content = $section_2['content'];
$image = $section_2['image'];
?>
<section class="zigzag zigzag-2"
    style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-1-5.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 mb-lg-0 mb-5">
                <div class="image">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-5.png" alt="side image"
                        class="side-image">
                    <img src="<?php echo esc_url($image); ?>" class="img-fluid"
                        alt="<?php echo esc_attr($super_title); ?>">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="content text-white">
                    <span class="super-title"><?php echo esc_html($super_title); ?></span>
                    <?php echo $content; ?>
                </div>
            </div>

        </div>
    </div>
</section>
<hr>
<?php
$benefits = get_field('benefits');
$super_title = $benefits['super_title'] ?? '';
$title = $benefits['title'] ?? '';
$items = $benefits['items'] ?? '';

?>
<!-- Featured benefits Section -->
<section class="benefits-section">
    <div class="container">
        <div class="title-wrap text-center mb-6xl">
            <span class="super-title"><?php echo $super_title; ?></span>
            <h2 class="title"><?php echo $title; ?></h2>
        </div>
        <div class="row">
            <?php foreach ($items as $key => $item): ?>
                <div class="col text-center">
                    <div class="benefits-item">
                        <div class="icon-circle">
                            <img src="<?php echo $item['image'] ?? ''; ?>" alt="" class="img-fluid">
                        </div>
                        <?php echo $item['content'] ?? ''; ?>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<hr>
<?php
$section_3 = get_field('section_3');
$super_title = $section_3['super_title'];
$content = $section_3['content'];
$image = $section_3['image'];
?>
<section class="zigzag zigzag-3"
    style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-1-4.png);">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12  mb-lg-0 mb-5">
                <div class="content">
                    <span class="super-title">
                        <?php echo esc_html($super_title); ?>
                    </span>
                    <?php echo $content; ?>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="image">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-5.png" alt="side image"
                        class="side-image">
                    <img src="<?php echo esc_url($image); ?>" class="img-fluid"
                        alt="<?php echo esc_attr($super_title); ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$section_4 = get_field('section_4');
$content = $section_4['content'];
?>
<hr>
<section class="plan-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="content text-center">
                    <div class="content px-3"><?php echo $content; ?></div>
                </div>
            </div>

        </div>
    </div>
</section>
<hr>
<?php
$section_5 = get_field('section_5');
$image = $section_5['image'];
$super_title = $section_5['super_title'];
$content = $section_5['content'];
?>
<section class="zigzag zigzag-5"
    style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-1-5.png);">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12  mb-lg-0 mb-5">
                <div class="content text-white">
                    <span class="super-title">
                        <?php echo esc_html($super_title); ?>
                    </span>
                    <?php echo $content; ?>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="image">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-5.png" alt="side image"
                        class="side-image">
                    <img src="<?php echo esc_url($image); ?>" class="img-fluid"
                        alt="<?php echo esc_attr($super_title); ?>">
                </div>
            </div>

        </div>
    </div>
</section>

<?php
$mayopia = get_field('mayopia');
// print_r($mayopia);
$title = $mayopia['title'] ?? '';
$content = $mayopia['content'] ?? '';
$items = $mayopia['items'] ?? '';
$bottom_content = $mayopia['bottom_content'] ?? '';

?>
<!-- Featured Services Section -->
<section class="featured-services"
    style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-3-4.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="title-wrap text-center mb-6xl">
                    <h2 class="title"><?php echo $title; ?></h2>
                    <p><?php echo $content; ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($items as $key => $item): ?>
                <div class="col-lg-3 col-12">
                    <div class="fs-item">
                        <div class="fs-top">
                            <div class="icon-circle">
                                <img src="<?php echo $item['image'] ?? ''; ?>" alt="" class="img-fluid">
                            </div>
                            <?php echo $item['content'] ?? ''; ?>
                        </div>
                        <a href="<?php echo $item['link']['url'] ?? ''; ?>"
                            class="read-more"><?php echo $item['link']['title'] ?? ''; ?> <i
                                class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-lg-6 col-12">
                <div class="fs-bottom-content"><?php echo $bottom_content; ?></div>
            </div>
        </div>
    </div>
</section>




<?php
$section_6 = get_field('section_6');
$image = $section_6['image'];
$content = $section_6['content'];
?>
<section class="zigzag zigzag-6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12  mb-lg-0 mb-5">
                <div class="image">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-5.png" alt="side image"
                        class="side-image">
                    <img src="<?php echo esc_url($image); ?>" class="img-fluid"
                        alt="<?php echo esc_attr($super_title); ?>">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="content">
                    <span class="super-title">
                        <?php echo esc_html($super_title); ?>
                    </span>
                    <?php echo $content; ?>
                </div>
            </div>


        </div>
    </div>
</section>

<?php
$section_7 = get_field('section_7');
$image = $section_7['image'];
$content = $section_7['content'];
$bottom_content = $section_7['bottom_content'];
?>
<section class="zigzag zigzag-7"
    style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-1-5.png);">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12 mb-lg-0 mb-5">
                <div class="content text-white">
                    <?php echo $content; ?>
                    <div class="bottom-content"><?php echo $bottom_content; ?></div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="image">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/09/Folder-5.png" alt="side image"
                        class="side-image">
                    <img src="<?php echo esc_url($image); ?>" class="img-fluid"
                        alt="<?php echo esc_attr($super_title); ?>">
                </div>
            </div>

        </div>
    </div>
</section>
<hr>

<?php
$section_8 = get_field('section_8');
$image = $section_8['image'];
$super_title = $section_8['super_title'];
$content = $section_8['content'];
?>
<section class="zigzag zigzag-8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 mb-lg-0 mb-5">
                <div class="image">
                    <img src="<?php echo esc_url($image); ?>" class="img-fluid"
                        alt="<?php echo esc_attr($super_title); ?>">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="content">
                    <span class="super-title">
                        <?php echo esc_html($super_title); ?>
                    </span>
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<?php get_footer(); ?>