@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="wrapper wrapper-login">
            <div class="container container-signup animated fadeIn">
                <center>
                    <h3 class="text-center">Sign Up</h3>
                </center>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="hidden" value="c" name="userType">
                    <center>
                        <div class="login-form">
                            <div class="form-group">
                                <label for="email" class="placeholder"><b>Email</b></label><br>
                                <input @error('email') is-invalid @enderror name="email" value="{{ old('email') }}"
                                    required autocomplete="email" id="email" type="email" class="form-control">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="passwordsignin" class="placeholder"><b>Password</b></label>
                                <div class="position-relative">
                                    <input @error('password') is-invalid @enderror name="password"
                                        autocomplete="new-password" id="password" type="password" class="form-control"
                                        required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="show-password">
                                        <span toggle="#password" class="fa fa-fw fa-eye toggle-password" style="font-size: 15px;">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirmpassword" class="placeholder"><b>Confirm Password</b></label>
                                <div class="position-relative">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password" required>
                                    <div class="show-password">
                                        <span toggle="#password-confirm" class="fa fa-fw fa-eye toggle-password2" style="font-size: 15px;">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-sub m-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="agree" id="agree">
                                    <label class="custom-control-label" for="agree">I Agree the terms and
                                        conditions.</label>
                                </div>
                            </div>
                            <div class="row form-action">
                                <div class="col-md-6">
                                    <a href="{{ route('home') }}" id="show-signin"
                                        class="btn btn-danger btn-link w-100 fw-bold">Cancel</a>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary w-100 fw-bold">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
@endsection