<!-- @extand('admin.master.masterpage') -->
@extends('admin.master.masterpage')
@section('title')
SSS | Sub Category Edit
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/style.css">

	<style>
		.error{
			color: red;
		}
	</style>

@endsection

@section('js')
<script src="{{ URL::to('/') }}/vendors/scripts/core.js"></script>
	<script src="{{ URL::to('/') }}/vendors/scripts/script.min.js"></script>
	<script src="{{ URL::to('/') }}/vendors/scripts/process.js"></script>
	<script src="{{ URL::to('/') }}/vendors/scripts/layout-settings.js"></script>
	<script src="{{ URL::to('/') }}/vendors/scripts/jquery.validate.js"></script>
	<script src="{{ URL::to('/') }}/vendors/scripts/additional-methods.js"></script>

	<script>
		$(document).ready(function(){
			$("#subcat_form").validate({
				rules:
				{
					errorElement: 'p',
					errorClass: 'denger',
					maincat_name:
					{
						required:true
					},
					subcat_name:
					{
						required:true
					}
				},
				messages:
				{
					maincat_name:
					{
						required:"Please select main category!"
					},
					subcat_name:
					{
						required:"Please enter sub category name!"
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
								<h4>Manage Sub Category</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/Dashbord">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sub Category</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Sub Category</h4>
							<br>
							<!-- <p class="mb-30">All bootstrap element classies</p> -->
						</div>
						
					</div>
					<form id="subcat_form" method="POST" action="/Updatesubcat" >
						@csrf
						<input class="form-control" value="{{ $sub_data->subcat_id }}" type="hidden" name="txtcatid" >
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Main Category</label>
							<div class="col-sm-12 col-md-10">
							
									<select class="custom-select2 form-control" name="maincat_name" style="width: 100%; height: 38px;">
									<option value="" >Select Main Category</option>
										@foreach($maincat_data as $row)
											<option  @if($sub_data->maincat_id == $row->maincat_id ) selected @endif value="{{ $row->maincat_id }}">{{ $row->cat_name }}</option>
										@endforeach
										
									</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{ $sub_data->subcat_name }}" type="text" name="subcat_name" >
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