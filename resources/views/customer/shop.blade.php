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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar bg-primary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a
                            href="tracking.html" class="text-white">Pengiriman</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="notifikasi.html"
                            class="text-white">notifikasi</a></small>
                </div>
                <div class="top-link pe-2">
                    <!-- <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a> -->
                    <a href="{{ 'customer.joinSeller' }}" class="text-white"><small class="text-white ms-2">Daftar
                            sebagai
                            seller</small></a>
                    <div class="d-flex align-items-center">
                        <a href="notifikasi.html" class="my-auto" style="margin-right: 10px;">
                            <i class="fa-solid fa-bell" style="font-size: 2rem;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.html" class="navbar-brand">
                    {{-- <h1 class="text-primary display-6">MarketPlace</h1> --}}
                    <img class="img-logo" src="{{ asset('assets/user') }}/img/logo1.jpg" style="height:180px;">
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="{{ route('customer.shop') }}" class="nav-item nav-link  active">Shop</a>
                        <a href="shop-detail.html" class="nav-item nav-link">Shop Detail</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="{{ route('customer.cart') }}" class="dropdown-item">Cart</a>
                                <a href="chackout.html" class="dropdown-item">Chackout</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="d-flex m-3 me-0">
                        <button
                            class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                            data-bs-toggle="modal" data-bs-target="#searchModal"><i
                                class="fas fa-search text-primary"></i></button>
                        <a href="{{ route('customer.cart') }}" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            <span
                                class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                                style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                        </a>
                        {{-- <a href="profile.html" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a> --}}

                    </div>
                    <div class="d-flex align-items-center">
                        <a href="chat.html" class="my-auto" style="margin-right: 10px;">
                            <i class="bi bi-chat-dots-fill" style="font-size: 2rem;"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <ul class="navbar-nav">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="accountDropdowm" class="nav-link dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdowm">
                                        <a class="dropdown-item text-smaller" href="">Pengaturan Akun</a>
                                        <a class="dropdown-item text-smaller text-danger" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Shop</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Shop</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4">Fresh Tea</h1>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-12 mb-4">
                            <form action="{{ route('search') }}" method="GET">
                                <input type="text" id="searchInput" name="search" class="form-control"
                                    placeholder="Search products...">
                            </form>
                        </div>
                        <div class="col-6"></div>
                    </div>
                    <div class="row g-4 ">
                        <div class="col-lg-9">
                            <div class="row g-4 justify-content-center">
                                <div class="container-fluid fruite py-5">
                                    <div class="container py-5">
                                        <div class="tab-class text-center">

                                            <div class="tab-content">
                                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                                    <div class="row g-4">
                                                        @if ($products->isEmpty())
                                                            <p>No products found.</p>
                                                        @else
                                                            {{-- {{dd($products)}} --}}
                                                            @foreach ($products as $product)
                                                                <div class="product-item">
                                                                    {{-- {{$product}} --}}
                                                                    <img src="{{asset ('storage/'.$productPictures->directory)}}">
                                                                    <h4>{{ $product->name }}</h4>
                                                                    <p>Price: {{ $product->price }}</p>

                                                                    <form
                                                                        action="{{ route('cart.add', $product->product_id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <input type="number" name="qty"
                                                                            value="1" min="1">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Add to
                                                                            Cart</button>
                                                                    </form>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="pagination d-flex justify-content-center mt-5">
                                        <a href="#" class="rounded">&laquo;</a>
                                        <a href="#" class="active rounded">1</a>
                                        <a href="#" class="rounded">2</a>
                                        <a href="#" class="rounded">3</a>
                                        <a href="#" class="rounded">4</a>
                                        <a href="#" class="rounded">5</a>
                                        <a href="#" class="rounded">6</a>
                                        <a href="#" class="rounded">&raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Fruits Shop End-->


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
    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            var searchValue = this.value.toLowerCase();
            var products = document.querySelectorAll(
                '#productList .col-md-6, #productList .col-lg-4, #productList .col-xl-3');

            products.forEach(function(product) {
                var productName = product.getAttribute('data-name').toLowerCase();
                if (productName.includes(searchValue)) {
                    product.style.display = '';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    </script>


</body>

</html>
