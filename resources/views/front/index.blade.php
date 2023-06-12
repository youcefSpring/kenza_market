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
										<a href="{{url('/login')}}" title="Log in to your customer account"><i
												class="fa fa-sign-in"></i>se connecter</a>
									</div>
									<div class="item">
										<a href="{{ url('/register')}}" title="Register Account"><i
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



		<!-- Main Content -->
		<div id="content" class="site-content">


             @extends('front.service')


			<!-- Slideshow -->
			<div class="section slideshow">
				<div class="container">
					<div class="tiva-slideshow-wrapper">
						<div id="tiva-slideshow" class="nivoSlider">
							<a href="#">
								<!-- <img class="img-responsive" src="img/slideshow/home4-slideshow-1.jpg" alt="Slideshow Image"> -->
								<img class="img-responsive" src="{{asset('front/imgs/1.png')}}" alt="Slideshow Image" width="20%">
							</a>
							<a href="#">
								<img class="img-responsive" src="{{asset('front/imgs/2.png')}}" alt="Slideshow Image" width="20%">
								<!-- <img class="img-responsive" src="img/slideshow/home4-slideshow-2.jpg" alt="Slideshow Image"> -->
							</a>
							<a href="#">
								<img class="img-responsive" src="{{asset('front/imgs/3.png')}}" alt="Slideshow Image" width="20%">
								<!-- <img class="img-responsive" src="img/slideshow/home4-slideshow-3.jpg" alt="Slideshow Image"> -->
							</a>
							<a href="#">
								<img class="img-responsive" src="{{asset('front/imgs/4.png')}}" alt="Slideshow Image" width="20%">
								<!-- <img class="img-responsive" src="img/slideshow/home4-slideshow-3.jpg" alt="Slideshow Image"> -->
							</a>
						</div>
					</div>
				</div>
			</div>




			<!-- Product - Our Products -->
			<div class="section products-block product-tab tab-2" id="produits">
				<div class="block-title">
					<div class="sub-title">Acheter votre produits </div>
					<h2 class="title">Nos <span>Categories</span></h2>
				</div>

				<div class="block-content">
					<div class="container">
						<!-- Tab Navigation -->
						<div class="tab-nav">
							<ul>
                                @php
                                $categories=\App\Models\Category::all();
                            @endphp
                            @foreach ( $categories as $c )
								<li class="active">
									<a data-toggle="tab" href="#all-products">
										<img src="{{asset('uploads/categories/'.$c->image)}}" alt="All Product">
										<span>
                                            {{ $c->nom}}
                                        </span>
									</a>
								</li>
                              @endforeach
							</ul>
						</div>


						<div class="block-title">
							<h2 class="title">Nos <span>Magasins</span></h2>
						</div>

						<!-- Tab Content -->
						<div class="tab-content">
							<!-- All Products -->
							<div role="tabpanel" class="tab-pane fade in active" id="all-products">
								<div class="products owl-theme owl-carousel">
									<div class="product-group">
                                        @php
                                            $magasins=\App\Models\Magasin::all();
                                        @endphp
                                        @foreach ( $magasins as $m )
                                        <div class="product-item" id="m".{{$m->id}}>
											<div class="product-image">
												<a href="">
													<img src="{{asset('uploads/magasins/'.$m->logo)}}" alt="Image de produit">
													<!-- <img src="img/product/4.jpg" alt="Product Image"> -->
												</a>
											</div>

											<div class="product-title">
												<a href="">
													{{ $m->nom }}
												</a>
											</div>




											<div class="product-buttons">

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
                                        @endforeach


                                    </div>

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>

			<div id="content" class="site-content">
				<div class="block-title">
					<h2 class="title">Notre <span>Contact</span></h2>
				</div>


				<div class="container" id="contact">
					<div class="contact-page">

						<div class="contact-intro">
							<p>“Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum
								auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
								nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit auctor”</p>
						</div>

						<div class="contact-form form">
							<form action="#" method="post" enctype="multipart/form-data">
								<div class="form-group row">
									<div class="col-md-6">
										<input type="text" name="name" placeholder="YOUR NAME">
									</div>

									<div class="col-md-6">
										<input type="email" name="email" placeholder="YOUR EMAIL">
									</div>
								</div>

								<div class="form-group">
									<input type="text" name="subject" placeholder="SUBJECT">
								</div>

								<div class="form-group">
									<textarea rows="10" name="content" placeholder="MESSAGE"></textarea>
								</div>

								<div class="form-group text-center">
									<input type="submit" class="btn btn-primary" value="Send Message">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>




			<!-- Intro -->
			<div class="section intro" id="nous">
				<div class="block-content">
					<div class="container">
						<div class="intro-wrap">
							<div class="row">
								<div class="col-lg-12 col-md-12 text-center">
									<div class="intro-header">
										<h3>Pour quoi nous </h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
											quis nostrud</p>
									</div>
									<div class="intro-social">
										<ul>
											<li><a href="#"><img src="{{asset('front/img/intro-social-1.png')}}" alt="Social Item"></a>
											</li>
											<li><a href="#"><img src="{{asset('front/img/intro-social-2.png')}}" alt="Social Item"></a>
											</li>
											<li><a href="#"><img src="{{asset('front/img/intro-social-3.png')}}" alt="Social Item"></a>
											</li>
											<li><a href="#"><img src="{{asset('front/img/intro-social-4.png')}}" alt="Social Item"></a>
											<li><a href="#"><img src="{{asset('front/img/intro-social-4.png')}}" alt="Social Item"></a>
											</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 top-left text-center">
									<div class="intro-item">
										<p><img src="{{asset('front/img/intro-icon-1.png')}}" alt="Intro Image"></p>
										<h4>Always Fresh</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
											incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 top-right text-center">
									<div class="intro-item">
										<p><img src="{{asset('front/img/intro-icon-2.png')}}" alt="Intro Image"></p>
										<h4>100% Natural</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
											incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 bottom-left text-center">
									<div class="intro-item">
										<p><img src="{{asset('front/img/intro-icon-3.png')}}" alt="Intro Image"></p>
										<h4>Super Healthy</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
											incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 bottom-right text-center">
									<div class="intro-item">
										<p><img src="{{asset('front/img/intro-icon-4.png')}}" alt="Intro Image"></p>
										<h4>Premium Quality</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
											incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


@extends('front.footer')
