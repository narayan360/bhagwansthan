@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')





<section class="slider_content_wrap">
    {{--Slider--}}

    <div id="carouselExampleIndicators" class="carousel slide carousel_wrap" data-ride="carousel">
        <?php $i=0; ?>
        <?php $count=1; ?>
        <ol class="carousel-indicators carousel-indicators-numbers">
            @foreach($slides as $key=>$slide)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i++}}" class="{{$key==0 ? 'active' : ''}}">{{'0'.$count}}</li>
            <?php $count++; ?>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($slides as $key=>$slide)
            <div class="carousel-item {{$key==0 ? 'active' : ''}}">
                <div class="overlay"></div>
                <img class="d-block w-100" src="{{ $slide->image('450x300') }}" alt="{{ $slide->title }}">
                {{--<div class="carousel-caption  row">--}}

                    {{--<div class="col-md-4 col-sm-4 col-6 img_captions">--}}
                        {{--<img class="d-block w-100" src="{{asset('images/milkbottle.png')}}" alt="First slide" width="100%" height="50px">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-8 col-sm-8 col-6">--}}
                        {{--<div class="carousel_caption_wrap ">--}}
                            {{--<h2 class="mb-md-5 d-flex justify-content-center d-md-table mx-auto">A dairy Farm For<br> Nepal's Future</h2>--}}
                            {{--<a href="#" class="btn btn-primary btn-outline-primary d-flex justify-content-center d-md-table mx-auto rounded-0">Read More</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                {{--</div>--}}
            </div>
            @endforeach
            {{--<div class="carousel-item">--}}
                {{--<div class="overlay"></div>--}}
                {{--<img class="d-block w-100" src="{{asset('images/cows.jpeg')}}" alt="Second slide" >--}}
                {{--<div class="carousel-caption row">--}}
                    {{--<div class="col-md-4 col-sm-4 col-6 img_captions">--}}
                        {{--<img class="d-block w-100" src="{{asset('images/milkmatka.png')}}" alt="First slide" width="100%" height="50px">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-8 col-sm-8 col-6">--}}
                        {{--<div class="carousel_caption_wrap ">--}}
                            {{--<h2 class="mb-md-5">Reserarched<br>Consistent Nutritious</h2>--}}
                            {{--<a href="#" class="btn btn-primary btn-outline-primary d-flex justify-content-center d-md-table mx-auto rounded-0">Read More</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="carousel-item">--}}
                {{--<div class="overlay"></div>--}}
                {{--<img class="d-block w-100" src="{{asset('images/cow2.jpeg')}}" alt="Third slide">--}}
                {{--<div class="carousel-caption row">--}}
                    {{--<div class="col-md-4 col-sm-4 col-6 img_captions">--}}
                        {{--<img class="d-block w-100" src="{{asset('images/yogurt.png')}}" alt="First slide" width="100%" height="50px">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-8 col-sm-8 col-6">--}}
                        {{--<div class="carousel_caption_wrap ">--}}
                            {{--<h2 class="mb-md-5">Raw Fresh<br> Untouched</h2>--}}
                            {{--<a href="#" class="btn btn-outline-primary d-flex justify-content-center d-md-table mx-auto rounded-0">Read More</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            <span class="carousel-control-prev-span">Prev</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            <span class="carousel-control-next-span">Next</span>
        </a>
    </div>
    {{--Slider End--}}
</section>
{{--main    --}}

    <main>
        {{--Index About--}}
        {{--<section class="home_about_wrap mt-md-5">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}

                    {{--<div class="col-md-4">--}}
                        {{--<img src="{{asset('images/cows.jpeg')}}" alt="about_img" width="100%">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-8">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-12">--}}
                        {{--<h4 class="text-center Content_title">--}}
                            {{--About Us--}}
                            {{--<span class="cow_bg_content text-center" style=""><img src="{{asset('images/cow.png')}}" alt="" width="20px" height="20px" class="cow_content_img"></span>--}}
                        {{--</h4>--}}
                        {{--<p class="p-md-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci beatae consectetur cumque doloribus maiores odio quaerat recusandae voluptas voluptatem.</p>--}}
                        {{--<a href="#" class="btn btn-sm  btn-primary btn-outline-primary rounded-0">Book Tour</a>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</section>--}}
        <section class="index_about_wrap mt-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <h4 class="text-center Content_title">
                            About Us
                            <span class="cow_bg_content text-center" style=""><img src="{{asset('images/cow.png')}}" alt="" width="20px" height="20px" class="cow_content_img"></span>
                        </h4>

                    </div>

                    @if($about->image)
                    <div class="col-md-6 col-sm-12 col-12 mb-md-5">

                        <div class="index_about_img">
                            {{--<div class="overlay" style=""></div>--}}
                            <img src="{{asset('uploads/page/'.$about->image)}}" alt="about_img" width="100%">

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="panel text-left">
                            <p class="py-md-3 px-md-2">{!! str_limit($about->details,360) !!}</p>

                            <a href="{{url('aboutus')}}" class="btn btn-sm  btn-primary btn-outline-primary rounded-0">Learn More</a>
                        </div>

                    </div>
                        @else
                        <div class="col-md-8 col-sm-12 col-12 m-auto">
                            <div class="about-panel mb-2 mb-md-4 text-center">
                                <p class="">{!! str_limit($about->details,360) !!}</p>
                                <a href="{{url('about-us')}}" class="btn btn-sm  btn-primary btn-outline-primary rounded-0">Learn More</a>
                            </div>

                        </div>

                        @endif
                </div>
            </div>
        </section>
        {{--End Index About--}}

        {{--Index Milk Subscription--}}
        <section class="index_milk_subscription_wrap">
            {{--<div class="index_milk_subscription_bg" style="background-image: url('{{asset('images/bluebg.jpeg')}}');"></div>--}}
            <div class="index_milk_subscription_bg"></div>
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 col-sm-12 col-12 mt-md-5">
                        <h4 class="text-center Content_title">
                            Milk Subscription
                            <span class="cow_bg_content text-center" style=""><img src="{{asset('images/cow.png')}}" alt="" width="20px" height="20px" class="cow_content_img"></span>
                        </h4>
                    </div>
                 </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12 mb-md-5">
                        <div class="card cards_wrap">
                            <img class="card-img-top" src="{{asset('images/cows.jpeg')}}" alt="Card image">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5>{{App\Label::ofValue('milk:daily')}}</h5>
                                </div>
                                <div class="card-text">
                                    <p class="text-justify">
                                       {!! str_limit(\App\Label::ofValue('home:daily_para'),135) !!}
                                    </p>
                                </div>
                                <a href="{{url('milk-subscription')}}" class="btn btn-primary btn-outline-primary btn-sm rounded-0">Subscribe Now</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 mb-md-5">
                        <div class="card cards_wrap">
                            <img class="card-img-top" src="{{asset('images/cows.jpeg')}}" alt="Card image">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5>{{App\Label::ofValue('milk:weekly')}}</h5>
                                </div>
                                <div class="card-text">
                                    <p class="text-justify">
                                        {!! str_limit(\App\Label::ofValue('home:weekly_para'),135) !!}
                                    </p>
                                </div>
                                <a href="{{url('milk-subscription')}}" class="btn btn-primary btn-outline-primary btn-sm rounded-0">Subscribe Now</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 mb-md-5">
                        <div class="card cards_wrap">
                            <img class="card-img-top" src="{{asset('images/cows.jpeg')}}" alt="Card image">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5>{{App\Label::ofValue('milk:monthly')}}</h5>
                                </div>
                                <div class="card-text">
                                    <p class="text-justify">
                                        {!! str_limit(\App\Label::ofValue('home:monthly_para'),135) !!}
                                    </p>
                                </div>
                                <a href="{{url('milk-subscription')}}" class="btn btn-primary btn-outline-primary btn-sm rounded-0">Subscribe Now</a>
                            </div>
                        </div>
                        </div>

                    </div>
            </div>

        </section>
        {{--Index Milk Subscription End--}}

        {{--Parallax--}}
        <section class="container-fluid p-0">

        <div class="parallax" style="background-image: url('{{ App\Setting::getParallax() }}')">
            <div class="overlay" style="overflow: hidden; height: inherit;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="banner_sections_parallax text-center" >
                            <span class="">
                                {{\App\Label::ofValue('home:parallax_top')}}
                            </span>

                            <h1 class="">
                                {{\App\Label::ofValue('home:parallax_heading')}}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

                {{--<h4>{{App\Label::ofValue('parallax_heading')}}</h4>--}}
                {{--<h6>{{App\Label::ofValue('parallax_content')}}</h6>--}}


        </div>
        </section>
        {{--End PArallax--}}
        {{--Gallery--}}
        <section class="index_gallery_wrap mt-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <h4 class="text-center Content_title">
                            Gallery
                            <span class="cow_bg_content text-center" style=""><img src="{{asset('images/cow.png')}}" alt="" width="20px" height="20px" class="cow_content_img"></span>
                        </h4>
                    </div>
                    @if($gallaries)
                        @foreach($gallaries as $gallery)
                    <div class="col-md-3 col-sm-6 col-12 mb-md-4">
                        <div class="card">
                            <div class="card-img-top gallery_images hov-img-zoom">
                                <img src="{{asset('uploads/gallery/'.$gallery->image)}}" alt="{{$gallery->image}}" class="img-fluid" width="100%">
                            </div>
                        </div>
                    </div>
                        @endforeach
                        @else
                        <p>No Gallery Images.</p>
                    @endif


                </div>
            </div>
        </section>
        {{--Gallery End--}}
        {{--Index Testimonials--}}
        <section class="index_testimonials_wrap">
            {{--<div class="index_milk_subscription_bg" style="background-image: url('{{asset('images/bluebg.jpeg')}}');"></div>--}}
            <div class="index_milk_subscription_bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 mt-md-5">
                        <h4 class="text-center Content_title text-uppercase">
                            What Our Customers Has to Say
                            <span class="cow_bg_content text-center" style=""><img src="{{asset('images/cow.png')}}" alt="" width="20px" height="20px" class="cow_content_img"></span>
                        </h4>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <?php $i=0; ?>
                                @foreach($reviews as $key =>$review)
                                <li data-target="#myCarousel" data-slide-to="{{$i++}}" class="{{$key==0 ? 'active' : ''}}"></li>
                                @endforeach

                            </ol>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                @foreach($reviews as $key=>$review)
                                <div class="item carousel-item {{$key==0 ? 'active' : ''}}">

                                    <div class="img-box">
                                        @if(isset($review->image) && file_exists(public_path('/uploads/reviews/'.$review->image)))
                                            <img src="{{$review->image('300x300') }}" alt="image" width="150" height="150">
                                        @else
                                            <img src="{{ asset('images/user.png') }}" width="150" height="150">
                                        @endif

                                    </div>
                                    <p class="testimonial">{!! str_limit(strip_tags($review->details),120) !!}</p>
                                    <p class="overview"><b> {{$review->name}} {{ $review->country?$review->country->name:'' }}</b></p>
                                </div>
                                @endforeach
                                {{--<div class="item carousel-item">--}}
                                    {{--<div class="img-box"><img src="{{asset('images/cows.jpeg')}}" alt=""></div>--}}
                                    {{--<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>--}}
                                    {{--<p class="overview"><b>PQR</b>,pqr</p>--}}
                                {{--</div>--}}
                                {{--<div class="item carousel-item">--}}
                                    {{--<div class="img-box"><img src="{{asset('images/cows.jpeg')}}" alt=""></div>--}}
                                    {{--<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>--}}
                                    {{--<p class="overview"><b>MNO</b>,mno</p>--}}
                                {{--</div>--}}
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--Index Testimonials End--}}



        {{--Videos--}}
        <section class="index_video_wrap mt-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <h4 class="text-center Content_title">
                            Videos
                            <span class="cow_bg_content text-center" style=""><img src="{{asset('images/cow.png')}}" alt="" width="20px" height="20px" class="cow_content_img"></span>
                        </h4>

                    </div>
                </div>
                <div class="row">
                    @if($videos)
                        @foreach($videos as $video)
                    <div class="col-md-4 col-sm-12 col-12 mb-md-3 ">
                        <iframe width="100%" height="180" src="https://www.youtube.com/embed/{{$video->video_id}}" frameborder="0" allowfullscreen></iframe>
                    </div>
                        @endforeach
                        @else
                        <p>No videos.</p>
                    @endif

                </div>
            </div>

        </section>
        {{--Videos End--}}
    </main>
    {{--Main End--}}


@endsection

@section('script')


@endsection