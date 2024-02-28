<?php
/**
 * Template Name: Services Page
 * 
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tuncurryconcreting
 */

get_header();
?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h5>Services</h5>
            <ul class="bread-row">
                <li class="bread-list"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-list">Services</li>
            </ul>
        </div>
    </div>
</div>

<div class="page page-service">
    <?php include get_template_directory() . '/includes/service.php'; ?>
    <!-- <section class="about">
        <div class="container">
        </div>
    </section> -->
    <?php include get_template_directory() . '/includes/special_features.php'; ?>
    <div class="chose-us">
        <div class="container">
            <div class="chose-wrapper">
                <div class="new-header-title">
                    <div class="title">
                        <h6>Why choose us</h6>
                        <h4>There are many companies but why <span>choose us</span></h4>
                    </div>
                    <div class="content">
                        <p>Our mission is to provide a straightforward stress-free experience by offering a bespoke service delivered by an experienced and professional team. Let us take away the hassle of packing and unpacking amidst an already tiresome and stressful move. We can help with whole-house moves and office moves or even a few items, you can even delegate us to follow your lead or specific instructions, just let us know and consider it done. Unpacking at your new address and arranging your things can be a fun exercise. In an ideal world, everything will be in the correct room, neatly packed and labeled waiting for you.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start tab-pannel">
                    <div class="nav flex-column nav-pills me-3 tab-nav" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home"
                            role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <h4>Expert Team</h4>
                            <p>We have team of Experts</p>
                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <h4>Completion of Jobs</h4>
                            <p>We complete our projects on due time</p>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages"
                            role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <h4>Best Quality</h4>
                            <p>We provide you the best quality services</p>
                        </a>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab"><img src="images/about1.jpg" alt=""></div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab"><img src="images/about1.jpg" alt=""></div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab"><img src="images/about1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include get_template_directory() . '/includes/testimonial.php'; ?>
    <?php include get_template_directory() . '/pages/quote.php'; ?>
</div>