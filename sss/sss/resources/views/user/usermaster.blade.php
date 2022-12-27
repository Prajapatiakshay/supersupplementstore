<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Ansonika">
	<title>@yield('title')</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="{{ URL::to('/') }}/user/img/fevicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{ URL::to('/') }}/user/img/fevicon.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ URL::to('/') }}/user/img/fevicon.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ URL::to('/') }}/user/img/fevicon.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ URL::to('/') }}/user/img/fevicon.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    @yield('css')



</head>

<body>

	<div id="page">

		<header class="version_1">
			<div class="layer"></div><!-- Mobile menu overlay mask -->
			<div class="main_header">
				<div class="container">
					<div class="row small-gutters">
						<div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
							<div id="logo">
								<a href="/"><img src="{{ URL::to('/') }}/user/img/logo.png" alt="" style="width:auto;height:66px;"></a>
							</div>
						</div>
						<nav class="col-xl-6 col-lg-7">
							<a class="open_close" href="javascript:void(0);">
								<div class="hamburger hamburger--spin">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</div>
							</a>
							<!-- Mobile menu button -->
							<div class="main-menu">
								<div id="header_menu">
									<a href="/"><img src="{{ URL::to('/') }}/user/img/logo_black.svg" alt="" width="100"
											height="35"></a>
									<a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
								</div>
								<ul>
									<li>
										<a href="/" class="show-submenu">Home</a>
									</li>
									<li class="megamenu submenu">
										<a href="javascript:void(0);" class="show-submenu-mega">Crazy Deals</a>
										<div class="menu-wrapper">
											<div class="row small-gutters">
												<!-- <div class="col-lg-3">
													<h3>Listing grid</h3>
													<ul>
														<li><a href="/Listing_grid">Grid Full Width</a></li>
														<li><a href="listing-grid-2-full.html">Grid Full Width 2</a>
														</li>
														<li><a href="listing-grid-3.html">Grid Boxed</a></li>
														<li><a href="/Listing_grid">Grid Sidebar
																Left</a></li>
														<li><a href="listing-grid-5-sidebar-right.html">Grid Sidebar
																Right</a></li>
														<li><a href="listing-grid-6-sidebar-left.html">Grid Sidebar Left
																2</a></li>
														<li><a href="listing-grid-7-sidebar-right.html">Grid Sidebar
																Right 2</a></li>
													</ul>
												</div>
												<div class="col-lg-3">
													<h3>Listing row &amp; Product</h3>
													<ul>
														<li><a href="listing-row-1-sidebar-left.html">Row Sidebar
																Left</a></li>
														<li><a href="listing-row-2-sidebar-right.html">Row Sidebar
																Right</a></li>
														<li><a href="listing-row-3-sidebar-left.html">Row Sidebar Left
																2</a></li>
														<li><a href="listing-row-4-sidebar-extended.html">Row Sidebar
																Extended</a></li>
														<li><a href="product-detail-2.html">Product Large Image</a></li>
														<li><a href="product-detail-2.html">Product Carousel</a></li>
														<li><a href="product-detail-3.html">Product Sticky Info</a></li>
													</ul>
												</div>
												<div class="col-lg-3">
													<h3>Other pages</h3>
													<ul>
														<li><a href="cart.html">Cart Page</a></li>
														<li><a href="checkout.html">Check Out Page</a></li>
														<li><a href="confirm.html">Confirm Purchase Page</a></li>
														<li><a href="/Signin">Create Account Page</a></li>
														<li><a href="/Trackorder">Track Order</a></li>
														<li><a href="help.html">Help Page</a></li>
														<li><a href="help-2.html">Help Page 2</a></li>
														<li><a href="leave-review.html">Leave a Review</a></li>
													</ul>
												</div> -->
												<div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
													<div class="banner_menu">
														<a href="#0">
															<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
																data-src="{{ URL::to('/') }}/user/img/banner_menu.jpg" width="400" height="550"
																alt="" class="img-fluid lazy">
														</a>
													</div>
												</div>
												<div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
													<div class="banner_menu">
														<a href="#0">
															<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
																data-src="{{ URL::to('/') }}/user/img/banner_menu.jpg" width="400" height="550"
																alt="" class="img-fluid lazy">
														</a>
													</div>
												</div>
												<div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
													<div class="banner_menu">
														<a href="#0">
															<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
																data-src="{{ URL::to('/') }}/user/img/banner_menu.jpg" width="400" height="550"
																alt="" class="img-fluid lazy">
														</a>
													</div>
												</div>
												<div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
													<div class="banner_menu">
														<a href="#0">
															<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
																data-src="{{ URL::to('/') }}/user/img/banner_menu.jpg" width="400" height="550"
																alt="" class="img-fluid lazy">
														</a>
													</div>
												</div>
											</div>
											<!-- /row -->
										</div>
										<!-- /menu-wrapper -->
									</li>

									<li>
										<a href="/Contactus" class="show-submenu">Contact us</a>
									</li>
									<li>
										<a href="#" class="show-submenu">Authorised Certificates</a>
									</li>

								</ul>
							</div>
							<!--/main-menu -->
						</nav>
						<div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-right">
							<a class="phone_top" href="tel://9438843343"><strong><span>Need Help?</span>+94
									423-23-221</strong></a>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<!-- /main_header -->

			<div class="main_nav Sticky">
				<div class="container">
					<div class="row small-gutters">
						<div class="col-xl-3 col-lg-3 col-md-3">
							<nav class="categories">
								<ul class="clearfix">
									<li><span>
											<a href="#">
												<span class="hamburger hamburger--spin">
													<span class="hamburger-box">
														<span class="hamburger-inner"></span>
													</span>
												</span>
												Categories
											</a>
										</span>
										<div id="menu">
											<ul>
												<li><span><a href="#0">Protines</a></span>
													<ul>
														<li><a href="/Listing_grid">Way Protines</a>
														</li>
														<li><a href="/Listing_grid">Way Isolate</a>
														</li>
														<li><a href="/Listing_grid">Way
																hydrolued</a></li>
														<li><a href="/Listing_grid">Casein
																Protines</a></li>
														<li><a href="/Listing_grid">Peranut
																Butter</a></li>
													</ul>
												</li>
												<li><span><a href="#">Gainers</a></span>
													<ul>
														<li><a href="listing-grid-6-sidebar-left.html">Offers</a></li>
														<li><a href="listing-grid-7-sidebar-right.html">Shoes</a></li>
														<li><a href="listing-row-1-sidebar-left.html">Clothing</a></li>
														<li><a href="listing-row-3-sidebar-left.html">Accessories</a>
														</li>
														<li><a href="listing-row-4-sidebar-extended.html">Equipment</a>
														</li>
													</ul>
												</li>
												<li><span><a href="#">Strength And Stamina</a></span>
													<ul>
														<li><a href="/Listing_grid">Best Sellers</a>
														</li>
														<li><a href="listing-grid-2-full.html">Clothing</a></li>
														<li><a href="listing-grid-3.html">Accessories</a></li>
														<li><a href="/Listing_grid">Shoes</a></li>
													</ul>
												</li>
												<li><span><a href="#">Weight Loss</a></span>
													<ul>
														<li><a href="listing-grid-6-sidebar-left.html">Easy On Shoes</a>
														</li>
														<li><a href="listing-grid-7-sidebar-right.html">Clothing</a>
														</li>
														<li><a href="listing-row-3-sidebar-left.html">Must Have</a></li>
														<li><a href="listing-row-4-sidebar-extended.html">All Boys</a>
														</li>
													</ul>
												</li>
												<li><span><a href="#">general Wellness</a></span>
													<ul>
														<li><a href="/Listing_grid">New Releases</a>
														</li>
														<li><a href="listing-grid-2-full.html">Clothing</a></li>
														<li><a href="listing-grid-3.html">Sale</a></li>
														<li><a href="/Listing_grid">Best Sellers</a>
														</li>
													</ul>
												</li>
												<li><span><a href="#">Accessories</a></span>
													<ul>
														<li><a href="listing-row-1-sidebar-left.html">For Men</a></li>
														<li><a href="listing-row-2-sidebar-right.html">For Women</a>
														</li>
														<li><a href="listing-row-4-sidebar-extended.html">For Boys</a>
														</li>
														<li><a href="/Listing_grid">For Girls</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
							<div class="custom-search-input">
								<input type="text" placeholder="Search over 10.000 products">
								<button type="submit"><i class="header-icon_search_custom"></i></button>
							</div>
						</div>
						<div class="col-xl-3 col-lg-2 col-md-3">
							<ul class="top_tools">
								<li>
									<div class="dropdown dropdown-cart">
										<a href="/Cart" class="cart_bt"><strong>2</strong></a>
										<div class="dropdown-menu">
											<ul>
												<li>
													<a href="product-detail-2.html">
														<figure><img
																src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_small.jpg"
																data-src="{{ URL::to('/') }}/user/img/products/shoes/thumb/1.jpg" alt=""
																width="50" height="50" class="lazy"></figure>
														<strong><span>1x Armor Air x Fear</span>$90.00</strong>
													</a>
													<a href="#0" class="action"><i class="ti-trash"></i></a>
												</li>
												<li>
													<a href="product-detail-2.html">
														<figure><img
																src="{{ URL::to('/') }}/user/img/products/product_placeholder_square_small.jpg"
																data-src="{{ URL::to('/') }}/user/img/products/shoes/thumb/2.jpg" alt=""
																width="50" height="50" class="lazy"></figure>
														<strong><span>1x Armor Okwahn II</span>$110.00</strong>
													</a>
													<a href="0" class="action"><i class="ti-trash"></i></a>
												</li>
											</ul>
											<div class="total_drop">
												<div class="clearfix"><strong>Total</strong><span>$200.00</span></div>
												<a href="/Cart" class="btn_1 outline">View Cart</a><a
													href="/Checkout" class="btn_1">Checkout</a>
											</div>
										</div>
									</div>
									<!-- /dropdown-cart-->
								</li>
								<li>
									<a href="#0" class="wishlist"><span>Wishlist</span></a>
								</li>
								<li>
									<div class="dropdown dropdown-access">
										<a href="/Signin" class="access_link"><span>Account</span></a>
										<div class="dropdown-menu">
											<a href="/Signin" class="btn_1">Sign In or Sign Up</a>
											<ul>
												<li>
													<a href="/Trackorder"><i class="ti-truck"></i>Track your
														Order</a>
												</li>
												<li>
													<a href="/Signin"><i class="ti-package"></i>My Orders</a>
												</li>
												<li>
													<a href="/Signin"><i class="ti-user"></i>My Profile</a>
												</li>
												<li>
													<a href="help.html"><i class="ti-help-alt"></i>Help and Faq</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- /dropdown-access-->
								</li>
								<li>
									<a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
								</li>
								<li>
									<a href="#menu" class="btn_cat_mob">
										<div class="hamburger hamburger--spin" id="hamburger">
											<div class="hamburger-box">
												<div class="hamburger-inner"></div>
											</div>
										</div>
										Categories
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /row -->
				</div>
				<div class="search_mob_wp">
					<input type="text" class="form-control" placeholder="Search over 10.000 products">
					<input type="submit" class="btn_1 full-width" value="Search">
				</div>
				<!-- /search_mobile -->
			</div>
			<!-- /main_nav -->
		</header>
		<!-- /header -->
        @yield('main')
		
		<!-- /main -->

		<footer class="revealed">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_1">Quick Links</h3>
						<div class="collapse dont-collapse-sm links" id="collapse_1">
							<ul>
								<li><a href="/Aboutus">About us</a></li>
								<li><a href="help.html">Faq</a></li>
								<li><a href="help.html">Help</a></li>
								<li><a href="/Signin">My account</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="contacts.html">Contacts</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_2">Categories</h3>
						<div class="collapse dont-collapse-sm links" id="collapse_2">
							<ul>
								<li><a href="/Listing_grid">Clothes</a></li>
								<li><a href="listing-grid-2-full.html">Electronics</a></li>
								<li><a href="/Listing_grid">Furniture</a></li>
								<li><a href="listing-grid-3.html">Glasses</a></li>
								<li><a href="/Listing_grid">Shoes</a></li>
								<li><a href="/Listing_grid">Watches</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_3">Contacts</h3>
						<div class="collapse dont-collapse-sm contacts" id="collapse_3">
							<ul>
								<li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
								<li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
								<li><i class="ti-email"></i><a href="#0">info@allaia.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_4">Keep in touch</h3>
						<div class="collapse dont-collapse-sm" id="collapse_4">
							<div id="newsletter">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter"
										class="form-control" placeholder="Your email">
									<button type="submit" id="submit-newsletter"><i
											class="ti-angle-double-right"></i></button>
								</div>
							</div>
							<div class="follow_us">
								<h5>Follow Us</h5>
								<ul>
									<li><a href="#0"><img
												src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
												data-src="{{ URL::to('/') }}/user/img/twitter_icon.svg" alt="" class="lazy"></a></li>
									<li><a href="#0"><img
												src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
												data-src="{{ URL::to('/') }}/user/img/facebook_icon.svg" alt="" class="lazy"></a></li>
									<li><a href="#0"><img
												src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
												data-src="{{ URL::to('/') }}/user/img/instagram_icon.svg" alt="" class="lazy"></a></li>
									<li><a href="#0"><img
												src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
												data-src="{{ URL::to('/') }}/user/img/youtube_icon.svg" alt="" class="lazy"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /row-->
				<hr>
				<div class="row add_bottom_25">
					<div class="col-lg-6">
						<ul class="footer-selector clearfix">
							<li>
								<div class="styled-select lang-selector">
									<select>
										<option value="English" selected>English</option>
										<option value="French">French</option>
										<option value="Spanish">Spanish</option>
										<option value="Russian">Russian</option>
									</select>
								</div>
							</li>
							<li>
								<div class="styled-select currency-selector">
									<select>
										<option value="US Dollars" selected>US Dollars</option>
										<option value="Euro">Euro</option>
									</select>
								</div>
							</li>
							<li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
									data-src="{{ URL::to('/') }}/user/img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li>
						</ul>
					</div>
					<div class="col-lg-6">
						<ul class="additional_links">
							<li><a href="#0">Terms and conditions</a></li>
							<li><a href="#0">Privacy</a></li>
							<li><span>© 2020 Allaia</span></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!--/footer-->
	</div>
	<!-- page -->

	<div id="toTop"></div><!-- Back to top button -->

	<!-- Sign In Modal -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="modal_header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="ti-email"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="ti-lock"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
							<input type="checkbox">
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center">
					<input type="submit" value="Log In" class="btn_1 full-width">
					Don’t have an account? <a href="/Signin">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="ti-email"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new
						preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Modal -->

    @yield('js')
	

</body>

</html>