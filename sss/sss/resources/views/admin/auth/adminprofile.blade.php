<!-- @extand('admin.master.masterpage') -->
@extends('admin.master.masterpage')
@section('title')
SSS | Admin Profile
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/core.css">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="/src/plugins/cropperjs/dist/cropper.css">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/vendors/styles/style.css">
@endsection

@section('js')
<script src="{{ URL::to('/') }}/vendors/scripts/core.js"></script>
		<script src="{{ URL::to('/') }}/vendors/scripts/script.min.js"></script>
		<script src="{{ URL::to('/') }}/vendors/scripts/process.js"></script>
		<script src="{{ URL::to('/') }}/vendors/scripts/layout-settings.js"></script>
		<script src="/src/plugins/cropperjs/dist/cropper.js"></script>
		<script>
			window.addEventListener('DOMContentLoaded', function () {
				var image = document.getElementById('image');
				var cropBoxData;
				var canvasData;
				var cropper;

				$('#modal').on('shown.bs.modal', function () {
					cropper = new Cropper(image, {
						autoCropArea: 0.5,
						dragMode: 'move',
						aspectRatio: 3 / 3,
						restore: false,
						guides: false,
						center: false,
						highlight: false,
						cropBoxMovable: false,
						cropBoxResizable: false,
						toggleDragModeOnDblclick: false,
						ready: function () {
							cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
						}
					});
				}).on('hidden.bs.modal', function () {
					cropBoxData = cropper.getCropBoxData();
					canvasData = cropper.getCanvasData();
					cropper.destroy();
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
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Admin Profile</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="row">
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
							<div class="card-box height-100-p overflow-hidden">
								<div class="profile-tab height-100-p">
									<div class="tab height-100-p">
										<!-- <ul class="nav nav-tabs customtab" role="tablist"> -->
											<!-- <li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Timeline</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Tasks</a>
											</li> -->
											<!-- <li class="nav-item"> -->
												<!-- <a class="nav-link"  role="tab">Settings</a> -->
                                                <!-- href="#setting" -->
                                                <!-- data-toggle="tab" -->
											<!-- </li> -->
										<!-- </ul> -->
										<div class="tab-content">
											
											
											<!-- Setting Tab start -->
											<div class="  height-100-p" id="setting" role="tabpanel">
                                            <!-- tab-pane -->
                                            <!-- fade -->
												<div class="profile-setting">
													<form enctype="multipart/form-data" method="POST" action="/updateadmin">
														@csrf
													<!--  -->
                                                    <input class="form-control" value="{{ $admin_data->admin_id }}" type="hidden" name="txtid" >
						                            	<input class="form-control" value="{{ $admin_data->image }}" type="hidden" name="txtimage" >

														<ul class="profile-edit-list row">
															<li class="weight-500 col-md-12">
																<h4 class="text-blue h5 mb-20">Edit Your Personal Information</h4>
																<div class="form-group">
																	<label>Full Name</label>
																	<input value="{{ $admin_data->username }}" name="username" class="form-control form-control-lg" type="text">
																</div>
																
																<div class="form-group mb-20">
																	<label>Email</label>
																	<input value="{{ $admin_data->email }}" name="email" class="form-control form-control-lg" type="email">
																</div>
                                                                
                                                                <div class="row" >
                                                                    <div class="form-group col-6">
																	<label>Phone Number</label>
																	<input value="{{ $admin_data->mobile }}" name="mobile" maxlength="10" minlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="form-control form-control-lg" type="text">
                                                                    </div>

                                                                    <div class="form-group  col-6">
                                                                        <label>User Image</label>
                                                                        <input type="file" name="admin_img" class="form-control-file form-control height-auto">
                                                                        <br><a href="http://127.0.0.1:8000/upload/admin/user.png" target="_blank" rel="noopener noreferrer"><img src="{{ URL::to('/')}}/upload/admin/{{ $admin_data->image }}" style="height: 100px;width: 100px;border-radius: 50%;" ></a>
                                                                    </div>
                                                                </div>
																
                                                                <div class="row" >
																	<div class="form-group mb-0 col-12">
																		<button type="submit" name="btn" class="btn btn-primary col-12">Update Information</button>
																	</div>
																</div>
															</li>
														</ul>
													</form>
												</div>
											</div>
											<!-- Setting Tab End -->
										</div>
									</div>
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