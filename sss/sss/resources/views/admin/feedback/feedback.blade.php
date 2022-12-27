<!-- @extand('admin.master.masterpage') -->
@extends('admin.master.masterpage')
@section('title')
SSS | Feedback
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
								<h4>Feedback</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/Dashbord">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Feedback</li>
								</ol>
							</nav>
						</div>
						<!-- <div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
							<a class="btn btn-primary" href="/Promocodeadd" role="button">Add Promocode</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Feedback</h4>
						<!-- <p class="mb-0">you can find more options <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a></p> -->
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus">Sr.no</th>
									<th>User Name</th>
									<th>Product Name</th>
									<th>Messege</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$i = 0;
							?>
								@foreach($fee_data as $row)
							<?php 
								$i++;
							?>
								<tr>
									<td class="table-plus">{{ $i  }}</td>
									<td>{{ $row->user_id }}</td>
									<td>{{ $row->pro_id }}</td>
									<td>{{ $row->messege }}</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<!-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> -->
												<!-- <a class="dropdown-item" href="/Maincatedit"><i class="dw dw-edit2"></i> Edit</a> -->
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
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