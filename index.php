<?php
include'config.php';
?>


<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Elite Lands - Where Dreams Come Home</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="revolution/css/settings.css">
    <link rel="stylesheet" href="revolution/css/layers.css">
    <link rel="stylesheet" href="revolution/css/navigation.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slider-search2.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/colors/orange.css">
</head>

<body>
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
                                <li><a href="login.php"><i class="fa fa-user"></i> Login</a></li>
                                <li><a href=""><i class="fa fa-sign-in"></i> Register</a></li>
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

        <!-- START SLIDER -->
        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
        <section class="main-slider">
            <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
                <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
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
                                            ORDER BY
                                                mainlandproperty.id DESC
                                            LIMIT 2";
                                     $sql = mysqli_query($con_main,$query);
                                     $type = mysqli_fetch_array($sql);
                                     $img_path1 = $type['landplan_image'];

                                        
                                        
                                    ?>
                    <ul>
                        <!-- Slide 1 -->
                        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slider/slider-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" src="images/slider/slider-1.jpg">

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="nowrap" data-width="auto" data-text-align="center" data-hoffset="['10','50','0','0']" data-voffset="['-20','-20','-20','-20']" data-x="['right','right','center','center']" data-y="['middle','middle','middle','middle']" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'>
                                <div class="container">
                                    <div class="section section-bg-1 pt-17 pb-17">
                                        <div class="row">

                                            <div class="col-lg-4 col-md-12">
                                                
                                                <div class="property-box-meta">
                                                    <div class="property-box-meta-content">
                                                        <span class="property-status">For <?php echo $type['property_type'];?></span>
                                                        <div class="item-head">
                                                            <h1 class="item-title">
												<a href="property-detail.html" title="Store Space Greenville">
													<?php echo $type['project_name']; ?>
												</a>
											     </h1>
                                                            <span class="location"><?php echo $type['land_address']; ?> </span>
                                                        </div>
                                                        <div class="info">
                                                            <span class="primary-file-1">
                                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
									            <span>Main Road</span>
                                                            </span>
                                                            <span class="primary-file-2">
												<i class="fa fa-bath" aria-hidden="true"></i>
									            <span>Water Supply</span>
                                                            </span>
                                                            <span class="primary-file-3">
												<i class="fa fa-object-group" aria-hidden="true"></i>
									            <span>Electricity</span>
                                                            </span>
                                                            <span class="primary-file-4">
												<i class="fa fa-bed" aria-hidden="true"></i>
									            <span>2 Garages</span>
                                                            </span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="before-price"></span>
                                                            <span class="amount">Rs.<?php echo $type['land_price']; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="col-lg-4 col-md-12">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Slide 2 -->
                        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1690" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slider/slider-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" src="images/slider/slider-2.jpg">

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="nowrap" data-width="auto" data-text-align="center" data-hoffset="['10','50','0','0']" data-voffset="['-20','-20','-20','-20']" data-x="['right','right','center','center']" data-y="['middle','middle','middle','middle']" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'>
                                <div class="container">
                                    <div class="section section-bg-1 pt-17 pb-17">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="property-box-meta">
                                                    <div class="property-box-meta-content">
                                                        <span class="property-status">For <?php echo $type['property_type'];?></span>
                                                        <div class="item-head">
                                                            <h1 class="item-title">
												<a href="property-detail.html" title="Store Space Greenville">
													<?php echo $type['project_name']; ?>
												</a>
											    </h1>
                                                            <span class="location"><?php echo $type['land_address']; ?> </span>
                                                        </div>
                                                        <div class="info">
                                                            <span class="primary-file-1">
                                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
									            <span>Main Road</span>
                                                            </span>
                                                            <span class="primary-file-2">
												<i class="fa fa-bath" aria-hidden="true"></i>
									            <span>Water Supply</span>
                                                            </span>
                                                            <span class="primary-file-3">
												<i class="fa fa-object-group" aria-hidden="true"></i>
									            <span>Electricity</span>
                                                            </span>
                                                            <span class="primary-file-4">
												<i class="fa fa-bed" aria-hidden="true"></i>
									            <span>2 Garages</span>
                                                            </span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="before-price"></span>
                                                            <span class="amount">Rs.<?php echo $type['land_price']; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="col-lg-4 col-md-12">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- END REVOLUTION SLIDER -->
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION SEARCH AREA -->
        <!-- <section class="main-search-field">
            <div class="container">
                <h3>Find Your Dream House</h3>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="at-col-default-mar">
                            <select>
                                <option value="0" selected>Location</option>
                                <option value="1">New York</option>
                                <option value="2">Los Angeles</option>
                                <option value="3">Chicago</option>
                                <option value="4">Philadelphia</option>
                                <option value="5">San Francisco</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="at-col-default-mar">
                            <select class="div-toggle" data-target=".my-info-1">
                                <option value="0" data-show=".acitveon" selected>Property Status</option>
                                <option value="1" data-show=".sale">For Sale</option>
                                <option value="2" data-show=".rent">For Rent</option>
                                <option value="3" data-show=".rent">Sold</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="at-col-default-mar">
                            <select class="div-toggle" data-target=".my-info-1">
                                <option value="0" data-show=".acitveon" selected>Property Type</option>
                                <option value="1" data-show=".sale">Family House</option>
                                <option value="2" data-show=".rent">Apartment</option>
                                <option value="3" data-show=".rent">Condo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="at-col-default-mar">
                            <select class="div-toggle" data-target=".my-info-1">
                                <option value="0" selected>Beds</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="at-col-default-mar no-mb">
                            <select>
                                <option value="0" selected>Baths</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 no-pds mb-3">
                        <div class="at-col-default-mar no-mb">
                            <input class="at-input" type="text" name="min-area" placeholder="Square Fit">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 b-search__main-form label mb-3">
                        <input type="text" disabled class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10">
                        <div class="slider-range"></div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="at-col-default-mar no-mb">
                            <button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- END SECTION SEARCH AREA -->

        <!-- START SECTION SERVICES -->
        <section class="services-home">
            <div class="container">
                <div class="section-title">
                    <h3>Property</h3>
                    <h2>Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 m-top-0 m-bottom-40">
                        <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                            <div class="media">
                                <i class="fa fa-gavel bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                            </div>
                            <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                                <h4 class="m-bottom-15 text-bold-700">LEGAL SERVICES</h4>
                                <p>We have a dedicated team of experienced lawyers to provide our customers with a complete range of legal advisory services and support coupled with cleat title deeds.</p>
                                <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 m-top-40 m-bottom-40">
                        <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                            <div class="media">
                                <i class="fa fa-car bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                            </div>
                            <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                                <h4 class="m-bottom-15 text-bold-700">SITE VISIT SERVICES</h4>
                                <p>For our prospective customers we provide a free tour of the site, accompanied by one of our representatives to assist you in your next investment.</p>
                                <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 m-top-40 m-bottom-40 commercial">
                        <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                            <div class="media">
                                <i class="fa fa-briefcase bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                            </div>
                            <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                                <h4 class="m-bottom-15 text-bold-700">WE BUY YOUR LAND</h4>
                                <p>Submit all the details of the land you wish to sell , Area / Extent / offer / Owner’s contact number / Location map / Photographs/ Send your land information</p>
                                <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION SERVICES -->

        <!-- START SECTION RECENTLY PROPERTIES -->
        <section class="recently portfolio bshd">
            <div class="container">
                <div class="section-title">
                    <h3>Recently</h3>
                    <h2>Properties</h2>
                </div>
                <div class="row portfolio-items">
                     <?php 
                     $query="
                     SELECT
                    mainlandproperty.id,
                    mainlandproperty.project_name,
                    mainlandproperty.land_address,
                    mainlandproperty.land_price,
                    mainlandproperty.main_image,
                    mainlandproperty.description,
                    mainlandproperty.property_id,
                    mainlandproperty.property_type,
                    mainlandproperty.property_status,
                    mainlandproperty.other_details1,
                    mainlandproperty.`status`
                    FROM
                    mainlandproperty
                    WHERE
                    mainlandproperty.`status` = 1";
                    $sql = mysqli_query($con_main,$query);
                    while($type = mysqli_fetch_array($sql))
                    {
                        $id=$type['id'];
                        $img_path = $type['main_image'];
                    ?>
                     <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="Viewgallery.php?id=<?php echo $type['id'];?>">View Property</a><span class="category">Real Estate</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured"><?php echo $type['property_type']; ?></div>
                                        <div class="homes-tag button alt sale"><?php echo $type['property_status']; ?></div>
                                        <div class="homes-price">Blocks: <?php echo $type['other_details1']; ?></div>
                                        <img src="<?php echo($img_path); ?>" alt="home-1" class="img-responsive" style="height:270px; width: 320px;">
                                        <!-- <img src="<?php echo($img_path); ?>" alt="" class="img-responsive"> -->
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html"><?php echo $type['project_name']; ?></a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span><?php echo $type['land_address']; ?></span>
                                        <br><!-- <span><?php echo $type['description']; ?></span> -->
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
                                
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                <a href="">Rs.<?php echo $type['land_price']; ?></a>
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
                                <!-- <div class="footer">
                                    <a href="agent-details.html">
                                        <i class="fa fa-user"></i> Jhon Doe
                                    </a>
                                    <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                                </div> -->
                            </div>
                        </div><br><br>
                    </div>
                    <!-- 1st Div End -->
                    <?php
                       }
                    ?>
                
                </div>
                <!-- <div class="bg-all mt-5">
                    <a href="properties-full-grid.html" class="btn btn-outline-light">View All</a>
                </div> -->
            </div>
        </section>
        <!-- END SECTION RECENTLY PROPERTIES -->

        <!-- STAR SECTION WELCOME -->
        <section class="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="welcome-title">
                            <h2>WELCOME TO <span>FIND HOUSES</span></h2>
                            <h4>THE BEST PLACE TO FIND THE HOUSE YOU WANT.</h4>
                        </div>
                        <div class="welcome-content">
                            <p> <span>FIND HOUSES</span> is the best place for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip ex ea.</p>
                        </div>
                        <div class="welcome-services">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12 ">
                                    <div class="w-single-services">
                                        <div class="services-img img-1">
                                            <img src="css/colors/icons/orange/1.png" width="32" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Buy Property</h6>
                                            <p>We have the best properties
                                                <br> elit, sed do eiusmod tempe</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 ">
                                    <div class="w-single-services">
                                        <div class="services-img img-2">
                                            <img src="css/colors/icons/orange/2.png" width="32" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Rent Property</h6>
                                            <p>We have the best properties
                                                <br> elit, sed do eiusmod tempe</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 ">
                                    <div class="w-single-services no-mb mbx">
                                        <div class="services-img img-3">
                                            <img src="css/colors/icons/orange/3.png" width="32" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Real Estate Kit</h6>
                                            <p>We have the best properties
                                                <br> elit, sed do eiusmod tempe</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 ">
                                    <div class="w-single-services no-mb">
                                        <div class="services-img img-4">
                                            <img src="css/colors/icons/orange/4.png" width="32" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Sell Property</h6>
                                            <p>We have the best properties
                                                <br> elit, sed do eiusmod tempe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="wprt-image-video w50">
                            <img alt="image" src="images/projects/welcome.jpg">
                            <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=2xHQqYRcrx4">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION WELCOME -->

        <!-- START SECTION FEATURED PROPERTIES -->
        
        <!-- END SECTION FEATURED PROPERTIES -->

        <!-- START SECTION POPULAR PLACES -->
        <section class="feature-cities-1 bg-white">
            <div class="container">
                <div class="section-title">
                    <h3>Most Popular</h3>
                    <h2>Places</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Image Box -->
                        <a href="properties-map.html" class="img-box hover-effect">
                            <img src="images/rajagi.jpg" class="img-responsive" alt="">
                            <div class="overlay"></div>
                            <!-- Badge -->
                            <div class="listing-badges">
                                <!-- <span class="featured">36 Properties</span> -->
                            </div>
                            <div class="img-box-content visible">
                                <h4>New Traffic plan in Rajagiriya</h4>
                                <span>A new traffic plan will be enacted for the buses travelling via Rajagiriya to Colombo</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Image Box -->
                        <a href="properties-map.html" class="img-box hover-effect">
                            <img src="images/rajagi2.jpg" class="img-responsive" alt="">
                            <div class="overlay"></div>
                            <!-- Badge -->
                            <div class="listing-badges">
                                <!-- <span class="featured">97 Properties</span> -->
                            </div>
                            <div class="img-box-content visible">
                                <h4>RAJAGIRIYA CITY</h4>
                                <!-- <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Image Box -->
                        <a href="properties-map.html" class="img-box hover-effect">
                            <img src="images/rajagi3.jpg" class="img-responsive" alt="">
                            <div class="overlay"></div>
                            <!-- Badge -->
                            <!-- <div class="listing-badges">
                                <span class="featured">50 Properties</span>
                            </div> -->
                            <div class="img-box-content visible">
                                <h4>Diyatha Bridge</h4>
                                <span>This bridge is connecting Rajagiriya and Battaramulla and constructed over the Diyawanna Oya</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Image Box -->
                        <a href="properties-map.html" class="img-box no-mb hover-effect">
                            <img src="images/kadawatha.jpg" class="img-responsive" alt="">
                            <div class="overlay"></div>
                            <!-- Badge -->
                            <!-- <div class="listing-badges">
                                <span class="featured">04 Properties</span>
                            </div> -->
                            <div class="img-box-content visible">
                                <h4>kadawatha shoping complex</h4>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Image Box -->
                        <a href="properties-map.html" class="img-box no-mb x3 hover-effect">
                            <img src="images/kadawatha2.jpg" class="img-responsive" alt="">
                            <div class="overlay"></div>
                            <!-- Badge -->
                           <!--  <div class="listing-badges">
                                <span class="featured">23 Properties</span>
                            </div> -->
                            <div class="img-box-content visible">
                                <h4>Walking The Walk In Kadawatha</h4>
                                <span>Kadawatha, a bustling town, just 16 kilometres away from Colombo.</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mt">
                        <!-- Image Box -->
                        <a href="properties-map.html" class="img-box no-mb x3 hover-effect">
                            <img src="images/ragama.jpg" class="img-responsive" alt="">
                            <div class="overlay"></div>
                            <!-- Badge -->
                            <!-- <div class="listing-badges">
                                <span class="featured">14 Properties</span>
                            </div> -->
                            <div class="img-box-content visible">
                                <h4>Basilica Ragama</h4>
                                <span>This is the only bacilica church in Sri Lanka, which was built after the 2nd World War. </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION POPULAR PLACES -->

        <!-- START SECTION AGENTS -->
        <section class="team">
            <div class="container">
                <div class="section-title col-md-5">
                    <h3>Meet Our</h3>
                    <h2>Agents</h2>
                </div>
                <div class="row team-all">
                    <div class="col-lg-3 col-md-6 team-pro">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="images/team/t-5.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>Carls Jhons</h3>
                                    <p>Real Estate Agent</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li>
                                                <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span><a href="agent-details.html">View Profile</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team-pro">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="images/team/t-6.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>Arling Tracy</h3>
                                    <p>Real Estate Agent</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li>
                                                <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span><a href="agent-details.html">View Profile</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team-pro pb-none">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="images/team/t-7.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>Mark Web</h3>
                                    <p>Real Estate Agent</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li>
                                                <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span><a href="agent-details.html">View Profile</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team-pro">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="images/team/t-8.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>Katy Grace</h3>
                                    <p>Real Estate Agent</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li>
                                                <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span><a href="agent-details.html">View Profile</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION AGENTS -->

        

        <!-- START SECTION BLOG -->
        <section class="blog-section bg-white">
            <div class="container">
                <div class="section-title">
                    <h3>Latest</h3>
                    <h2>News</h2>
                </div>
                <div class="news-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-1.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html"><h3>Explore The World</h3></a>
                                    <div class="dates">
                                        <span class="date">April 11, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Karl Smith</p>
                                            <img src="images/testimonials/ts-6.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-2.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html"><h3>Find Good Places</h3></a>
                                    <div class="dates">
                                        <span class="date">May 20, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Lis Jhonson</p>
                                            <img src="images/testimonials/ts-5.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item no-mb">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-3.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html"><h3>All Places In Town</h3></a>
                                    <div class="dates">
                                        <span class="date">Jun 30, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Ted Willians</p>
                                            <img src="images/testimonials/ts-4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

       

       

        <!-- START SECTION COUNTER UP -->
        <section class="counterup">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">300</p>
                                <h3>Sold Houses</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">400</p>
                                <h3>Daily Listings</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr mb-0">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">250</p>
                                <h3>Expert Agents</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr mb-0 last">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">200</p>
                                <h3>Won Awars</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION COUNTER UP -->

        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="index.html" class="logo">
                                    <img src="images/footerlogo.png" alt="netcom" style="
                                         margin-left: 30px;
                                         margin-top: -60px;">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">No.97, Polwatta Road,Pannipitiya</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p"><a href="tel:+94112160679" style="color: white">+94 11 216 0679</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti"><a href="mailto:info@elitelands.lk" style="color: white">info@elitelands.lk</a></p>
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
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="properties-right-sidebar.html">About Us</a></li>
                                        <li><a href="properties-full-list.html">Services</a></li>
                                        <li><a href="properties-details.html">Projects</a></li>
                                        <li class="no-mgb"><a href="agents-listing-grid.html">Contact</a></li>
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
                    <p><a href="http://dtinnovations.lk/" style="color: white">DTINNOVATIONS</a>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->
        <!--Style Switcher===========================================-->
        

        <!-- ARCHIVES JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/moment.js"></script>
        <script src="js/transition.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/slick3.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/lightcase.js"></script>
        <script src="js/search.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/searched.js"></script>
        <script src="js/forms-2.js"></script>
        
        <!-- Slider Revolution scripts -->
        <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>

        <script>
            var tpj = jQuery;
            var revapi486;
            tpj(document).ready(function() {
                if (tpj("#rev_slider_one").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_one");
                } else {
                    revapi486 = tpj("#rev_slider_one").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "plugins/revolution/js/",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "yes",
                        delay: 10000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                touchOnDesktop: "off",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "metis",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: true,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                }
                            }

                        },
                        responsiveLevels: [1200, 1040, 778, 480],
                        visibilityLevels: [1200, 1040, 778, 480],
                        gridwidth: [1170, 1040, 778, 600],
                        gridheight: [850, 850, 850, 950],
                        lazyType: "none",
                        parallax: {
                            type: "scroll",
                            origo: "enterpoint",
                            speed: 400,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55]
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            }); /*ready*/

        </script>

        <!-- MAIN JS -->
        <script src="js/script.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/index-11.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2020 09:35:34 GMT -->
</html>
