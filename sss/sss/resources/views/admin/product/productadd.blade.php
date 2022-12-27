<!-- @extand('admin.master.masterpage') -->
@extends('admin.master.masterpage')
@section('title')
SSS | Add Product
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
			$("#product_form").validate({
				rules:
				{
					errorElement: 'p',
					errorClass: 'denger',
					pro_name:
					{
						required:true
					},
					subcat_id:
					{
						required:true
					},
					pro_desc:
					{
						required:true,
						
					},
					pro_img:
					{
						required:true
					},
					brand_id:
					{
						required:true
					}
				},
				messages:
				{
					errorElement: 'p',
					errorClass: 'denger',
					maincat_name:
					{
						required:"Please enter product name."
					},
					subcat_name:
					{
						required:"Please select sub-category."
					},
					pro_desc:
					{
						required:"Please enter product descripsion."
					},
					pro_img:
					{
						required:"Please select product images."
					},
					brand_id:
					{
						required:"Please select product brond."
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
								<h4>Manage Product</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/Dashbord">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Product</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Form grid Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Add Product</h4>
							<p class="mb-30"><!--All bootstrap element classies--></p>
						</div>
						<div class="pull-right">
							<!-- <a href="#form-grid-form" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a> -->
						</div>
					</div>
					<form id="product_form" enctype="multipart/form-data"  method="POST" action="/Insertproduct" >
					@csrf
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Product Name</label>
									<input type="text" placeholder="Enter product name" name="pro_name" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Sub-category</label>
									<select class="custom-select2 form-control" name="subcat_id" id="subcat" style="width: 100%; height: 38px;">
										<option value="" >Select sub-category</option>		
										
										@foreach($subcat_data as $row)
											<option value="{{ $row->subcat_id }}">{{ $row->subcat_name }}</option>
										@endforeach

									</select>								
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>main-category</label>
									<input type="text" id="maincat" readonly class="form-control">
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Descripsion</label>
									<textarea class="textarea_editor form-control border-radius-0" id="txtarea" name="pro_desc" placeholder="Enter Descripsion ..."></textarea>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Product Image</label>
									<input type="file" name="pro_img" class="form-control-file form-control height-auto">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Brand</label>
									<select class="custom-select2 form-control" name="brand_id" style="width: 100%; height: 38px;">
									<option value="" >Select brand</option>			
										@foreach($brand_data as $row)
											<option value="{{ $row->brand_id }}">{{ $row->b_name }}</option>
										@endforeach									
									</select>
								</div>
							</div>
							
						</div>

						<br>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<button type="submit" name="action" class="btn btn-primary btn-lg btn-block">Submit</button>
								</div>
							</div>
						</div>

					</form>
					
				</div>
				<!-- Form grid End -->
				
				
				
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
			@SSS - Super Supplement Store 2022
			</div>
		</div>
	</div>
@endsection

<!-- subcat -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

	<!-- <script>
		$(document).ready(function(){
			// $("#pan_ord").click(function(){
			$("#subcat").change(function(){
				var value = $("#subcat").val();
				// alert(value);


										// $.ajax({
                                        //     url: 'ajax_maincat.php', 
                                        //     type: 'post',
                                        //     data: {value:value},
                                        //     dataType: 'html',
                                        //     success:function(response){
                                        //         alert(response);
                                                
                                        //         // $("#store").html(response);
                                                
                                        //     }
                                           
                                        // });


				$("#maincat").val(del_id);


			});
		});
	</script> -->

