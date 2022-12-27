<!-- @extand('admin.master.masterpage') -->
@extends('admin.master.masterpage')
@section('title')
SSS | Add Product veriation
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
			$("#variation_form").validate({
				rules:
				{
					errorElement: 'p',
					errorClass: 'form-control-denger',
					pro_name:
					{
						required:true
					},
					pro_flover:
					{
						required:true
					},
					pro_gram:
					{
						required:true
					},
					pro_price:
					{
						required:true
					},
					pro_mrp:
					{
						required:true
					},
					tot_qty:
					{
						required:true
					}
				},
				messages:
				{
					pro_name:
					{
						required:"Please select product name."
					},
					pro_flover:
					{
						required:"Please enter product flover."
					},
					pro_gram:
					{
						required:"Please enter Kg."
					},
					pro_price:
					{
						required:"Please enter selling price."
					},
					pro_mrp:
					{
						required:"Please enter product price."
					},
					tot_qty:
					{
						required:"Please enter number of quintity."
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
								<h4>Manage Product veriation</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/Dashbord">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Product veriation</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Form grid Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Add Product veriation</h4>
							<p class="mb-30"><!--All bootstrap element classies--></p>
						</div>
						<div class="pull-right">
							<!-- <a href="#form-grid-form" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a> -->
						</div>
					</div>
					<form id="variation_form" method="POST" action="/Insertveriation" >
					@csrf
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Product Name</label>
									<!-- <input type="text" name="pro_name" class="form-control"> -->

									<select class="custom-select2 form-control" name="pro_name" style="width: 100%; height: 38px;">
									<option value="">Select product</option>
										@foreach($pro_data as $row)
											<option value="{{ $row->pro_id }}">{{ $row->p_name }}</option>
										@endforeach
										
									</select>

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Flover</label>
									<input type="text" placeholder="Enter flover" name="pro_flover" class="form-control">								
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>KG</label>
									<input type="number" placeholder="Enter gram" name="pro_gram" class="form-control">
								</div>
							</div>
<!-- ============================= -->

								<!-- <div class="col-md-6 col-sm-12">
									<label class="weight-600">Gram</label>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="1" name="pro_gram[]" class="custom-control-input ch" id="customCheck1">
										<label class="custom-control-label"  for="customCheck1">1 KG</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="2" name="pro_gram[]" class="custom-control-input ch" id="customCheck2">
										<label class="custom-control-label"  for="customCheck2">2 KG</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="3" name="pro_gram[]" class="custom-control-input ch" id="customCheck3">
										<label class="custom-control-label"  for="customCheck3">2.5 KG</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" value="5" name="pro_gram[]" class="custom-control-input ch" id="customCheck4">
										<label class="custom-control-label"  for="customCheck4">5 kg</label>
									</div>
								</div> -->

<!-- ============================= -->
							
						</div>

						<div class="row" id="mul_block">
						<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Selling Price (₹)</label>
									<input type="number" id="price" placeholder="Enter selling price" name="pro_price" class="form-control">
								</div>
							</div>

							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>MRP (₹)</label>
									<input type="number" id="mrp" name="pro_mrp" placeholder="Enter MRP" class="form-control">								
								</div>
							</div>
							
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Total Discount (₹)</label>
									<input type="number" id="discount" readonly class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Total Quntity</label>
									<input type="number" placeholder="Enter quntity" name="tot_qty" class="form-control">
								</div>
							</div>
							
						</div>

						<!-- <div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Descripsion</label>
									<textarea class="textarea_editor form-control border-radius-0" name="pro_desc" placeholder="Enter Descripsion ..."></textarea>
								</div>
							</div>
							
						</div> -->
						<div class="row">
							<!-- <div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Product Image</label>
									<input type="file" name="pro_img" class="form-control-file form-control height-auto">
								</div>
							</div> -->
							<!-- <div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Total Quntity</label>
									<input type="number" name="tot_qty" class="form-control">
								</div>
							</div> -->
							
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
					<div class="collapse collapse-box" id="form-grid-form" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#form-grid"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#form-grid-form" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="form-grid">

							</code></pre>
						</div>
					</div>
				</div>
				<!-- Form grid End -->
				
				
				
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
			@SSS - Super Supplement Store 2022
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script type="text/javascript" >
	 $( document ).ready(function() {
    	 //alert("hello")
	// 	$('.ch').click(function () {
	// 		var check = $("input:checkbox:checked").length

	// 		// mul_block

	// 		for(i=0; i<=check; i++){
	// 			$("#mul_block").show();
	// 		}

	// 		alert(check);
	// 	});

	// mrp

	$("#mrp").change(function(){
		if($("#price").val() != ""){
			var discount = $("#mrp").val() - $("#price").val();
			$("#discount").val(discount);
		}
	 });

	 $("#price").change(function(){
		if($("#mrp").val() != ""){
		var discount = $("#mrp").val() - $("#price").val();

		$("#discount").val(discount);
		}
		});

	});

</script>

	
@endsection