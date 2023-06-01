<!--
Author: wayih Samuel 

-->

<?php

include('admin/includes/conn.php');


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Abocho Enterprises- Auto Transport Category| Home ::</title>
    <!-- google fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="css/style-starter.css">
    <script src="js/sweetalert.min.js"></script>
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand" href="index.html">
                        <span class="w3yellow">Abocho<i class="fab fa-asymmetrik"></i>Enterprises</span>Nig.ltd
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll"> 
                    <ul class="navbar-nav ms-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#services">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Drop Down <span class="fa fa-angle-down ms-1"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item pt-2 scroll" href="#counts">Stats</a></li>

                                <li><a class="dropdown-item scroll" href="#team">Team</a></li>
                                <li><a class="dropdown-item scroll" href="#portfolio">Gallery</a></li>
                                <li><a class="dropdown-item scroll" href="#pricing">Pricing</a></li>

                                <li><a class="dropdown-item scroll" href="#blog">Blog Posts</a></li>

                                <li><a class="dropdown-item scroll" href="#testimonials">Testimonials</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-lg-4">
                            <a class="nav-link scroll" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                    <!--/search-right-->
                   <!--  <ul class="header-search me-lg-4">
                        <div class="search-right">
                            <form action="#" method="GET" class="search-box">
                                <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus="">
                                <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                            </form>
                        </div>
                    </ul> -->
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/Banner-Start-->
    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
                    <h3 class="mb-md-5 mb-4">
                        Now
                        It's
                        Easy for you.
                        Rent and Hire a Car.</h3>
                      


                        <?php
                        if (isset($_POST['send'])) {
                            // code...

                        $fname =$conn -> real_escape_string( $_POST['fname']);
                        $phone =$conn -> real_escape_string( $_POST['phone']);
                        $fwhere =$conn -> real_escape_string( $_POST['fwhere']);
                        $twhere =$conn -> real_escape_string( $_POST['twhere']);

                         $sql = 'INSERT INTO customer (fname, phone, fwhere, twhere) VALUES ("'.$fname.'", "'.$phone.'", "'.$fwhere.'", "'.$twhere.'")';

                             if (mysqli_query($conn, $sql)) {
                                ?>
                                <script>
                                    swal("successful!", "Your request has been submitted", "success");
                                </script>


                              <?php
                             }else{
                                ?>

                                  <script>
                                  swal({
                                  title: "Erorr ",
                                  text: "Your request was not successful",
                                  icon: "warning",
                                  buttons: true,
                                  dangerMode: true,
                                })
                              </script>
                                <?php
                             }



                       
                        }

                        ?>



                    <div class="banner-form-w3">
                        <!--/Request-a-call-form -->
                        <form action="index.php" method="post">
                            <div class="form-style-w3ls">
                                 <div class="form-gd">
                                    <label for="input_from">Full Name</label>
                                    <input type="text" name="fname" placeholder="Enter your Full Name" required="required">
                                </div>
                                 <div class="form-gd">
                                    <label for="input_from">Contact Info</label>
                                    <input type="number" name="phone" placeholder="Enter Your Contact information" required="required">
                                </div>
                                <div class="form-gd">
                                    <label for="input_from">From Where</label>
                                    <input type="text" name="fwhere" placeholder="Enter city" required="required">
                                </div>
                                <div class="form-gd">
                                    <label for="input_from">To Where</label>
                                    <input type="text" name="twhere" placeholder="Enter city" required="required">
                                </div>
                                <div class="form-gd">
                                    <label for="input_from">Submit</label>
                                    <button class="btn btn-style btn-primary" name="send"> Send request</button>
                                </div>
                            </div>
                        </form>
                        <div class="form-footer mt-3">
                            <span class="info">
                                <b>
                                    Get your <i>Free quote</i>
                                </b>
                                by completing our quick form - or -
                                <a href="tel:+(234) 083 401  6627">+(234) 083 401  6627</a>
                            </span>
                        </div>
                        <!-- //Request-a-call-form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//main-banner-->
    <!--/Client-Section-->
    <section id="about" class="clients">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 pe-lg-5">
                    <div class="title-content text-left">
                        <h6 class="title-subw3hny mb-2"><span>About Us</span></h6>
                        <h3 class="title-w3l">We take pride in our customers safety.  Welcome is better than SORRY!</h3>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 ps-lg-5 mx-lg-0">
                    <p class="pr-lg-5">ABOCHO ENTERPRISES NIGERIA LIMITED is organized to offer services in the information technology, interior decoration, vehicle leasing/hiring and supplies, importation and exportation and general merchandize.  The Enterprises was registered in 2010(RC: 4181).  And later upgraded to a limited liability company in 2017 with CAC (RC: 1442159)</p>
                </div>
            </div>

            <div class="car-img mx-0 text-center px-lg-5">
                <img src="images/1.png" alt="" class="img-fluid">
            </div>

        </div>
    </section>
    <!--//client-Section-->
    <!--/About-Section-->
    <section id="about" class="w3labout section-bg">
        <div class="container">
            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch">
                    <div class="content">
                        <h6 class="title-subw3hny two mb-2"><span>What We Do</span></h6>
                        <h3 class="title-w3l two">In broad terms our service areas are;</h3>
                        <h5>*BUILDING & ELECTRICAL ENGINEERING<h5> 
                        <i>*NETWORKING COMPUTERS</i>
                       <h5><i>*DESIGNING & IMPLEMENTING DATA BASE SYSTEM</i></h5> 
                        <a href="about.html" class="btn btn-style btn-primary about-btn mt-3">BE OUR REGISTERED CUSTOMER</a>
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-archway"></i>
                                <h4>
                                    VEHICLE LEASING & HIRING</h4>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-taxi"></i>
                                <h4>
                                    VEHICLE SUPPLIES & IMPORTATION</h4>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-boxes"></i>
                                <h4>
                                    ESTATE DEVELOPMENT</h4>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="fas fa-baby-carriage"></i>
                                <h4>FURNISHING, INTERIOR DECORATION</h4>
                            </div>
                        </div>
                    </div>
                    <!--//End-content-->
                </div>
            </div>
        </div>
    </section>
    <!--//About-Section-->
    <!--/Counts-Section-->
    <section id="counts" class="w3lcounts">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="fas fa-users"></i>
                        <p class="counter">200</p>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="far fa-images"></i>
                        <p class="counter">1500</p>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="fas fa-headset"></i>
                        <p class="counter">18400</p>
                        <p>Hours Of Support</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 w3stats_info counter_grid">
                    <div class="count-box">
                        <i class="fas fa-user-tie"></i>
                        <p class="counter">30</p>
                        <p>Saff</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--//Counts-Section-->
    <!--/Tab-section-->
    <section id="tabs" class="tabs">
        <div class="container">
            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <i class="fas fa-shield-alt"></i>
                        <h4 class="d-none d-lg-block">Guaranteed Quality</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <i class="fas fa-spinner"></i>
                        <h4 class="d-none d-lg-block">Our Client Base</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <i class="fas fa-hand-holding-usd"></i>
                        <h4 class="d-none d-lg-block">Full Co-operation</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <i class="fas fa-dungeon"></i>
                        <h4 class="d-none d-lg-block">Requirements</h4>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row mt-5">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Our mission is to achieve a front line position as a provider on our broad base services.
Through hard work, we will earn our desired image of a stable, responsible, and professional organization.</h3>
                            <p class="fst-italic mt-3">
                                Our stability will be anchored on steady growth in market relevance, our responsibility on meeting our social and business obligations and our professionalism on the high quality of our products and service deliveries.
                            </p>
                            <ul class="mt-3">
                                <li><i class="fas fa-check-double"></i> Hard work.</li>
                                <li><i class="fas fa-check-double"></i> Responsible.</li>
                                <li><i class="fas fa-check-double"></i> Professional.</li>
                            </ul>
                            <p class="mt-3">

                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                            <img src="images/g1.jpg" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row mt-5">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Our board of management is made up of dedicated and experienced professionals. 
</h3>
                            <p class="fst-italic mt-3">
                                 Our client base is growing and satisfactory.
Our primary focus is to provide services such as Auto mobiles, Equipment supplies, Construction and tailor-made computer soft wares to government, public and private organizations.
                            </p>
                            <ul class="mt-3">
                                <li><i class="fas fa-check-double"></i>BUILDING & ELECTRICAL ENGINEERING</li>
                                <li><i class="fas fa-check-double"></i>NETWORKING COMPUTERS</li>
                                <li><i class="fas fa-check-double"></i>DESIGNING & IMPLEMENTING DATA BASE SYSTEM.</li>
                            </ul>
                            <p class="mt-3"> </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                            <img src="images/g2.jpg" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row mt-5">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>We recognize that the implementation of this policy is dependent on establishment of effective methods of control and communication with the full co-operation of the employees.</h3>
                            <p class="fst-italic mt-3">
                                All staff will have the necessary training to enable them completely discharge  their responsibilities, safely and without risk to health.
                            </p>
                            <p class="mt-3">
                               Arrangement for Health and safety will be  reviewed periodically.  In addition each project manager is required to undertake a regular  review of their operations and from this, derive an action plan for Health and Safety defining objectives and targets for the duration of each project.
                            </p>

                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                            <img src="images/papa.JPG" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row mt-5">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>ABOCHO ENTERPRISES NIGERIA LIMITED requires all staff, associates and contractors to comply with their statutory Health and obligations and contribute to assist with the provision of a safe and healthy working environment.</h3>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center ps-lg-5">
                            <img src="images/g5.jpg" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--//abs-Section -->
    <!--/Services-Section -->
    <section id="services" class="services section-bg w3lpricing">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny two mb-2"><span>What We Offer</span></h6>
                <h3 class="title-w3l two mb-4">VEHICLE LEASING & HIRING

</h3>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-percent"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">VEHICLE SUPPLIES & IMPORTATION</a></h4>
                                <p class="mt-3"> </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-exchange-alt"></span>
                            </div>
                            <div class="info">
                                <h4><a >
                                       FURNISHING, INTERIOR DECORATION</a></h4>
                                <p class="mt-3"> </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-user-friends"></span>
                            </div>
                            <div class="info">
                                <h4><a>NETWORKING COMPUTERS</a></h4>
                                <p class="mt-3"> </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-car"></span>
                            </div>
                            <div class="info">
                                <h4><a >DESIGNING & IMPLEMENTING DATA BASE SYSTEM</a></h4>
                                <p class="mt-3"> </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-trophy"></span>
                            </div>
                            <div class="info">
                                <h4><a>ESTATE DEVELOPMENT</a></h4>
                                <p class="mt-3"></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-headset"></span>
                            </div>
                            <div class="info">
                                <h4><a>BUILDING & ELECTRICAL ENGINEERING</a></h4>
                                <p class="mt-3"> </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//Services-Section -->
    <!--/-->
    <!--/Team-Section-->
    <section id="team" class="w3l-team">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny mb-2"><span>KEY MANAGEMENT STAFF </span></h6>
                <h3 class="title-w3l">OF ABOCHO ENTERPRISES NIGERIA LIMITED</h3>
            </div>

            <div class="row team-row">
                <!--start-team member -->
                <div class="col-lg-4 col-sm-6 team-wrap mt-lg-5 mt-4">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="images/b.jpg" alt="" class="img-fluid radius-image">
                            <div class="overlay">
                                <div class="team-details text-center">
                                    <div class="socials mt-4">
                                        <a href="#url"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#url"><i class="fab fa-twitter"></i></a>
                                        <a href="#url"><i class="fab fa-instagram"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#team">
                            <h6 class="team-title">YUSUFU SAMSON</h6>
                        </a>
                        <p>MD/CEO</p>
                    </div>
                </div>
                <!-- end team member -->

                <div class="col-lg-4 col-sm-6 team-wrap mt-lg-5 mt-4">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="images/team2.jpg" alt="" class="img-fluid radius-image">
                            <div class="overlay">
                                <div class="team-details text-center">
                                </div>
                            </div>
                        </div>
                        <a href="#team">
                            <h6 class="team-title">KELVIN BASSEY ALU</h6>
                        </a>
                        <p>IT MANAGER</p>
                    </div>
                </div>
                <!-- end team member -->
                <div class="col-lg-4 col-sm-6 team-wrap mt-lg-5 mt-4">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="images/team3.jpg" alt="" class="img-fluid radius-image">
                            <div class="overlay">
                                <div class="team-details text-center">
                                    <div class="socials mt-4">
                                        <a href="#url"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#url"><i class="fab fa-twitter"></i></a>
                                        <a href="#url"><i class="fab fa-instagram"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#team">
                            <h6 class="team-title">Mrs. ROSELINE AGBOR E.</h6>
                        </a>
                        <p>ED/FINANCE</p>

                    </div>
                </div>
                <!-- end team member -->

            </div>

        </div>
    </section>
    <!--//Team-Section-->
    <!--/blog-Section-->
    <section id="blog" class="w3l-blog section-bg">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny two mb-2"><span>Latest News</span></h6>
                <h3 class="title-w3l two">Blog Posts</h3>
            </div>
            <div class="row pb-5 w3l-courses">
                <div class="col-md-12 mx-auto pb-lg-5 pb-3">
                    <div class="owl-two owl-carousel owl-theme row">
                        <div class="item col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#cardblog" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="images/g1.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#cardblog" class="course-desc">Clean Office Space
                                    </a>
                                    <p class="mt-3"> </p>
                                    <div class="blog-bottom-info">

                                        <div class="course-meta">
                                            <div class="meta-item course-lesson">
                                                <span class="fas fa-heart"></span>
                                                <span class="meta-value"> 24 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fas fa-eye"></span>
                                                <span class="meta-value"> 125 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fas fa-calendar-week"></span>
                                                <span class="meta-value"> 13.07.2021 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <div class="item col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#cardblog" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="images/g2.jpg" alt="Card image cap">
                                    </a>

                                </div>
                                <div class="card-body course-details">
                                    <a href="#cardblog" class="course-desc">Professional Workers
                                    </a>
                                    <p class="mt-3"></p>
                                    <div class="blog-bottom-info">

                                        <div class="course-meta">
                                            <div class="meta-item course-lesson">
                                                <span class="fas fa-heart"></span>
                                                <span class="meta-value"> 24 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fas fa-eye"></span>
                                                <span class="meta-value"> 125 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fas fa-calendar-week"></span>
                                                <span class="meta-value"> 23.07.2021 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <div class="item col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#cardblog" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="images/g3.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body course-details">
                                    <a href="#cardblog" class="course-desc">Recently Acquired toyota Hilux
                                    </a>
                                    <p class="mt-3"></p>
                                    <div class="blog-bottom-info">

                                        <div class="course-meta">
                                            <div class="meta-item course-lesson">
                                                <span class="fas fa-heart"></span>
                                                <span class="meta-value"> 24 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fas fa-eye"></span>
                                                <span class="meta-value"> 125 </span>
                                            </div>
                                            <div class="meta-item course-students">
                                                <span class="fas fa-calendar-week"></span>
                                                <span class="meta-value"> 25.04.2022 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//Team-Section-->
    <!--/Portfolio-Section -->
    <section id="portfolio" class="portfolio w3l-gallery">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny mb-2"><span>Recent update</span></h6>
                <h3 class="title-w3l mb-2">Our Gallery</h3>
            </div>

            <!--/grids-grids-->
            <ul class="gallery_agile mt-4">
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="#">
                            <img src="images/g1.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w3_agile_portfolio_grid mt-4">
                         <a href="#">
                            <img src="images/g2.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="#">
                            <img src="images/g3.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w3_agile_portfolio_grid mt-4">
                         <a href="#">
                            <img src="images/g4.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="w3_agile_portfolio_grid">
                        <a href="#">
                            <img src="images/g12.JPG" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w3_agile_portfolio_grid mt-4">
                        <a href="#">
                            <img src="images/g6.jpg" alt=" " class="img-fluid radius-image" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3><i class="fas fa-search"></i></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <!--//rids-grids-->
        </div>
    </section>
    <!--//Portfolio-Section -->
    <!--/Testimonials/Section-->
    <section id="testimonials" class="w3l-clients-1 testimonials">
        <div class="container">
            <!--/testimonial-grids-->
            <div class="testimonial-row">
                <div id="owl-demo1" class="owl-testimonial owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <div class="test-img">
                                    <img src="images/b.jpg" class="img-fluid" alt="client-img">
                                </div>
                                <div class="testi-des">
                                    <i class="fas fa-quote-left"></i>
                                    <div class="peopl align-self">
                                        <h3>ABOCHO ENTERPRISES NIGERIA LIMITED</h3>
                                    </div>
                                </div>
                                <blockquote>
                                    Welcome is Better than Sorry 
                                </blockquote>
                                <ul class="social-media-test m-0 mt-4 p-0">
                                    <li><a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li><a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//testimonial-grids-->

        </div>
    </section>
    <!--//Testimonials/Section-->
    <!--/Pricing-Section-->
    <section id="pricing" class="w3lpricing section-bg">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny two mb-2"><span>Our Plans</span></h6>
                <h3 class="title-w3l two mb-2">Starting Price.</h3>
            </div>
            <div class="row mt-lg-4 mt-2">
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <h3>Free Trail</h3>
                        <h4><sup>N</sup>0<span> /10 mins</span></h4>
                        <ul>
                            <li>
                                Air Conditioning</li>
                            <li> Audio input</li>
                            <li> DVD Video System</li>
                            <li>All Wheel drive</li>
                            <li>USB input</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="" class="btn-buy btn btn-style btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="box featured">
                        <h3>Calabar</h3>
                        <h4><sup>N</sup>35k<span> / Per Day</span></h4>
                        <ul>
                            <li>
                                Air Conditioning</li>
                            <li> Audio input</li>
                            <li> DVD Video System</li>
                            <li>All Wheel drive</li>
                            <li>USB input</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="" class="btn-buy btn btn-style btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box">
                        <h3>Travel BUS</h3>
                        <h4><sup>N</sup>70k<span> / Per Trip</span></h4>
                        <ul>
                            <li>
                                Air Conditioning</li>
                            <li> Audio input</li>
                            <li> DVD Video System</li>
                            <li>All Wheel drive</li>
                            <li>USB input</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="" class="btn-buy btn btn-style btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="box">
                        <h3>Travel SUV</h3>
                        <h4><sup>N</sup>50k<span> / per Trip</span></h4>
                        <ul>
                            <li>
                                Air Conditioning</li>
                            <li> Audio input</li>
                            <li> DVD Video System</li>
                            <li>All Wheel drive</li>
                            <li>USB input</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="" class="btn-buy btn btn-style btn-primary">B00k Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--/Pricing-Section-->
    <!--/contact-->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny mb-2"><span>Contact Us</span></h6>
                <h3 class="title-w3l mb-2">Get In Touch With Us</h3>
                <p class="w3conatact-p mb-4">Start working with Us we can provide everything you need to generate awareness, drive traffic, connect.
                    We guarantee that you’ll be able to have any issue resolved within 24 hours.</p>
            </div>
            <div class="row">
                <div class="col-lg-5 pe-lg-5">
                    <div class="row">
                        <div class="cont-details">
                            <div class="cont-top" data-aos="fade-up"
     data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Company Address</h6>
                                    <p>3 Asari Eso Layout. off Effion Ette Junction Calabar</p>
                                    <P>P.O Box 2211.</P>
                                </div>
                            </div>
                            <div class="cont-top margin-up" data-aos="fade-up"
     data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+234(080)3401 6627">+234(080)3401 6627</a></p>
                                    <p><a href="tel:+234(070)3767 7242">+234(070)3767 7242</a></p>
                                </div>
                            </div>
                            <div class="cont-top margin-up" data-aos="fade-up"
     data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                  <p><a href="mailto:abocho4enterprises@yahoo.com" class="mail">abocho4enterprises@yahoo.com</a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-7 mt-lg-0 mt-5" data-aos="fade-up"
     data-aos-duration="3000">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Name" required="">
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Subject" required="">
                        </div>
                        <div class="form-group">
                            <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="w3lhny-submit text-right">
                            <button type="submit" class="btn btn-primary btn-style ">Send Message</button>
                        </div>

                    </form>
                </div>

            </div>
            <div class="map-iframe mt-5 pt-lg-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3120.7447491695234!2d8.343014313960275!3d4.992741240448145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1067879bece931e1%3A0x74e46100f0fd4a34!2sSTING&#39;S%20BARBING%20SALON!5e1!3m2!1sen!2sng!4v1666072561776!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">"</iframe>
            </div>
        </div>
    </section>
    <!--//contact-->
    <!--/footer-->
    <footer id="footer" class="wthree-footerhny">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact pe-lg-5">
                        <div class="footer-logo mb-3">
                            <a class="navbar-brand" href="index.html"><span>ABOCHO</span></a>
                        </div>
                        <p>is organized to offer services in the information technology, interior decoration, vehicle leasing/hiring and supplies, importation and exportation and general merchandize.  The Enterprises was registered in 2010(RC: 4181).  And later upgraded to a limited liability company in 2017 with CAC (RC: 1442159)</p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> <a href="#index">Home</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#us">About us</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#serve">Services</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#terms">Terms of service</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#privacy">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> <a href="#blogs">Blog Posts</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#stats">Stats</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Plans">Plans</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Deals">Deals</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Offers">Offers</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter ps-lg-4">
                        <h4>Join Our Newsletter</h4>
                        <p>Get Updates By Subscribe Our Weekly Newsletter</p>
                        <form action="" class="d-flex" method="post">
                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                            <button type="submit" class="btn btn-primary btn-style">Subscribe</button>

                        </form>
                    </div> 

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    <p class="copy-footer-29">© 2021 ABOCHO ENTERPRISES NIGERIA LIMITED| Designed by <a href="https://w.com">Wayih Samuel</a></p>
                </div>

            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <button onclick="topFunction()" id="movetop" title="Go to top" style="display: block;">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer><!-- End Footer -->


    <!-- Template JavaScript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/theme-change.js"></script>
    
   
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });
        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
