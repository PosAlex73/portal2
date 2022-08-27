@extends('layouts.simple')
@section('content')
    <body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    @include('flash.errors')
                                    <div class="text-center mb-3">
                                        <img src="images/logo-full-black.png" alt="">
                                    </div>
                                    <h4 class="text-center mb-4">{{ __('vars.sign_up_your_account') }}</h4>
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>{{ __('vars.username') }}</strong></label>
                                            <input type="text" name="first_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>{{ __('vars.lastname') }}</strong></label>
                                            <input type="text" name="last_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>{{ __('vars.email') }}</strong></label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>{{ __('vars.password') }}</strong></label>
                                            <input type="password" name="password" class="form-control" value="Password">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>{{ __('vars.repeat_password') }}</strong></label>
                                            <input type="password" name="password_confirmation" class="form-control" value="Password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">{{ __('vars.register') }}</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>{{ __('vars.already_have_account') }} <a class="text-primary" href="{{ route('login') }}">{{ __('vars.login') }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
