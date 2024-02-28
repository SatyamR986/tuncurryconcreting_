<?php
	
	$page = (isset($_GET['id'])) ? $_GET['id'] : 'home';
	if(!in_array($page, array('home','about','services','our_projects','contact','quote','service_single','new_dwellings','renovations_extensions','knockdown_rebuild','duplexes','townhomes','custom_designing',)))
	{
	include("404.php");
	exit;
	}
?>


<!doctype html>
<html lang="en">


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


<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $co;?></title>

    <!-- LInks -->
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- FontAwesome version 4.7 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <!-- FontAwesome version 5.8 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/simple-line-icons.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Slick Slider -->
    <link rel="stylesheet" href="css/slick.min.css">

    <!-- Wow Css -->
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

<!--  -->
</head>
<!-- End of Head Section -->

<body>
    <div class="main-line">
        <div class="inner">
            <div class="content"></div>
        </div>
    </div>
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
                <button type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                    <img src="images/menu2.png" alt="">
                </button>
                <div class="collapse navbar-collapse text-right" id="navbarNav">
                    <ul class="navbar-nav main-nav">
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

                    </ul>
                </div>
                <a class="navbar-brand" href="./">
                    <figure>
                        <img src="images/logo-w.png" alt="" class="image1">
                        <img src="images/logo-w.png" alt="" class="image2">
                    </figure>
                </a>
            </nav>
        </div>
    </header>
    Header Ends