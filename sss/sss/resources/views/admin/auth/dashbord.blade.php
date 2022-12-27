@extends('admin.master.masterpage')

@section('title')
    SSS | Deshbord
@endsection



@section('css')
<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
@endsection

@section('js')
<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
@endsection

@section('main')
<div class="main-container">
		<div class="pd-ltr-20">
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
			<!-- <div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue">Johnny Brown!</div>
						</h4>
						<p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
					</div>
				</div>
			</div> -->

			<?php //echo $webuser_data->name; ?>
			

			<?php 
				// order_data
				$i = 0;
				$total_revanu = 0;
				$total_order = count($order_data);
				$total_pen_order = count($pending_data);
				foreach($order_data as $row){
					$tot_pay = $row->tot_pay;
					$total_revanu = $total_revanu + $tot_pay;
				}

				//product data

				$total_product = count($product_data);

				// website user data

				$total_user = count($webuser_data);

				?>


			<div class="row">
			<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart4"></div> -->
								<div><img src="{{ URL::to('/')}}/src/images/money.gif" style="height: 90px;width: 100px;" ></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">₹<?php echo $total_revanu; ?></div>
								<div class="weight-600 font-14">Total Revanu</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 mb-30">
				<a href="/Order" >
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart2"></div> -->
								<div><img src="{{ URL::to('/')}}/src/images/deals.gif" style="height: 90px;width: 100px;" ></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?php echo $total_order; ?></div>
								<div class="weight-600 font-14">Total Deals</div>
							</div>
						</div>
					</div>
				</a>
				</div>

				<div class="col-xl-3 mb-30">
				<a href="/Product" >
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart3"></div> -->
								<div><img src="{{ URL::to('/')}}/src/images/menu.gif" style="height: 90px;width: 100px;" ></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?php echo $total_product; ?></div>
								<div class="weight-600 font-14">Total Products</div>
							</div>
						</div>
					</div>
				</a>
				</div>
				<div class="col-xl-3 mb-30">
				<a href="/Webuser" >
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart">customer</div> -->
								<div ><img src="{{ URL::to('/')}}/src/images/users.gif" style="height: 83px;width: 105px;" ></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?php echo $total_user; ?></div>
								<div class="weight-600 font-14">Total Users</div>
							</div>
						</div>
					</div>
				</a>
				</div>
				
				
				
			</div>


			<div class="row">
				
				<div class="col-xl-3 mb-30">
				<a href="/Pandingorder" >
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart4"></div> -->
								<div><img src="{{ URL::to('/')}}/src/images/pendingord.gif" style="height: 90px;width: 100px;" ></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?php echo $total_pen_order; ?></div>
								<div class="weight-600 font-14">Pending Order</div>
							</div>
						</div>
					</div>
					</a>
				</div>
				
				
			</div>
			
			<!-- <div class="card-box mb-30">
				<h2 class="h4 pd-20">Best Selling Products</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Product</th>
							<th>Name</th>
							<th>Color</th>
							<th>Size</th>
							<th>Price</th>
							<th>Oty</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-1.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Shirt</h5>
								by John Doe
							</td>
							<td>Black</td>
							<td>M</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-2.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Boots</h5>
								by Lea R. Frith
							</td>
							<td>brown</td>
							<td>9UK</td>
							<td>$900</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-3.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Hat</h5>
								by Erik L. Richards
							</td>
							<td>Orange</td>
							<td>M</td>
							<td>$100</td>
							<td>4</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-4.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Long Dress</h5>
								by Renee I. Hansen
							</td>
							<td>Gray</td>
							<td>L</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-5.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Blazer</h5>
								by Vicki M. Coleman
							</td>
							<td>Blue</td>
							<td>M</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div> -->
			<!-- <div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div> -->
		</div>
	</div>
@endsection