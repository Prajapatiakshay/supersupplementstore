<!-- @extand('admin.master.masterpage') -->
@extends('admin.master.masterpage')
@section('title')
SSS | Promo Code Edit
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/style.css">
@endsection

@section('js')
<script src="{{ URL::to('/') }}/vendors/scripts/core.js"></script>
	<script src="{{ URL::to('/') }}/vendors/scripts/script.min.js"></script>
	<script src="{{ URL::to('/') }}/vendors/scripts/process.js"></script>
	<script src="{{ URL::to('/') }}/vendors/scripts/layout-settings.js"></script>
@endsection

@section('main')
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
			@if(Session::has('success'))
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								{{ Session::get('success') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						@endif

						@if(Session::has('danger'))
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								{{ Session::get('danger') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						@endif
				<div class="page-header">
				<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Edit Promo-code</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/Dashbord">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Promo-Code</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Promo-code</h4>
							<br>
							<!-- <p class="mb-30">All bootstrap element classies</p> -->
						</div>
						
					</div>

					<?PHP 
						// $rand = "SSS".rand(11111,99999);
					?>

					<form method="POST" action="/Promocodeupdate" >
						@csrf

						<input type="hidden" value="{{ $promo_data->promo_id }}" name="hidd_pid" >

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Promo-Code</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{ $promo_data->p_code }}" readonly type="text" name="promocode" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Promo-Code description</label>
							<div class="col-sm-12 col-md-10">
							<input type="text" name="promo_desc" value="{{ $promo_data->p_desc }}" placeholder="Enter promo-code description" class="form-control">
						</div>
					</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Promo Discount</label>
							<div class="col-sm-12 col-md-10">
							<input type="number" name="promo_disc" value="{{ $promo_data->p_discount }}" placeholder="Enter promo-code discount" class="form-control">
						</div>
						</div>
						<br>
						<div class="form-group row">
						<div class="col-sm-12 col-md-12">
						<button type="submit" name="action" class="btn btn-primary btn-lg btn-block">Submit</button>
						</div>
						</div>
					</form>
					
				</div>
				<!-- Default Basic Forms End -->
				
				
				
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
			@SSS - Super Supplement Store 2022
			</div>
		</div>
	</div>
@endsection