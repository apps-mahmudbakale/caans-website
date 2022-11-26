<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CAANS | Continental Association of African Neurosurgical Societies</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo.png" type="image/png" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-corporate-7.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

</head>

<body data-plugin-page-transition>
    <div class="body">
        <header id="header"
            class="header-transparent header-transparent-dark-bottom-border header-transparent-dark-bottom-border-1 header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0 bg-dark box-shadow-none">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="{{ route('welcome') }}">
                                        <img alt="Porto" width="82" height="40"
                                            src="{{ asset('images/b3a79706-a1fc-4102-ac81-797f7c96adeb.jpeg') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div
                                    class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                    <div
                                        class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown">
                                                    <a class="dropdown-item active" href="{{ route('welcome') }}">
                                                        Home
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item " href="">
                                                        About Caans
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="#">
                                                        Presidential Message
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#">
                                                        Caans Members
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Contact Us</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="contact-us-advanced.php">Contact Us -
                                                                        Advanced</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="contact-us.html">Contact Us - Basic</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="contact-us-recaptcha.html">Contact Us -
                                                                        Recaptcha</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">About Us</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="about-us-advanced.html">About Us -
                                                                        Advanced</a></li>
                                                                <li><a class="dropdown-item" href="about-us.html">About
                                                                        Us - Basic</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="about-me.html">About Me</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Layouts</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="page-full-width.html">Full Width</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="page-left-sidebar.html">Left Sidebar</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="page-right-sidebar.html">Right
                                                                        Sidebar</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="page-left-and-right-sidebars.html">Left
                                                                        and Right Sidebars</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="page-sticky-sidebar.html">Sticky
                                                                        Sidebar</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="page-secondary-navbar.html">Secondary
                                                                        Navbar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Extra</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="page-404.html">404
                                                                        Error</a></li>
                                                                <li><a class="dropdown-item" href="page-500.html">500
                                                                        Error</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="page-coming-soon.html">Coming Soon</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="page-maintenance-mode.html">Maintenance
                                                                        Mode</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="page-search-results.html">Search
                                                                        Results</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="sitemap.html">Sitemap</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Team</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="page-team-advanced.html">Team -
                                                                        Advanced</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="page-team.html">Team - Basic</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Services</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="page-services.html">Services - Version
                                                                        1</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="page-services-2.html">Services - Version
                                                                        2</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="page-services-3.html">Services - Version
                                                                        3</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="page-custom-header.html">Custom Header</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="page-careers.html">Careers</a></li>
                                                        <li><a class="dropdown-item" href="page-faq.html">FAQ</a></li>
                                                        <li><a class="dropdown-item" href="page-login.html">Login /
                                                                Register</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="page-user-profile.html">User Profile</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="#">
                                                        Events
                                                    </a>

                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="#">
                                                        Journals
                                                    </a>

                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#">
                                                        News
                                                    </a>
                                                </li>
                                                {{-- <li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Membership
														</a>
														<ul class="dropdown-menu">
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Single Product</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="shop-product-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="shop-product-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-product-sidebar-right.html">Right Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-product-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li><a class="dropdown-item" href="shop-4-columns.html">4 Columns</a></li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">3 Columns</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="shop-3-columns-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="shop-3-columns-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-3-columns-sidebar-right.html">Right Sidebar </a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">2 Columns</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="shop-2-columns-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="shop-2-columns-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-2-columns-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="shop-2-columns-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">1 Column</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" href="shop-1-column-full-width.html">Full Width</a></li>
																	<li><a class="dropdown-item" href="shop-1-column-sidebar-left.html">Left Sidebar</a></li>
																	<li><a class="dropdown-item" href="shop-1-column-sidebar-right.html">Right Sidebar </a></li>
																	<li><a class="dropdown-item" href="shop-1-column-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
																</ul>
															</li>
															<li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
															<li><a class="dropdown-item" href="shop-login.html">Login</a></li>
															<li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
															<li><a class="dropdown-item" href="shop-order-complete.html">Order Complete</a></li>
														</ul>
													</li> --}}
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="#">
                                                        Contact
                                                    </a>

                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                        data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">
            <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs dots-light nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
                data-plugin-options="{'autoplayTimeout': 9000}" style="height: 100vh;">
                <div class="owl-stage-outer">
                    <div class="owl-stage">

                        <!-- Carousel Slide 1 -->
                        <div class="owl-item position-relative overlay overlay-show overlay-op-9 pt-5"
                            style="background-image: url({{ asset('images/NeuroSurgery.jpg') }}); background-size: cover; background-position: center; height: 100vh;">
                            <div class="container position-relative z-index-3 h-100">
                                <div class="row justify-content-center align-items-center h-100">
                                    <div class="col-lg-7 text-center">
                                        <div
                                            class="d-flex flex-column align-items-center justify-content-center h-100">
                                            <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-1 appear-animation"
                                                data-appear-animation="fadeInDownShorterPlus"
                                                data-plugin-options="{'minWindowWidth': 0}">
                                                <span
                                                    class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                                    <img src="img/slides/slide-title-border-light.png"
                                                        class="w-auto appear-animation"
                                                        data-appear-animation="fadeInRightShorter"
                                                        data-appear-animation-delay="250"
                                                        data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                                </span>
                                                Welcome to the
                                                <span
                                                    class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                                    <img src="img/slides/slide-title-border-light.png"
                                                        class="w-auto appear-animation"
                                                        data-appear-animation="fadeInLeftShorter"
                                                        data-appear-animation-delay="250"
                                                        data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                                </span>
                                            </h3>
                                            <h1 class="text-color-light font-weight-extra-bold text-10 text-sm-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation"
                                                data-appear-animation="blurIn" data-appear-animation-delay="500"
                                                data-plugin-options="{'minWindowWidth': 0}"
                                                style="font-size: 2.4rem !important; letter-spacing: 5px;">Continental
                                                Association of African Neurosurgical Societies</h1>
                                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="2300">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Slide 2 -->
                        <div class="owl-item position-relative overlay overlay-show overlay-op-9 pt-5"
                            style="background-image: url({{ asset('images/Neurosurgery-Brain-and-Spine-surgery.jpg') }}); background-size: cover; background-position: center; height: 100vh;">
                            <div class="container position-relative z-index-3 h-100">
                                <div class="row justify-content-center align-items-center h-100">
                                    <div class="col-lg-7 text-center">
                                        <div
                                            class="d-flex flex-column align-items-center justify-content-center h-100">
                                            <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation"
                                                data-appear-animation="fadeInDownShorterPlus"
                                                data-plugin-options="{'minWindowWidth': 0}">
                                                <span
                                                    class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                                    <img src="img/slides/slide-title-border-light.png"
                                                        class="w-auto appear-animation"
                                                        data-appear-animation="fadeInRightShorter"
                                                        data-appear-animation-delay="250"
                                                        data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                                </span>
                                                Our ByLaws
                                                <span
                                                    class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                                    <img src="img/slides/slide-title-border-light.png"
                                                        class="w-auto appear-animation"
                                                        data-appear-animation="fadeInLeftShorter"
                                                        data-appear-animation-delay="250"
                                                        data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                                </span>
                                            </h3>
                                            <h1 class="text-color-light font-weight-extra-bold text-10 text-md-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation"
                                                data-appear-animation="blurIn" data-appear-animation-delay="500"
                                                data-plugin-options="{'minWindowWidth': 0}"
                                                style="font-size: 2.4rem !important; letter-spacing: 5px;">CAANS Bylaws
                                                & Constitution</h1>
                                            <p></p>
                                            <a href="#"
                                                class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1800"
                                                data-plugin-options="{'minWindowWidth': 0}">LEARN MORE<i
                                                    class="fas fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel Slide 3 -->
                        <div class="owl-item position-relative overlay overlay-show overlay-op-9 pt-5"
                            style="background-image: url({{ asset('images/download.jpeg') }}); background-size: cover; background-position: center; height: 100vh;">
                            <div class="container position-relative z-index-3 h-100">
                                <div class="row justify-content-center align-items-center h-100">
                                    <div class="col-lg-7 text-center">
                                        <div
                                            class="d-flex flex-column align-items-center justify-content-center h-100">
                                            <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-1 appear-animation"
                                                data-appear-animation="fadeInDownShorterPlus"
                                                data-plugin-options="{'minWindowWidth': 0}">
                                                <span
                                                    class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                                    <img src="img/slides/slide-title-border-light.png"
                                                        class="w-auto appear-animation"
                                                        data-appear-animation="fadeInRightShorter"
                                                        data-appear-animation-delay="250"
                                                        data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                                </span>
                                                Congress
                                                <span
                                                    class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                                    <img src="img/slides/slide-title-border-light.png"
                                                        class="w-auto appear-animation"
                                                        data-appear-animation="fadeInLeftShorter"
                                                        data-appear-animation-delay="250"
                                                        data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                                </span>
                                            </h3>
                                            <h1 class="text-color-light font-weight-extra-bold text-10 text-sm-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation"
                                                data-appear-animation="blurIn" data-appear-animation-delay="500"
                                                data-plugin-options="{'minWindowWidth': 0}"
                                                style="font-size: 2.4rem !important; letter-spacing: 5px;">
                                                4<sup>th</sup> CAAN Congress</h1>
                                            <p></p>
                                            <a href="#"
                                                class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-4 appear-animation"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1800"
                                                data-plugin-options="{'minWindowWidth': 0}">LEARN MORE<i
                                                    class="fas fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev"></button>
                    <button type="button" role="presentation" class="owl-next"></button>
                </div>
                <div class="owl-dots mb-5">
                    <button role="button" class="owl-dot active"><span></span></button>
                    <button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot"><span></span></button>
                </div>
            </div>

            <div class="container py-4">
                <div class="row pt-4 mt-5">
                    <h4 class="text-color-dark text-center text-5 line-height-5 font-weight-medium">Welcome to CAANS
                    </h4>
                    <p class="text-justify text-dark" style="line-height: 2.8">
                        The purpose of this Association shall be to promote the neurological health of people living in
                        the continent of African through the advancement of neurological surgery in all of its aspects
                        by:
                        The purpose of this Association shall be to promote the neurological health of people living in
                        the continent of African through the advancement of neurological surgery in all of its aspects
                        by:

                        Facilitating the personal and collegial association and development of neurological surgeons
                        throughout Africa,

                        Aiding in the exchange and dissemination of knowledge and ideas In the field of neurological
                        surgery,

                        Encouraging research in neurological surgery and in allied sciences.

                        Addressing issues of neurosurgical demography, and Promoting, implementing and improving minimum
                        and higher standards of neurosurgical care and training in Africa.
                    </p>
                    <h4 class="text-color-dark text-center text-5 line-height-5 font-weight-medium">Means of Achieving Purposes.
                    </h4>
                    <p class="text-justify text-dark" style="line-height: 2.8">
                        A primary means of achieving these purposes shall be the holding of a Continental Congress of Neurological Surgery (hereafter designated as the ''Congress''), usually at intervals of two years, except that the time of the Congress may be determined at the discretion of the Executive Committee.
                    </p>
                    <h4 class="text-color-dark text-center text-5 line-height-5 font-weight-medium">Other Activities.
                    </h4>
                    <p class="text-justify text-dark" style="line-height: 2.8">
                        The Association may engage in such other activities as are appropriate to its purpose at the discretion of the Executive Committee. The Association may embark on the establishment of specific Foundations to accomplish its purpose.
                    </p>
                    <h2 class="text-center gradient-text-color font-weight-bold m-0">The Association is a not-for-profit, organization.</h2>
                </div>
                <div class="row pb-5 mb-5 mt-3">
                   
                </div>
            </div>

            <section class="section section-secondary border-0 py-0 m-0 appear-animation"
                data-appear-animation="fadeIn">
                <div class="container">
                    <div class="row align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                        <div class="col-lg-5 order-2 order-lg-1 pt-4 pt-lg-0 pb-5 pb-lg-0 mt-5 mt-lg-0 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                            <h2 class="font-weight-bold text-color-light text-7 mb-2">Who We Are</h2>
                            <p class="lead font-weight-light text-color-light text-4">The goal of this Association is to enhance neurological surgery in all of its manifestations in order to improve the neurological health of those residing on the African continent.</p>
                            <p class="font-weight-light text-color-light text-2 mb-4 opacity-7">Aiding in the interchange and diffusion of knowledge and ideas in the field of neurological surgery, and facilitating the personal and professional interaction and development of neurological surgeons throughout Africa</p>
                            <a href="#" class="btn btn-dark-scale-2 btn-px-5 btn-py-2 text-2">LEARN MORE</a>
                        </div>
                        <div class="col-9 offset-lg-1 col-lg-5 order-1 order-lg-2 scale-2">
                            <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{asset('images/b3a79706-a1fc-4102-ac81-797f7c96adeb.jpeg')}}"
                                alt="">
                        </div>
                    </div>
                </div>
            </section>

            {{-- <section class="section section-height-4 bg-color-grey-scale-1 border-0 m-0 pb-5">
                <div class="container">
                    <div class="row justify-content-center my-4">
                        <div class="col appear-animation" data-appear-animation="fadeInUpShorter">
                            <div class="owl-carousel owl-theme nav-bottom rounded-nav"
                                data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
                                <div>
                                    <div class="col">
                                        <div
                                            class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                            <div class="testimonial-author">
                                                <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle"
                                                    alt="">
                                            </div>
                                            <blockquote>
                                                <p class="text-color-dark text-5 line-height-5">Your time is limited,
                                                    so don’t waste it living someone else’s life. Don’t be trapped by
                                                    dogma - which is living with the results of other people’s thinking.
                                                    Don’t let the noise of others’ opinions drown out your own inner
                                                    voice.</p>
                                            </blockquote>
                                            <div class="testimonial-author">
                                                <p class="opacity-10"><strong class="font-weight-extra-bold text-2">-
                                                        John Smith. Okler</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="col">
                                        <div
                                            class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                            <div class="testimonial-author">
                                                <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle"
                                                    alt="">
                                            </div>
                                            <blockquote>
                                                <p class="text-color-dark text-5 line-height-5">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt
                                                    turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor
                                                    sit amet, consectetur adipiscing elit. Sociis natoque penatibus et
                                                    magnis dis parturient montes, nascetur ridiculus mus. Fusce ante
                                                    tellus, convallis non consectetur sed, pharetra nec ex.</p>
                                            </blockquote>
                                            <div class="testimonial-author">
                                                <p class="opacity-10"><strong class="font-weight-extra-bold text-2">-
                                                        John Smith. Okler</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="col">
                                        <div
                                            class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                            <div class="testimonial-author">
                                                <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle"
                                                    alt="">
                                            </div>
                                            <blockquote>
                                                <p class="text-color-dark text-5 line-height-5">Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt
                                                    turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor
                                                    sit amet, consectetur adipiscing elit.</p>
                                            </blockquote>
                                            <div class="testimonial-author">
                                                <p class="opacity-10"><strong class="font-weight-extra-bold text-2">-
                                                        John Smith. Okler</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <div class="container">
                <div class="row py-5 my-5">
                    <div class="col">

                        <div class="owl-carousel owl-theme mb-0"
                            data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                            <div>
                                <img class="img-fluid opacity-2" src="img/logos/logo-1.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="img/logos/logo-3.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="img/logos/logo-5.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="img/logos/logo-6.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <footer id="footer" class="mt-0">
            <div class="container my-4">
                <div class="row py-5">
                    <div class="col-md-5 col-lg-3 mb-5 mb-lg-0">
                        <h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Contact
                            Details</h5>
                        <p class="text-4 mb-1">Address</p>
                        {{-- <p class="text-4 mb-4 pb-1">Porto Blvd, Suite</p> --}}

                        <p class="text-5 mb-1 pt-2">Call: <a href="tel:1234567890"
                                class="text-decoration-none">123-456-7890</a></p>
                        <p class="text-5 mb-0">Email: <a href="info@africa-caans.org">info@africa-caans.org</a></p>
                    </div>
                    <div class="col-md-7 col-lg-5 mb-5 mb-lg-0">
                        
                    </div>
                    <div class="col-lg-4">
                        <h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter
                        </h5>
                        <p class="text-4 mb-1">Get all the latest informationon and News.</p>
                        <p class="text-4">Sign up for newsletter today.</p>
                        <div class="alert alert-success d-none" id="newsletterSuccess">
                            <strong>Success!</strong> You've been added to our email list.
                        </div>
                        <div class="alert alert-danger d-none" id="newsletterError"></div>
                        <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST"
                            class="mw-100">
                            <div class="input-group input-group-rounded">
                                <input class="form-control form-control-sm bg-light px-4 text-3"
                                    placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail"
                                    type="email">
                                <button class="btn btn-primary text-color-light text-2 py-3 px-4"
                                    type="submit"><strong>SUBSCRIBE!</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-copyright footer-copyright-style-2">
                <div class="container py-2">
                    <div class="row py-4">
                        <div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                            <p>© Copyright 2022. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/lazysizes/lazysizes.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

</body>

</html>
