<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>58 market - Accueille -</title>

	<meta name="keywords" content="Magasin, alimentation,vote,fraudes">
	<meta name="description" content="multi market wabsite , scanne products , vote for market , report fraudes">
	<meta name="author" content="mekerri kenza">

	<!-- icon de nav de navigateur -->
	<link rel="shortcut icon" href="{{asset('front/imgs/58_logo.png')}}" type="image/png">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">

	<!--  CSS frameworks installé -->
	<link rel="stylesheet" href="{{ asset('front/libs/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('front/libs/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('front/libs/font-material/css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" href="{{ asset('front/libs/nivo-slider/css/nivo-slider.css')}}">
	<link rel="stylesheet" href="{{ asset('front/libs/nivo-slider/css/animate.css')}}">
	<link rel="stylesheet" href="{{ asset('front/libs/nivo-slider/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('front/libs/owl.carousel/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('front/libs/slider-range/css/jslider.css')}}">

	<!-- CSS de site -->
	<link rel="stylesheet" href="{{ asset('front/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('front/css/reponsive.css')}}">
</head>

<body class="home home-4">
	<div id="all">
		<!-- Header -->
		<header id="header">
			<div class="container">
				<div class="header-top">
					<div class="row align-items-center">
						<!-- Header Left -->
						<div class="col-lg-5 col-md-5 col-sm-12">
							<!-- Main Menu -->
							<div id="main-menu">
								<ul class="menu">
									<li class="dropdown">
										<a href="index.html" title="Homepage">Accé</a>

									</li>

									<li class="dropdown">
										<a href="#produits" title="Product">Produits</a>
									</li>

									<li class="dropdown">
										<a href="#nous" title="Page">A prpops</a>
									</li>

									<li class="dropdown">
										<a href="#contact">Contact</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Header Center -->
						<div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
							<!-- Logo -->
							<div class="logo">
								<a href="">
									<img class="img-responsive" src="{{asset('front/imgs/58_logo.png')}}" alt="Logo">
								</a>
							</div>

							<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
						</div>


						<!-- Header Right -->
						<div
							class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
							<!-- Search -->
							<div class="form-search">
								<form action="#" method="get">
									<input type="text" class="form-input" placeholder="Chercher">
									<button type="submit" class="fa fa-search"></button>
								</form>
							</div>

							<!-- Cart -->
							<div class="block-cart dropdown">
								<div class="cart-title">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<span class="cart-count">2</span>
								</div>

								<div class="dropdown-content">
									<div class="cart-content">
										<table>
											<tbody>
												<tr>
													<td class="product-image">
														<a href="product-detail-left-sidebar.html">
															<img src="{{asset('front/img/product/6.jpg')}}" alt="Product">
														</a>
													</td>
													<td>
														<div class="product-name">
															<a href="product-detail-left-sidebar.html">Avocats</a>
														</div>
														<div>
															1 x <span class="product-price">350 DA</span>
														</div>
													</td>
													<td class="action">
														<a class="remove" href="#">
															<i class="fa fa-trash-o" aria-hidden="true"></i>
														</a>
													</td>
												</tr>

												<tr class="total">
													<td>Total:</td>
													<td colspan="2">350 DA</td>
												</tr>

												<tr>
													<td colspan="3">
														<div class="cart-button">
															<a class="btn btn-primary" href="product-cart.html"
																title="View Cart">Cart</a>
															<a class="btn btn-primary" href="product-checkout.html"
																title="Checkout">Checkout</a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>


							<!-- My Account -->
							<div class="my-account dropdown toggle-icon">
								<div class="dropdown-toggle" data-toggle="dropdown">
									<i class="zmdi zmdi-menu"></i>
								</div>
								<div class="dropdown-menu">
									<div class="item">
										<a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>Mon
											profil</a>
									</div>
									<div class="item">
										<a href="user-login.html" title="Log in to your customer account"><i
												class="fa fa-sign-in"></i>se connecter</a>
									</div>
									<div class="item">
										<a href="user-register.html" title="Register Account"><i
												class="fa fa-user"></i>Register</a>
									</div>
									<!-- <div class="item">
											<a href="#" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
										</div> -->
									<div class="item">
										<!-- Language -->
										<div class="language switcher">
											<a href="#" title="Language FRENCH" class="active">FR</a>
											<a href="#" title="Language ENGLISH">EN</a>
											<a href="#" title="Language ARABIC">AR</a>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
