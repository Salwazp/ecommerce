<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/user') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets/user') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/user') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    {{-- <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> --}}
    <!-- Spinner End -->
    <br><br>
    <div class="container bg-white">
        <div class="row px-md-4">
            <div class="col-md-6">
                <div class="card border-0" style="width: 100%; height:600px;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body" style="overflow-y: auto;">
                        <p class="card-text"><i>Ini untuk gambar logo</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Card with padding on left and right -->
                <div class="card px-4"> <!-- or you can use p-4 for padding on all sides -->
                    <h3><center>Daftar Seller</center></h3><br>
                    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('seller.KTPFormAdd') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="status_seller" id="status_seller" value="Pending">
                        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                        <div class="mb-3">
                            <label for="ktp_nik" class="form-label">Nik</label>
                            <input type="number" name="ktp_nik" class="form-control" id="ktp_nik" placeholder=" Nomor induk kependudukan">
                        </div>
                        <div class="mb-3">
                            <label for="ktp_nama" class="form-label">Nama</label>
                            <input type="text" name="ktp_nama" class="form-control" id="ktp_nama" placeholder="Enter your name">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktp_tempat_lahir" class="form-label">Tempat / Tanggal Lahir</label>
                                    <input type="text" name="ktp_tempat_lahir" class="form-control" id="ktp_tempat_lahir" placeholder="Tempat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="date" name="ktp_birth" class="form-control" id="ktp_birth">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="ktp_jk" id="lakiLaki" value="Laki-laki">
                                        <label class="form-check-label" for="lakiLaki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="ktp_jk" id="perempuan" value="Perempuan">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktp_gol_darah" class="form-label">Golongan Darah</label>
                                    <input type="text" name="ktp_gol_darah" class="form-control" id="ktp_gol_darah" placeholder="gol">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="ktp_alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" name="ktp_alamat" id="ktp_alamat" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktp_rt" class="form-label">Rt</label>
                                    <input type="text" name="ktp_rt" class="form-control" id="ktp_rt" placeholder="000">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktp_rw" class="form-label">Rw</label>
                                    <input type="text" name="ktp_rw" class="form-control" id="ktp_rw" placeholder="000">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktp_kel_desa" class="form-label">Kel/Desa</label>
                                    <input type="text" name="ktp_kel_desa" class="form-control" id="ktp_kel_desa" placeholder="Kel/Desa">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktp_kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" name="ktp_kecamatan" class="form-control" id="ktp_kecamatan" placeholder="Kecamatan">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="ktp_agama" class="form-label">Agama</label>
                            <select name="ktp_agama" id="ktp_agama" class="form-select" aria-label="Default select example">
                                <option selected>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Khonghuchu">Khonghuchu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ktp_status_perkawinan" class="form-label">Status Perkawinan</label>
                            <select name="ktp_status_perkawinan" id="ktp_status_perkawinan" class="form-select" aria-label="Default select example">
                                <option selected>Status Perkawinan</option>
                                <option value="Belum">Belum</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Cerai">Cerai</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ktp_pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" name="ktp_pekerjaan" class="form-control" id="ktp_pekerjaan" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="ktp_kewarganegaraan" class="form-label">Kewarganegaraan</label>
                            <select name="ktp_kewarganegaraan" id="ktp_kewarganegaraan" class="form-select" aria-label="Default select example">
                                <option selected>Kewarganegaraan</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ktp_pekerjaan" class="form-label">Bukti Foto KTP</label>
                            <input class="form-control" type="file" id="ktp_picture" name="ktp_picture">
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" type="Submit">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    




    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/user') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('assets/user') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('assets/user') }}/lib/lightbox/js/lightbox.min.js"></script>
    <script src="{{ asset('assets/user') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/user') }}/js/main.js"></script>
</body>

</html>