<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images\favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{asset('css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	<!-- Get Pro Button -->
	<ul class="pro-features">
		<a class="get-pro" href="#">Get Pro</a>
		<li class="title">Pro Version Features</li>
		<li>4+ premade home pages</li>
		<li>19+ html pages</li>
		<li>Color Plate With 12+ Colors</li>
		<li>Sticky Header / Sticky Filters</li>
		<li>Quick view / Product Countdown</li>
		<div class="button">
			<a href="https://graygrids.com/item/eshop-ecommerce-html5-template/?ref=Nthemer" target="_blank" class="btn">Buy Pro Version</a>
			<a href="https://graygrids.com/item/eshop-ecommerce-html5-template/?ref=Nthemer" target="_blank" class="btn">View Details</a>
		</div>
	</ul>
	
	<!-- Header -->
	<header class="header shop">

		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-6">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="{{asset('images\logo.png')}}" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->

				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">

					<div class="row">
						
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>Danh mục sản phẩm</h3>

							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
												<li class="active"><a href="home">Home</a></li>
												<li><a href="product">Danh sách sản phẩm</a></li>												
												<li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
													<ul class="dropdown">
														<li><a href="shop-grid.html">Shop Grid</a></li>
														<li><a href="{{ route('frontend.website.cart')}}">Cart</a></li>
														<li><a href="checkout.html">Checkout</a></li>
													</ul>
												</li>
												<li>
													<li>
												<a class="nav-link" href="{{ route('shop.getCart')}}">Cart({{\Illuminate\Support\Facades\Session::get('carts') ? \Illuminate\Support\Facades\Session::get('carts')->totalQty : 0 }})</a>

													</li>
												</li>
													<ul class="dropdown">
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
	
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->
	
	<!-- Start Small Banner  -->

	<!-- End Small Banner -->