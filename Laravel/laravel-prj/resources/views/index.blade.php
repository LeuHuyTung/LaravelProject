@extends('layouts.app')
@section('content')
    <!--================= Offer Section Start Here =================-->
    <div class="rts-offer-section">
        <div class="container">
            <div class="rts-offer-inner">
                <p class="description">Super discount for your 100$ purchase. Use this code <a href="shop.html">OFFER100</a>
                </p>
            </div>
        </div>
    </div>
    <!--================= Offer Section End Here =================-->

    <!--================= New Collection Section Start Here =================-->
    <div class="rts-new-collection-section section-gap">
        <div class="container">
            <div class="recent-products-header section-header">
            </div>
            <div class="swiper rts-cmmnSlider-over" data-swiper="pagination">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="collection-item">
                            <a href="category.html"><img src="{{asset ('assets/images/catagory/item-1.png')}}" alt="collection-image">
                            </a>
                            <p class="item-quantity">20 <span>items</span></p>
                            <a href="category.html" class="item-catagory-box">
                                <h3 class="title">FOR WOMEN'S</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item">
                            <a href="category.html"><img src="{{asset ('assets/images/catagory/item-2.png')}}" alt="collection-image">
                            </a>
                            <p class="item-quantity">33 <span>items</span></p>
                            <a href="category.html" class="item-catagory-box">
                                <h3 class="title">FOR MAN'S</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item">
                            <a href="category.html"><img src="{{asset ('assets/images/catagory/item-3.png')}}" alt="collection-image">
                            </a>
                            <p class="item-quantity">25 <span>items</span></p>
                            <a href="category.html" class="item-catagory-box">
                                <h3 class="title">FOR KIDS</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item">
                            <a href="category.html"><img src="{{asset ('assets/images/catagory/item-4.png')}}" alt="collection-image">
                            </a>
                            <p class="item-quantity">33 <span>items</span></p>
                            <a href="category.html" class="item-catagory-box">
                                <h3 class="title">ACCESORIES</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= New Collection Section End Here =================-->

    <!--================= Hand Picked Section Start Here =================-->
    <div class="rts-hand-picked-products-section">
        <div class="container">
            <div class="section-header section-header3 text-center">
                <div class="wrapper">
                    <div class="sub-content">
                        <img class="line-1" src="{{asset ('assets/images/banner/wvbo-icon.png')}}" alt="">
                        <span class="sub-text">Featured</span>
                        <img class="line-2" src="{{asset ('assets/images/banner/wvbo-icon.png')}}" alt="">
                    </div>
                    <h2 class="title">HAND-PICKED PRODUCT</h2>
                </div>
            </div>
            <div class="slider-div">
                <div class="swiper rts-sixSlide-over">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img8.webp')}}" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img8_1.webp')}}" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Underarm Smoothing Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img11.webp')}}" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img11_1.webp')}}" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Bali Underwire Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img1.jpg')}}" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img1-1.jpg')}}" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Bali Underwire Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img13.webp')}}" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img13-1.webp')}}" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Bali Underwire Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img7.webp')}}" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img7_1.webp')}}" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Maidenform Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                                <div class="product-features">
                                    <div class="discount-tag product-tag">-38%</div>
                                    <div class="new-tag product-tag">HOT</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item element-item1">
                                <a href="product-details.html" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img9.webp')}}" alt="product-image">
                                    </div>
                                    <div class="image-vari2 image-vari"><img
                                            src="{{asset ('assets/images/hand-picked/slider-img9_1.webp')}}" alt="product-image">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <a href="product-details.html" class="product-name">Champion Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Hand Picked Section End Here =================-->


    <!--================= Deal Section Start Here =================-->
    <div class="rts-deal-section1">
        <div class="container">
            <div class="section-inner">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"></div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="single-inner">
                            <div class="content-box">
                                <div class="sub-content">
                                    <img class="line-1" src="{{asset ('assets/images/banner/wvbo-icon.png')}}" alt="">
                                    <span class="sub-text">Deal Of The Week</span>
                                </div>
                                <h2 class="slider-title">Roland Grand White <br> short T-shirt </h2>
                                <div class="slider-description">
                                    <p>Our intent and our actions have always been informed by progress. We
                                        look at an impact report as a way to measure.</p>
                                </div>
                                <div class="countdown" id="countdown">
                                    <ul>
                                        <li><span id="days"></span>D</li>
                                        <li><span id="hours"></span>H</li>
                                        <li><span id="minutes"></span>M</li>
                                        <li><span id="seconds"></span>S</li>
                                    </ul>
                                </div>
                                <div class="content-bottom">
                                    <div class="img-box"><img src="{{asset ('assets/images/hand-picked/deal-icon.png')}}" alt="">
                                    </div>
                                    <p class="content">Limited time offer. The deal will expires <br>
                                        on November 12, 2025 HURRY UP!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Deal Section End Here =================-->


    <!--================= Featured Product Section Start Here =================-->
    <div class="rts-featured-product-section1">
        <div class="container">
            <div class="rts-featured-product-section-inner">
                <div class="section-header section-header3 text-center">
                    <div class="wrapper">
                        <div class="sub-content">
                            <img class="line-1" src="{{asset ('assets/images/banner/wvbo-icon.png')}}" alt="">
                            <span class="sub-text">Featured</span>
                            <img class="line-2" src="{{asset ('assets/images/banner/wvbo-icon.png')}}" alt="">
                        </div>
                        <h2 class="title">FEATURED PRODUCT</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="product-details.html" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{asset ('assets/images/hand-picked/slider-img13-1.webp')}}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{asset ('assets/images/hand-picked/slider-img13.webp')}}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <div class="star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <a href="product-details.html" class="product-name">Girl's Sport Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="product-details.html" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{asset ('assets/images/hand-picked/slider-img14.webp')}}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{asset ('assets/images/hand-picked/slider-img14-1.webp')}}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <div class="star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <a href="product-details.html" class="product-name">Girl's Sport Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item2">
                            <a href="product-details.html" class="product-image image-slider-variations">
                                <div class="swiper productSlide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari"><img
                                                    src="{{asset ('assets/images/hand-picked/slider-img12-1.webp')}}"
                                                    alt="product-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-vari2 image-vari"><img
                                                    src="{{asset ('assets/images/hand-picked/slider-img11_1.webp')}}"
                                                    alt="product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-buttons">
                                    <div class="button-prev slider-btn"><i class="rt-arrow-left-long"></i></div>
                                    <div class="button-next slider-btn"><i class="rt-arrow-right-long"></i></div>
                                </div>
                            </a>
                            <div class="bottom-content">
                                <div class="star-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <a href="product-details.html" class="product-name">Maidenform Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="product-details.html" class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari"><img
                                        src="{{asset ('assets/images/hand-picked/slider-img12.webp')}}" alt="product-image">
                                </div>
                                <div class="image-vari2 image-vari"><img
                                        src="{{asset ('assets/images/hand-picked/slider-img12-3.webp')}}" alt="product-image">
                                </div>
                            </a>
                            <div class="bottom-content">
                                <div class="star-rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <a href="product-details.html" class="product-name">Hanes Women's Bra</a>
                                <div class="action-wrap">
                                    <span class="price">$31.00</span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                </div>
                            </div>
                            <div class="product-features">
                                <div class="discount-tag product-tag">-38%</div>
                                <div class="new-tag product-tag">HOT</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Featured Product Section End Here =================-->


    <!--================= Posters Section Start Here =================-->
    <div class="rts-posters-section1">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                    <a href="product-details.html" class="product-box product-box-medium product-box-medium5">
                        <div class="contents">
                            <span class="pretitle">50% Offer</span>
                            <h1 class="product-title">Last call for up <br> to 30% off</h1>
                            <div class="view-collections go-btn">VIEW COLLECTIONS <i class="rt-arrow-right-long"></i>
                            </div>
                        </div>
                        <div class="product-thumb"><img src="{{asset ('assets/images/featured/pot.png')}}" alt="product-thumb">
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-12 col-sm-12 col-12 last-child">
                    <a href="product-details.html" class="product-box product-box-medium mid">
                        <div class="contents">
                            <span class="pretitle">-45% Offer</span>
                            <h1 class="product-title">SUMMER COLLECTION</h1>
                            <p>Don't miss the last opportunity</p>
                        </div>
                        <div class="product-thumb product-thumb1"><img src="{{asset ('assets/images/products/dress.png')}}"
                                alt="product-thumb"></div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                    <a href="product-details.html" class="product-box product-box-medium product-box-medium3">
                        <div class="contents">
                            <span class="pretitle">SUMMER DRESS</span>
                            <h1 class="product-title">BEST COLLECTION</h1>
                            <div class="view-collections go-btn">Shop Now <i class="rt-arrow-right-long"></i></div>
                        </div>
                        <div class="product-thumb"><img src="{{asset ('assets/images/featured/3rd-image.png')}}"
                                alt="product-thumb"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--================= Posters Section End Here =================-->


    <!--================= Brand Section Start Here =================-->
    <div class="rts-brands-section1 brand-bg3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="slider-div">
                        <div class="swiper rts-brandSlide1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="{{asset ('assets/images/brands/client-01.png')}}"
                                            alt="Brand Logo"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="{{asset ('assets/images/brands/client-02.png')}}"
                                            alt="Brand Logo"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="{{asset ('assets/images/brands/client-03.png')}}"
                                            alt="Brand Logo"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="{{asset ('assets/images/brands/client-04.png')}}"
                                            alt="Brand Logo"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="{{asset ('assets/images/brands/client-05.png')}}"
                                            alt="Brand Logo"></a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-front" href="#"><img src="{{asset ('assets/images/brands/client-06.png')}}"
                                            alt="Brand Logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Brand Section End Here =================-->


    <!--================= Featured Product Section Start Here =================-->
    <div class="rts-featured-product-section3">
        <div class="container">
            <div class="rts-featured-product-section-inner">
                <div class="section-header section-header3 text-center">
                    <div class="wrapper">
                        <div class="sub-content">
                            <img class="line-1" src="{{asset ('assets/images/banner/wvbo-icon.png')}}" alt="">
                            <span class="sub-text">Featured</span>
                            <img class="line-2" src="{{asset ('assets/images/banner/wvbo-icon.png')}}" alt="">
                        </div>
                        <h2 class="title">FEATURED PRODUCT</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-1">
                            <div class="image-part">
                                <a href="#" class="image"><img src="{{asset ('assets/images/featured/img-1.jpg')}}" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">Once that’s determined with a good, you need to come up with a name</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{asset ('assets/images/featured/author.png')}}" alt="Author Image"></div>
                                    <div class="info">
                                        <p class="author-name">PARV INFOTECH</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-2">
                            <div class="image-part">
                                <a href="#" class="image"><img src="{{asset ('assets/images/featured/img-2.jpg')}}" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">Once determined, you need to come up with a name a legal structure</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{asset ('assets/images/featured/author.png')}}" alt="Author Image"></div>
                                    <div class="info">
                                        <p class="author-name">PARV INFOTECH</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-3">
                            <div class="image-part">
                                <a href="#" class="image"><img src="{{asset ('assets/images/featured/img-3.jpg')}}" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title">
                                    <a href="#">At the limit, statically generated, edge delivered a food</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{asset ('assets/images/featured/author.png')}}" alt="Author Image"></div>
                                    <div class="info">
                                        <p class="author-name">PARV INFOTECH</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Featured Product Section End Here =================-->


    <!--================= Newsletter Popup Start Here =================-->
    <div class="rts-newsletter-popup">
        <div class="newsletter-close-btn"><i class="fal fa-times"></i></div>
        <div class="newsletter-inner">
            <h3 class="newsletter-heading">Get Weekly Newsletter</h3>
            <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack
                PS23. It is a completely modern design</p>
            <form>
                <div class="input-area">
                    <div class="input-div"><input type="text" placeholder="Your name">
                        <div class="input-icon"><i class="far fa-user"></i></div>
                    </div>
                    <div class="input-div"><input type="email" placeholder="Email address" required>
                        <div class="input-icon"><i class="far fa-envelope"></i></div>
                    </div>
                </div>
                <button type="submit" class="subscribe-btn">Subscribe Now <i
                        class="fal fa-long-arrow-right ml--5"></i></button>
            </form>
        </div>
    </div>
    <!--================= Newsletter Popup End Here =================-->


    <!--================= Product-details Section Start Here =================-->
    <div class="product-details-popup-wrapper">
        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
            <div class="product-details-popup">
                <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
                <div class="details-product-area">
                    <div class="product-thumb-area">
                        <div class="cursor"></div>
                        <div class="thumb-wrapper one filterd-items figure">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url(assets/images/products/product-details.jpg)"><img
                                    src="{{asset ('assets/images/products/product-details.jpg')}}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url(assets/images/products/product-filt2.jpg)"><img
                                    src="{{asset ('assets/images/products/product-filt2.jpg')}}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url(assets/images/products/product-filt3.jpg)"><img
                                    src="{{asset ('assets/images/products/product-filt3.jpg')}}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img
                                    src="{{asset ('assets/images/products/product-filt1.jpg')}}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img
                                    src="{{asset ('assets/images/products/product-filt2.jpg')}}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img
                                    src="{{asset ('assets/images/products/product-filt3.jpg')}}" alt="product-thumb-filter"></div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Dress</span>
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                <span>10 Reviews</span>
                            </div>
                        </div>
                        <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                        <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                        <p>
                            Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                            completely modern design and you feel comfortable to put on this hijab.
                            Buy it at the best price.
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01" />
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="cart.html" class="addto-cart-btn action-item"><i class="rt-basket-shopping"></i>
                                Add To
                                Cart</a>
                            <a href="wishlist.html" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                        </div>
                        <div class="product-uniques">
                            <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                            <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                            <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                        </div>
                        <div class="share-social">
                            <span>Share:</span>
                            <a class="platform" href="http://facebook.com" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="http://twitter.com" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="platform" href="http://behance.com" target="_blank"><i
                                    class="fab fa-behance"></i></a>
                            <a class="platform" href="http://youtube.com" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="platform" href="http://linkedin.com" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Product-details Section End Here =================-->
@endsection