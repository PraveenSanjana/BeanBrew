@extends('layouts.app')

@section('content')

<style>
@font-face {
    font-family: Catamaran;
    src: url(/Fonts/Catamaran-VariableFont_wght.ttf);
}
@font-face {
    font-family: Dancing;
    src: url(/Fonts/GreatVibes-Regular.ttf);
}
     body {
        background-color: #000; 
        color: #fff;
        margin: 0; 
        padding: 0; 
        overflow: hidden;
        background: url(Images/bg_4.jpg) fixed center;
        font-family: Catamaran;
    }
    .container {
        width: 45%;
        margin: 2% 1% 0 0%; 
        background-color: #000 
        border: 1px solid rgba(221, 221, 221, 0.9); 
        float: right;
        display: flex;
    }
    .card-header {
        color: #A6743E;
        text-align: center;
        font-size: 50px;
        margin: 0 0 25% 70%;
        font-family: Dancing;
    }
    .page-image {
        float: left; 
        height: 100vh;
        width: 35%;
       padding: 0 0 0 0;
    }
    .form-control {
        background-color: #000; 
        color: #fff; 
        border: 1px solid #A2A2A2; 
        border-radius: 5px;
        padding
    }
    .row{
        color: #E3E3E3;
        margin-bottom: 12%;
    }
    .col-md-4{
        font-size: 20px;
        color: #E3E3E3;
    }
    .col-md-6 input{
       width: 180%;
       padding: 12px;
    }
    .btn-primary {
        border: none;
        border-radius: 10px; 
        padding: 12px 20px; 
        cursor: pointer; 
        width: 120%;
        margin: 25% 0 10% 36%;
        background-color: #8E704F;
        font-weight: bold;
        font-size: 16px;
    }
    .form-check{
        margin-top: 2px; 
    }
    .linkbtn{
        color: #A2A2A2; 
        text-decoration: none; 
        margin: 0 0 10% 0;
    }
    .btn-link{
        color: #A2A2A2; 
        text-decoration: none; 
    }
    .Register{
        margin: 0 0 0 45%;
        width: 150%;
    }
    .registerlink{
        color: #fff; 
    }  
    .invalid-feedback {
    display: block; 
    color: #ff0000; 
    font-size: 14px; 
    margin-top: 5px; 
    }


</style>

<img src="{{ asset('images/row1.jpg') }}" alt="Your Image" class="page-image">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="linkbtn">
                                @if (Route::has('password.request'))
                                    <a class="btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                        <div class="Register">
                            <p>Don't have an account? <a class="registerlink" href="{{ route('register') }}">Register</a></p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


