@extends('layouts.master')
@section('title')
    Thank You
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
                            <h4>Thank You</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_page_wrap container-fluid pt-0 mt-md-5 mb-md-5" >
            <div class="container">

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12 mt-2 mb-2">
                            <div class="content_sections text-left text-justify">
                                <p>Your message has been successfully sent and hope to hear more from you in near future</p>
                                <p>Thank You !!</p>
                            </div>
                        </div>
                    </div>


            </div>
        </section>
    </main>


@endsection
