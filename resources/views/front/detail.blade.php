@extends('front.header')

		<!-- Main Content -->
		<div id="content" class="site-content">
			<!-- Breadcrumb -->
			<div id="breadcrumb">
				<div class="container">
					<h2 class="title">Détail des produits du {{ $magasin->nom}}</h2>

					<ul class="breadcrumb">
						<li><a href="#" title="Home">Accueille</a></li>
						<li><span>Détail</span></li>
					</ul>
				</div>
			</div>

            <div class="row">

                @foreach ($magasin->produits as  $produit)
                <div class="col-md-6">
                    <div class="container">
                        <div class="product-detail">
                            <div class="products-block layout-5">
                                <div class="product-item">
                                    <div class="product-title">
                                        {{ $produit->nom}}
                                    </div>

                                    <div class="row">
                                        <div class="product-left col-md-5 col-sm-5 col-xs-12">
                                            <div class="product-image vertical">
                                                <div class="main-image">
                                                    <img class="img-responsive" src="{{ asset('uploads/produits/'.$produit->image) }}" alt="Product Image">
                                                </div>
                                                {{-- <div class="thumb-images">
                                                    <img class="img-responsive" src="img/product/33.jpg" alt="Product Image">
                                                    <img class="img-responsive" src="img/product/3.jpg" alt="Product Image">
                                                    <img class="img-responsive" src="img/product/7.jpg" alt="Product Image">
                                                    <img class="img-responsive" src="img/product/30.jpg" alt="Product Image">
                                                </div> --}}
                                            </div>
                                        </div>

                                        <div class="product-right col-md-7 col-sm-7 col-xs-12">
                                            <div class="product-info">
                                                <div class="product-price">
                                                    <span class="sale-price">{{$produit->prix_promo}} <b>DA</b></span>
                                                    <span class="base-price">{{$produit->prix}} <b>DA</b></span>
                                                </div>

                                                <div class="product-stock">
                                                    <span class="availability">Availability :
                                                        </span><i class="fa fa-check-square-o" aria-hidden="true"></i>In stock ({{$produit->quantite}})
                                                </div>

                                                {{-- <div class="product-short-description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula. Nam gravida nulla in convallis condimentum.
                                                </div> --}}



                                                <div class="product-add-to-cart border-bottom">
                                                    <div class="product-quantity">
                                                        <span class="control-label">QTY :</span>
                                                        <div class="qty">
                                                            <div class="input-group">
                                                                <input type="text" name="qty" value="1" data-min="1" id="qtyInput{{$produit->id}}">
                                                                <span class="adjust-qty">
                                                                    <span class="adjust-btn plus">+</span>
                                                                    <span class="adjust-btn minus">-</span>
                                                                </span>
                                                            </div>
                                                            <script>
                                                                // Get the quantity input element
                                                                var qtyInput = document.getElementById('qtyInput{{$produit->id}}');

                                                                // Get the plus and minus buttons
                                                                var plusBtn = document.querySelector('.adjust-btn.plus');
                                                                var minusBtn = document.querySelector('.adjust-btn.minus');

                                                                // Add click event listeners to the buttons
                                                                plusBtn.addEventListener('click', function() {
                                                                    incrementQuantity();
                                                                });

                                                                minusBtn.addEventListener('click', function() {
                                                                    decrementQuantity();
                                                                });

                                                                // Function to increment the quantity
                                                                function incrementQuantity() {
                                                                    var currentValue = parseInt(qtyInput.value);
                                                                    var minValue = parseInt(qtyInput.getAttribute('data-min'));
                                                                    var newValue = currentValue + 1;
                                                                    if (newValue >= minValue) {
                                                                        qtyInput.value = newValue;
                                                                    }
                                                                }

                                                                // Function to decrement the quantity
                                                                function decrementQuantity() {
                                                                    var currentValue = parseInt(qtyInput.value);
                                                                    var minValue = parseInt(qtyInput.getAttribute('data-min'));
                                                                    var newValue = currentValue - 1;
                                                                    if (newValue >= minValue) {
                                                                        qtyInput.value = newValue;
                                                                    }
                                                                }
                                                            </script>

                                                        </div>
                                                    </div>
{{-- <br> --}}
                                                    <div class="product-buttons" style="padding-top: 5%;">
                                                        <a class="add-to-cart" href="#">
                                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                            <span>ajouter au panier</span>
                                                        </a>
                                                    </div>
                                                </div>


                                                {{-- <div class="product-extra">
                                                    <div class="item">
                                                        <span class="control-label">Review :</span><span class="control-label">E-02154</span>
                                                    </div>
                                                    <div class="item">
                                                        <span class="control-label">Categories :</span>
                                                        <a href="#" title="Vegetables">Vegetables,</a>
                                                        <a href="#" title="Fruits">Fruits,</a>
                                                        <a href="#" title="Apple">Apple</a>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                @endforeach
            </div>






		</div>
		<br><br><br>

@extends('front.footer')
