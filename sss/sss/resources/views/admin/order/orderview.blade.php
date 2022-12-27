@extends('admin.master.masterpage')
@section('title')
SSS | Product View
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/core.css">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/style.css">
@endsection

@section('js')
<script src="{{ URL::to('/') }}/vendors/scripts/core.js"></script>
		<script src="{{ URL::to('/') }}/vendors/scripts/script.min.js"></script>
		<script src="{{ URL::to('/') }}/vendors/scripts/process.js"></script>
		<script src="{{ URL::to('/') }}/vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/cropperjs/dist/cropper.js"></script>
@endsection

@section('main')
<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Profile</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Profile</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<!-- <div class="profile-photo">
									<!-- <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a> -->
									<a href="{{ URL::to('/')}}/upload/product/{{ $ord_data->p_image }}" target="_blank" rel="noopener noreferrer"><img src="{{ URL::to('/') }}/upload/product/{{ $ord_data->p_image }}" style="width: 120px;" alt="" ></a>
									<!-- border-radius: 50%; -->
									<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-body pd-5">
													<div class="img-container">
														<img id="image" src="{{ URL::to('/') }}/upload/product/{{ $ord_data->p_name }}" alt="Picture">
													</div>
												</div>
												<div class="modal-footer">
													<input type="submit" value="Update" class="btn btn-primary">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div> -->
								<h5 class="text-center h5 mb-0">{{ $ord_data->p_name }}</h5>
								<!-- <p class="text-center text-muted font-14">Lorem ipsum dolor sit amet</p> -->
								<br>
								<div class="profile-info">
								<!-- <br> -->
									<center><h5 class="mb-20 h5 text-blue">Product Information</h5></center>
									<table class="table">

									<table class="table">
										<!-- <thead>
											<tr>
												<th scope="col"><span>Product Name : </span></th>
												<th scope="col">ABCD JSBkj</th>
											</tr>
										</thead> -->
										<tbody>
											<tr>
												<th scope="col" class="text-blue" ><span>Product Name : </span></th>
												<th scope="col">{{ $ord_data->p_name }}</th>
											</tr>
											<!-- <tr>
												<th scope="col" class="text-blue" ><span>Main category : </span></th>
												<th scope="col">{{ $pro_data->p_name }}</th>
											</tr> -->
											<tr>
												<th scope="col" class="text-blue" ><span>Sub Category : </span></th>
												<th scope="col">{{ $ord_data->subcat_name }}</th>
											</tr>
											<tr>
												<th scope="col" class="text-blue" ><span>Brand : </span></th>
												<th scope="col">{{ $ord_data->b_name }}</th>
											</tr>
											<tr>
												<th scope="col" class="text-blue" ><span>Description : </span></th>
												<th scope="col">{{ $ord_data->p_desc }}</th>
											</tr>
											
										</tbody>
									</table>
							
									<!-- <ul>
										<li>
											<span>Product Name : </span> Test
										</li>
										<li>
											<span>Main category :</span>
											619-229-0054
										</li>
										<li>
											<span>Sub Category :</span>
											America
										</li>
										<li>
											<span>Brand :</span>
											dsds
										</li>
										<li>
											<span>Description :</span>
											America
										</li>
									</ul> -->
								</div>
<br>
								<div class="profile-info">
								<!-- <br> -->
									<center><h5 class="mb-20 h5 text-blue">Product Veriation</h5></center>	
																
									<table class="table table-striped">
									<thead>
										<tr>
										<th scope="col">Sr.no</th>
										<th>Flaver</th>
										<th>KG</th>
										<th>MRP</th>
										<th>Selling price</th>
										</tr>
									</thead>
									<tbody>
									<?php 
								$i = 0;
								$tot_var = count($ord_data);
								if($tot_var > 0){
							?>
									@foreach($ord_data as $row)
									<?php 
								$i++;
							?>
										<tr>
											<th scope="row">{{ $i }}</th>
											<td>{{ $row->flavor }}</td>
											<td>{{ $row->gram }}</td>
											<td>₹{{ $row->mrp }}</td>
											<td>₹{{ $row->s_price }}</td>
										
										</tr>
									@endforeach
									<?php
								}else{
									?>
									<tr>
										<th scope="row" colspan="5"><center> NO DATA</center></th>
									
									</tr>
									<?php
								}
									?>
									</tbody>
									</table>
								</div>
							
								
								
							</div>
						</div>
						
					</div>
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
				@SSS - Super Supplement Store 2022
				</div>
			</div>
		</div>
@endsection