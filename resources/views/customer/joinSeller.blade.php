<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tea Éclat</title>
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
    <link href="{{ asset('assets/user') }}/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    <br><br>
    <div class="col-md-12">
        <div class="row px-md-4">
            <div class="col-md-6">
                <!-- <div class="card h-100" style="width: 30rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div> -->
                <div class="card" style="width: 30rem; height: 100%;">
                    <img class="img-logo" src="{{ asset('assets/user') }}/img/logo.jpg">
                    <div class="card-body" style="overflow-y: auto;">
                        {{-- <p class="card-text"><i>Ini untuk gambar logo</i></p> --}}
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <h3>Daftar Seller</h3><br>
                <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('register.seller') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emai1" name="email"
                            value="{{ $user->email }}" readonly />
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit">Daftar</button>

                    </div>
                </form>
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
