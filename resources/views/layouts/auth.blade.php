{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
{{-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head> --}}

{{-- <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />

    <script src="{{ asset('assets/admin/assets/js/plugin/webfont/webfont.min.js') }}"></script>

    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['assets/admin/assets/css/fonts.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/azzara.min.css') }}">
</head> --}}

{{-- <body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
    {{-- </div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Login</title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />

        <script src="{{ asset('assets/admin/assets/js/plugin/webfont/webfont.min.js') }}"></script>

        <script>
            WebFont.load({
                google: {
                    "families": ["Open+Sans:300,400,600,700"]
                },
                custom: {
                    "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                    urls: ['assets/admin/assets/css/fonts.css']
                },
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

        <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/azzara.min.css') }}">
    </head>
    <body class="login">
        @yield('content')
        
        <script scr="{{ asset('assets/admin/assets/css/azzara.min.css') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/core/jquery.3.2.1.min.js') }}" ></script>
        <script src="{{ asset('assets/admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/ready.js') }}"></script>
    <script>
        $("body").on('click', '.toggle-password', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#pass_log_id");
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    </body>
</html> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    @if (Route::currentRouteName() == 'login')
        <title>Login</title>
    @else
        <title>Register</title>
    @endif
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />

    <script src="{{ asset('assets/admin/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['assets/admin/assets/css/fonts.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/azzara.min.css') }}">
</head>

<body class="login">
    @yield('content')
        <script scr="{{ asset('assets/admin/assets/css/azzara.min.css') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/core/jquery.3.2.1.min.js') }}" ></script>
        <script src="{{ asset('assets/admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/core/bootstrap.min.js') }}"></script>
    @if (Route::currentRouteName() == 'login')
        {{-- <script src="{{ asset('assets/admin/assets/js/ready.js') }}"></script> --}}
        <script>
            $("body").on('click', '.toggle-password', function() {
                $(this).toggleClass("far fa-eye-slash");
                var input = $("#password");
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        </script>
    @else
        <script>
            $("body").on('click', '.toggle-password', function() {
                $(this).toggleClass("far fa-eye-slash");
                var input = $("#password");
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });

            $("body").on('click', '.toggle-password2', function() {
                $(this).toggleClass("far fa-eye-slash");
                var input = $("#password-confirm");
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });

        </script>
    @endif
</body>

</html>