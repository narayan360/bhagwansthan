<!doctype html>
<html lang="en">
<head>
     <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    {{--Css--}}
    <link rel="stylesheet" href="{{asset('vendor/css/bootstrap.min.css')}}">

    {{--Owl Carousel--}}
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/owl.carousel.min.css')}}">
    {{--External css--}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{--responsive--}}
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    @yield('css')

    {{--Font Awesome--}}
    <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/font-awesome.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
{{--Preloader--}}
<div id="preloader">
    <i class="circle-preloader"></i>
    <img src="{{asset('images/logo.png')}}" alt="Logo">
</div>

<header>
    <section class="header_wrap container-fluid p-0">

        <div class="top_header_wrap container-fluid p-0">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 col-sm-6 col-12">
                        <ul class="top_social_link list-inline text-dark">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>

                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 Login_shopping_wrap">
                        <ul class="top_option_link list-inline">
                            @auth
                            <li class="list-inline-item dropdown">
                                <a href="#" data-toggle="dropdown"><span class="fa fa-user"></span> {{Auth::user()->name}} <span class="caret"></span></a>
                                <ul class="dropdown-menu" style="right: 0;left: auto;">
                                    <li class="dropdown-menu-item auth-dropdown-item"><a style="" href="" >  Profile</a></li>
                                    <li class="dropdown-menu-item auth-dropdown-item">
                                        <a style="" href="{{ route('admin.logout') }}"
                                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"> Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li class="list-inline-item"><a href="{{route('login')}}" class="">Login</a></li>
                            <li class="list-inline-item"><a href="{{url('register')}}" class="">Register</a></li>
                            @endauth
                            <li class="list-inline-item"><a href="#" class=""><i class="fa fa-shopping-cart"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary rounded-0">Shop Now</a></li>
                        </ul>
                    </div>

                </div></div>
        </div>
        <div class="navbar_wrap_content container-fluid p-0">
            <div class="container">
                <div class="row logo_navbar_wrap">
                    <div class="col-md-2 col-sm-6 col-6 logo_section_header p-0">
                        <img src="{{asset('images/logo.png')}}" alt="Logo" class="" width="100%">
                        <h6 class="bhagwansthan_logo_text">Bhagwansthan</h6>
                    </div>
                    <div class="col-md-10 col-sm-6 col-6">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">


                            {{--<a class="navbar-brand" href="#">Navbar</a>--}}
                            <button class="navbar-toggler navbar-toggler-right justify-content-end" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-md-auto ">
                                    @foreach ($main_menu as $link=>$menu)
                                        @if (is_array($menu))
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="{{ url($link) }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">{{ $menu[$link] }}</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    @foreach ($menu['sub'] as $sub_link=>$sub_menu)
                                                        <a class="dropdown-item" href="{{ url($sub_link) }}">{{ $sub_menu }}</a>
                                                    @endforeach
                                                </div>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url($link) }}">
                                                    {{ $menu }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                    {{--<li class="nav-item active">--}}
                                        {{--<a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a href="{{url('/aboutus')}}" class="nav-link">About Us</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a href="{{url('/mission')}}" class="nav-link">Our Mission</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a href="{{url('/vision')}}" class="nav-link">Our Vision</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a href="#" class="nav-link">Products</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a href="#" class="nav-link">Services</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a href="#" class="nav-link">Tours</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a href="{{url('/gallery')}}" class="nav-link">Gallery</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a href="{{url('/contact')}}" class="nav-link">Contact Us</a>--}}
                                    {{--</li>--}}


                                </ul>

                            </div>


                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </section>
</header>

@yield('content')

{{--Footer--}}
<footer>
    <section class="top_footer_wrap container-fluid p-0">
        <div class="container">
            <div class="row top_footer_content py-md-5">
                {{--LOGO AND SOCIAL--}}
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="logo_box">
                        <img src="{{asset('images/logo.png')}}" alt=""  width="50%">
                    </div>
                    <div class="social_box text-left">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{--TOP LINKS--}}
                <div class="col-md-4 col-sm-12 col-12 col-md-offset-1">
                    <h5 class="text-left footer_title"> Quick Links</h5>
                    <div class="quick_links">
                        <ul class="list-unstyled">
                            @foreach ($footer_link as $item)
                                <li class=""><a href="{{ url($item->slug) }}">{{$item->title}}</a></li>
                            @endforeach
                            {{--<li class=""><a href="">Home</a></li>--}}
                            {{--<li class=""><a href="">About</a></li>--}}
                            {{--<li class=""><a href="">Contact</a></li>--}}
                            {{--<li class=""><a href="">Privacy Policy</a></li>--}}
                        </ul>
                    </div>
                </div>
                {{--CONTACT--}}
                <div class="col-md-4 col-sm-12 col-12 col-md-offset-1">
                    <h5 class="text-left footer_title">Get In Touch</h5>
                    <div class="contacts_links">
                        <ul class="list-unstyle">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="">
                                    {{ Label::ofValue('global:location') }}
                                </a></li>
                            <li> <i class="fa fa-phone"></i><a href="">
                                    {{ Label::ofValue('global:mobile') }}
                                </a></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="">
                                    {{ Label::ofValue('global:email') }}
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 py-md-2">
                    <h6 class="text-center main_footer_text">&copy; <?php echo(date('Y'));?>. All Rights Reserved.Designed and Developed By <span class="bottom_footer_span"><a href="https://www.facebook.com/roshan.kunwar.56"> Roshan Kunwar </a></span></h6>
                </div>
            </div>
        </div>
    </section>




</footer>
{{--Footer End--}}

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

{{--JS--}}
<script src="{{asset('vendor/js/bootstrap.min.js')}}"></script>

{{--Owl CArousel--}}
<script src="{{asset('vendor/owl-carousel/owl.carousel.min.js')}}"></script>

<script src="{{asset('js/script.js')}}"></script>

@yield('script')

</body>
</html>