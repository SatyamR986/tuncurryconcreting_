<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tuncurryconcreting
 */

?>

<?php
GLOBAL $phone, $email, $address, $abn, $co, $owner, $map;
		$phone = "0414 980 764";
		$email = "info@tuncurryconcreting.com.au";
		$address = "Darawank NSW 2428";
		$abn = "39 662 152 650";
		$co = "Tuncurry Concreting";
		$owner = "";
		$map = ""; 
		?>
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header fixed-header">
        <div class="container">
            <ul class="navbar-nav top-nav">

                <li>
                    <div class="item d-flex">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text">
                            <a href="tel:<?php echo $phone;?>"><h6><?php echo $phone;?></h6></a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="mailto:<?php echo $email; ?>" class="item d-flex">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="text">
                            <h6><?php echo $email; ?></h6>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="item d-flex">
                        <div class="icon">
                            <i class="fa fa-clock"></i>
                        </div>
                        <div class="text">
                            <h6>Mon-Sat 7:00am-5:00pm</h6>
                        </div>
                    </a>
                </li>

            </ul>
            <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse text-right" id="navbarNav">
                    <!-- <ul class="navbar-nav main-nav">
                        <li class="nav-item <?php if($page== 'home'){echo 'active';} ?>">
                            <a href="./" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item <?php if($page== 'about'){echo 'active';} ?>">
                            <a href="about" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="services" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item <?php if($page==''){echo 'active';} ?>"
                                        href="">Driveways & Footpaths</a></li>
                                <li><a class="dropdown-item <?php if($page==''){echo 'active';} ?>"
                                        href="">House & Shed Slabs</a></li>
                                <li><a class="dropdown-item <?php if($page==''){echo 'active';} ?>"
                                        href="">Decorative Concrete</a></li>
                                <li><a class="dropdown-item <?php if($page==''){echo 'active';} ?>"
                                        href="">Resurfacing & Sealing</a></li>
                                <li><a class="dropdown-item <?php if($page==''){echo 'active';} ?>"
                                        href="">Retaining Walls</a></li>
                                <li><a class="dropdown-item <?php if($page==''){echo 'active';} ?>"
                                        href="">Pool Surrounds</a></li>
                                <li><a class="dropdown-item <?php if($page==''){echo 'active';} ?>"
                                        href="">Steel Fixing</a></li>
                            </ul>
                        </li>

                        <li class="nav-item <?php if($page== 'our_projects'){echo 'active';} ?>">
                            <a href="our_projects" class="nav-link">Our projects</a>
                        </li>

                        <li class="nav-item <?php if($page== 'contact'){echo 'active';} ?>">
                            <a href="contact" class="nav-link ">Contact Us</a>
                        </li>
                        <li class="nav-item <?php if($page== 'quote'){echo 'active';} ?>">
                            <a href="quote" class="nav-link button">Request a Quote</a>
                        </li>

                    </ul> -->
                    <?php bootstrap_nav('Main');?>
                </div>
                <button type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                    <img src="<?php echo get_template_directory_uri().'/images/logo.png'; ?>" alt="" style="max-width: 10%;">
                </button>
                
                <a class="navbar-brand" href="./">
                    <figure>
                        <img src="<?php get_template_directory_uri(). '/images/logo-w.png' ?>" alt="" class="image1">
                        <img src="<?php get_template_directory_uri(). '/images/logo-w.png' ?>" alt="" class="image2">
                    </figure>
                </a>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->