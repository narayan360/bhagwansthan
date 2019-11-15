@extends('layouts.master')

@section('title')
    Register
@endsection

@section('content')
    <section class="banner_wrap container-fluid p-0">
        <div class="overlay"></div>
        <div class="banner_wrap_bg" style="background-image:  url('{{ App\Setting::getBg() }}');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="banner_sections" >
                        <h4>Register</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Signup form -->
    <section class="section-register mt-5 mb-5">
        <div class="container">

            {{--Name--}}
            <form method="post" action="{{ route('register')}}">
                {{ csrf_field() }}
                <div class="form-group row">

                    <div class="col-md-3"></div>
                    <div class="col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}" >

						<span class="txt9">
							Name
						</span>

                        <div class="wrap-inputemail mt-3 mb-2">
                            <input class="form-control"  name="name" value="{{ old('name') }}" id="name" type="text" placeholder="Name" required autofocus>


                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>

                </div>
                <!-- Email address-->
                <div class="form-group row">

                    <div class="col-md-3"></div>
                    <div class="col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">

						<span class="txt9">
							Email Address
						</span>

                        <div class="wrap-inputemail mt-3 mb-2  ">
                            <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required>

                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                </div>

                {{--Password--}}
                <div class=" form-group row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6  {{ $errors->has('password') ? ' has-error' : '' }}">

						<span class="txt9">
							Password
						</span>

                        <div class="wrap-inputphone mt-3 mb-2">
                            <input class="form-control" type="password" id="password" name="password"  placeholder="Password" required/>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>


                </div>
                {{--Confirm Password--}}
                <div class="form-group row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">

						<span class="txt9">
							Confirm Password
						</span>

                        <div class="wrap-inputphone mt-3 mb-2">
                            <input class="form-control" type="password" name="password_confirmation" required >
                        </div>
                    </div>


                </div>
                {{--Agreement--}}
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <span class="txt9">
                            By signing I agree to the <a href="{{url('terms')}}">Terms of Use</a> and <a href="{{url('privacy-policy')}}">Privacy Policy</a>
                    </span>

                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="wrap-btn-booking mt-3 mb-2">
                            <!-- Button3 -->
                            <button type="submit" class="btn btn-primary rounded-0">
                                Signup
                            </button>
                        </div>

                    </div>
                    <div class="col-md-3"></div>
                </div>

              </form>
        </div>
    </section>

@endsection