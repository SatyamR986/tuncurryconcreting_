<?php
/**
 * Template Name: Contact Page
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
            <h5>Contact</h5>
            <ul class="bread-row">
                <li class="bread-list"><a href="./" class="bread-link">Home</a></li>
                <li class="bread-list">Contact</li>
            </ul>
        </div>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="contact-wrapper">

            <div class="contact-title">
                <h4>Get in touch</h4>
            </div>
            <div class="contact-form-wrapper">
                <div class="contact-info">
                    <a href="tel:<?php echo $phone;?>" class="contact-detail">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="text">
                            <h6><?php echo $phone;?></h6>
                        </div>
                    </a>
                    <a href="tel:<?php echo $email;?>" class="contact-detail">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text">
                            <h6><?php echo $email;?></h6>
                        </div>
                    </a>
                    <div class="contact-detail">
                        <div class="icon">
                            <i class="fas fa-map-marker"></i>
                        </div>
                        <div class="text">
                            <h6><?php echo $address;?></h6>
                        </div>
                    </div>
                </div>
                <form class="contact-form" action="https://formsubmit.co/<?php echo $email;?>" method="POST">
                    <div class="input-form-group half_grid mrt">
                        <label class="form-label overlap">
                            <h5>First Name</h5>
                        </label>
                        <input type="text" class="form-control" name="fName">
                    </div>
                    <div class="input-form-group half_grid mlt">
                        <label class="form-label overlap">
                            <h5>Last Name</h5>
                        </label>
                        <input type="text" class="form-control" name="lName">
                    </div>
                    <div class="input-form-group half_grid mrt">
                        <label class="form-label overlap">
                            <h5>Phone</h5>
                        </label>
                        <input type="tel" class="form-control" name="phone">
                    </div>
                    <div class="input-form-group half_grid mlt">
                        <label class="form-label overlap">
                            <h5>Email</h5>
                        </label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="input-form-group">
                        <label class="form-label overlap">
                            <h5>Subject</h5>
                        </label>
                        <input type="text" class="form-control" name="subject">
                    </div>
                    <div class="input-form-group">
                        <label class="form-label overlap">
                            <h5>Message</h5>
                        </label>
                        <textarea type="text" rows="5" class="form-control" name="message"></textarea>
                    </div>
                    <div class="input-submit-button">
                        <button type="submit" class="btn-main btn-medium btn-secondarycolor">Submit</button>
                    </div>
                    <input type="text" name="_honey" style="display:none">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_next" value="">
                </form>
            </div>

        </div>
    </div>
</div>

<div class="map-section">
    <iframe src="<?php echo $map;?>" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen=""
        aria-hidden="false" tabindex="0"></iframe>
</div>

<?php include get_template_directory() . '/pages/quote.php'; ?>