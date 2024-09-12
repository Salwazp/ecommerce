@extends('layout.auth')

@section('content')
    
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-text demo text-body fw-bolder">Marketplace</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Isi data toko anda</h4>

                    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('seller.shopDetailAdd') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="seller_ktp_nik" value="{{ $seller->ktp_nik }}">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Masukkan Nama Toko" autofocus />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Domain</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon14">https://mkom.com/</span>
                                <input type="text" class="form-control" placeholder="your domain" id="url_domain"
                                    name="url_domain">
                            </div>
                        </div>
                        <label class="form-label">Deskripsi</label>
                        <div class="mb-3">
                            <textarea name="description" id="description" cols="38" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="kota" name="kota" />
                        </div>
                        <div class="mb-3">
                            <label for="shop_icon" class="form-label">Logo Toko</label>
                            <input type="file" class="form-control" id="shop_icon" name="shop_icon" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary d-grid w-100">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

@endsection