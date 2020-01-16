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
                <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(Session::has('success'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <p>
                                        {{ Session::get('success') }}
                                    </p>
                                </div>
                            @endif
                            @if(Session::has('error'))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <p>
                                        {{ Session::get( 'error') }}
                                    </p>
                                </div>
                            @endif
                            <div class="content_sections text-left text-justify">
                                <form method="post" class="contact-form" action="{{ route('milksubs') }}" style="margin-top: 30px;" enctype="multipart/form-data">

                                    {!! csrf_field() !!}
                                    <fieldset>
                                        <legend><b>Customer Information</b></legend>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Full Name</label>
                                                <input placeholder="Enter Full Name" name="name" id="name" type="text" class="form-control" required="required">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="email">Email Address</label>
                                                <input placeholder="Enter Email Address" name="email" id="email" type="email" class="form-control" required="required">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="phone">Phone</label>
                                                <input placeholder="Enter Phone" name="phone" id="phone" type="text" class="form-control" required="required">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="district">District</label>
                                                <select name="district" id="district" class="form-control">
                                                    <option selected="selected">Select District</option>
                                                    <option value="Kathmandu">Kathmandu</option>
                                                    <option value="Bhaktapur">Bhaktapur</option>
                                                    <option value="Lalitpur">Lalitpur</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-md-12">
                                                <label for="address">Address</label>
                                                <textarea placeholder="Enter Address" name="address" id="address" class="form-control" rows="4"></textarea>
                                            </div>


                                        </div>

                                        <div class="row">


                                            <div class="form-group col-md-12">
                                                <label for="image">User Image</label><br>
                                                <input type="file" id="image" name="image" class="form-control">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <br>

                                    <fieldset>
                                        <legend><b>Subscription Type</b></legend>
                                        <div class="form-group">
                                            <label for="subscription_type">Subscription Type</label>
                                            <select name="subscription_type" id="subscription_type" class="form-control">
                                                <option selected="selected">Select Membership Type</option>
                                                <option value="{{App\Label::ofValue('milk:daily')}}">{{App\Label::ofValue('milk:daily')}}</option>
                                                <option value="{{App\Label::ofValue('milk:weekly')}}">{{App\Label::ofValue('milk:weekly')}}</option>
                                                <option value="{{App\Label::ofValue('milk:monthly')}}">{{App\Label::ofValue('milk:monthly')}}</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                    <br>
                                    <fieldset>
                                        <legend><b>Options</b></legend>
                                        <div class="form-group">
                                            <label for="options">Options</label>
                                            <select name="options" id="options" class="form-control">
                                                <option selected="selected">Select Options</option>
                                                <option value="{{App\Label::ofValue('milk:250ml')}}">{{App\Label::ofValue('milk:250ml')}}</option>
                                                <option value="{{App\Label::ofValue('milk:500ml')}}">{{App\Label::ofValue('milk:500ml')}}</option>
                                                <option value="{{App\Label::ofValue('milk:1Litre')}}">{{App\Label::ofValue('milk:1Litre')}}</option>

                                            </select>
                                        </div>
                                    </fieldset>
                                    <br>
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="subscription_type">Quantity</label>
                                                <input type="number" class="form-control" name="quantity" placeholder="Select Quantity" min="1">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <br>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <img src="{{ route('captcha') }}" alt="Captcha">
                                        </div>

                                        <div class=" form-group col-md-6">
                                            <input type="text" class="form-control {{ $errors->has('captcha') ? ' is-invalid' : '' }}" id="captcha" name="captcha" placeholder="Enter Captcha">
                                        </div>
                                    </div>

                                    <hr>
                                    <fieldset>
                                        <legend><b>Bank Details</b></legend>
                                        <div class="form-group">
                                            <label>
                                                <b>Please transfer Your subscription fee in this Bank account.</b><br>

                                                {{App\Label::ofValue('global:bank_name')}}<br>
                                                {{App\Label::ofValue('global:organization')}} <br>
                                                A/C: {{App\Label::ofValue('global:account_number')}} <br>

                                            </label>
                                        </div>
                                    </fieldset>
                                    <button class="btn btn-primary bt-hover mb-4 rounded-0">Send Subscription Request</button>
                                </form>
                            </div>
                        </div>
                    </div>


            </div>
        </section>
    </main>

@endsection