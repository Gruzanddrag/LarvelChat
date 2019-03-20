<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Talk</title> 
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>  
    
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- Font Awsome--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        @font-face{
            font-family: "Primary";
            src : url("{{asset('/fonts/AgencyFB.TTF')}}");
        }
        body{
            font-family: "Primary";
            background-color: #161616;
            color:white;
        }
    </style>

    {{-- Styles --}}

    <link href="{{ asset('css/main.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/login.css') }}" rel="stylesheet"> 
</head>
<body>
    <div class="contentTalk">
    <div class="container">
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand talkLogo fontWhite" href="{{ url('/')}}">Talk</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span style="color:white; font-size:2em;"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item col-md-6 col-lg-4 text center ">
                            <a class="nav-link fontWhite headerNavBtn text-center" href="{{ route('login') }}">Sign IN/Sign UP</a>
                        </li>
                        <li class="nav-item col-xl-2 col-md-4  text center">
                                <a class="nav-link fontWhite headerNavBtn text-center" href="#">News</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
        @yield('content')
    </div>
    <div class="container-fluid footerTalk">
        <nav class="navbar navbar-expand-md justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item text-center">
                    <a class="nav-link fontWhite headerNavBtn text-center" href="#">About us</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link fontWhite headerNavBtn text-center" href="#">Privacy policy</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link fontWhite headerNavBtn text-center" href="#">Contacts</a>
                </li>
            </ul>
        </nav>
        <div class="col-12 text-center copyright">
            2019© all rights reserved
        </div>
    </div>
</body>
</html>
