@extends('layouts.master')
@section('title')
    Login
@endsection
@section('content')
    <section class="banner_wrap container-fluid p-0">
        <div class="overlay"></div>
        <div class="banner_wrap_bg" style="background-image: url('{{asset('images/cow2.jpeg')}}');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="banner_sections" >
                        <h4>Login</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sign up -->
    <div class="row">
        <div class="col-md-4 m-auto">
            <div class="section-signup bg2-pattern mt-3 mb-4 text-md-right">
                <form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				First Time User?
			</span>


                    <!-- Button3 -->
                    <a class="btn3 flex-c-m size18 txt11 trans-0-4 m-10" href="{{route('register')}}" >
                        Sign-up
                    </a>
                </form>
            </div>
        </div>
    </div>
        <!-- Login form -->
    <section class="section-login bg1-pattern mt-4 mb-4">
        <div class="container">

            <form class="wrap-form-reservation size22 m-l-r-auto" action="{{ route('login') }}"  method="POST" role="form" id="login_form">
                {{ csrf_field() }}

                        <!-- Email address-->
                <div class=" form-group row">

                    <div class="col-md-3"></div>
                    <div class="col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">

						<span class="txt9">
							Email Address
						</span>

                        <div class="wrap-inputemail mt-3 mb-2">
                            <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                            {{--<i class="fa fa-envelope ab-r-m m-r-999" aria-hidden="true"></i>--}}
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                </div>

                {{--Password--}}
                <div class="form-group row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">

						<span class="txt9">
							Password
						</span>

                        <div class="wrap-inputphone mt-3 mb-2">
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>


                </div>
                <div class="form-group row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <a class="text-primary forget_p" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                <div class="wrap-btn-booking flex-c-m mt-3 text-center">
                    <!-- Button3 -->
                    <button type="submit" class="btn btn-primary flex-c-m size36 txt11 trans-0-4">
                        Login
                    </button>

                </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
        </div>
    </section>


@endsection
