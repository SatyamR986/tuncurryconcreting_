<?php
/**
 * The template for displaying all pages
 *
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

<?php include 'includes/banner.php'; ?>
<?php include 'includes/about.php'; ?>
<?php include 'includes/gallery.php'; ?>
<?php 
    // include 'includes/special_features.php';
?>
<?php include 'includes/service.php'; ?>
<?php include 'includes/experience.php'; ?>
<?php include 'includes/testimonial.php'; ?>
<?php include 'includes/quote.php'; ?>

<?php
get_sidebar();
get_footer();
