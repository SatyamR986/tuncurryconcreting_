<?php
/**
 * Template Name: Our Projects   Page
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
            <h5>Our Projects</h5>
            <ul class="bread-row">
                <li class="bread-list"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-list">Our Projects</li>
            </ul>
        </div>
    </div>
</div>





<section class="project-gallery">
    <div class="header-title">
        <div class="title">
            <h1>Our <span>Projects</span></h1>
            <!-- <h4>some of our projects work</h4> -->
        </div>
        <div class="image-deco">
            <img src="images/header-liner.png" alt="">
        </div>
    </div>
    
    <div class="container">
        <div class="wrap">
            <div class="block">
                <a href="images/gallery1.jpg">
                    <img src="images/gallery1.jpg" alt="">
                </a>
                <div class="content">
                    <p><span class="cat-divider">Renovation</span></p>
                    <h5 class="title">Prroject 1</h5>
                </div>
            </div>
            <div class="block">
                <a href="images/gallery2.jpg">
                    <img src="images/gallery2.jpg" alt="">
                </a>
                <div class="content">
                    <p><span class="cat-divider">Renovation</span></p>
                    <h5 class="title">Prroject 2</h5>
                </div>
            </div>
            <div class="block">
                <a href="images/gallery3.jpg">
                    <img src="images/gallery3.jpg" alt="">
                </a>
                <div class="content">
                    <p><span class="cat-divider">Renovation</span></p>
                    <h5 class="title">Prroject 3</h5>
                </div>
            </div>
            <div class="block">
                <a href="images/gallery4.jpg">
                    <img src="images/gallery4.jpg" alt="">
                </a>
                <div class="content">
                    <p><span class="cat-divider">Renovation</span></p>
                    <h5 class="title">Prroject 4</h5>
                </div>
            </div>
            <div class="block">
                <a href="images/gallery5.jpg">
                    <img src="images/gallery5.jpg" alt="">
                </a>
                <div class="content">
                    <p><span class="cat-divider">Renovation</span></p>
                    <h5 class="title">Prroject 5</h5>
                </div>
            </div>
            <div class="block">
                <a href="images/gallery7.jpg">
                    <img src="images/gallery7.jpg" alt="">
                </a>
                <div class="content">
                    <p><span class="cat-divider">Renovation</span></p>
                    <h5 class="title">Prroject 6</h5>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/quote.php'; ?>