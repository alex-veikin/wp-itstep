<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Subash || Home-2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"
          href="<?php echo get_template_directory_uri() ?>/img/icon/favicon.png">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css">
    <!-- Template color css -->
    <link href="<?php echo get_template_directory_uri() ?>/css/color/color-core.css" data-style="styles"
          rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/custom.css">

    <!-- Modernizr JS -->
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body <?php body_class() ?>>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper">

    <!-- START HEADER AREA -->
    <header class="header-area header-wrapper header-2">
        <!-- header-middle-area -->
        <div id="sticky-header" class="header-middle-area plr-185">
            <div class="container-fluid">
                <div class="full-width-mega-dropdown">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo.png"
                                         alt="main logo">
                                </a>
                            </div>
                        </div>

                        <!-- primary-menu -->
                        <div class="col-md-8 hidden-sm hidden-xs">
							<?php

							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'menu'            => 'Верхнее десктоп меню',
								'container'       => 'nav',
								'container_class' => '',
								'container_id'    => 'primary-menu',
								'menu_class'      => 'menu',
								'menu_id'         => '',
//	                        'echo'            => true,
//	                        'fallback_cb'     => 'wp_page_menu',
//	                        'before'          => '',
//	                        'after'           => '',
//	                        'link_before'     => '',
//	                        'link_after'      => '',
//	                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//	                        'depth'           => 0,
//	                        'walker'          => '',
							) );

							?>

                            <nav id="primary-menu">
                                <ul class="main-menu text-center">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="mega-parent"><a href="#">elements</a>
                                        <ul class="dropdwn">
                                            <li>
                                                <a href="elements-header-1-sticky.html">header-1-sticky</a>
                                            </li>
                                            <li>
                                                <a href="elements-header-1-no-sticky.html">header-1-no-sticky</a>
                                            </li>
                                            <li>
                                                <a href="elements-header-2-sticky.html">header-2-sticky</a>
                                            </li>
                                            <li>
                                                <a href="elements-header-2-no-sticky.html">header-2-no-sticky</a>
                                            </li>
                                            <li>
                                                <a href="elements-footer-1.html">footer-1</a>
                                            </li>
                                            <li>
                                                <a href="elements-footer-2.html">footer-2</a>
                                            </li>
                                            <li>
                                                <a href="elements-footer-3.html">footer-3</a>
                                            </li>
                                            <li>
                                                <a href="elements-contact-form.html">Dynamic Contact Form</a>
                                            </li>
                                            <li>
                                                <a href="elements-map.html">Google Map</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-parent"><a href="shop.html">Products</a>
                                        <ul class="dropdwn">
                                            <li>
                                                <a href="#">Smart phones</a>
                                            </li>
                                            <li>
                                                <a href="#">Android Mobiles</a>
                                            </li>
                                            <li>
                                                <a href="#">Windows Mobiles</a>
                                            </li>
                                            <li>
                                                <a href="#">Refurbished Mobiles</a>
                                            </li>
                                            <li>
                                                <a href="#">All Mobile Accessories</a>
                                            </li>
                                            <li>
                                                <a href="">Smart notebooks</a>
                                            </li>
                                            <li>
                                                <a href="">Android Note Book</a>
                                            </li>
                                            <li>
                                                <a href="">Windows Note Books</a>
                                            </li>
                                            <li>
                                                <a href="">Refurbished Note Books</a>
                                            </li>
                                            <li>
                                                <a href="">Note Books Accessories</a>
                                            </li>
                                            <li>
                                                <a href="">Smart tablets</a>
                                            </li>
                                            <li>
                                                <a href="">Android Tablets</a>
                                            </li>
                                            <li>
                                                <a href="">Windows Tablets</a>
                                            </li>
                                            <li>
                                                <a href="">Refurbished Tablets</a>
                                            </li>
                                            <li>
                                                <a href="">Tablets Accessories</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-parent"><a href="#">Pages</a>
                                        <div class="mega-menu-area mega-menu-area-2 clearfix">
                                            <div class="mega-menu-link mega-menu-link-2  f-left">
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">page list</li>
                                                    <li>
                                                        <a href="shop.html">Shop</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list.html">Shop List</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list-right-sidebar.html">Shop List Right
                                                            Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.html">Single Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product-left-sidebar.html">Single Product Left
                                                            Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product-no-sidebar.html">Single Product No
                                                            Sidebar</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">page list</li>
                                                    <li>
                                                        <a href="cart.html">Shopping Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="order.html">Order</a>
                                                    </li>
                                                    <li>
                                                        <a href="login.html">Login</a>
                                                    </li>
                                                    <li>
                                                        <a href="My-account.html">My Account</a>
                                                    </li>
                                                    <li>
                                                        <a href="about.html">About us</a>
                                                    </li>
                                                    <li>
                                                        <a href="404.html">404</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="dropdwn">
                                            <li>
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-2.html">Blog style 2</a>
                                            </li>
                                            <li>
                                                <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html">About us</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="search-top-cart  f-right">
                                <!-- header-search -->
                                <div class="header-search header-search-2 f-left">
                                    <div class="header-search-inner">
                                        <button class="search-toggle">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                        <form action="#">
                                            <div class="top-search-box">
                                                <input type="text" placeholder="Search here your product...">
                                                <button type="submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-account header-account-2 f-left">
                                    <ul class="user-meta">
                                        <li><a href="#"><i class="zmdi zmdi-view-headline"></i></a>
                                            <ul>
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="#">Wish list</a></li>
                                                <li><a href="#">Checkout</a></li>
                                                <li><a href="#">Testimonial</a></li>
                                                <li><a href="#">Log in</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- total-cart -->
                                <div class="total-cart total-cart-2 f-left">
                                    <div class="total-cart-in">
                                        <div class="cart-toggler">
                                            <a href="#">
                                                <span class="cart-quantity">02</span><br>
                                                <span class="cart-icon">
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                    </span>
                                            </a>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="top-cart-inner your-cart">
                                                    <h5 class="text-capitalize">Your Cart</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-cart-pro">
                                                    <!-- single-cart -->
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-img f-left">
                                                            <a href="#">
                                                                <img src="<?php echo get_template_directory_uri() ?>/img/cart/1.jpg"
                                                                     alt="Cart Product"/>
                                                            </a>
                                                            <div class="del-icon">
                                                                <a href="#">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="cart-info f-left">
                                                            <h6 class="text-capitalize">
                                                                <a href="#">Dummy Product Name</a>
                                                            </h6>
                                                            <p>
                                                                <span>Brand <strong>:</strong></span>Brand Name
                                                            </p>
                                                            <p>
                                                                <span>Model <strong>:</strong></span>Grand s2
                                                            </p>
                                                            <p>
                                                                <span>Color <strong>:</strong></span>Black, White
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- single-cart -->
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-img f-left">
                                                            <a href="#">
                                                                <img src="<?php echo get_template_directory_uri() ?>/img/cart/1.jpg"
                                                                     alt="Cart Product"/>
                                                            </a>
                                                            <div class="del-icon">
                                                                <a href="#">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="cart-info f-left">
                                                            <h6 class="text-capitalize">
                                                                <a href="#">Dummy Product Name</a>
                                                            </h6>
                                                            <p>
                                                                <span>Brand <strong>:</strong></span>Brand Name
                                                            </p>
                                                            <p>
                                                                <span>Model <strong>:</strong></span>Grand s2
                                                            </p>
                                                            <p>
                                                                <span>Color <strong>:</strong></span>Black, White
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner subtotal">
                                                    <h4 class="text-uppercase g-font-2">
                                                        Total =
                                                        <span>$ 500.00</span>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner view-cart">
                                                    <h4 class="text-uppercase">
                                                        <a href="#">View cart</a>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner check-out">
                                                    <h4 class="text-uppercase">
                                                        <a href="#">Check out</a>
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER AREA -->

    <!-- START MOBILE MENU AREA -->
    <div class="mobile-menu-area hidden-lg hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="shop.html">Products</a>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="shop.html">Shop</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-list.html">Shop List</a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="single-product.html">Single Product</a>
                                        </li>
                                        <li>
                                            <a href="single-product-left-sidebar.html">Single Product Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="single-product-no-sidebar.html">Single Product No Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="order.html">Order</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="My-account.html">My Account</a>
                                        </li>
                                        <li>
                                            <a href="about.html">About us</a>
                                        </li>
                                        <li>
                                            <a href="404.html">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li>
                                            <a href="blog.html">Blog</a>
                                        </li>
                                        <li>
                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-2.html">Blog style 2</a>
                                        </li>
                                        <li>
                                            <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MOBILE MENU AREA -->

    <!-- START SLIDER AREA -->
    <div class="slider-area slider-2">
        <div class="bend niceties preview-2">
            <div id="nivoslider-2" class="slides">
                <img src="<?php echo get_template_directory_uri() ?>/img/slider/slider-2/slider-1.jpg" alt=""
                     title="#slider-direction-1"/>
                <img src="<?php echo get_template_directory_uri() ?>/img/slider/slider-2/slider-1.jpg" alt=""
                     title="#slider-direction-2"/>
                <img src="<?php echo get_template_directory_uri() ?>/img/slider/slider-2/slider-1.jpg" alt=""
                     title="#slider-direction-3"/>
                <img src="<?php echo get_template_directory_uri() ?>/img/slider/slider-2/slider-1.jpg" alt=""
                     title="#slider-direction-4"/>
                <img src="<?php echo get_template_directory_uri() ?>/img/slider/slider-2/slider-1.jpg" alt=""
                     title="#slider-direction-5"/>
            </div>
            <!-- ===== direction 1 ===== -->
            <div id="slider-direction-1" class="slider-direction">
                <div class="slider-content-1">
                    <div class="title-container">
                        <div class="wow rotateInDownLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h6 class="slider2-title-1">Best price : $866</h6>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider2-title-2">new smart phone</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <h2 class="slider2-title-3">Samsung grand 6</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <p class="slider2-title-4">There are many variations of passages of Lorem Ipsum availables,
                                but the majority have suffered alteration in some form.</p>
                        </div>
                        <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                            <a href="#" class="button extra-small button-black">
                                <span class="text-uppercase">Buy now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- layer 1 -->
                <div class="slider-content-1-image">
                    <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="layer-1-1">
                            <img src="<?php echo get_template_directory_uri() ?>/img/slider/slider-2/layer-1.png"
                                 alt=""/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== direction 2 ===== -->
            <div id="slider-direction-2" class="slider-direction">
                <div class="slider-content-2">
                    <div class="title-container">
                        <div class="wow rotateInDownLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h6 class="slider2-title-1">Best price : $866</h6>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider2-title-2">new smart phone</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <h2 class="slider2-title-3">Samsung grand 6</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <p class="slider2-title-4">There are many variations of passages of Lorem Ipsum availables,
                                but the majority have suffered alteration in some form.</p>
                        </div>
                        <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                            <a href="#" class="button extra-small button-black">
                                <span class="text-uppercase">Buy now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- layer 1 -->
                <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="layer-1-1 layer-2-1">
                        <img src="<?php echo get_template_directory_uri() ?>/img/slider/slider-2/layer-2.png" alt=""/>
                    </div>
                </div>
            </div>
            <!-- ===== direction 3 ===== -->
            <div id="slider-direction-3" class="slider-direction">
                <div class="slider-content-1">
                    <div class="title-container">
                        <div class="wow rotateInDownLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h6 class="slider2-title-1">Best price : $866</h6>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider2-title-2">new smart phone</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <h2 class="slider2-title-3">Samsung grand 6</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <p class="slider2-title-4">There are many variations of passages of Lorem Ipsum availables,
                                but the majority have suffered alteration in some form.</p>
                        </div>
                        <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                            <a href="#" class="button extra-small button-black">
                                <span class="text-uppercase">Buy now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- layer 1 -->
                <div class="slider-content-1-image">
                    <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="layer-1-1">
                            <img src="<?php echo get_template_directory_uri() ?>/img/slider/slider-2/layer-1.png"
                                 alt=""/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== direction 4 ===== -->
            <div id="slider-direction-4" class="slider-direction">
                <div class="slider-content-2">
                    <div class="title-container">
                        <div class="wow rotateInDownLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h6 class="slider2-title-1">Best price : $866</h6>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider2-title-2">new smart phone</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <h2 class="slider2-title-3">Samsung grand 6</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <p class="slider2-title-4">There are many variations of passages of Lorem Ipsum availables,
                                but the majority have suffered alteration in some form.</p>
                        </div>
                        <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                            <a href="#" class="button extra-small button-black">
                                <span class="text-uppercase">Buy now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- layer 1 -->
                <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="layer-1-1 layer-2-1">
                        <img src="<?php echo get_template_directory_uri() ?>/img/slider/slider-2/layer-2.png" alt=""/>
                    </div>
                </div>
            </div>
            <!-- ===== direction 5 ===== -->
            <div id="slider-direction-5" class="slider-direction">
                <div class="slider-content-1">
                    <div class="title-container">
                        <div class="wow rotateInDownLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                            <h6 class="slider2-title-1">Best price : $866</h6>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider2-title-2">new smart phone</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <h2 class="slider2-title-3">Samsung grand 6</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <p class="slider2-title-4">There are many variations of passages of Lorem Ipsum availables,
                                but the majority have suffered alteration in some form.</p>
                        </div>
                        <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                            <a href="#" class="button extra-small button-black">
                                <span class="text-uppercase">Buy now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- layer 1 -->
                <div class="slider-content-1-image">
                    <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="layer-1-1">
                            <img src="<?php echo get_template_directory_uri() ?>/img/slider/slider-2/layer-1.png"
                                 alt=""/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== -->
        </div>
    </div>
    <!-- END SLIDER AREA -->