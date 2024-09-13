<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>M.Kom-Seller</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/seller') }}/assets/img/icon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<!-- Fonts and icons -->
	<script src="{{ asset('assets/seller') }}/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['{{ asset('assets/seller') }}/assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/seller') }}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('assets/seller') }}/assets/css/azzara.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('assets/seller') }}/assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" data-background-color="purple">
			<!-- Logo Header -->
			<div class="logo-header">
				
				<a href="dashboard.html" class="logo">
					<img src="{{ asset('assets/seller') }}/assets/img/logoazzara.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="{{ asset('assets/seller') }}/assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="{{ asset('assets/seller') }}/assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="{{ asset('assets/seller') }}/assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="{{ asset('assets/seller') }}/assets/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="{{ asset('assets/seller') }}/assets/img/profile2.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{ asset('assets/seller') }}/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<li>
									<div class="user-box">
										<div class="avatar-lg"><img src="{{ asset('assets/seller') }}/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
										<div class="u-text">
											<h4>Hizrian</h4>
											<p class="text-muted">hello@example.com</p><a href="userprofile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
										</div>
									</div>
								</li>
								<li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">My Profile</a>
									<a class="dropdown-item" href="#">My Balance</a>
									<a class="dropdown-item" href="#">Inbox</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Logout</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar">
			
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('assets/seller') }}/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<i>nama seller nya</i>
									<span class="user-level">Seller</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="dashboard.html">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								
							</a>
						</li>
						
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Forms</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="forms/forms.html">
											<span class="sub-item">Basic Form</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="kelolaProduk.html">
								<i class="fas fa-table"></i>
								<p>Kelola Produk</p>
							</a>
							
						</li>
						<li class="nav-item">
							<a href="pesanan.html">
								<i class="la flaticon-shopping-bag"></i>
								<p>Pesanan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="chart.html">
								<i class="far fa-chart-bar"></i>
								<p>Statistik Penjualan</p>
								
							</a>
						</li>
						<li class="nav-item">
							<a href="laporan.html">
								<i class="fas fa-file-invoice"></i>
								<p>Laporan</p>

							</a>
						</li>
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#custompages">
								<i class="fas fa-paint-roller"></i>
								<p>Custom Pages</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="custompages">
								<ul class="nav nav-collapse">
									<li>
										<a href="login.html">
											<span class="sub-item">Login & Register 1</span>
										</a>
									</li>
									<li>
										<a href="login2.html">
											<span class="sub-item">Login & Register 2</span>
										</a>
									</li>
									<li>
										<a href="userprofile.html">
											<span class="sub-item">User Profile</span>
										</a>
									</li>
									<li>
										<a href="404.html">
											<span class="sub-item">404</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<h4 class="page-title">User Profile</h4>
					<div class="row">
						<div class="col-md-8">
							<div class="card card-with-nav">
								<div class="card-header">
									<div class="row row-nav-line">
										<ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
											<li class="nav-item"> <a class="nav-link active show" data-toggle="tab"
													href="#home" role="tab" aria-selected="true">Timeline</a> </li>
											<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile"
													role="tab" aria-selected="false">Profile</a> </li>
											<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings"
													role="tab" aria-selected="false">Settings</a> </li>
										</ul>
									</div>
								</div>
								<div class="card-body">
									<div class="row mt-3">
										<div class="col-md-6">
											<div class="form-group form-group-default">
												<label>Name</label>
												<input type="text" class="form-control" name="name" placeholder="Name"
													value="Hizrian">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group form-group-default">
												<label>Email</label>
												<input type="email" class="form-control" name="email" placeholder="Name"
													value="hello@example.com">
											</div>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-4">
											<div class="form-group form-group-default">
												<label>Birth Date</label>
												<input type="text" class="form-control" id="datepicker"
													name="datepicker" value="03/21/1998" placeholder="Birth Date">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group form-group-default">
												<label>Gender</label>
												<select class="form-control" id="gender">
													<option>Male</option>
													<option>Female</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group form-group-default">
												<label>Phone</label>
												<input type="text" class="form-control" value="+62008765678"
													name="phone" placeholder="Phone">
											</div>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-6">
											<div class="form-group form-group-default">
												<label>Shop Name</label>
												<input type="text" class="form-control" name="name" placeholder="Name"
													value="shop">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group form-group-default">
												<label>No KTP</label>
												<input type="text" class="form-control" name="name" placeholder="Name"
													value="022.....">
											</div>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Website</label>
												<input type="text" class="form-control" value="website" name="website"
													placeholder="e.g.www.google.com">
											</div>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-6">
											<div class="form-group form-group-default">
												<label>Provinsi</label>
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<select name="provinsi" aria-label="Select a Province"
														data-control="select2" data-placeholder="Select a Province..."
														class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible"
														id="provinsi" data-select2-id="select2-data-provinsi"
														tabindex="-1" aria-hidden="true">
														<option value="" data-select2-id="select2-data-11-h6re">Select a
															Provinsi...</option>
														<option value="11">Aceh</option>
														<option value="12">Sumatera Utara</option>
														<option value="13">Sumatera Barat</option>
														<option value="14">Riau</option>
														<option value="15">Jambi</option>
														<option value="16">Sumatera Selatan</option>
														<option value="17">Bengkulu</option>
														<option value="18">Lampung</option>
														<option value="19">Kepulauan Bangka Belitung</option>
														<option value="21">Kepulauan Riau</option>
														<option value="31">Dki Jakarta</option>
														<option value="32">Jawa Barat</option>
														<option value="33">Jawa Tengah</option>
														<option value="34">Di Yogyakarta</option>
														<option value="35">Jawa Timur</option>
														<option value="36">Banten</option>
														<option value="51">Bali</option>
														<option value="52">Nusa Tenggara Barat</option>
														<option value="53">Nusa Tenggara Timur</option>
														<option value="61">Kalimantan Barat</option>
														<option value="62">Kalimantan Tengah</option>
														<option value="63">Kalimantan Selatan</option>
														<option value="64">Kalimantan Timur</option>
														<option value="65">Kalimantan Utara</option>
														<option value="71">Sulawesi Utara</option>
														<option value="72">Sulawesi Tengah</option>
														<option value="73">Sulawesi Selatan</option>
														<option value="74">Sulawesi Tenggara</option>
														<option value="75">Gorontalo</option>
														<option value="76">Sulawesi Barat</option>
														<option value="81">Maluku</option>
														<option value="82">Maluku Utara</option>
														<option value="91">Papua Barat</option>
														<option value="94">Papua</option>
													</select><span
														class="select2 select2-container select2-container--bootstrap5"
														dir="ltr" data-select2-id="select2-data-10-x212"
														style="width: 100%;"><span class="selection"><span
																class="select2-selection select2-selection--single form-select form-select-solid form-select-lg fw-bold"
																role="combobox" aria-haspopup="true"
																aria-expanded="false" tabindex="0" aria-disabled="false"
																aria-labelledby="select2-provinsi-container"
																aria-controls="select2-provinsi-container"><span
																	class="select2-selection__rendered"
																	id="select2-provinsi-container" role="textbox"
																	aria-readonly="true"
																	title="Select a Province..."><span
																		class="select2-selection__placeholder">Select a
																		Province...</span></span><span
																	class="select2-selection__arrow"
																	role="presentation"><b
																		role="presentation"></b></span></span></span><span
															class="dropdown-wrapper" aria-hidden="true"></span></span>
													<div class="fv-plugins-message-container invalid-feedback"></div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group form-group-default">
												<label>Kota/Kabupaten</label>
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<select name="kotakab" aria-label="Select a Kota/Kabupaten"
														data-control="select2"
														data-placeholder="Select a Kota/Kabupaten..."
														class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible"
														id="kotakab" data-select2-id="select2-data-kotakab"
														tabindex="-1" aria-hidden="true">
														<option value="" data-select2-id="select2-data-13-ku7m">Select a
															Kota/Kabupaten...</option>
													</select><span
														class="select2 select2-container select2-container--bootstrap5"
														dir="ltr" data-select2-id="select2-data-12-sa0k"
														style="width: 100%;"><span class="selection"><span
																class="select2-selection select2-selection--single form-select form-select-solid form-select-lg fw-bold"
																role="combobox" aria-haspopup="true"
																aria-expanded="false" tabindex="0" aria-disabled="false"
																aria-labelledby="select2-kotakab-container"
																aria-controls="select2-kotakab-container"><span
																	class="select2-selection__rendered"
																	id="select2-kotakab-container" role="textbox"
																	aria-readonly="true"
																	title="Select a Kota/Kabupaten..."><span
																		class="select2-selection__placeholder">Select a
																		Kota/Kabupaten...</span></span><span
																	class="select2-selection__arrow"
																	role="presentation"><b
																		role="presentation"></b></span></span></span><span
															class="dropdown-wrapper" aria-hidden="true"></span></span>
													<div class="fv-plugins-message-container invalid-feedback"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-4">
											<div class="form-group form-group-default">
												<label>Kecamatan</label>
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<select name="kecamatan" aria-label="Select a Kecamatan"
														data-control="select2" data-placeholder="Select a Kecamatan..."
														class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible"
														id="kecamatan" data-select2-id="select2-data-kecamatan"
														tabindex="-1" aria-hidden="true">
														<option value="" data-select2-id="select2-data-15-hpke">Select a
															Kecamatan...</option>
													</select><span
														class="select2 select2-container select2-container--bootstrap5"
														dir="ltr" data-select2-id="select2-data-14-cko8"
														style="width: 100%;"><span class="selection"><span
																class="select2-selection select2-selection--single form-select form-select-solid form-select-lg fw-bold"
																role="combobox" aria-haspopup="true"
																aria-expanded="false" tabindex="0" aria-disabled="false"
																aria-labelledby="select2-kecamatan-container"
																aria-controls="select2-kecamatan-container"><span
																	class="select2-selection__rendered"
																	id="select2-kecamatan-container" role="textbox"
																	aria-readonly="true"
																	title="Select a Kecamatan..."><span
																		class="select2-selection__placeholder">Select a
																		Kecamatan...</span></span><span
																	class="select2-selection__arrow"
																	role="presentation"><b
																		role="presentation"></b></span></span></span><span
															class="dropdown-wrapper" aria-hidden="true"></span></span>
													<div class="fv-plugins-message-container invalid-feedback"></div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group form-group-default">
												<label>Kelurahan/Desa</label>
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<select name="kelurahan" aria-label="Select a Kelurahan/Desa"
														data-control="select2"
														data-placeholder="Select a Kelurahan/Desa..."
														class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible"
														id="kelurahan" data-select2-id="select2-data-kelurahan"
														tabindex="-1" aria-hidden="true">
														<option value="" data-select2-id="select2-data-17-3z5i">Select a
															Kelurahan/Desa...</option>
													</select><span
														class="select2 select2-container select2-container--bootstrap5"
														dir="ltr" data-select2-id="select2-data-16-puxz"
														style="width: 100%;"><span class="selection"><span
																class="select2-selection select2-selection--single form-select form-select-solid form-select-lg fw-bold"
																role="combobox" aria-haspopup="true"
																aria-expanded="false" tabindex="0" aria-disabled="false"
																aria-labelledby="select2-kelurahan-container"
																aria-controls="select2-kelurahan-container"><span
																	class="select2-selection__rendered"
																	id="select2-kelurahan-container" role="textbox"
																	aria-readonly="true"
																	title="Select a Kelurahan/Desa..."><span
																		class="select2-selection__placeholder">Select a
																		Kelurahan/Desa...</span></span><span
																	class="select2-selection__arrow"
																	role="presentation"><b
																		role="presentation"></b></span></span></span><span
															class="dropdown-wrapper" aria-hidden="true"></span></span>
													<div class="fv-plugins-message-container invalid-feedback"></div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group form-group-default">
												<label>Kode Pos</label>
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<select name="kodepos" aria-label="Select a Kode Pos"
														data-control="select2" data-placeholder="Select a Kode Pos..."
														class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible"
														id="kodepos" data-select2-id="select2-data-kodepos"
														tabindex="-1" aria-hidden="true">
														<option value="" data-select2-id="select2-data-19-0554">Select a
															Kode Pos...</option>
													</select><span
														class="select2 select2-container select2-container--bootstrap5"
														dir="ltr" data-select2-id="select2-data-18-e4ce"
														style="width: 100%;"><span class="selection"><span
																class="select2-selection select2-selection--single form-select form-select-solid form-select-lg fw-bold"
																role="combobox" aria-haspopup="true"
																aria-expanded="false" tabindex="0" aria-disabled="false"
																aria-labelledby="select2-kodepos-container"
																aria-controls="select2-kodepos-container"><span
																	class="select2-selection__rendered"
																	id="select2-kodepos-container" role="textbox"
																	aria-readonly="true"
																	title="Select a Kode Pos..."><span
																		class="select2-selection__placeholder">Select a
																		Kode Pos...</span></span><span
																	class="select2-selection__arrow"
																	role="presentation"><b
																		role="presentation"></b></span></span></span><span
															class="dropdown-wrapper" aria-hidden="true"></span></span>
													<div class="fv-plugins-message-container invalid-feedback"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Address</label>
												<input type="text" class="form-control"
													value="st Merdeka Putih, Jakarta Indonesia" name="address"
													placeholder="Address">
											</div>
										</div>
									</div>
									<div class="row mt-3 mb-1">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>About Me</label>
												<textarea class="form-control" name="about" placeholder="About Me"
													rows="3">yeah its about me</textarea>
											</div>
										</div>
									</div>
									<div class="text-right mt-3 mb-3">
										<button class="btn btn-success">Save</button>
										<button class="btn btn-danger">Reset</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-profile card-secondary">
								<div class="card-header" style="background-image: url('assets/img/blogpost.jpg')">
									<div class="profile-picture">
										<div class="avatar avatar-xl">
											<img src="assets/img/profile.jpg" alt="..."
												class="avatar-img rounded-circle">
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="user-profile text-center">
										<div class="name">Hizrian, 19</div>
										<div class="job">Frontend Developer</div>
										<div class="desc">A man who hates loneliness</div>
										<div class="social-media">
											<a class="btn btn-info btn-twitter btn-sm btn-link" href="#">
												<span class="btn-label just-icon"><i class="flaticon-twitter"></i>
												</span>
											</a>
											<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#">
												<span class="btn-label just-icon"><i class="flaticon-google-plus"></i>
												</span>
											</a>
											<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#">
												<span class="btn-label just-icon"><i class="flaticon-facebook"></i>
												</span>
											</a>
											<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#">
												<span class="btn-label just-icon"><i class="flaticon-dribbble"></i>
												</span>
											</a>
										</div>
										<div class="view-profile">
											<a href="#" class="btn btn-secondary btn-block">View Full Profile</a>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="row user-stats text-center">
										<div class="col">
											<div class="number">125</div>
											<div class="title">Post</div>
										</div>
										<div class="col">
											<div class="number">25K</div>
											<div class="title">Followers</div>
										</div>
										<div class="col">
											<div class="number">134</div>
											<div class="title">Following</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
				<div class="title">Settings</div>
				<div class="custom-content">
					<div class="switcher">
						<div class="switch-block">
							<h4>Topbar</h4>
							<div class="btnSwitch">
								<button type="button" class="changeMainHeaderColor" data-color="blue"></button>
								<button type="button" class="selected changeMainHeaderColor" data-color="purple"></button>
								<button type="button" class="changeMainHeaderColor" data-color="light-blue"></button>
								<button type="button" class="changeMainHeaderColor" data-color="green"></button>
								<button type="button" class="changeMainHeaderColor" data-color="orange"></button>
								<button type="button" class="changeMainHeaderColor" data-color="red"></button>
							</div>
						</div>
						<div class="switch-block">
							<h4>Background</h4>
							<div class="btnSwitch">
								<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
								<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
								<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							</div>
						</div>
					</div>
				</div>
				<div class="custom-toggle">
					<i class="flaticon-settings"></i>
				</div>
			</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="{{ asset('assets/seller') }}/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{ asset('assets/seller') }}/assets/js/core/popper.min.js"></script>
	<script src="{{ asset('assets/seller') }}/assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="{{ asset('assets/seller') }}/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{ asset('assets/seller') }}/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Moment JS -->
	<script src="{{ asset('assets/seller') }}/assets/js/plugin/moment/moment.min.js"></script><!-- DateTimePicker -->
	<script src="{{ asset('assets/seller') }}/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="{{ asset('assets/seller') }}/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="{{ asset('assets/seller') }}/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Azzara JS -->
	<script src="{{ asset('assets/seller') }}/assets/js/ready.min.js"></script>
	<!-- Azzara DEMO methods, don't include it in your project! -->
	<script src="{{ asset('assets/seller') }}/assets/js/setting-demo.js"></script>
	<script>
		$('#datepicker').datetimepicker({
			format: 'MM/DD/YYYY',
		});
	</script>
</body>
</html>