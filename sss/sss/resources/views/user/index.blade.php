@extends("user.usermaster")

@section('title')
SSS || Home

@endsection

@section('css')
	<!-- BASE CSS -->
	<link href="{{ URL::to('/') }}/user/css/bootstrap.custom.min.css" rel="stylesheet">
	<link href="{{ URL::to('/') }}/user/css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="{{ URL::to('/') }}/user/css/home_1.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="{{ URL::to('/') }}/user/css/custom.css" rel="stylesheet">
@endsection

@section('js')
<!-- COMMON SCRIPTS -->
<script src="{{ URL::to('/') }}/user/js/common_scripts.min.js"></script>
	<script src="{{ URL::to('/') }}/user/js/main.js"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ URL::to('/') }}/user/js/carousel-home.min.js"></script>
@endsection

@section('main')
<main>
			<div id="carousel-home">
				<div class="owl-carousel owl-theme">
					<div class="owl-slide cover" style="background-image: url(user/img/slides/slide_home_2.jpg);">
						<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<div class="container">
								<div class="row justify-content-center justify-content-md-end">
									<div class="col-lg-6 static">
										<div class="slide-text text-right white">
											<h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Max 720 Sage
												Low</h2>
											<p class="owl-slide-animated owl-slide-subtitle">
												Limited items available at this price
											</p>
											<div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
													href="listing-grid-4-sidebar-left.htmll" role="button">Shop Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/owl-slide-->
					<div class="owl-slide cover" style="background-image: url(img/slides/slide_home_1.jpg);">
						<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<div class="container">
								<div class="row justify-content-center justify-content-md-start">
									<div class="col-lg-6 static">
										<div class="slide-text white">
											<h2 class="owl-slide-animated owl-slide-title">Attack Air<br>VaporMax
												Flyknit 3</h2>
											<p class="owl-slide-animated owl-slide-subtitle">
												Limited items available at this price
											</p>
											<div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
													href="listing-grid-4-sidebar-left.htmll" role="button">Shop Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/owl-slide-->
					<div class="owl-slide cover" style="background-image: url(img/slides/slide_home_3.jpg);">
						<div class="opacity-mask d-flex align-items-center"
							data-opacity-mask="rgba(255, 255, 255, 0.5)">
							<div class="container">
								<div class="row justify-content-center justify-content-md-start">
									<div class="col-lg-12 static">
										<div class="slide-text text-center black">
											<h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Monarch IV SE
											</h2>
											<p class="owl-slide-animated owl-slide-subtitle">
												Lightweight cushioning and durable support with a Phylon midsole
											</p>
											<div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
													href="listing-grid-4-sidebar-left.htmll" role="button">Shop Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/owl-slide-->
					</div>
				</div>
				<div id="icon_drag_mobile"></div>
			</div>
			<!--/carousel-->

			<ul id="banners_grid" class="clearfix">
				<li>
					<a href="#0" class="img_container">
						<img src="{{ URL::to('/') }}/user/img/banners_cat_placeholder.jpg" data-src="{{ URL::to('/') }}/user/img/banner_1.jpg" alt="" class="lazy">
						<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<h3>Men's Collection</h3>
							<div><span class="btn_1">Shop Now</span></div>
						</div>
					</a>
				</li>
				<li>
					<a href="#0" class="img_container">
						<img src="{{ URL::to('/') }}/user/img/banners_cat_placeholder.jpg" data-src="{{ URL::to('/') }}/user/img/banner_2.jpg" alt="" class="lazy">
						<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<h3>Womens's Collection</h3>
							<div><span class="btn_1">Shop Now</span></div>
						</div>
					</a>
				</li>
				<li>
					<a href="#0" class="img_container">
						<img src="{{ URL::to('/') }}/user/img/banners_cat_placeholder.jpg" data-src="{{ URL::to('/') }}/user/img/banner_3.jpg" alt="" class="lazy">
						<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<h3>Kids's Collection</h3>
							<div><span class="btn_1">Shop Now</span></div>
						</div>
					</a>
				</li>
			</ul>
			<!--/banners_grid -->

			<div class="feat">
				<div class="container">
					<ul>
						<li>
							<div class="box">
								<i class="ti-gift"></i>
								<div class="justify-content-center">
									<h3>Free Shipping</h3>
									<p>For all oders over $99</p>
								</div>
							</div>
						</li>
						<li>
							<div class="box">
								<i class="ti-wallet"></i>
								<div class="justify-content-center">
									<h3>Secure Payment</h3>
									<p>100% secure payment</p>
								</div>
							</div>
						</li>
						<li>
							<div class="box">
								<i class="ti-headphone-alt"></i>
								<div class="justify-content-center">
									<h3>24/7 Support</h3>
									<p>Online top support</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!--/feat-->

			<div class="container margin_60_35">
				<div class="main_title">
					<h2>Trending Now</h2>
					<span>Products</span>
					<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> -->
				</div>
				<div class="row small-gutters">
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<!-- <span class="ribbon hot">-30%</span> -->
								<!-- <span class="ribbon new">New</span> -->
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->

			<div class="featured lazy" data-bg="url(user/img/featured_home.jpg)">
				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
					<div class="container margin_60">
						<div class="row justify-content-center justify-content-md-start">
							<div class="col-lg-6 wow" data-wow-offset="150">
								<h3>Armor<br>Air Color 720</h3>
								<p>Lightweight cushioning and durable support with a Phylon midsole</p>
								<div class="feat_text_block">
									<div class="price_box">
										<span class="new_price">$90.00</span>
										<span class="old_price">$170.00</span>
									</div>
									<a class="btn_1" href="listing-grid-4-sidebar-left.htmll" role="button">Shop Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /featured -->

			<div class="container margin_60_35">
				<div class="main_title">
					<h2>Minimum 40% off</h2>
					<span>Products</span>
					<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> -->
				</div>
				<div class="row small-gutters">
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<!-- <span class="ribbon hot">-30%</span> -->
								<!-- <span class="ribbon new">New</span> -->
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->

			<div class="container margin_60_35">
				<div class="row small-gutters categories_grid">
					<div class="col-sm-12 col-md-6">
						<a href="listing-grid-4-sidebar-left.htmll">
							<img src="{{ URL::to('/') }}/user/img/img_cat_home_1_placeholder.png" data-src="{{ URL::to('/') }}/user/img/img_cat_home_1.jpg" alt=""
								class="img-fluid lazy">
							<!-- <div class="wrapper">
								<h2>Life Style</h2>
								<p>115 Products</p>
							</div> -->
						</a>
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="row small-gutters mt-md-0 mt-sm-2">
							<div class="col-sm-6">
								<a href="listing-grid-4-sidebar-left.htmll">
									<img src="{{ URL::to('/') }}/user/img/img_cat_home_2_placeholder.png" data-src="{{ URL::to('/') }}/user/img/img_cat_home_2.jpg"
										alt="" class="img-fluid lazy">
									<!-- <div class="wrapper">
										<h2>Running</h2>
										<p>150 Products</p>
									</div> -->
								</a>
							</div>
							<div class="col-sm-6">
								<a href="listing-grid-4-sidebar-left.htmll">
									<img src="{{ URL::to('/') }}/user/img/img_cat_home_2_placeholder.png" data-src="{{ URL::to('/') }}/user/img/img_cat_home_3.jpg"
										alt="" class="img-fluid lazy">
									<!-- <div class="wrapper">
										<h2>Football</h2>
										<p>90 Products</p>
									</div> -->
								</a>
							</div>
							<div class="col-sm-12 mt-sm-2">
								<a href="listing-grid-4-sidebar-left.htmll">
									<!-- style="border-radius: 10px;" -->
									<img src="{{ URL::to('/') }}/user/img/img_cat_home_4_placeholder.png" data-src="{{ URL::to('/') }}/user/img/img_cat_home_4.jpg"
										alt="" class="img-fluid lazy">
									<!-- <div class="wrapper">
										<h2>Training</h2>
										<p>120 Products</p>
									</div> -->
								</a>
							</div>
						</div>
					</div>
				</div>
				<!--/categories_grid-->
			</div>
			<!-- /container -->

			<div class="container margin_60_35">
				<div class="main_title">

					<h2>Newly Launched</h2>
					<span>Products</span>
					<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> -->
				</div>
				<div class="row small-gutters">
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<!-- <span class="ribbon hot">-30%</span> -->
								<!-- <span class="ribbon new">New</span> -->
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->
					<div class="col-6 col-md-4 col-xl-3">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="/Productdetail">
									<img class="img-fluid lazy"
										src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										data-src="https://img2.hkrtcdn.com/14637/prd_1463611-MuscleBlaze-Biozyme-Performance-Whey-4.4-lb-Chocolate-Hazelnut_c_l.jpg"
										alt="">
									<!-- <img class="img-fluid lazy" src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_medium.jpg"
										data-src="{{ URL::to('/') }}/user/img/products/shoes/1_b.jpg" alt=""> -->
								</a>
								<!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
							</figure>
							<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
									class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
							</div>
							<a href="/Productdetail">
								<h3>Protin</h3>
							</a>
							<div class="price_box">
								<span class="new_price">₹4500</span>
								<span class="old_price">₹5000</span>
							</div>
							<ul>
								<li><a href="#sign-in-dialog" id="sign-in" class="tooltip-1" data-toggle="tooltip"
										data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add
											to
											favorites</span></a></li>

								<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
										title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
								</li>
							</ul>
						</div>
						<!-- /grid_item -->
					</div>
					<!-- /col -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->

			<div class="bg_gray">
				<div class="container margin_30">
					<div id="brands" class="owl-carousel owl-theme">
						<div class="item">
							<a href="#0"><img src="{{ URL::to('/') }}/user/img/brands/placeholder_brands.png" data-src="{{ URL::to('/') }}/user/img/brands/logo_1.png"
									alt="" class="owl-lazy"></a>
						</div><!-- /item -->
						<div class="item">
							<a href="#0"><img src="{{ URL::to('/') }}/user/img/brands/placeholder_brands.png" data-src="{{ URL::to('/') }}/user/img/brands/logo_2.png"
									alt="" class="owl-lazy"></a>
						</div><!-- /item -->
						<div class="item">
							<a href="#0"><img src="{{ URL::to('/') }}/user/img/brands/placeholder_brands.png" data-src="{{ URL::to('/') }}/user/img/brands/logo_3.png"
									alt="" class="owl-lazy"></a>
						</div><!-- /item -->
						<div class="item">
							<a href="#0"><img src="{{ URL::to('/') }}/user/img/brands/placeholder_brands.png" data-src="{{ URL::to('/') }}/user/img/brands/logo_4.png"
									alt="" class="owl-lazy"></a>
						</div><!-- /item -->
						<div class="item">
							<a href="#0"><img src="{{ URL::to('/') }}/user/img/brands/placeholder_brands.png" data-src="{{ URL::to('/') }}/user/img/brands/logo_5.png"
									alt="" class="owl-lazy"></a>
						</div><!-- /item -->
						<div class="item">
							<a href="#0"><img src="{{ URL::to('/') }}/user/img/brands/placeholder_brands.png" data-src="{{ URL::to('/') }}/user/img/brands/logo_6.png"
									alt="" class="owl-lazy"></a>
						</div><!-- /item -->
					</div><!-- /carousel -->
				</div><!-- /container -->
			</div>
			<!-- /bg_gray -->


		</main>
@endsection