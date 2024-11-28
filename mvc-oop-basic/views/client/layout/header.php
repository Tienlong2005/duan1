<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/autima/autima/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2024 09:07:48 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Football G1-Thể thao dành cho bạn  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="client/assets/img/favicon.ico">

    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="client/assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="client/assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="client/assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="client/assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="client/assets/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="client/assets/css/ionicons.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="client/assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="client/assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="client/assets/css/slinky.menu.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="client/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="client/assets/css/style.css">

    <!--modernizr min js here-->
    <script src="client/assets/js/vendor/modernizr-3.7.1.min.js"></script>

</head>

<body>
    <header class="header_area">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="top_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <!-- Có thể thêm nội dung nếu cần -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-end">
                                <ul>
                                    <li class="top_links">
                                        <a href="#">
                                            <i class="ion-android-person"></i>
                                            <?php
                                            if (isset($_SESSION['user'])) {
                                                echo ($_SESSION['user']['ho_ten']);
                                            } else {
                                                echo 'Khách';
                                            }
                                            ?>
                                            <i class="ion-ios-arrow-down"></i>
                                        </a>
                                        <ul class="dropdown_links">
                                            <li><a href="?act=kiem-tra">Thanh Toán</a></li>
                                            <li><a href="?act=tai-khoan-ca-nhan">Tài Khoản</a></li>
                                            <li><a href="?act=cart">Giỏ Hàng</a></li>
                                            <li>
                                                <form action="?act=dang-xuat" method="post">
                                                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="index.php?act=/"><img src="client/assets/img/logo/g1.png" alt="" style="height: 150px; " width="200" ></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="middel_right d-flex justify-content-center">
                            <div class="search-container">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Search entire store here ..." type="text">
                                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- Additional content can go here -->
                    </div>
                </div>
            </div>
        </div>

        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                    </div>

                </div>
            </div>
        </div>
        <!--header bottom end-->
    </header>
    <!--header area end-->

    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>MENU</span>
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">

                        <div class="canvas_close">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="top_right text-end">
                            <ul>
                                <li class="top_links"><a href="#"><i class="ion-android-person"></i> My Account<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="checkout.html">Checkout </a></li>
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="?act=cart">Shopping Cart</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="search-container">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>