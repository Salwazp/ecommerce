<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Toko</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/seller') }}assets/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="{{ asset('assets/seller') }}assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: { "families": ["Open+Sans:300,400,600,700"] },
			custom: { "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css'] },
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/seller') }}assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('assets/seller') }}assets/css/azzara.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('assets/seller') }}assets/css/demo.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 30px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        .logo-placeholder {
            width: 200px;
            height: 200px;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #adb5bd;
            border-radius: 10px;
        }
        .form-container {
            padding: 1rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-label {
            font-weight: 100;
            margin-bottom: 0.2rem;
        }
    </style>


</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card px-3">
                    <br>
                        <h2 class="text-center mb-4">Isi Data Toko Andaa</h2>
                        <form id="formAuthentication" method="POST" action="{{ route('seller.shopDetailAdd') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="seller_ktp_nik" value="{{ $seller->ktp_nik }}">
                            
                            <div class="form-group">
                                <label for="name" class="form-label"><b>Nama Toko</b></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Toko" autofocus />
                            </div>
                            <div class="form-group">
                                <label for="url_domain" class="form-label"><b>Domain</b></label>
                                <div class="input-group">
                                    <span class="input-group-text">https://mkom.com/</span>
                                    <input type="text" class="form-control" placeholder="your domain" id="url_domain" name="url_domain">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="description" class="form-label"><b>Deskripsi</b></label>
                                <textarea name="description" id="description" class="form-control" rows="3" placeholder="Masukkan Deskripsi Toko"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="kota" class="form-label"><b>Kota</b></label>
                                <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukkan Kota" />
                            </div>
                            
                            <div class="form-group">
                                <label for="shop_icon" class="form-label"><b>Logo Toko</b></label>
                                <input type="file" class="form-control" id="shop_icon" name="shop_icon" />
                            </div>
                            
                            <div class="d-grid mt-4"><center>
                                <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                            </center></div><br>
                        </form>
                </div>
            </div><br>
            <div class="col-md-4">
                <div class="logo-container">
                    <div class="logo-placeholder">
                        <img src="{{ asset('assets/seller') }}/img/kucing.jpg" alt="Logo" class="img-fluid">
                    </div>
                </div>
            </div>            
        </div>
    </div>

    
    
    
    

		
	<!--   Core JS Files   -->
	<script src="{{ asset('assets/seller') }}assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{ asset('assets/seller') }}assets/js/core/popper.min.js"></script>
	<script src="{{ asset('assets/seller') }}assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="{{ asset('assets/seller') }}assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{ asset('assets/seller') }}assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="{{ asset('assets/seller') }}assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="{{ asset('assets/seller') }}assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Azzara JS -->
	<script src="{{ asset('assets/seller') }}assets/js/ready.min.js"></script>
	<!-- Azzara DEMO methods, don't include it in your project! -->
	<script src="{{ asset('assets/seller') }}assets/js/setting-demo.js"></script>
</body>

</html>     