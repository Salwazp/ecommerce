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


    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-primary display-6">Notifikasi</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        
                        
                    </div>
                    <div class="d-flex m-3 me-0">
                        
                        <a href="keranjang.html" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            <span
                                class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                                style="top: -5px; left: 15px; height: 20px; min-width: 20px;">6</span>
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
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="col-xl-12 col-xxl-12">
        <!-- Team members / people dashboard card example-->
        <div class="card mb-4">
            <div class="card-body">
                <!-- Item 1-->
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-1.png" alt=""></div>
                        <div class="d-flex flex-column fw-bold">
                            <a class="text-dark line-height-normal mb-1" href="#!">Sid Rooney</a>
                            <div class="small text-muted line-height-normal">Lorem Ipsum...</div>
                        </div>
                    </div>
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople1">
                            <a class="dropdown-item" href="#!">Delete</a>
                        </div>
                    </div>
                </div>
                <!-- Item 2-->
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-2.png" alt=""></div>
                        <div class="d-flex flex-column fw-bold">
                            <a class="text-dark line-height-normal mb-1" href="#!">Keelan Garza</a>
                            <div class="small text-muted line-height-normal">Lorem Ipsum...</div>
                        </div>
                    </div>
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople2" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople2">
                            <a class="dropdown-item" href="#!">Delete</a>
                        </div>
                    </div>
                </div>
                <!-- Item 3-->
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-3.png" alt=""></div>
                        <div class="d-flex flex-column fw-bold">
                            <a class="text-dark line-height-normal mb-1" href="#!">Kaia Smyth</a>
                            <div class="small text-muted line-height-normal">Lorem Ipsum...</div>
                        </div>
                    </div>
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople3" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople3">
                            <a class="dropdown-item" href="#!">Delete</a>
                        </div>
                    </div>
                </div>
                <!-- Item 4-->
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-4.png" alt=""></div>
                        <div class="d-flex flex-column fw-bold">
                            <a class="text-dark line-height-normal mb-1" href="#!">Kerri Kearney</a>
                            <div class="small text-muted line-height-normal">Lorem Ipsum...</div>
                        </div>
                    </div>
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople4" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople4">
                            <a class="dropdown-item" href="#!">Delete</a>
                        </div>
                    </div>
                </div>
                <!-- Item 5-->
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-5.png" alt=""></div>
                        <div class="d-flex flex-column fw-bold">
                            <a class="text-dark line-height-normal mb-1" href="#!">Georse Findlay</a>
                            <div class="small text-muted line-height-normal">Lorem Ipsum...</div>
                        </div>
                    </div>
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople5" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople5">
                            <a class="dropdown-item" href="#!">Delete</a>
                        </div>
                    </div>
                </div>
                <!-- Item 6-->
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center flex-shrink-0 me-3">
                        <div class="avatar avatar-xl me-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-6.png" alt=""></div>
                        <div class="d-flex flex-column fw-bold">
                            <a class="text-dark line-height-normal mb-1" href="#!">Wilf Ingram</a>
                            <div class="small text-muted line-height-normal">Lorem Ipsum...</div>
                        </div>
                    </div>
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople6" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople6">
                            <a class="dropdown-item" href="#!">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <h3 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Rekomendasi Produk</span></h3>
        <div class="row px-xl-5 pb-3">
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-1.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-2.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-3.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-4.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-4.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-3.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-2.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-1.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-2.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-1.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-4.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1"><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width:100px;height:100px;"><img class="img-fluid" src="assets/img/cat-3.jpg" alt="website template image"></div>
              <div class="flex-fill pl-3">
                <h6>Category Name</h6>
                <small class="text-body">100 Products</small></div>
            </div>
            </a></div>
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