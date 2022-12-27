<!-- @extand('admin.master.masterpage') -->
@extends('admin.master.masterpage')
@section('title')
SSS | City Add
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<style>
		.error{
			color: red;
		}
	</style>
@endsection

@section('js')
<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>

	<script src="vendors/scripts/jquery.validate.js"></script>
	<script src="vendors/scripts/additional-methods.js"></script>

	<script>
		$(document).ready(function(){
			$("#city_form").validate({
				rules:
				{
					errorElement: 'p',
					errorClass: 'denger',
					state_id:
					{
						required:true
					},
					c_name:
					{
						required:true
					}
				},
				messages:
				{
					state_id:
					{
						required:"Please select state name."
					},
					c_name:
					{
						required:"Please enter city name."
					}
				}
			});
		});
	</script>

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
								<h4>Manage City</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/Dashbord">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">City</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Add City</h4>
						</div>
						
					</div>
					<form id="city_form" method="POST" action="/Insertcity" >
						@csrf

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">State name</label>
							<div class="col-sm-12 col-md-10">
							
									<select class="custom-select2 form-control" name="state_id" style="width: 100%; height: 38px;">
									<option value="" >Select state</option>
										@foreach($state_data as $row)
											<option value="{{ $row->state_id }}">{{ $row->s_name }}</option>
										@endforeach
										
									</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">City name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="c_name" >
							</div>
						</div>
						
						<br>
						<div class="form-group row">
						<div class="col-sm-12 col-md-12">
						<button type="submit" name="action" class="btn btn-primary btn-lg btn-block">Submit</button>
						</div>
						</div>
					</form>


					<div class="collapse collapse-box" id="basic-form1" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="copy-pre">
<form>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Text</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" placeholder="Johnny Brown">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Search</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" placeholder="Search Here" type="search">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Email</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="bootstrap@example.com" type="email">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">URL</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="https://getbootstrap.com" type="url">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="1-(111)-111-1111" type="tel">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Password</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="password" type="password">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Number</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="100" type="number">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Date</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control date-picker" placeholder="Select Date" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Month</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control month-picker" placeholder="Select Month" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Time</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control time-picker" placeholder="Select time" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Select</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12">
				<option selected="">Choose...</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Color</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="#563d7c" type="color">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="50" type="range">
		</div>
	</div>
</form>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms End -->
				
				
				
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
			@SSS - Super Supplement Store 2022
			</div>
		</div>
	</div>
@endsection