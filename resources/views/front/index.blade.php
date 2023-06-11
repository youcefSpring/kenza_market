@extends('front.header')


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
								<li class="active">
									<a data-toggle="tab" href="#all-products">
										<img src="{{asset('front/img/product/product-category-0.png')}}" alt="All Product">
										<span>lait</span>
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#vegetables">
										<img src="{{asset('front/img/product/product-category-1.png')}}" alt="Vegetables">
										<span>snacks</span>
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#fruits">
										<img src="{{asset('front/img/product/product-category-2.png')}}" alt="Fruits">
										<span>fromages</span>
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#bread">
										<img src="{{asset('front/img/product/product-category-3.png')}}" alt="Bread">
										<span>cosmitic</span>
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#juices">
										<img src="{{asset('front/img/product/product-category-4.png')}}" alt="Juices">
										<span>jus</span>
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#tea">
										<img src="{{asset('front/img/product/product-category-5.png')}}" alt="Tea">
										<span>cuisine</span>
									</a>
								</li>
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
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/imgs/logo3.png')}}" alt="Image de produit">
													<!-- <img src="img/product/4.jpg" alt="Product Image"> -->
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Fresh
												</a>
											</div>


											<div class="product-price">
												<span class="sale-price">80 DA</span>
												<span class="base-price">90 DA</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/14.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/17.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/8.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$120.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/9.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star on"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/15.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star on"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/10.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/33.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/22.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/20.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/23.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/30.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="{{asset('front/img/product/21.jpg')}}" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/6.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/3.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Vegetables -->
							<div role="tabpanel" class="tab-pane fade" id="vegetables">
								<div class="products owl-theme owl-carousel">
									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/4.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/14.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/26.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/8.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$120.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/9.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star on"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/31.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star on"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/10.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/33.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/38.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/21.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/6.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/3.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/20.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/23.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/15.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Bread -->
							<div role="tabpanel" class="tab-pane fade" id="bread">
								<div class="products owl-theme owl-carousel">
									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/4.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/14.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/17.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/8.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$120.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/9.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star on"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/15.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star on"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/10.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/33.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/22.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/20.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/23.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/30.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/21.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/6.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/3.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Juices -->
							<div role="tabpanel" class="tab-pane fade" id="juices">
								<div class="products owl-theme owl-carousel">
									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/4.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/14.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/17.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/8.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$120.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/9.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star on"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/15.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star on"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/10.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/33.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/22.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/20.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/23.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/30.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/21.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/6.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/3.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Tea -->
							<div role="tabpanel" class="tab-pane fade" id="tea">
								<div class="products owl-theme owl-carousel">
									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/4.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/14.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/17.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/8.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$120.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/9.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star on"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/15.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star on"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/10.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/33.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/22.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/20.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/23.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/30.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>

									<div class="product-group">
										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/21.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$96.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/6.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>

										<div class="product-item">
											<div class="product-image">
												<a href="product-detail-left-sidebar.html">
													<img src="img/product/3.jpg" alt="Product Image">
												</a>
											</div>

											<div class="product-title">
												<a href="product-detail-left-sidebar.html">
													Organic Strawberry Fruits
												</a>
											</div>

											<div class="product-rating">
												<div class="star on"></div>
												<div class="star on"></div>
												<div class="star on "></div>
												<div class="star on"></div>
												<div class="star"></div>
											</div>

											<div class="product-price">
												<span class="sale-price">$80.00</span>
												<span class="base-price">$90.00</span>
											</div>

											<div class="product-buttons">
												<a class="add-to-cart" href="#">
													<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												</a>

												<a class="add-wishlist" href="#">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</a>

												<a class="quickview" href="#">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</a>
											</div>
										</div>
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
											<li><a href="#"><img src="img/intro-social-1.png" alt="Social Item"></a>
											</li>
											<li><a href="#"><img src="img/intro-social-2.png" alt="Social Item"></a>
											</li>
											<li><a href="#"><img src="img/intro-social-3.png" alt="Social Item"></a>
											</li>
											<li><a href="#"><img src="img/intro-social-4.png" alt="Social Item"></a>
											</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 top-left text-center">
									<div class="intro-item">
										<p><img src="img/intro-icon-1.png" alt="Intro Image"></p>
										<h4>Always Fresh</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
											incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 top-right text-center">
									<div class="intro-item">
										<p><img src="img/intro-icon-2.png" alt="Intro Image"></p>
										<h4>100% Natural</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
											incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 bottom-left text-center">
									<div class="intro-item">
										<p><img src="img/intro-icon-3.png" alt="Intro Image"></p>
										<h4>Super Healthy</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
											incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 bottom-right text-center">
									<div class="intro-item">
										<p><img src="img/intro-icon-4.png" alt="Intro Image"></p>
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
