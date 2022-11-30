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
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

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
				<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5" style="background-image: url({{asset('images/AdobeStock_172813720.jpeg')}});">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1><strong>Member Society</strong></h1>
								<span class="sub-title">We are proud to introduce you to our Members.</span>
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb breadcrumb-light d-block text-md-end">
									<li><a href="{{route('welcome')}}">Home</a></li>
									<li class="active">Member Society</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

                    <div class="row team-list sort-destination">
                        @foreach ($regions as $region)
                        <div class="col-12 col-sm-4 col-lg-4">
                            <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                                <span class="thumb-info-wrapper">
                                    <a href="members-society/{{$region->slug}}">
                                        <img src="{{asset('Country/Africa.jpg')}}" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{{strtoupper($region->name)}}</span>
                                        </span>
                                    </a>
                                </span>
                            </span>
                        </div>
                        @endforeach
                       
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

		<!-- Circle Flip Slideshow Script -->
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<!-- Current Page Views -->
		<script src="js/views/view.home.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>