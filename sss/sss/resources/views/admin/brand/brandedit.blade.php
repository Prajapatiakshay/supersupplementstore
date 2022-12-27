<!-- @extand('admin.master.masterpage') -->
@extends('admin.master.masterpage')
@section('title')
SSS | Brand Edit
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
								<h4>Brand</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/Dashbord">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Brand</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Brand</h4>
							<br>
							<!-- <p class="mb-30">All bootstrap element classies</p> -->
						</div>
						
					</div>
					<form action="/brandupdate" enctype="multipart/form-data" method="POST">
						@csrf
						<input class="form-control" value="{{ $singledata->brand_id }}" type="hidden" name="old_b_name" >
						<input class="form-control" value="{{ $singledata->b_icon }}" type="hidden" name="old_b_icon" >
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Brand Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{ $singledata->b_name}}" type="text" name="b_name" >
								
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Brand Image</label>
							<div class="col-sm-12 col-md-10">
							<input type="file" value="{{ $singledata->b_icon}}" name="b_icon"  class="form-control-file form-control height-auto">
							<img src="{{ URL::to('/')}}/uploads/brand/{{$singledata->b_icon}}" style="height: 70px;width: 70px;border-radius: 50%;" >
							</div>
						</div>
						<br>
						<div class="form-group row">
						<button type="submit" name="action" class="btn btn-primary btn-lg btn-block">Submit</button>
						</div>
					</form>
					
				</div>
				<!-- Default Basic Forms End -->
				
				
				
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
			@SSS - Super Supplement Store 2022			</div>
		</div>
	</div>
@endsection