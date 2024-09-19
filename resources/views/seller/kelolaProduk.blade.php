<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>M.Kom-Seller</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/seller') }}/assets/img/icon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts and icons -->
    <script src="{{ asset('assets/seller') }}/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['{{ asset('assets/seller') }}/assets/css/fonts.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/seller') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/seller') }}/assets/css/azzara.min.css">
    <!-- CSS Just for demo purposedon't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets/seller') }}/assets/css/demo.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red" -->
        <div class="main-header" data-background-color="purple">
            <!-- Logo Header -->
            <div class="logo-header">
                <a href="dashboard.html" class="logo">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                                aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                aria-labelledby="messageDropdown">
                                <li>
                                    <div class="dropdown-title d-flex justify-content-between align-items-center">
                                        Messages
                                        <a href="#" class="small">Mark all as read</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="chat.html">
                                                <div class="notif-img">
                                                    <img src="{{ asset('assets/seller') }}/assets/img/jm_denis.jpg"
                                                        alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jimmy Denis</span>
                                                    <span class="block">
                                                        How are you ?
                                                    </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="chat.html">
                                                <div class="notif-img">
                                                    <img src="{{ asset('assets/seller') }}/assets/img/chadengle.jpg"
                                                        alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Chad</span>
                                                    <span class="block">
                                                        Ok, Thanks !
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="chat.html">
                                                <div class="notif-img">
                                                    <img src="{{ asset('assets/seller') }}/assets/img/mlane.jpg"
                                                        alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jhon Doe</span>
                                                    <span class="block">
                                                        Ready for the meeting today...
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="chat.html">
                                                <div class="notif-img">
                                                    <img src="{{ asset('assets/seller') }}/assets/img/talha.jpg"
                                                        alt="Img Profile">
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
                                    <a class="see-all" href="javascript:void(0);">See all messages<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                            <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i>
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    New user registered
                                                </span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success"> <i class="fa fa-comment"></i>
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Rahmad commented on Admin
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{ asset('assets/seller') }}/assets/img/profile2.jpg"
                                                    alt="Img Profile">
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
                                    <a class="see-all" href="javascript:void(0);">See all notifications<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="{{ asset('assets/seller') }}/assets/img/profile.jpg" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg"><img
                                                src="{{ asset('assets/seller') }}/assets/img/profile.jpg"
                                                alt="image profile" class="avatar-img rounded"></div>
                                        <div class="u-text">
                                            <h4>Hizrian</h4>
                                            <p class="text-muted">hello@example.com</p><a href="userprofile.html"
                                                class="btn btn-rounded btn-danger btn-sm">View Profile</a>
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
                            <img src="{{ asset('assets/seller') }}/assets/img/profile.jpg" alt="..."
                                class="avatar-img rounded-circle">
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
                        <li class="nav-item">
                            <a href="{{ 'seller.dashboard' }}">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item active">
                            <a href="{{ 'seller.kelolaProduk' }}">
                                <i class="fas fa-table"></i>
                                <p>Kelola Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pesanan.html">
                                <i class="fas fa-shopping-bag"></i>
                                <p>Pesanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="review.html">
                                <i class="fas fa-comments"></i>
                                <p>Review</p>
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
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Lihat Produk</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Lihat Produk</a>
                            </li>
                        </ul>
                    </div>
                    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-12 text-right">
                                                <div class="action">
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                        data-bs-target="#modalCenter">+&nbsp;Tambah Produk</button>
                                                    <button type="button" class="btn btn-outline-danger">Export PDF</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body table-responsive">
                                        <table class="table">
                                            <thead>
                                                    <tr>
                                                        <th>Produk</th>
                                                        <th>Nama</th>
                                                        <th>Kategori</th>
                                                        <th>Massa (g)</th>
                                                        <th>Stok</th>
                                                        <th>Harga</th>
                                                        <th>Desc</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($products as $p)
<tr>
                                                    <td>
                                                        <img class="ms-1 rounded-circle border" style="height: 2rem; width: auto" src="{{ asset('storage/'. $productPictures->directory) }}">
                                                    </td>
                                                    <td>
                                                        <strong>
                                                            {{ $p->name }}
                                                        </strong>
                                                    </td>
                                                    <td>{{ $p->category->name ?? 'No Category' }}</td>
                                                    <td>{{ $p->weight }}</td>
                                                    <td>{{ $p->stock }}</td>
                                                    <td>{{ $p->price }}</td>
                                                    <td>{{ $p->desc }}</td>
                                                    <td>{{ $p->status }}</td>
                                                    <td>
                                                        
                         
                    @foreach ($products as $product)
<div class="modal fade" id="modalCenter-{{ $product->product_id }}" tabindex="-1" aria-labelledby="azzahra" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="azzahra">Edit Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="editForm-{{ $product->product_id }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" name="productid" value="{{ $product->product_id }}">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" id="name" name="name"
                                                class="form-control" value="{{ $product->name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="category_code" class="form-label">Kategori</label>
                                            <select id="category_code" name="category_code"
                                                class="form-select" required>
                                                <option selected hidden>Kategori</option>
                                                @foreach ($categories as $c)
<option value="{{ $c->category_code }}"
                                                        {{ $c->category_code == $product->category->category_code ? 'selected' : '' }}>
                                                        {{ $c->name }}
                                                    </option>
@endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="weight" class="form-label">Massa (g)</label>
                                            <input type="number" name="weight" id="weight"
                                                class="form-control" value="{{ $product->weight }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="stock" class="form-label">Stock</label>
                                            <input type="text" id="stock" name="stock"
                                                class="form-control" value="{{ $product->stock }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Harga</label>
                                            <input type="text" id="price" name="price"
                                                class="form-control" value="{{ $product->price }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <input type="text" id="status" name="status"
                                                class="form-control" value="{{ $product->status }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="desc" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" id="desc" rows="3" name="desc" required>{{ $product->desc }}</textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
@endforeach

                </div>

                @section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $('form[id^="editForm-"]').on('submit', function(e) {
                                        e.preventDefault();

                                        var formData = $(this).serialize();

                                        $.ajax({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            // url: '/products/' + productId,
                                            url: '/seller.kelolaProduk',
                                            method: 'POST',
                                            data: formData,
                                            success: function(response) {
                                                if (response.success) {
                                                    $('#modalCenter-' + productId).modal('hide');
                                                    alert(response.message);
                                                    // Update tampilan produk di sini jika perlu
                                                    $('#product-name-' + productId).text($('#name')
                                                        .val()); // misalnya update nama produk
                                                }
                                            },
                                            error: function(xhr) {
                                                alert('Terjadi kesalahan saat memperbarui produk.');
                                            }
                                        });
                                    });
                                });
                            </script>
@endsection

                    <!-- Tombol untuk membuka modal edit -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modalCenter-{{ $p->product_id }}">
                        Edit
                    </button>

                    <!-- Tombol untuk membuka modal hapus -->
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#deleteModal-{{ $product->product_id }}">
                        Hapus
                    </button>

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="deleteModal-{{ $product->product_id }}" tabindex="-1"
                        aria-labelledby="deleteModalLabel-{{ $product->product_id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action="{{ route('products.destroy', $product->product_id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus produk ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            <!-- Modal tambah produk -->
            <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                <input type="hidden" name="shop_id" value="{{ $shop->shop_id }}">
                                @error('shop_id')
                                    <strong>{{ $message }}</strong>
                                @enderror
                                <input type="hidden" name="status" value="Draft">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameWithTitle" class="form-label">Nama</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Nama Produk">
                                        @error('name')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">Kategori</label>
                                        <select id="defaultSelect" name="category_code" class="form-select">
                                            <option selected hidden>Kategori</option>
                                            @foreach ($categories as $c)
                                                <option value="{{ $c->category_code }}">{{ $c->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                        @error('category_code')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="emailWithTitle" class="form-label">Massa (g)</label>
                                        <input type="number" name="weight" id="weight" class="form-control"
                                            placeholder="xx gram">
                                        @error('weight')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="col mb-3">
                                        <label for="dobWithTitle" class="form-label">Stock</label>
                                        <input type="text" id="stock" name="stock" class="form-control"
                                            placeholder="XXX">
                                        @error('stock')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="col mb-3">
                                        <label for="dobWithTitle" class="form-label">Harga</label>
                                        <input type="text" id="harga" name="price" class="form-control"
                                            placeholder=>
                                        @error('price')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="emailWithTitle" class="form-label">Deskripsi</label>

                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
                                        @error('desc')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Pictures</label>
                                        <input class="form-control" type="file" id="pictures" name="pictures[]"
                                            multiple>
                                        @error('pictures[]')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="panel-footer">
                <div class="row">
                    <div class="col col-sm-6 col-xs-6">showing <b>5</b> out of <b>25</b> entries
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <ul class="pagination hidden-xs pull-right">
                            <li><a href="#"></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">></a></li>
                        </ul>
                        <ul class="pagination visible-xs pull-right">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
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
    <!-- Core JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/seller') }}/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{ asset('assets/seller') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('assets/seller') }}/assets/js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('assets/seller') }}/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{ asset('assets/seller') }}/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js">
    </script>
    <!-- Bootstrap Toggle -->
    <script src="{{ asset('assets/seller') }}/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <!-- Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        -- >
    </script>
    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/seller') }}/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Azzara JS -->
    <script src="{{ asset('assets/seller') }}/assets/js/ready.min.js"></script>
    <script src="{{ asset('assets/seller') }}/assets/js/setting-demo.js"></script>
</body>

</html>
