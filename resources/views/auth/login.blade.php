@extends('layouts.app')

@section('content')

    <div class="section login-section">
        <div class="container">
            <div class="columns">
                <div class="column title-column">
                    {{-- This is a prime place to make
                         a component, if you're going to
                         be reusing this sort of text styling--}}
                    <h1 class="title is-size-3-mobile is-size-1-tablet">Welcome Back!</h1>
                    <p>Welcome back! It's great to see you! Have you had a chance to tell
                    your family, friends, and co-workers about us? If you haven't, take a second
                    before you log in to do that! Don't worry, we'll still be here when you get back!</p>

                    <h3 class="title is-size-3-tablet is-hidden-mobile is-hidden-tablet-only">Don't have an account?</h3>
                    <div class="align-button-container">
                        <a href="{{ route('login') }}" class="button is-large is-hidden-mobile is-hidden-tablet-only">Sign Up</a>
                    </div>
                </div>

                <div class="column">
                    <login-card
                        errors="{{ (empty($errors)) ? new stdClass() : $errors }}"
                        submit-route="{{ route('login') }}"
                        old-values="{{ json_encode(['email' => old('email')]) }}"
                    ></login-card>
                </div>

                <div class="column title-column is-hidden-desktop">
                    <h3 class="title is-size-5-mobile mobile-to-login">Don't have an account?</h3>
                    <div class="align-button-container">
                        <a href="{{ route('login') }}" class="button is-large">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                    {{--<label class="form-check-label" for="remember">--}}
                                        {{--{{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
