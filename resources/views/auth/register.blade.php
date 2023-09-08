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
        margin: 0% 0% 0 5%; 
        float: right;
        display: flex;
    }
    .card-header {
        color: #A6743E;
        text-align: center;
        font-size: 40px;
        margin: 0% 0 0% 60%;
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
    }
    .row{
        color: #E3E3E3;
        margin-bottom: 2%;
    }
    .col-md-4{
        font-size: 15px;
        color: #E3E3E3;
    }
    .col-md-6 input{
       width: 180%;
       padding: 10px;
    }
    .btn-primary {
        border: none; 
        border-radius: 10px; 
        padding: 12px 20px; 
        cursor: pointer;
        width: 120%;
        margin: 15% 0 10% 36%;
        background-color: #8E704F;
        font-weight: bold;
        font-size: 16px;
    }
    .form-check{
        margin-top: 2px; 
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" placeholder= "Enter your first name" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" placeholder= "Enter your last name" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder= "Enter your email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" placeholder= "Enter your phone number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text"  placeholder= "Enter your address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder= "Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder= "Enter your password again" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection