@extends("user.usermaster")

@section('title')
SSS || Lising Grid

@endsection

@section('css')
    <!-- BASE CSS -->
    <link href="{{ URL::to('/') }}/user/css/bootstrap.custom.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="{{ URL::to('/') }}/user/css/checkout.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ URL::to('/') }}/user/css/custom.css" rel="stylesheet">
@endsection

@section('js')
<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{ URL::to('/') }}/user/js/common_scripts.min.js"></script>
    <script src="{{ URL::to('/') }}/user/js/main.js"></script>
@endsection

@section('main')
	
<main class="bg_gray">
		<div class="container">
            <div class="row justify-content-center">
				<div class="col-md-5">
					<div id="confirm">
						<div class="icon icon--order-success svg add_bottom_15">
							<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
								<g fill="none" stroke="#8EC343" stroke-width="2">
									<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
									<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
								</g>
							</svg>
						</div>
					<h2>Order completed!</h2>
					<p>You will receive a confirmation email soon!</p>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
@endsection