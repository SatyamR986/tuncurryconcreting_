<?php
/**
 * Template Name: Quote Page
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

<div class="breadcrumb section">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h5>Quote</h5>
            <ul class="bread-row">
                <li class="bread-list"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-list">Quote</li>
            </ul>
        </div>
    </div>
</div>
<div class="page-quote">
    <div class="container">
        <div class="page-quote-wrapper">
            <form class="form" action="https://formsubmit.co/<?php echo $email;?>" method="POST">
                <div class="form-title">
                    <h4>Tell us about your project</h4>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="Full Name" class="form-info" placeholder="Full Name">
                    <input type="email" name="Email" class="form-info" placeholder="Email">
                    <input type="text" name="Address" class="form-info" placeholder="Address">
                    <input type="phone" name="Phone" class="form-info" placeholder="Phone No">
                    <select class="form-info" id="exampleFormControlSelect1" name="Service Type">
                        <option>Service Type</option>
                        <option>New Dwellings</option>
                        <option>Knockdown Rebuild</option>
                        <option>Renovations</option>
                        <option>Extensions</option>
                        <option>Townhomes</option>
                        <option>Duplexes</option>
                        <option>Custom Designing</option>
                    </select>
                    <input type="subject" name="Subject" class="form-info" placeholder="Subject">
                    <textarea name="Message" rows="5" class="form-info" placeholder="Message"></textarea>
                    <button type="submit" class="form-submit-btn">Request a Quote</button>
                </div>
                <input type="text" name="_honey" style="display:none">
                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_next" value="">
            </form>
            <div class="quote-image">
                <img src="images/quote-img.jpg" alt="">
            </div>
        </div>
    </div>
</div>