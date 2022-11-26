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
				<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{asset('images/AdobeStock_172813720.jpeg')}});">
					<div class="container">
						<div class="row mt-5">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-12 font-weight-semibold">Presidential Message</h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="{{route('welcome')}}">Home</a></li>
									<li class="active">Pages</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row">
						<div class="col-md-7 order-2">
							<div class="overflow-hidden">
								<h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Presidents' Welcome</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<p></p>
							</div>
							<p class="lead appear-animation text-justify text-dark" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Indeed, Neurosurgeons from all parts of Africa (East, West, North, South and Central) are committed to working together to meet the important needs of Neurosurgery including populations in sub-Saharan Africa. In recent years, we are particularly pleased to see the dynamism, willingness and enthusiasm of young African doctors for Neurosurgery within CAANS.
                                This was made possible by the commitment and solidarity drive initiated by the WFNS, including Professor Madjid Samii, Founder of the “Africa 100” project, as well as the contributions of the WFNS Foundation and the many regional and continental societies to whom we express our thanks, appreciation and gratitude.</p>
							
							<hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
							<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								<div class="col-lg-6">
									{{-- <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
									<a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a> --}}
								</div>
								<div class="col-sm-6 text-lg-end my-4 my-lg-0">
									<span class="alternative-font">Bello B. Shehu</span>
								</div>
							</div>
						</div>
						<div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
							<img src="{{asset('images/President.jpeg')}}" class="img-fluid" alt="">
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
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