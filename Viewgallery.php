
<?php
include'config.php';
?>
<?php
$id = $_REQUEST['id'];
   $query=" SELECT
mainlandproperty.id,
mainlandproperty.project_name
FROM
mainlandproperty
WHERE
mainlandproperty.id = '$id'";

$sql = mysqli_query($con_main, $query);
$type = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="zxx">
<style>

.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<!-- Mirrored from code-theme.com/html/findhouses/single-property-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2020 09:36:45 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Property Details</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:500,600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="css/leaflet.markercluster.css">
    <link rel="stylesheet" href="css/leaflet.markercluster.default.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/timedropper.css">
    <link rel="stylesheet" href="css/datedropper.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
</head>

<body class="inner-pages sin-1">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
                <!-- Topbar -->
            <div class="header-top">
                <div class="container">
                    <div class="top-info hidden-sm-down">
                        <div class="call-header">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+94112160679" style="color: white">+94 11 216 0679</a></p>
                        </div>
                        <div class="address-header">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> No.97, Polwatta Road,Pannipitiya</p>
                        </div>
                        <div class="mail-header">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@elitelands.lk" style="color: white">info@elitelands.lk</a></p>
                        </div>
                    </div>
                    <div class="top-social hidden-sm-down">
                        <div class="login-wrap">
                            <ul class="d-flex">
                                <li><a href="login.html"><i class="fa fa-user"></i> Login</a></li>
                                <li><a href="register.html"><i class="fa fa-sign-in"></i> Register</a></li>
                            </ul>
                        </div>
                        <div class="social-icons-header">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- Topbar / End -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="images/logo.png" style="margin-top: -20px; width: 98px;" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a class="current" href="#">Home</a>
                                    
                                    </li>
                                    <li><a href="about.html">About Us</a>
                                        
                                    </li>
                                    <li><a href="#">Services</a>
                                       
                                    </li>
                                    <li><a href="properties-full-grid-3.html">Projects</a>
                                        
                                    </li>
                                    <li><a href="contact-us.html">Contact</a>
                                    </li>
                                   
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side hidden-lg-down">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <a href="submit-property.html" class="button border">Submit Property</a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="single-proper blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12">
                               <section class="headings-2 pt-0">
                                    <div class="pro-wrapper">
                                       <?php
                                     $query="SELECT
                                            mainlandproperty.id,
                                            mainlandproperty.project_name,
                                            mainlandproperty.land_address,
                                            mainlandproperty.land_price,
                                            mainlandproperty.main_image,
                                            mainlandproperty.description,
                                            mainlandproperty.gallery,
                                            mainlandproperty.property_id,
                                            mainlandproperty.property_type,
                                            mainlandproperty.property_status,
                                            mainlandproperty.other_details1,
                                            mainlandproperty.landplan_image,
                                            mainlandproperty.`status`,
                                            mainlandproperty.date,
                                            mainlandproperty.education1,
                                            mainlandproperty.education2,
                                            mainlandproperty.education3,
                                            mainlandproperty.health1,
                                            mainlandproperty.health2,
                                            mainlandproperty.health3,
                                            mainlandproperty.transportation1,
                                            mainlandproperty.transportation2,
                                            mainlandproperty.transportation3
                                            FROM
                                            mainlandproperty
                                            WHERE
                                            mainlandproperty.id =  '$id'";
                                     $sql = mysqli_query($con_main,$query);
                                     $type = mysqli_fetch_array($sql);
                                     $img_path1 = $type['landplan_image'];
                                        
                                        
                                    ?>
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h3><?php echo $type['project_name'];?></h3>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i><?php echo $type['land_address'];?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single detail-wrapper mr-2">
                                            <div class="detail-wrapper-body">
                                                <div class="listing-title-bar">
                                                    <h5>RS.<b><?php echo $type['land_price'];?></b></h5>
                                                    <div class="mt-0">
                                                        <a href="#listing-location" class="listing-address">
                                                            <p>Blocks:<b><?php echo $type['other_details1'];?></b></p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- main slider carousel items -->
                                <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                    <h5 class="mb-4">Gallery</h5>
                                    <div class="carousel-inner">
                                    <!-- <div class="active item carousel-item"> -->
                                    <div class="slideshow-container">
                                    <div >
                                    <?php
                                    $id = $_REQUEST['id'];
                                     $query="SELECT
                                        f_image.image
                                        FROM
                                        test_image
                                        INNER JOIN mainlandproperty ON mainlandproperty.id = test_image.id
                                        INNER JOIN f_image ON test_image.TID = f_image.TID
                                        WHERE
                                        mainlandproperty.id =  '$id'";
                                     $sql = mysqli_query($con_main,$query);
                                     while($type = mysqli_fetch_array($sql))
                                      {
                                        
                                        $img_path = $type['image'];
                                    ?>
                                             <div class="mySlides fade">
                                            <img src="<?php echo($img_path); ?>"class="img-fluid" alt="slider-listing" style="width:100%">
                                        </div>
                                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                      <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                            
                                            <?php
                                            }
                                            ?>
                                        <!-- </div> -->
                                       <!--  <div class="active item carousel-item" data-slide-number="1">
                                            <img src="<?php echo($img_path); ?>"class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="active item carousel-item" data-slide-number="2">
                                            <img src="<?php echo($img_path); ?>"class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="active item carousel-item" data-slide-number="3">
                                            <img src="<?php echo($img_path); ?>"class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="active item carousel-item" data-slide-number="4">
                                            <img src="<?php echo($img_path); ?>"class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="active item carousel-item" data-slide-number="5">
                                            <img src="<?php echo($img_path); ?>"class="img-fluid" alt="slider-listing">
                                        </div> -->
                                         
                                       <!--  <div class="item carousel-item" data-slide-number="1">
                                            <img src="images/single-property/s-2.jpg" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="2">
                                            <img src="images/single-property/s-3.jpg" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="4">
                                            <img src="images/single-property/s-4.jpg" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="5">
                                            <img src="images/single-property/s-5.jpg" class="img-fluid" alt="slider-listing">
                                        </div> -->
                                        
                                        <!-- <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a> -->
                                    </div>
                                </div>
                                      
                                    </div>
                                    <!-- main slider carousel nav controls -->
                                    <ul class="carousel-indicators smail-listing list-inline nav nav-justified">
                                        <?php
                                        $id = $_REQUEST['id'];
                                     $query="SELECT
                                        f_image.image
                                        FROM
                                        test_image
                                        INNER JOIN mainlandproperty ON mainlandproperty.id = test_image.id
                                        INNER JOIN f_image ON test_image.TID = f_image.TID
                                        WHERE
                                        mainlandproperty.id =  '$id'";
                                     $sql = mysqli_query($con_main,$query);
                                     while($type = mysqli_fetch_array($sql))
                                      {
                                        
                                        $img_path = $type['image'];
                                    ?>
                                        <li class="list-inline-item active">
                                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                                <img src="<?php echo($img_path); ?>"class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        
                                        <!-- <li class="list-inline-item">
                                            <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                                                <img src="images/single-property/s-2.jpg" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                                                <img src="images/single-property/s-3.jpg" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-3" data-slide-to="3" data-target="#listingDetailsSlider">
                                                <img src="images/single-property/s-4.jpg" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-4" data-slide-to="4" data-target="#listingDetailsSlider">
                                                <img src="images/single-property/s-5.jpg" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li> -->


                                            <?php
                                }
                                    ?>
                                    </ul>
                                    <!-- main slider carousel items -->
                                </div>
                                <div class="blog-info details mb-30">
                                    <?php
                                     $query="SELECT
                                            mainlandproperty.id,
                                            mainlandproperty.project_name,
                                            mainlandproperty.land_address,
                                            mainlandproperty.land_price,
                                            mainlandproperty.main_image,
                                            mainlandproperty.description,
                                            mainlandproperty.gallery,
                                            mainlandproperty.property_id,
                                            mainlandproperty.property_type,
                                            mainlandproperty.property_status,
                                            mainlandproperty.other_details1,
                                            mainlandproperty.landplan_image,
                                            mainlandproperty.`status`,
                                            mainlandproperty.date,
                                            mainlandproperty.education1,
                                            mainlandproperty.education2,
                                            mainlandproperty.education3,
                                            mainlandproperty.health1,
                                            mainlandproperty.health2,
                                            mainlandproperty.health3,
                                            mainlandproperty.transportation1,
                                            mainlandproperty.transportation2,
                                            mainlandproperty.transportation3
                                            FROM
                                            mainlandproperty
                                            WHERE
                                            mainlandproperty.id =  '$id'";
                                     $sql = mysqli_query($con_main,$query);
                                     $type = mysqli_fetch_array($sql);
                                     $img_path1 = $type['landplan_image'];
                                        
                                        
                                    ?>
                                    <h5 class="mb-4">Description</h5>
                                    <p class="mb-3"><?php echo $type['description'];?></p>
                                </div>
                            </div>
                        </div>
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4">Property Details</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">Property ID:</span>
                                    <span class="det"><?php echo $type['property_id'];?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property Type:</span>
                                    <span class="det"><?php echo $type['property_type'];?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property status:</span>
                                    <span class="det"><?php echo $type['property_status'];?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Purchase Price:</span>
                                    <span class="det"><?php echo $type['land_price'];?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Blogs:</span>
                                    <span class="det"><?php echo $type['other_details1'];?></span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Land ID:</span>
                                    <span class="det"><?php echo $type['property_id'];?></span>
                                </li>
                               <!--  <li>
                                    <span class="font-weight-bold mr-1">Bath:</span>
                                    <span class="det">4</span>
                                </li> -->
                               <!--  <li>
                                    <span class="font-weight-bold mr-1">Garages:</span>
                                    <span class="det">2</span>
                                </li> -->
                                <!-- <li>
                                    <span class="font-weight-bold mr-1">Year Built:</span>
                                    <span class="det">10/6/2020</span>
                                </li> -->
                            </ul>
                            <!-- title -->
                            <h5 class="mt-5">Amenities</h5>
                            <!-- cars List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Air Cond</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Balcony</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Internet</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Dishwasher</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Bedding</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Cable TV</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Parking</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Pool</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Fridge</span>
                                </li>
                            </ul>
                        </div>
                        <div class="floor-plan property wprt-image-video w50 pro">
                            <h5>Floor Plans</h5>
                            <img alt="image" src="<?php echo($img_path1); ?>">
                        </div>
                        <div class="floor-plan property wprt-image-video w50 pro">
                            <h5>What's Nearby</h5>
                            <div class="property-nearby">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-info">
                                               <i class="fas fa-graduation-cap mr-2"></i><b class="title">Education</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $type['education3'];?></h6>
                                                        <span></span>
                                                        <!-- <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul> -->
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $type['education2'];?></h6>
                                                        <span></span>
                                                        <!-- <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul> -->
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $type['education1'];?></h6>
                                                        <span></span>
                                                        <!-- <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul> -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-success">
                                              <i class="fas fa-user-md mr-2"></i><b class="title">Health & Medical</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $type['health1'];?></h6>
                                                        <span>(13.20 miles)</span>
                                                        <!-- <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        </ul> -->
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $type['health2'];?></h6>
                                                        <span>(13.22 miles)</span>
                                                       <!--  <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul> -->
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $type['health3'];?></h6>
                                                        <span>(13.34 miles)</span>
                                                       <!--  <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul> -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nearby-info">
                                            <span class="nearby-title mb-3 d-block text-danger">
                                                <i class="fas fa-car mr-2"></i><b class="title">Transportation</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $type['transportation1'];?></h6>
                                                        <span></span>
                                                        <!-- <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        </ul> -->
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $type['transportation2'];?></h6>
                                                        <span></span>
                                                       <!--  <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul> -->
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $type['transportation3'];?></h6>
                                                        <span></span>
                                                       <!--  <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul> -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!--  <div class="property wprt-image-video w50 pro">
                            <h5>Property Video</h5>
                            <img alt="image" src="images/slider/home-slider-4.jpg">
                            <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=14semTlwyUY">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div> -->
                        <div class="property-location map">
                            <h5>Location</h5>
                            <div class="divider-fade"></div>
                            <div id="map-contact" class="contact-map"></div>
                        </div>
                        <!-- Star Reviews -->
                     <!--    <section class="reviews comments">
                            <h3 class="mb-5">3 Reviews</h3>
                            <div class="row mb-5">
                                <ul class="col-12 commented pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-5.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Mary Smith</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">May 30 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                            <div class="rest"><img src="images/single-property/s-1.jpg" class="img-fluid" alt=""></div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="row">
                                <ul class="col-12 commented pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-4.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Abraham Tyron</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">june 1 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="row mt-5">
                                <ul class="col-12 commented mb-0 pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Lisa Williams</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">jul 12 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                            <div class="resti">
                                                <div class="rest"><img src="images/single-property/s-2.jpg" class="img-fluid" alt=""></div>
                                                <div class="rest"><img src="images/single-property/s-3.jpg" class="img-fluid" alt=""></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section> -->
                        <!-- End Reviews -->
                        <!-- Star Add Review -->
                        
                        <!-- End Add Review -->
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <!-- Start: Schedule a Tour -->
                            <div class="schedule widget-boxed mt-33 mt-0">
                                <div class="widget-boxed-header">
                                    <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Elite Lands</h4>
                                </div>
                                        <div class="widget-boxed-body">
                                            <div class="banner"><img src="images/logo.png" alt="" style="height:270px; width: 320px;"></div>
                                        </div>
                               
                            </div>
                            <!-- End: Schedule a Tour -->
                            <!-- end author-verified-badge -->
                            <div class="sidebar">
                                <div class="widget-boxed mt-33 mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Agent Information</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="sidebar-widget author-widget2">
                                            <div class="author-box clearfix">
                                                <img src="images/testimonials/ts-1.jpg" alt="author-image" class="author__img">
                                                <h4 class="author__title">Oshadee Silva</h4>
                                                <p class="author__meta">Agent of Property</p>
                                            </div>
                                            <ul class="author__contact">
                                                <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>No:12/A Ragama, Wattala.</li>
                                                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">(234) 0200 17813</a></li>
                                                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">lisa@gmail.com</a></li>
                                            </ul>
                                            <div class="agent-contact-form-sidebar">
                                                <h4>Request Inquiry</h4>
                                                <form id="main_form" name="main_form" method="post" enctype="multipart/form-data">
                                                    <input type="text" id="rfullname" name="rfullname" placeholder="Full Name" required />
                                                    <input type="number" id="rphone" name="rphone" placeholder="Phone Number" required />
                                                    <input type="email" id="remail" name="remail" placeholder="Email Address" required />
                                                    <textarea id="rmessage" placeholder="Message" name="rmessage" required></textarea>
                                                    <input type="submit" name="sendmessage" class="multiple-send-message" onclick="getvalall()" value="Submit Request" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-search-field-2">
                                    <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>Recent Properties</h4>
                                        </div>
                                       <div class="widget-boxed-body">
                                            <div class="recent-post">
                                                 <?php
                                     $query="SELECT
                                            mainlandproperty.id,
                                            mainlandproperty.project_name,
                                            mainlandproperty.land_address,
                                            mainlandproperty.land_price,
                                            mainlandproperty.main_image,
                                            mainlandproperty.description,
                                            mainlandproperty.gallery,
                                            mainlandproperty.property_id,
                                            mainlandproperty.property_type,
                                            mainlandproperty.property_status,
                                            mainlandproperty.other_details1,
                                            mainlandproperty.landplan_image,
                                            mainlandproperty.`status`,
                                            mainlandproperty.date,
                                            mainlandproperty.education1,
                                            mainlandproperty.education2,
                                            mainlandproperty.education3,
                                            mainlandproperty.health1,
                                            mainlandproperty.health2,
                                            mainlandproperty.health3,
                                            mainlandproperty.transportation1,
                                            mainlandproperty.transportation2,
                                            mainlandproperty.transportation3
                                            FROM
                                            mainlandproperty
                                            WHERE
                                           mainlandproperty.`status` = '1'
                                           ORDER BY mainlandproperty.id DESC
                                           LIMIT 3";
                                     $sql = mysqli_query($con_main,$query);


                                    while($type = mysqli_fetch_array($sql))
                                      {
                                         $id=$type['id'];
                                     $img_path1 = $type['main_image'];
                                        
                                        
                                    ?>

                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="Viewgallery.php?id=<?php echo $type['id'];?>"><img src="<?php echo($img_path1); ?>"alt="" ></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href=""><h6><?php echo $type['project_name'];?><h6></a>
                                                        <p>Rs.<?php echo $type['land_price'];?></p>
                                                    </div>
                                                </div><br>
                                               <!--  <div class="recent-main my-4">
                                                    <div class="recent-img">
                                                        <a href="blog-details.html"><img src="images/feature-properties/fp-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="blog-details.html"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="blog-details.html"><img src="images/feature-properties/fp-3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="blog-details.html"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                             <?php
                                     }
                                    ?>
                                        </div>
                                    </div>
                                   <!--  <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header mb-5">
                                            <h4>Feature Properties</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="slick-lancers">
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.html" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 230,000</span>
                                                                <span>For Sale</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>New York</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.html" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 6,500</span>
                                                                <span class="rent">For Rent</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Los Angles</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.html" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 230,000</span>
                                                                <span>For Sale</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>San Francisco</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.html" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 6,500</span>
                                                                <span class="rent">For Rent</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Miami FL</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.html" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 230,000</span>
                                                                <span>For Sale</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Chicago IL</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-5.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.html" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 6,500</span>
                                                                <span class="rent">For Rent</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Toronto CA</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Start: Specials offer -->
                                    <div class="widget-boxed popular mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>Specials of the day</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="banner"><img src="images/single-property/banner.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <!-- End: Specials offer -->
                                    <div class="widget-boxed popular mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>Popolar Tags</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="recent-post">
                                                <div class="tags">
                                                    <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                                    <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
                                                </div>
                                                <div class="tags">
                                                    <span><a href="#" class="btn btn-outline-primary">Baths</a></span>
                                                    <span><a href="#" class="btn btn-outline-primary">Beds</a></span>
                                                </div>
                                                <div class="tags">
                                                    <span><a href="#" class="btn btn-outline-primary">Garages</a></span>
                                                    <span><a href="#" class="btn btn-outline-primary">Family</a></span>
                                                </div>
                                                <div class="tags">
                                                    <span><a href="#" class="btn btn-outline-primary">Real Estates</a></span>
                                                    <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                                                </div>
                                                <div class="tags no-mb">
                                                    <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                                    <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- START SIMILAR PROPERTIES -->
                <section class="similar-property recently portfolio bshd p-0 bg-white-inner">
                    <div class="container">
                        <h5>Similar Properties</h5>
                     <div class="row portfolio-items">
                        <?php
                                     $query="SELECT
                                            mainlandproperty.id,
                                            mainlandproperty.project_name,
                                            mainlandproperty.land_address,
                                            mainlandproperty.land_price,
                                            mainlandproperty.main_image,
                                            mainlandproperty.description,
                                            mainlandproperty.gallery,
                                            mainlandproperty.property_id,
                                            mainlandproperty.property_type,
                                            mainlandproperty.property_status,
                                            mainlandproperty.other_details1,
                                            mainlandproperty.landplan_image,
                                            mainlandproperty.`status`,
                                            mainlandproperty.date,
                                            mainlandproperty.education1,
                                            mainlandproperty.education2,
                                            mainlandproperty.education3,
                                            mainlandproperty.health1,
                                            mainlandproperty.health2,
                                            mainlandproperty.health3,
                                            mainlandproperty.transportation1,
                                            mainlandproperty.transportation2,
                                            mainlandproperty.transportation3
                                            FROM
                                            mainlandproperty
                                            WHERE
                                           mainlandproperty.`status` = '1'
                                           ORDER BY mainlandproperty.id DESC
                                           LIMIT 3";
                                     $sql = mysqli_query($con_main,$query);


                                    while($type = mysqli_fetch_array($sql))
                                      {
                                        $id=$type['id'];
                                     $img_path1 = $type['main_image'];
                                        
                                        
                                    ?>

                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="testViewgallery.php?id=<?php echo $type['id'];?>">View Property</a><span class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured"><?php echo $type['property_type']; ?></div>
                                                <div class="homes-tag button alt sale"><?php echo $type['property_status']; ?></div>
                                                <div class="homes-price">Blocks: <?php echo $type['other_details1']; ?></div>
                                                <img width="200px" height="200px" src="<?php echo($img_path1); ?>" alt="home-1" class="img-responsive" style="height:270px; width: 320px;" >
                                            </a>
                                        </div>
                                       <!--  <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div> -->
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href=""><?php echo $type['project_name']; ?></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span><?php echo $type['land_address']; ?></span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                         <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                        <span>Main Road</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                        <span>Water Supply</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span>Electricity</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                <a href="single-property-1.html">Rs.<?php echo $type['land_price']; ?></a>
                                </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                      <!--   <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                              }
                            ?>
                          
                        </div>
                    </div>
                </section>
                <!-- END SIMILAR PROPERTIES -->
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->

        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="index.html" class="logo">
                                    <img src="images/logo-footer.svg" alt="netcom">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">95 South Park Avenue, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p">+456 875 369 208</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti">support@findhouses.com</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="navigation">
                                <h3>Navigation</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="properties-right-sidebar.html">Properties Right</a></li>
                                        <li><a href="properties-full-list.html">Properties List</a></li>
                                        <li><a href="properties-details.html">Property Details</a></li>
                                        <li class="no-mgb"><a href="agents-listing-grid.html">Agents Listing</a></li>
                                    </ul>
                                    <ul class="nav-right">
                                        <li><a href="agent-details.html">Agents Details</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li class="no-mgb"><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3>Twitter Feeds</h3>
                                <div class="twitter-widget contuct">
                                    <div class="twitter-area">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <p>2020 © Copyright - All Rights Reserved.</p>
                    <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By Code-Theme</p>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->
        <!--Style Switcher===========================================-->
        <div class="color-switcher" id="choose_color"> <a href="#." class="picker_close"><i class="fa fa-cog fa-spin fa-2x" ></i></a>
            <div class="theme-colours">
                <p class="font-italic">Choose Colour style</p>
                <ul>
                    <li>
                        <a href="#." class="blue" id="blue"></a>
                    </li>
                    <li>
                        <a href="#." class="pink" id="pink"></a>
                    </li>
                    <li>
                        <a href="#." class="orange" id="orange"></a>
                    </li>
                    <li>
                        <a href="#." class="purple" id="purple"></a>
                    </li>
                    <li>
                        <a href="#." class="green" id="green"></a>
                    </li>
                    <li>
                        <a href="#." class="red" id="red"></a>
                    </li>
                    <li>
                        <a href="#." class="cyan" id="cyan"></a>
                    </li>
                    <li>
                        <a href="#." class="sky-blue" id="sky-blue"></a>
                    </li>
                    <li>
                        <a href="#." class="gray" id="gray"></a>
                    </li>
                    <li>
                        <a href="#." class="brown" id="brown"></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- ARCHIVES JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/range-slider.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/slick4.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/timedropper.js"></script>
        <script src="js/datedropper.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet-gesture-handling.min.js"></script>
        <script src="js/leaflet-providers.js"></script>
        <script src="js/leaflet.markercluster.js"></script>
        <script src="js/map-single.js"></script>
        <script src="js/color-switcher.js"></script>
        <script src="js/inner.js"></script>
<script src="js/sweetalert.js" type="text/javascript"></script>
        <!-- Date Dropper Script-->
       <!--  <script>
            $('#reservation-date').dateDropper();

        </script> -->
        <!-- Time Dropper Script-->
        <script>
            this.$('#reservation-time').timeDropper({
                setCurrentTime: false,
                meridians: true,
                primaryColor: "#e8212a",
                borderColor: "#e8212a",
                minutesInterval: '15'
            });

        </script>

        <script>
            $(document).ready(function() {
                $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });

        </script>

        <script>
            $('.slick-carousel').each(function() {
                var slider = $(this);
                $(this).slick({
                    infinite: true,
                    dots: false,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0'
                });

                $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                    slider.slick('slickPrev');
                });
                $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                    slider.slick('slickNext');
                });
            });

        </script>

        <script type="text/javascript">
     $('#main_form').on('submit', function(e) {
                e.preventDefault();

                var form_data = $('#main_form').serializeArray();

                $.ajax({
                    url: 'request_backend.php',
                    method: 'post',
                    data: form_data,
                   success: function(e){
                       swal ("Success",'Insert Success!','success');
                    },
                    error: function(r){
                         swal ("Success",'Insert Success!','success');
                    }
                });
                
            });


</script>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/single-property-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2020 09:36:48 GMT -->
</html>