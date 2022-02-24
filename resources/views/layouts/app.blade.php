<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>
    <div id="app">
        <div class="top_nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top_nav_left">
                            @guest
                            <a href="{{route('blog.index')}}">Project Laravel MUC</a>
                            @else
                            <a href="{{route('admin.index')}}">Project Laravel MUC</a>
                            @endguest
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="top_nav_right">
                            <ul class="top_nav_menu">
                                <li class="account">
                                    <a href="{{ url('/home') }}">
                                        @guest
                                        Đăng Nhập

                                        @else
                                        {{ Auth::user()->name }}
                                        @endguest
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="account_selection">


                                        @if (Route::has('login'))

                                        @auth

                                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng xuất</a></li>
                                        @else
                                        <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>

                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng Ký</a></li>
                                        @endif
                                        @endauth

                                        @endif
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main>
            @yield('content')
        </main>
    </div>


    <script src="{{asset('client/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('client/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('client/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('client/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('client/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('client/js/custom.js')}}"></script>

    @yield('blogjs')


</body>

</html>