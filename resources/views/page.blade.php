@extends('layouts.master')
@section('title') {{ $page->title }}
@endsection

@section('content')
    <main>
        <section class="banner_wrap container-fluid p-0">
            <div class="page-overlay"></div>
            <div class="banner_wrap_bg" style="background-image: url('{{ App\Setting::getBg() }}');"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="banner_sections" >
                            <h4>{{ $page->title }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_page_wrap container-fluid pt-0 mt-md-5 mb-md-5" >
            <div class="container">
                @if($page->image != null)
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="image_sections">
                            <img src="{{asset('uploads/page/'.$page->image)}}" alt="{{$page->title}}" width="100%" height="250px">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="content_sections text-left">
                            <p> {{ $page->details }}</p>
                        </div>
                    </div>
                </div>
                 @else
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="content_sections text-left text-justify">
                                <p> {{ $page->details }}</p>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </section>
    </main>

@endsection