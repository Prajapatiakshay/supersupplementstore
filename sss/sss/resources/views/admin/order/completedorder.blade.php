<!-- @extand('admin.master.masterpage') -->
@extends('admin.master.masterpage')
@section('title')
SSS | Completed Order
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
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
@endsection

@section('main')
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>View Completed Orders</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/Dashbord">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Completed Orders</li>
								</ol>
							</nav>
						</div>
						<!-- <div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									Orders Status
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="/Pandingorder">Pending Order</a>
									<a class="dropdown-item" href="/Processingorder">Processing Order</a>
									<a class="dropdown-item" href="/Completedorder">Complated Order</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>

				<?php 
					$pen_count = count($pending_ord_data);
					$proc_count = count($processing_ord_data);
					$com_count = count($completed_ord_data);
				?>

				<div class="row">
				
				<div class="col-xl-4 mb-30">
				<a href="/Pandingorder" >
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart4"></div> -->
								<div><img src="{{ URL::to('/')}}/src/images/pendingord.gif" style="height: 90px;width: 100px;" ></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?php echo $pen_count; ?></div>
								<div class="weight-600 font-18">Pending Order</div>
							</div>
						</div>
					</div>
					</a>
				</div>

				<div class="col-xl-4 mb-30">
				<a href="/Processingorder" >
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart4"></div> -->
								<div><img src="{{ URL::to('/')}}/src/images/package.gif" style="height: 90px;width: 100px;" ></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?php echo $proc_count; ?></div>
								<div class="weight-600 font-18">Packging Order</div>
							</div>
						</div>
					</div>
					</a>
				</div>

				<div class="col-xl-4 mb-30">
				<a href="/Completedorder" >
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<!-- <div id="chart4"></div> -->
								<div><img src="{{ URL::to('/')}}/src/images/complete.gif" style="height: 90px;width: 100px;" ></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0" style="color:#474ac3"><?php echo $com_count; ?></div>
								<div class="weight-600 font-18" style="color:#474ac3">Complated Order</div>
							</div>
						</div>
					</div>
					</a>
				</div>
				
				
			</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">All Completed Orders</h4>
						<!-- <p class="mb-0">you can find more options <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a></p> -->
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus ">Sr.no</th>
									<th>Order No.</th>
									<th>UserName</th>
									<th class="datatable-nosort">Product</th>
									<th class="datatable-nosort">Quintity</th>
									<th class="datatable-nosort">Payment</th>
									<th >Payment Mode</th>
									<th class="datatable-nosort">Order Status</th>
									<th class="datatable-nosort">View</th>
									<!-- <th class="datatable-nosort">Action</th> -->
								</tr>
							</thead>
							<tbody>

							<?php 
								$i = 0;
							?>
								@foreach($completed_ord_data as $row)
							<?php 
								$i++;
							?>

								<?php
								$conn = new mysqli("localhost","root","","project");
								$proid = $row->pro_id;
								$sel = "select * from tbl_product where pro_id = $proid";
								$data = mysqli_query($conn,$sel);
								$no = mysqli_num_rows($data);
								while($this_pdata = mysqli_fetch_array($data)){
									$pro_name = $this_pdata['p_name'];
								}	
								?>
								<tr>
									<td class="table-plus">{{ $i }}</td>
									<td>{{ $row->ord_id }}</td>
									<td>{{ $row->name }}</td>
									<td>{{ $pro_name }}</td>
									<td>{{ $row->qty }}</td>
									<td>{{ $row->tot_pay }}</td>
									<td>{{ $row->paymode }}</td>
									<td>{{ $row->ord_statues }}</td>
									<td><a href="/Orderview/{{ $row->ord_id }}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a></td>
									<!-- <td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="/Maincatedit"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td> -->
								</tr>
							@endforeach
								
							</tbody>
						</table>
					</div>
				</div>
				<!-- Simple Datatable End -->
				
				
				
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
			@SSS - Super Supplement Store 2022
			</div>
		</div>
	</div>
@endsection