@extends('layouts.master')

@section('title')
{{$page->title}}
@endsection

@section('css')

@endsection

@section('content')

    <main>
        <section class="banner_wrap container-fluid p-0">
            <div class="overlay"></div>
            <div class="banner_wrap_bg" style="background-image: url('{{asset('images/cow2.jpeg')}}');"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="banner_sections" >
                            <h4>{{$page->title}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_page_wrap container-fluid pt-0 mt-md-5 mb-md-5" >
            <div class="container">

                <div class="row">
                    <div class="col-md-8 col-sm-12 col-12 m-auto">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br>
                        @endif
                        @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p>
                                    {{ Session::get('success') }}
                                </p>
                            </div>
                            <br>
                        @endif
                        @if(Session::has('error'))
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p>
                                    {{ Session::get( 'error') }}
                                </p>
                            </div>
                            <br>
                        @endif
                        <div class="contact_sections">
                            <form action="{{route('contact')}}" method="post" id="contact_form_sections">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <label for="sr-only" class="text-left">Fullname</label>
                                        <input type="text" name="name" class="form-control" required="required">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <label for="sr-only" class="text-left">Phone</label>
                                        <input type="text" name="phone" class="form-control" required="required">
                                    </div>



                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <label for="sr-only" class="text-left">Email</label>
                                        <input type="email" name="email" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                    <label for="sr-only" class="text-left">Address</label>
                                    <textarea name="address" id="" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <label for="sr-only" class="text-left">Question/Message</label>
                                        <textarea name="message" id="" cols="30" rows="6" class="form-control" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <img src="{{route('captcha')}}" alt="Captcha">
                                    </div>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Enter Captcha">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12 col-12 text-center">
                                        <button type="submit" class="btn btn-lg rounded-0">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-12 m-auto my-md-5">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-12 location_wrap">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 col-12">
                                        <div class="contact_icon_section">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-12 col-12">
                                        <div class="contact_icon_detail">
                                            <h4>Location</h4>
                                            <p>Address Locations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12 phone_wrap">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 col-12">
                                        <div class="contact_icon_section">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-12 col-12">
                                        <div class="contact_icon_detail">
                                            <h4>Phone</h4>
                                            <p>+977-12345678</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12 email_wrap">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 col-12">
                                        <div class="contact_icon_section">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-12 col-12">
                                        <div class="contact_icon_detail">
                                            <h4>Mail</h4>
                                            <p>info@bhagwansthan.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 map_wrap">
                        <div class="map_content">
                            <div class="mapouter"><div class="gmap_canvas">
                                    <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                   </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </section>

    </main>

@endsection