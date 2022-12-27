@extends("user.usermaster")

@section('title')
SSS || Track order

@endsection

@section('css')

    <!-- BASE CSS -->
    <link href="{{ URL::to('/') }}/user/css/bootstrap.custom.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/user/css/style.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
    <link href="{{ URL::to('/') }}/user/css/error_track.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ URL::to('/') }}/user/css/custom.css" rel="stylesheet">
@endsection

@section('js')
	<!-- COMMON SCRIPTS -->
    <script src="{{ URL::to('/') }}/user/js/common_scripts.min.js"></script>
    <script src="{{ URL::to('/') }}/user/js/main.js"></script>
@endsection

@section('main')
	
<main class="bg_gray">
		<div id="track_order">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-xl-7 col-lg-9">
						<img src="{{ URL::to('/') }}/user/img/track_order.svg" alt="" class="img-fluid add_bottom_15" width="200" height="177">
						<p>Quick Tracking Order</p>
						<form>
							<div class="search_bar">
								<input type="text" class="form-control" placeholder="Invoice ID">
								<input type="submit" value="Search">
							</div>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /track_order -->
		
		
	</main>
	<!--/main-->
@endsection