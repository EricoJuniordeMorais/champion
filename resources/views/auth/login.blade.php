<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">
        <title>CHAMPION DEALER</title>

        <style>
            h1{
              color: #000000;
            }
            nav{
              background-color: #ffffff;
            }
            small{
              color: #e02b20 ! important;
            }
            body {
              font-family: 'Arial';
              background-color: #ffffff;
            }
            h3{
              color: #e02b20 ! important;
            }
            a:hover{
              text-decoration: none;
            }
            footer{
              background-color: #e02b20;
              font-weight: bold;
              color: #ffffff;
            }
            .product-link{
              color: #000000;
            }
            .product-link:hover{
              color: #000000;
            }
            .banner{
              height: 100%;
              width: 100%;
              position: absolute;
              top: 0;
              left: 0;
              z-index: 0;
            }
            .proportion{
              padding-top:48.25%;
              width: 100%;
              position: relative;
            }
            /* .logo{
              height: 78px;
            } */
            .shop{
              font-weight: bold;
              font-size: 150%;
              color: #e02b20 ! important;
            }
            .shop:hover{
              color: #e02b20 ! important;
              filter: brightness(75%) ! important;
            }
            .contact-info{
              display:flex;
              margin-left:auto;
              margin-right:auto;
            }
            .info{
              width: 33.33%;
            }
            .info-content{
              margin: -15px 0 20px 0;
            }
            .logo{
                display: flex;
            }
            .logo-image{
                max-height: 78px;
            }
            .logo-name{
                margin-top: auto;
                margin-bottom: auto;
            }
            .responsive-info-nav{
              display: flex;
            }
            .responsive-item-nav{
              width: 50%;
              margin: 15px;
            }

            .add-phone{
              color: #e02b20;
              width: fit-content;
            }
            .add-phone-text{
              font-size: x-large;
            }
            .add-phone-icon{
              font-size: xx-large;
            }
            .add-phone:hover{
              cursor: pointer;
            }
            .add-phone-text:hover{
              cursor: pointer;
            }
            .navbar-link{
              font-weight: bold;
              font-size: 150%;
              color: #e02b20 ! important;
            }
            .remove-phone{
              color: #e02b20;
            }
            .remove-phone-text{
              font-size: x-large;
            }
            .remove-phone-icon{
              font-size: xx-large;
            }
            .remove-phone:hover{
              cursor: pointer;
            }
            .remove-phone-text:hover{
              cursor: pointer;
            }
            .sub-title{
              color: #e02b20;
              font-weight: bold;
              margin: 15px;
            }
            @media (max-width: 600px){
              .responsive-info{
                display: flex;
                margin-bottom: 15px
              }
              .responsive-info-nav{
                display: flex;
              }
              .responsive-item{
                width: 50%;
              }
              .responsive-item-email{
                width: 50%;
                border-right: solid;
                border-width: 1px;
                border-color: #ffffff;
              }
              .contact-info{
                  flex-direction: column;
              }
              .info{
                  width: 100%;
                  margin-right: 5px;
              }
              .logo{
                flex-direction: column;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
              }
              .logo-image-div{
                margin-left: auto;
                margin-right: auto;
              }
              .logo-name{
                margin-left: auto;
                margin-right: auto;
              }
            }

        </style>
    </head>
    <body class="">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="/auth">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                               <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-danger">
                                    {{ __('Login') }}
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
  <script src="/js/app.js"></script>
    </body>
</html>
