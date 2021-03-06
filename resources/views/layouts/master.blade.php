<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
    {{--Toastr--}}
    <link href="{{asset('vendors/toastr/toastr.min.css')}}">
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
                            @foreach($socials as $social)
                            <li class="list-inline-item"><a href="{{$social->link}}" target="_blank"><i class="fa fa-{{$social->icon}}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 Login_shopping_wrap">
                        <ul class="top_option_link list-inline">
                            @auth
                            <li class="list-inline-item dropdown">
                                <a href="#" data-toggle="dropdown"><span class="fa fa-user"></span> {{Auth::user()->name}} <span class="caret"></span></a>
                                <ul class="dropdown-menu" style="right: 0;left: auto;">
                                    <li class="dropdown-menu-item auth-dropdown-item"><a style="" href="{{route('profile')}}" >  Profile</a></li>
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
                            <li id="topcartload" class="list-inline-item">
                                <i class="fa fa-shopping-cart" style="color: white;"></i> <a href="{{route('orderdetails')}}" class=""> {{Cart::count()}} Item(s) Rs.{{number_format(Cart::subtotal(),2)}}</a>
                            </li>
                            <li class="list-inline-item"><a href="{{route('order')}}" class="btn btn-sm btn-primary rounded-0">Shop Now</a></li>
                        </ul>
                    </div>

                </div></div>
        </div>
        <nav class="navbar navbar-expand-md  navbar-light" style="background-attachment: fixed;">
            <div class="container">
                <a href="/" class="navbar-brand text-warning font-weight-bold p-0 navbar_img_content" ><img src="{{ App\Setting::getLogo() }}" alt="" width="140px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #007bff !important;">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                    <ul class="navbar-nav text-center ml-auto">
                        @foreach ($main_menu as $link=>$menu)
                            @if (is_array($menu))
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-dark" href="{{ url($link) }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">{{ $menu[$link] }}</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($menu['sub'] as $sub_link=>$sub_menu)
                                            <a class="dropdown-item" href="{{ url($sub_link) }}">{{ $sub_menu }}</a>
                                        @endforeach
                                    </div>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ url($link) }}">
                                        {{ $menu }}
                                    </a>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div>
            </div>
        </nav>


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
                        <img src="{{ App\Setting::getLogo() }}" alt=""  width="50%">
                    </div>
                    <div class="social_box text-left">
                        <ul class="list-inline">
                            @foreach($socials as $social)
                            <li class="list-inline-item">

                                <a href="{{ $social->link }}" target="_blank"><i class="fa fa-{{ $social->icon }}"></i></a>

                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{--TOP LINKS--}}
                <div class="col-md-4 col-sm-12 col-12">
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
                <div class="col-md-3 col-md-offset-2 col-sm-12 col-12">
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

                    <h6 class="text-center main_footer_text">&copy; <?php echo(date('Y'));?>. All Rights Reserved.<br class="d-sm-none d-md-none d-lg-none">Designed and Developed By <span class="bottom_footer_span"><a href="https://www.facebook.com/roshan.kunwar.56"> Roshan Kunwar </a></span><span class="bottom_footer_span"> &amp; <a href="https://m.facebook.com/narayan.ghimire.528"> Narayan Ghimire </a></span></h6>

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

<script type="text/javascript" src="{{asset('vendor/js/sticky-kit.js')}}"></script>
{{--lodash--}}
<script src="{{asset('vendors/lodash.min.js') }}"></script>
<script src="{{asset('vendors/loadingoverlay.min.js') }}"></script>
{{--Toastr--}}
<script src="{{asset('vendors/toastr/toastr.min.js')}}"></script>


<script src="{{asset('js/script.js')}}"></script>

@yield('script')

<script>
    function topcartload() {
        url = "{{ route('topcartload') }}";
        $.ajax(url,{
            type: 'post',
            start: $('#topcartload').LoadingOverlay('show'),
            data: {
                _token: "{{csrf_token()}}"
            },
            success:function (response) {
                $('#topcartload').html(response);
                $('#topcartload').LoadingOverlay('hide');
            }
        });
    }

    function sidecartload() {
        url = "{{ route('sidecartload') }}";
        $.ajax(url,{
            type: 'post',
            start: $('#sidecartload').LoadingOverlay('show'),
            data: {
                _token: "{{csrf_token()}}"
            },
            success:function (response) {
                $('#sidecartload').html(response);
                $('#sidecartload').LoadingOverlay('hide');
            }
        });
    }
    function mobilecartload() {
        url = "{{ route('mobilecartload') }}";
        $.ajax(url,{
            type: 'post',
            start: $('#mobilecartload').LoadingOverlay('show'),
            data: {
                _token: "{{csrf_token()}}"
            },
            success:function (response) {
                $('#mobilecartload').html(response);
                $('#mobilecartload').LoadingOverlay('hide');
            }
        });
    }

    $(document).on('click', '.btn_add_to_cart', function(e){
        e.preventDefault();
        _form =  $(this).closest("form");
        _data =  _form.serialize();
        url = "{{ route('addtocart') }}";
        parent = $(this).closest(".order-menu-item");
        $.ajax(url,{
            type: 'post',
            data: _data,
            start: parent.LoadingOverlay('show'),
            success:function (response) {
                topcartload();
                sidecartload();
                mobilecartload();
                toastr.success(response.message);
                parent.LoadingOverlay('hide');
            }
        });
    });

    $(document).on('click', '.btn_remove_from_cart', function(e){
        e.preventDefault();
        _form =  $(this).closest("form");
        _data =  _form.serialize();
        url = "{{ route('removecart') }}";
        parent = $(this).closest(".side-block-order-content");
        $.ajax(url,{
            type: 'post',
            data: _data,
            start: parent.LoadingOverlay('show'),
            success:function (response) {
                topcartload();
                sidecartload();
                cartload();
                toastr.success(response.message);
                parent.LoadingOverlay('hide');
            }
        });
    });
</script>

</body>
</html>