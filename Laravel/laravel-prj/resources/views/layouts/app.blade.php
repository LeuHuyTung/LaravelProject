<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="assets/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png')}}">
    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href=" {{ asset ('assets/css/bootstrap.min.css')}}">
    <!--================= Font Awesome 5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}">
    <!--================= RT Icons CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rt-icons.css') }}">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
    <!--================= Magnific popup Plugin =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--================= Swiper Slider Plugin =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!--================= Mobile Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/metisMenu.css') }}">
    <!--================= Main Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rtsmenu.css') }}">
    <!--================= Preloader CSS =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/preloader.css') }}">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/variables/variable1.css') }}">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    @stack("styles")

</head>
<body>
    <!--================= Preloader Section Start Here =================-->
    <div id="weiboo-load">
        <div class="preloader-new">
            <svg class="cart_preloader" role="img" aria-label="Shopping cart_preloader line animation"
                viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="8">
                    <g class="cart__track" stroke="hsla(0,10%,10%,0.1)">
                        <polyline points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" />
                        <circle cx="43" cy="111" r="13" />
                        <circle cx="102" cy="111" r="13" />
                    </g>
                    <g class="cart__lines" stroke="currentColor">
                        <polyline class="cart__top" points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80"
                            stroke-dasharray="338 338" stroke-dashoffset="-338" />
                        <g class="cart__wheel1" transform="rotate(-90,43,111)">
                            <circle class="cart__wheel-stroke" cx="43" cy="111" r="13" stroke-dasharray="81.68 81.68"
                                stroke-dashoffset="81.68" />
                        </g>
                        <g class="cart__wheel2" transform="rotate(90,102,111)">
                            <circle class="cart__wheel-stroke" cx="102" cy="111" r="13" stroke-dasharray="81.68 81.68"
                                stroke-dashoffset="81.68" />
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>
    <!--================= Preloader End Here =================-->

    {{-- <div class="anywere anywere-home"></div> --}}

    <!--================= Header Section Start Here =================-->
    <header id="rtsHeader">
        <div class="header-topbar header-topbar1">
            <div class="container">
                <div class="header-top-area">
                    <div class="slider-div">
                        <div class="swiper rts-topSlide1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h3 class="welcome-text"> Open Door To A worlds Of Fashion<a href="#">Discover
                                            Now</a></h3>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="welcome-text">  Enjoy free shipping on orders 100$ up<a href="#">Discover
                                            Now</a></h3>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="welcome-text"> Open Door To A worlds Of Fashion<a href="#">Discover
                                            Now</a></h3>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="welcome-text">  Enjoy free shipping on orders 100$ up<a href="#">Discover
                                            Now</a></h3>
                                </div>
                            </div>
                            <div class="slider-navigation2">
                                <div class="swiper-button-prev slider-btn prev"><i
                                        class="rt rt-arrow-left-long"></i></div>
                                <div class="swiper-button-next slider-btn next"><i
                                        class="rt rt-arrow-right-long"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-topbar-menu-area">
            <div class="container">
                <div class="menu-area1">
                    <div class="menu-item">
                        <nav class="nav navbar">
                            <div class="navbar-menu">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Whishlist</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-area-right-side">
                        <div class="contact"><i aria-hidden="true" class="fas fa-phone"></i>Need help? <strong>Call us:
                                <a href="call:0020500">+ 0020 500</a></strong></div>
                        <div class="topbar-select-area">
                            <select class="topbar-select custom-select">
                                <option value="eng">English</option>
                                <option value="esp">Español</option>
                                <option value="ban">Bangla</option>
                            </select>
                            <select class="topbar-select custom-select2">
                                <option value="usd">USD</option>
                                <option value="eur">Euro</option>
                                <option value="tk">Taka</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-sticky">
            <div class="container">
                <div class="navbar-part navbar-part1">
                    <div class="navbar-inner">
                        <div class="left-side">
                            <div class="hamburger-1">
                                <a href="#" class="nav-menu-link">
                                    <span class="dot1"></span>
                                    <span class="dot2"></span>
                                    <span class="dot3"></span>
                                    <span class="dot4"></span>
                                    <span class="dot5"></span>
                                    <span class="dot6"></span>
                                    <span class="dot7"></span>
                                    <span class="dot8"></span>
                                    <span class="dot9"></span>
                                </a>
                            </div>
                            <a href="{{route('home.index')}}" class="logo"><img src="{{asset('assets/images/logo1.svg')}}" alt="weiboo-logo'"></a>
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown"><a class="menu-item active1" href="#">Home <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link active" href="{{route('home.index')}}">Main
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                href="index-two.html">Fashion
                                                Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="index-nine.html">Fashion
                                                    Home Two</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="index-three.html">Furniture
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="index-four.html">Decor
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="index-five.html">Electronics
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="index-six.html">Grocery
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="index-seven.html">Footwear
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                href="index-eight.html">Gaming
                                                Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                href="index-ten.html">Sunglass
                                                Home</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#">Shop <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul mega-dropdown">
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="shop.html">Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="slidebar-left.html">Left Sidebar Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="slidebar-right.html">Right Sidebar Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="full-width-shop.html">Full Width Shop</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="product-details.html">Single Product Layout One</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="product-details2.html">Single Product Layout Two</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="variable-products.html">Variable
                                                            Product</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="grouped-products.html">Grouped
                                                            Product</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li last-child">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="cart.html">Cart</a>
                                                    </li>

                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link2"
                                                            href="account.html">My Account</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#">Pages <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="about.html">About</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="faq.html">FAQ's</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="error.html">Error
                                                    404</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="has-dropdown"><a class="menu-item" href="#">Blog <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="news.html">Blog</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="news-grid.html">Blog Grid</a></li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="news-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="responsive-hamburger">
                            <div class="hamburger-1">
                                <a href="#" class="nav-menu-link">
                                    <span class="dot1"></span>
                                    <span class="dot2"></span>
                                    <span class="dot3"></span>
                                    <span class="dot4"></span>
                                    <span class="dot5"></span>
                                    <span class="dot6"></span>
                                    <span class="dot7"></span>
                                    <span class="dot8"></span>
                                    <span class="dot9"></span>
                                </a>
                            </div>
                        </div>
                        <div class="header-action-items header-action-items1">
                            <div class="search-part">
                                <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                                <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner">
                                            <div class="input-div">
                                                <input id="searchInput1" class="search-input" type="text"
                                                    placeholder="Search by keyword or #">
                                            </div>
                                            <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @guest 
                            <a href="{{route('login')}}" class="account"><i class="rt-user-2"></i></a>                             
                            @else
                            <span class="pr-6px">{{Auth::user()->name}}</span>
                            <a href="{{Auth::user()->utype ==='ADM' ? route('admin.index'): route('user.index')}}" class="account"><i class="rt-user-2"></i></a>       
                            @endguest     
                            <div class="cart action-item">
                                <div class="cart-nav">
                                    <div class="cart-icon icon"><a href="#0"><i aria-hidden="true"
                                                class="fas fa-shopping-basket"></i></a><span
                                            class="wishlist-dot icon-dot">3</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bar">
            <div class="cart-header">
                <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
                <div class="close-cart"><i class="fal fa-times"></i></div>
            </div>
            <div class="product-area">
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="assets/images/slider/image1.jpg" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Parachute Jacket</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">3 ×</span>
                                <span class="product-price">$198.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="3" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="assets/images/slider/image2.jpg" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Narrow Trouser</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">2 ×</span>
                                <span class="product-price">$88.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item last-child">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="assets/images/slider/image5.jpg" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Bellyless Hoodie</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">1 ×</span>
                                <span class="product-price">$289.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-bottom-area">
                <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
                    FOR FREE SHIPPING</span>
                <span class="total-price">TOTAL: <span class="price">$556</span></span>
                <a href="checkout.html" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
                <a href="cart.html" class="view-btn cart-btn">VIEW CART</a>
            </div>
        </div>
        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="offset-sidebar">
                <a class="hamburger-1 mobile-hamburger-1 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
            </div>
            <!-- offset-sidebar start -->
            <div class="offset-sidebar-main">
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <img src="assets/images/logo1.svg" alt="">
                        <p class="mb-30">
                            We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                        </p>
                    </div>
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Get In Touch </h4>
                        <ul>
                            <li class="info phone"><a href="tel:78090790890208806803">780 907 908 90, 208 806 803</a></li>
                            <li class="info email"><a href="email:info@webmail.com">info@webmail.com</a></li>
                            <li class="info web"><a href="www.webexample.com">www.webexample.com</a></li>
                            <li class="info location">13/A, New Pro State, NYC</li>
                        </ul>
                        <div class="offset-social-link">
                            <h4 class="offset-title mb-20">Follow Us </h4>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
		    <!-- offset-sidebar end -->
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu side-mobile-menu1">
                <ul id="mobile-menu-active">
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{route('home.index')}}">Home <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{route('home.index')}}">Main Home</a></li>
                            <li><a href="index-two.html">Fashion Home</a></li>
                            <li><a href="index-nine.html">Fashion Home Two</a></li>
                            <li><a href="index-three.html">Furniture Home</a></li>
                            <li><a href="index-four.html">Decor Home</a></li>
                            <li><a href="index-five.html">Electronics Home</a></li>
                            <li><a href="index-six.html">Grocery Home</a></li>
                            <li><a href="index-seven.html">Footwear Home</a></li>
                            <li><a href="index-eight.html">Gaming Home</a></li>
                            <li><a href="index-ten.html">Sunglass Home</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="shop.html">Shop <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu mega-dropdown-mobile">
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="shop.html">Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="slidebar-left.html">Left Sidebar
                                            Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="slidebar-right.html">Right Sidebar
                                            Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="full-width-shop.html">Full
                                            Width Shop</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="product-details.html">Single Product
                                            Layout
                                            One</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="product-details2.html">Single Product Layout
                                            Two</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="variable-products.html">Variable Product</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="grouped-products.html">Grouped Product</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="cart.html">Cart
                                            </a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="checkout.html">Checkout</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="account.html">My
                                            Account</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{route('home.index')}}">Pages <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="faq.html">FAQ's</a></li>
                            <li><a href="error.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="news.html">Blog <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="news.html">Blog</a></li>
                            <li><a href="news-grid.html">Blog Grid</a></li>
                            <li><a href="news-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a class="mm-link" href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="header-action-items header-action-items1 header-action-items-side">
                <div class="search-part">
                    <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                    <div class="search-input-area">
                        <div class="container">
                            <div class="search-input-inner">
                                <select id="custom-select">
                                    <option value="hide">All Catagory</option>
                                    <option value="all">All</option>
                                    <option value="men">Men</option>
                                    <option value="women">Women</option>
                                    <option value="shoes">Shoes</option>
                                    <option value="shoes">Glasses</option>
                                    <option value="shoes">Bags</option>
                                    <option value="shoes">Assesories</option>
                                </select>
                                <div class="input-div">
                                    <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                    <input class="search-input" type="text" placeholder="Search by keyword or #">
                                </div>
                                <div class="search-close-icon"><i class="rt-xmark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart action-item">
                    <div class="cart-nav">
                        <div class="cart-icon icon"><i class="rt-cart"></i><span class="wishlist-dot icon-dot">3</span>
                        </div>
                    </div>
                </div>
                <div class="wishlist action-item">
                    <div class="favourite-icon icon"><i class="rt-heart"></i><span class="cart-dot icon-dot">0</span>
                    </div>
                </div>
                <a href="login.html" class="account"><i class="rt-user-2"></i></a>
            </div>
            <!-- side-mobile-menu end -->
        </aside>
        <!--================= Banner Section Start Here =================-->
        @if (Route::currentRouteName() === 'home.index')

          <div class="banner banner-1 bg-image">
            <div class="container">
                <div class="banner-inner">
                    <div class="row">
                        <div class="col-xl-2 col-md-4 col-sm-12 gutter-1">
                            <div class="catagory-sidebar">
                                <div class="widget-bg">
                                    <h2 class="widget-title">All Categories <i class="rt-angle-down"></i></h2>
                                    <nav>
                                        <ul>
                                            <li><a href="shop.html">Activewear <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Bikinis <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Dresses <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Jumpsuits <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Smart Dress <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Sneakers <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Sweetshirts <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Trousers <i class="rt rt-arrow-right-long"></i></a></li>
                                            <li><a href="shop.html">Furniture <i class="rt rt-arrow-right-long"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-md-8 col-sm-12 gutter-2">
                            <div class="swiper bannerSlide2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="banner-single bg-image bg-image-3-1">
                                            <div class="container">
                                                <div class="single-inner">
                                                    <div class="content-box">
                                                        <p class="slider-subtitle"><img
                                                                src="assets/images/banner/wvbo-icon.png" alt=""> Spring
                                                            summer 22 women’s collection </p>
                                                        <h2 class="slider-title"> HOT COLLECTION <br> FOR WOMEN</h2>
                                                        <div class="slider-description">
                                                            <p>Easy & safe payment with PayPal. sequines & embroidered
                                                                for all</p>
                                                        </div>
                                                        <a href="shop.html" class="slider-btn2">View Collections</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-single bg-image bg-image-3-3">
                                            <div class="container">
                                                <div class="single-inner">
                                                    <div class="content-box">
                                                        <p class="slider-subtitle"><img
                                                                src="assets/images/banner/wvbo-icon.png" alt=""> Spring
                                                            summer 22 women’s collection </p>
                                                        <h2 class="slider-title"> NEW COLLECTION <br> FOR WOMEN</h2>
                                                        <div class="slider-description">
                                                            <p>Easy & safe payment with PayPal. sequines & embroidered
                                                                for all</p>
                                                        </div>
                                                        <a href="shop.html" class="slider-btn2">View Collections</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-single bg-image bg-image-3-4">
                                            <div class="container">
                                                <div class="single-inner">
                                                    <div class="content-box">
                                                        <p class="slider-subtitle"><img
                                                                src="assets/images/banner/wvbo-icon.png" alt=""> Spring
                                                            summer 22 women’s collection </p>
                                                        <h2 class="slider-title"> WINTER DRESS <br> FOR WOMEN</h2>
                                                        <div class="slider-description">
                                                            <p>Easy & safe payment with PayPal. sequines & embroidered
                                                                for all</p>
                                                        </div>
                                                        <a href="shop.html" class="slider-btn2">View Collections</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-navigation">
                                    <div class="swiper-button-prev slider-btn prev"><i
                                            class="rt rt-arrow-left-long"></i></div>
                                    <div class="swiper-button-next slider-btn next"><i
                                            class="rt rt-arrow-right-long"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!--================= Banner Section End Here =================-->
    </header>
    <!--================= Header Section End Here =================-->

    @yield("content")
    <!--================= Footer Start Here =================-->
    <div class="footer footer-1">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 box-widget-col">
                        <div class="footer-widget footer-box-widget">
                            <div class="footer-logo"><img src="assets/images/logo1.svg" alt="footer-logo"></div>
                            <p>Solid is the information & experience
                                directed at an end-user</p>
                            <div class="quick-contact">
                                <div class="phone contact-item">
                                    <div class="icon"><svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="40px" height="40px">
                                       <defs>
                                       <filter id="Filter_0">
                                           <feFlood flood-color="rgb(238, 64, 61)" flood-opacity="1" result="floodOut" />
                                           <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
                                           <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
                                       </filter>
                                       
                                       </defs>
                                       <g filter="url(#Filter_0)">
                                       <path fill-rule="evenodd"  fill="rgb(213, 18, 67)"
                                        d="M39.333,37.332 L37.333,37.332 L37.333,39.332 C37.333,39.701 37.34,39.999 36.666,39.999 C36.298,39.999 35.999,39.701 35.999,39.332 L35.999,37.332 L27.333,37.332 C27.196,37.332 27.63,37.291 26.951,37.212 C26.649,37.1 26.576,36.585 26.787,36.284 L36.120,22.950 C36.245,22.772 36.448,22.667 36.666,22.666 C37.34,22.666 37.332,22.964 37.333,23.332 L37.333,35.999 L39.333,35.999 C39.701,35.999 39.999,36.298 39.999,36.665 C39.999,37.34 39.701,37.332 39.333,37.332 ZM35.999,25.447 L28.613,35.999 L35.999,35.999 L35.999,25.447 ZM35.805,19.137 C35.737,19.203 35.655,19.255 35.565,19.287 C35.538,19.294 35.511,19.299 35.483,19.302 C35.435,19.318 35.385,19.328 35.334,19.332 C35.328,19.332 35.322,19.332 35.315,19.332 C35.309,19.332 35.303,19.332 35.296,19.332 C35.248,19.326 35.200,19.314 35.155,19.297 C35.128,19.293 35.102,19.286 35.75,19.279 C34.973,19.237 34.883,19.172 34.813,19.87 L31.91,15.366 C30.842,15.107 30.842,14.698 31.91,14.440 C31.347,14.175 31.769,14.167 32.34,14.423 L34.634,17.23 C34.140,8.468 27.229,1.688 18.666,1.356 L18.666,3.332 C18.666,3.701 18.367,3.999 17.999,3.999 C17.631,3.999 17.333,3.701 17.333,3.332 L17.333,1.356 C8.651,1.690 1.690,8.651 1.356,17.332 L3.999,17.332 C4.367,17.332 4.666,17.631 4.666,17.999 C4.666,18.367 4.367,18.666 3.999,18.666 L1.356,18.666 C1.694,27.363 8.675,34.331 17.373,34.654 C17.373,34.654 17.373,34.654 17.373,34.654 C17.741,34.668 18.28,34.977 18.14,35.345 C18.0,35.703 17.706,35.986 17.348,35.986 L17.323,35.986 C7.670,35.627 0.25,27.706 0.9,18.46 C0.8,18.30 0.0,18.16 0.0,17.999 C0.0,17.983 0.9,17.968 0.9,17.952 C0.22,8.47 8.48,0.22 17.952,0.8 C17.969,0.7 17.983,0.0 17.999,0.0 C18.16,0.0 18.30,0.7 18.47,0.8 C27.614,0.22 35.494,7.530 35.970,17.86 L38.635,14.423 C38.893,14.174 39.303,14.174 39.561,14.423 C39.826,14.679 39.833,15.101 39.577,15.366 L35.805,19.137 ZM12.814,12.830 C13.70,12.565 13.492,12.558 13.757,12.814 L17.149,16.206 C17.690,15.964 18.308,15.964 18.849,16.206 L26.13,9.42 C26.274,8.782 26.696,8.782 26.956,9.42 C27.216,9.302 27.216,9.725 26.956,9.985 L19.799,17.142 C20.170,17.904 20.15,18.817 19.413,19.414 C18.815,20.12 17.904,20.169 17.140,19.804 C16.145,19.329 15.724,18.137 16.199,17.142 L12.814,13.756 C12.565,13.498 12.565,13.89 12.814,12.830 ZM17.528,18.470 C17.792,18.722 18.207,18.722 18.471,18.470 C18.471,18.470 18.471,18.470 18.471,18.470 C18.731,18.210 18.731,17.788 18.471,17.527 C18.210,17.267 17.788,17.267 17.528,17.527 C17.268,17.788 17.268,18.210 17.528,18.470 ZM25.733,29.193 C26.698,27.750 26.377,25.806 24.999,24.750 C24.319,24.261 23.503,23.998 22.666,23.998 C20.457,23.999 18.666,25.790 18.666,27.999 C18.666,28.367 18.367,28.666 17.999,28.666 C17.631,28.666 17.333,28.367 17.333,27.999 C17.332,26.882 17.683,25.793 18.335,24.886 C20.53,22.494 23.386,21.948 25.778,23.667 C27.745,25.154 28.205,27.920 26.825,29.963 C26.810,29.985 26.795,30.6 26.778,30.25 L19.440,38.666 L27.333,38.666 C27.701,38.666 27.999,38.964 27.999,39.332 C27.999,39.701 27.701,39.999 27.333,39.999 L17.999,39.999 C17.841,39.999 17.689,39.943 17.568,39.841 C17.288,39.602 17.253,39.182 17.491,38.901 L25.733,29.193 Z"/>
                                       </g>
                                       </svg>
                                    </div>
                                    <div class="contact-info">
                                        <span class="title">Mon - Fri: 9:00-20:00</span>
                                        <a href="tel:0020500" class="service-time info">0020 500 - CALL - 000</a>
                                    </div>
                                </div>
                                <div class="email contact-item">
                                    <div class="icon"><svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="40px" height="40px">
                                       <image  x="0px" y="0px" width="40px" height="40px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACZFBMVEXuQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3uQD3////5FZ0vAAAAynRSTlMAhJ4KFrng09QsQOTAFwek81tuh2X0kAEEEhQcl/tnCxNL7bYnBerm6/Lc5d3woZG+LSkqK53RqIDOq4qsEB0Oy6c4rczNpoLjFcqbYWoRejfhMkbpoJw17CPPhfVkfPqzbxiDyGL2CBqqStbDsDov1cW8/SAbRC4CJtnExh/SUXMDDdh0O4/JSOe077uLR1A2STlDmmxNdrJXQsfa3zOlPCgZgflen2OJ98GiTNcPIkE+rpOplWZSmZi18X15X6M/ftAJVEUMBk5/+8PqsAAAAAFiS0dEy4SzBnAAAAAHdElNRQfmCBkQECaVQTU3AAAC2ElEQVQ4y2NgwASMTMwMRAAWVjZ2Dk7C6ri4eXj5+AUECakTEhAGUSKiYuJY5SUkpUBAWkZWTh7IVGBWVFJWAQspqKIapKYOAhqnNLW0wSwdjVO6YIaaHopCfQNDMDAyNoQCEyMIbWqGolDMHJejLSxRFVrhUsiIqtDaBolja2ePpNABWR2fgSOc7eTs4OLqpgLjunt4ItTZeZ3yhrF9uH39xD391QOgfP9TgUEwueCQ0DCYZ8IjTCIdrXxF5Fyh4eceFR0TC2HGxbsj3JiQmKSR7KNkw5BiBHdjapp3OgNDRqZ2FsLX9tmeVpkMDDmJDLl5CF/nFxQaMxQVlyAFT6krr0cZg5RGeYVlJVLw8HlUMVSn1dQiFLLUZXDXM/hzMzQUNiIUNmXGNDN4tTiGtDK0QRU2tnckdnZFdfdEGSMCPJLDyyebwdKHoTe+LxoWM/1slRMmNk6aDE/jjIVBSlZ8TjoMrnIMDLERbFNgElNdo6dN7G/JgPGna3a7MzBM1gIrZJikbWYLk0lKNJ0hIwSLjorcmJlAahZUIUPt7DnwSEMGUkVz5zEgK2RIn6+0AFPdwrmFixhQFTIwLF6yFF3d5Ihl0IhEVsiwPG0FaoaSW+kOY6IoZJg3d1USUtJb3b2GAbtCBpaiAlg4M0gZrDVhwKWQYZ3uyn4Iy4ntVDkDToXro1ZZaPL4btiYukl0sxv3AlwKJ2pskWdQ2WqppVXH7wTMR6LbsCv0l22BMNLTIfT2tB1YFFbs1MxCD8dytl326Ar9itiMMGNmkcPaSlSFhjo1i7DFNbO5bgeywv7denwM2MGelUIIhXvTRBhwguAIU1VQerTcV7Ff8wADHlDJtspvgg5D+8GuQyUMeMHhXYcSCxhmn9I4sqAMCo5uVGUQn9cBTMPHZpVJMjCUBINED/RxnNJiCKuqW6sFAzpm0gzHd83dysAwYY7WCQaGkzpg4Sqz5lwAX93Ifeo2z7gAAAAASUVORK5CYII=" />
                                       </svg>
                                    </div>
                                    <div class="contact-info">
                                        <span class="title">Get Free Support</span>
                                        <a href="mailto:info@webmail.com"
                                            class="email-address info">info@webmail.com</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="social-links-footer2">
                                <li><a class="platform fb" target="_blank" href="http://facebook.com"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li><a class="platform yt" target="_blank" href="http://youtube.com"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                                <li><a class="platform ttr" target="_blank" href="http://twitter.com"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li><a class="platform lkd" target="_blank" href="http://linkedin.com"><i
                                            class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 box-widget-col2">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">About Us</h3>
                            <p class="widget-text">Elegant pink origami design three type
                                of dimensional view and decoration co
                                Great for adding a decorative touch to
                                any room’s decor.</p>
                            <a href="#0" class="getin-touch">Get In Touch <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-13 col-md-6 col-sm-6 no-gutters">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Information</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="#0">About</a></li>
                                <li class="widget-list-item"><a href="#0">FAQ's</a></li>
                                <li class="widget-list-item"><a href="#0">Wishlist</a></li>
                                <li class="widget-list-item"><a href="#0">Cart</a></li>
                                <li class="widget-list-item"><a href="#0">Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-13 col-md-6 col-sm-6 no-gutters">
                        <h3 class="footer-widget-title">My Account</h3>
                        <ul class="footer-widget">
                            <li class="widget-list-item"><a href="#0">Wishlist</a></li>
                            <li class="widget-list-item"><a href="#0">Cart</a></li>
                            <li class="widget-list-item"><a href="#0">Checkout</a></li>
                            <li class="widget-list-item"><a href="#0">My Account</a></li>
                            <li class="widget-list-item"><a href="#0">Shop</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-25 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">Get Newsletter</h3>
                        <div class="footer-widget newsletter-widget">
                            <span class="widget-text">Get 10% off your first order! Hurry up</span>
                            <div class="input-div">
                                <input type="email" placeholder="Enter email address">
                            </div>
                            <a href="#0" class="subscribe-btn">Subscribe Now <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottombar">
                    <div class="app-download">
                        <span class="download-text">Order faster with our App!</span>
                        <a href="http://appstore.com" target="_blank" class="download-store"><img
                                src="assets/images/items/appstore.jpg" alt=""></a>
                        <a href="https://play.google.com/store/apps" target="_blank" class="download-store"><img
                                src="assets/images/items/playstore.jpg" alt=""></a>
                    </div>
                    <div class="payment-methods"><img src="assets/images/footer/payment2.svg" alt="payment-methods">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-bottom-inner">
                    <span class="copyright">Copyright & Design By <a href="https://themeforest.net/user/parvinfotech" class="brand" target="_blank">Parv Infotech</a> -<script>document.write(new Date().getFullYear());</script></span>
                </div>
            </div>
        </div>
    </div>
    <!--================= Footer End Here =================-->


    <!--================= Scroll to Top Start =================-->
    <div class="scroll-top-btn scroll-top-btn1"><i class="fas fa-angle-up arrow-up"></i><i
            class="fas fa-circle-notch"></i></div>
    <!--================= Scroll to Top End =================-->

    <!--================= Jquery latest version =================-->
    <script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <!--================= Bootstrap latest version =================-->
    <script src="{{ asset('assets/js/vendors/bootstrap.min.js') }}"></script>
    <!--================= Wow.js =================-->
    <script src="{{ asset('assets/js/vendors/wow.min.js') }}"></script>
    <!--================= Swiper Slider =================-->
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <!--================= Nice Select =================-->
    <script src="{{ asset('assets/js/vendors/jquery.nice-select.js') }}"></script>
    <!--================= Zoom Plugin =================-->
    <script src="{{ asset('assets/js/vendors/zoom.js') }}"></script>
    <!--================= metisMenu Plugin =================-->
    <script src="{{ asset('assets/js/vendors/metisMenu.min.js') }}"></script>
    <!--================= Main Menu Plugin =================-->
    <script src="{{ asset('assets/js/vendors/rtsmenu.js') }}"></script>
    <!--================= Magnefic Popup Plugin =================-->
    <script src="{{ asset('assets/js/vendors/isotope.pkgd.min.js') }}"></script>
    <!--================= Magnefic Popup Plugin =================-->
    <script src="{{ asset('assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <!--================= Main Script =================-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack("sctrips")
</body>
</html>
