<!-- @extand('admin.master.masterpage') -->
@extends('admin.master.masterpage')
@section('title')
SSS | Website Users
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
								<h4>Manage Website Users</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/Dashbord">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Website Users</li>
								</ol>
							</nav>
						</div>
						<!-- <div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
							<a class="btn btn-primary" href="/Maincatadd" role="button">Add Category</a>
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
						<h4 class="text-blue h4">All Data</h4>
						<!-- <p class="mb-0">you can find more options <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a></p> -->
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Sr.no</th>
									<th>Name</th>
									<th>Gender</th>
									<th>Mobile No.</th>
									<th>Email</th>
									
									<!-- <th class="datatable-nosort">Action</th> -->
								</tr>
							</thead>
							<tbody>
							<?php 
								$i = 0;
								?>								
								@foreach($webuser_data as $row)
							<?php 
								$i++;
							?>
								<tr>
									<td class="table-plus">{{ $i }}</td>
									
									<td>{{ $row->name }}</td>
									<td>{{ $row->gender }}</td>
									<td>{{ $row->mobile }}</td>
									<td>{{ $row->email }}</td>
									
									<!-- <td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<!-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a> --
												<a class="dropdown-item" href="/Maincatedit/{{ $row->user_id }}"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item btn_delete" data-toggle="modal" data-target="#confirmation-modal" data-id="{{ $row->user_id }}"  href="#"><i class="dw dw-delete-3"></i> Delete</a>
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
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>




					<!-- Confirmation modal -->

							<div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
									<form action="/Deletemaincat" method="post" >
										<div class="modal-body text-center font-18">
											<h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to Delete?</h4>
											<div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
												
													@csrf
													<input type="hidden" name="hidd_mainid" id="hidd_delid">
													<input type="hidden" name="hidd_mainimg" id="hidd_delimg">
												
 													<div class="col-6">
														<button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
														NO
													</div>
													<div class="col-6">
														<button type="submit" class="btn btn-danger border-radius-100 btn-block confirmation-btn" ><i class="fa fa-check"></i></button>
														YES
													</div>
												
											</div>
										</div>
										</form>
									</div>
								</div>
							</div>

					<!-- Confirmation modal end-->

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".btn_delete").click(function(){
				var del_id = $(this).attr("data-id");
				var del_img = $(this).attr("data-img");
				$("#hidd_delid").val(del_id);
				$("#hidd_delimg").val(del_img);
			});
		})
	</script>



@endsection