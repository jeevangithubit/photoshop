<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Weddingfilmz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url('assets/img/favicon.ico')?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('assets/lib/animate/animate.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css')?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
     <link href="<?php echo base_url('assets/css/new.css')?>" rel="stylesheet">
    <style>
        .navbar-light .navbar-brand {
            color: rgba(0,0,0,.9);
            font-size: 32px;
            font-weight: bold;
        }
        .carousel-caption1 {
            position: absolute;
            right: 15%;
            bottom: 1.25rem;
            left: 15%;
            padding-top: 1.25rem;
            padding-bottom: 9.25rem;
            color: #fff;
            text-align: center;
        }
        .carousel-inner1 {
            position: relative;
            width: 100%;
            overflow: hidden;
            height: 750px;
        }
    </style>
</head>

<body>
<header>
        <!--<div class="header-top">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-5 col-sm-12 right_info">-->
        <!--                <p><i class="fa fa-map-marker"></i> 10 Praed Street / Abc road Xyz</p>-->
        <!--            </div>-->
        <!--            <div class="col-md-7 col-sm-12 left_info">-->
        <!--                <ul>-->
        <!--                    <li><i class="fa fa-mobile-alt"></i><a href="#">+123456789 0987</a></li>-->
        <!--                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">Testexample@gmail.com</a></li>-->
        <!--                </ul>-->
        <!--            </div>-->

        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <div class="header-main">
            <div class="container">
                <nav id='cssmenu'>
                    <div class="logo">
                        <a href="https://codepen.io/anupkumar92/" class="text-light" style="font-size: 30px; font-weight: bold;">Weddingfilmz</a>
                    </div>
                    <div id="head-mobile"></div>
                    <div class="button"></div>
                    <ul>
                        <li class="nav-item active"><a href="<?php echo site_url('home')?>" class="nav-link">HOME <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="<?php echo site_url('about')?>" class="nav-link">ABOUT</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('Images')?>" class="nav-link">PHOTOGRAPHY </a></li>
                        <li class="nav-item"><a href="<?php echo site_url('Home/youtube')?>" class="nav-link">YOUTUBE</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('Video')?>" class="nav-link">FILMS</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('Contact')?>" class="nav-link">CONTACT US</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<div id="slider-home" class="carousel slide" data-ride="carousel" data-pause="false">
        <ul class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1"></li>
            <li data-target="#slider-home" data-slide-to="2"></li>
            <li data-target="#slider-home" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner1">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/slider.jpg')?>" alt="Los Angeles" style="aspect-ratio: 3/2;">
                <div class="carousel-caption1">
                    <h3 class="text-light">Pure Love !  Premium Kerala Wedding Photography </h3>
                    <p> Archive your day with the best candid wedding photographers in Kerala</p>
                    <!--<a class="btn" href="#">Make an appointment</a>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider1.jpg')?>" alt="Chicago" style="aspect-ratio: 3/2;">
                <div class="carousel-caption1">
                    <h3 class="text-light"> Best Wedding Videography Experience | Authentic Life Stories!</h3>
                    <p>Enjoy the services of best cinematic wedding videographers in Kerala!</p>
                    <!--<a class="btn" href="#">Make an appointment</a>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider2.jpg')?>" alt="New York" style="aspect-ratio: 3/2;">
                <div class="carousel-caption1">
                    <h3 class="text-light">   Classic Chennai Wedding Photography | Heartwarming !</h3>
                    <p>Register for our creative wedding photography services in Chennai !</p>
                    <!--<a class="btn" href="#">Make an appointment</a>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider4.jpg')?>" alt="New York" style="aspect-ratio: 3/2;">
                <div class="carousel-caption1">
                    <h3 class="text-light">Engagement Party Photography| True Love!</h3>
                    <p>Reach out to us for the best engagement photographers in Kerala!</p>
                    <!--<a class="btn" href="#">Make an appointment</a>-->
                </div>
            </div>
        </div>
        <!--<a class="carousel-control-prev" href="#slider-home" data-slide="prev">-->
        <!--    <span class="carousel-control-prev-icon"></span>-->
        <!--</a>-->
        <!--<a class="carousel-control-next" href="#slider-home" data-slide="next">-->
        <!--    <span class="carousel-control-next-icon"></span>-->
        <!--</a>-->
    </div>


    
