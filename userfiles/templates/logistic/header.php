<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anh Tuan Logistic</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php print template_url(); ?>assets/img/favicon.png" type="image/x-icon" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/bootstrap.min.css" />
    <!-- fontawesome css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/flaticon.css" />
    <!-- fontawesome css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/fontawesome/css/all.min.css" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/owl.carousel.min.css" />
    <!-- owl carousel theme css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/owl.theme.default.min.css" />
    <!-- slicknav css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/slicknav.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/animate.min.css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/responsive.css" />
    <!-- jquery js -->
    <!-- <script src="<?php print template_url(); ?>assets/js/jquery-3.3.1.min.js"></script> -->

    <style>
        .glot-sub-active {
            color: #1296ba !important;
        }

        .glot-sub-hovered {
            color: #1296ba !important;
        }

        .glot-sub-clzz {
            cursor: pointer;

            line-height: 1.2;
            font-size: 28px;
            color: #ffcc00;
            background: rgba(17, 17, 17, 0.7);
        }

        .glot-sub-clzz:hover {
            color: #1296ba !important;
        }

        .ej-trans-sub {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999999;
            cursor: move;
        }

        .ej-trans-sub>span {
            color: #3cf9ed;
            font-size: 18px;
            text-align: center;
            padding: 0 16px;
            line-height: 1.5;
            background: rgba(32, 26, 25, 0.8);
            padding: 0 8px;

            line-height: 1.2;
            font-size: 16px;
            color: #0cb1c7;
            background: rgba(67, 65, 65, 0.7);
        }

        .ej-main-sub {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999999;
            cursor: move;
            padding: 0 8px;
        }

        .ej-main-sub>span {
            color: white;
            font-size: 20px;
            line-height: 1.5;
            text-align: center;
            background: rgba(32, 26, 25, 0.8);
            padding: 2px 8px;

            line-height: 1.2;
            font-size: 28px;
            color: #ffcc00;
            background: rgba(17, 17, 17, 0.7);
        }

        .ej-main-sub .glot-sub-clzz {
            background: transparent !important;
        }

        .tran-subtitle>.view-icon-edit-sub {
            cursor: pointer;
            padding-left: 10px;
            top: 2px;
            position: relative;
        }

        .tran-subtitle>.view-icon-edit-sub>svg {
            width: 16px;
            height: 16px;
            pointer-events: none;
        }
    </style>
</head>
<!--   header area start   -->
<div class="header-area home-3">
    <div class="info-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-infos">
                        <div class="email">
                            <div class="icon-wrapper"><i class="flaticon-call"></i></div>
                            <div>+ 00 12 123 456</div>
                        </div>
                        <div class="phone">
                            <div class="icon-wrapper">
                                <span class="flaticon-email"></span>
                            </div>
                            <div>Support@mail.com</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <ul class="social-links">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="support-nav-area">
        <div class="container">
            <div class="row">
                <div class="col-12 position-static">
                    <div class="navbar-area">
                        <div class="row">
                            <div class="col-12 position-static">
                                <module type="menu" template="header"/>
                                <div id="mobileMenuHome3">
                                    
                                </div>
                                <!-- <ul class="search-area">
                                    <li class="search-icon">
                                        <a href="#"><span class="flaticon-search"></span></a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   header area end   -->
<!--   search bar popup start   -->
<div class="search-popup">
    <form class="search-form" action="#">
        <div class="form-element">
            <input type="text" placeholder="Type your search keyword" />
        </div>
    </form>
    <div class="search-popup-overlay" id="searchOverlay"></div>
    <button class="search-close-btn" id="searchCloseBtn">
        <i class="fas fa-times"></i>
    </button>
</div>
<!--   search bar popup end   -->
<!--  hero area start  -->
<div class="hero-area hero-bg-3 home-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <div class="hero-txt">
                    <span class="wow fadeInDown" data-wow-duration="1.5s" style="
                  visibility: visible;
                  animation-duration: 1.5s;
                  animation-name: fadeInDown;
                ">We are transpix</span>
                    <h1 class="wow fadeInUp" data-wow-duration="1.5s" style="
                  visibility: visible;
                  animation-duration: 1.5s;
                  animation-name: fadeInUp;
                ">
                        No# 1 solution for transport
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</div>
<!--  hero area end  -->