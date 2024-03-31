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
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap"
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
    <link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

</head>

<body data-plugin-page-transition>

    <div class="body">
        @include('partials.header')

        <div role="main" class="main">
            <section
                class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
                style="background-image: url({{ asset('images/Neurosurgery-Brain-and-Spine-surgery.jpg') }});">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-9 font-weight-bold">CAANS NEWS</h1>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb breadcrumb-light d-block text-center">
                                <li><a href="#">Home</a></li>
                                <li class="active">CAANS NEWS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <div class="container">

					<div class="row pt-5">
						<div class="col">

							<div class="row text-center pb-5">
								<div class="col-md-9 mx-md-auto">
									<div class="overflow-hidden mb-3">
										<h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation animated appear-animation-visible" data-appear-animation="maskUp">
											<span>CAANS Pan-African Journal of Neurosurgery is Comming Soon!!</span>
										</h1>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div> --}}

            <div class="container py-4">


                <div class="row">
                    <div class="col">
                        <div class="blog-posts">

                            <div class="row">
                                <div class="col-md-4">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="blog-post.html">
                                                <img src="{{asset('Picture 1.png')}}"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="">
                                            </a>
                                        </div>

                                        <div class="post-content">

                                            <h2 class="font-weight-semibold text-4 line-height-6 mt-3 mb-2"><a
                                                    href="{{route('news.presidential-address')}}">PRESIDENTIAL ADDRESS FOR THE CAANS NEWSLETTER</a></h2>
                                            <p class="text-justify">On behalf of the CAANS , I want to thank the editorial committee for coming up with the idea of a periodic newsletter, I hope it will continue with realistic regularity, showcasing the various national ,regional and continental neurosurgical societies activities.</p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">Professor B B Shehu</a>
                                                </span>

                                                <span class="d-block mt-2"><a href="{{route('news.presidential-address')}}"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>

                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="blog-post.html">
                                                <img src="{{asset('Dr Aaron.png')}}"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="">
                                            </a>
                                        </div>

                                        <div class="post-content">

                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a
                                                    href="{{route('news.editorial-comment')}}">Editorial Comment</a></h2>
                                            <p class="text-justify">The Continental Africa Association of Neurosurgical Societies (CAANS) newsletter is a publication of the society for promoting Neurosurgical work in Africa. At its 4th Congress in Kenya, the CAANS executive decided to forge ahead with the plan as per the constitution to get the publications of the association running. </p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">Dr. Aaron Musara</a>
                                                </span>
                                                <span class="d-block mt-2"><a href="{{route('news.editorial-comment')}}"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>

                                        </div>
                                    </article>
                                </div>
                                {{-- <div class="col-md-4">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="blog-post.html">
                                                <img src="img/blog/medium/blog-3.jpg"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="">
                                            </a>
                                        </div>

                                        <div class="post-content">

                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a
                                                    href="blog-post.html">Unlimited Ways</a></h2>
                                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu
                                                ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>, <a
                                                        href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12
                                                        Comments</a></span>
                                                <span class="d-block mt-2"><a href="blog-post.html"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>

                                        </div>
                                    </article>
                                </div> --}}
                                {{-- <div class="col-md-4">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="blog-post.html">
                                                <img src="img/blog/medium/blog-4.jpg"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="">
                                            </a>
                                        </div>

                                        <div class="post-content">

                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a
                                                    href="blog-post.html">Developer Life</a></h2>
                                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu
                                                ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">Jessica Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>, <a
                                                        href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12
                                                        Comments</a></span>
                                                <span class="d-block mt-2"><a href="blog-post.html"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>

                                        </div>
                                    </article>
                                </div> --}}
                                {{-- <div class="col-md-4">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="blog-post.html">
                                                <img src="img/blog/medium/blog-5.jpg"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="">
                                            </a>
                                        </div>

                                        <div class="post-content">

                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a
                                                    href="blog-post.html">The Blue Sky</a></h2>
                                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu
                                                ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>, <a
                                                        href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12
                                                        Comments</a></span>
                                                <span class="d-block mt-2"><a href="blog-post.html"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>

                                        </div>
                                    </article>
                                </div> --}}
                                {{-- <div class="col-md-4">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="blog-post.html">
                                                <img src="img/blog/medium/blog-6.jpg"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="">
                                            </a>
                                        </div>

                                        <div class="post-content">

                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a
                                                    href="blog-post.html">Night Life</a></h2>
                                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu
                                                ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>, <a
                                                        href="#">Design</a> </span>
                                                <span><i class="far fa-comments"></i> <a href="#">12
                                                        Comments</a></span>
                                                <span class="d-block mt-2"><a href="blog-post.html"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>

                                        </div>
                                    </article>
                                </div> --}}
                            </div>

                            {{-- <div class="row">
                                <div class="col">
                                    <ul class="pagination float-end">
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div> --}}

                        </div>
                    </div>

                </div>


            </div>


        </div>

        @include('partials.footer')
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
