{{-- <div class="loginTalkBgDiv"><img class="img-fluidv loginTalkBg" src="{{ asset('/images/Group10.png')}}"></div> --}}
@extends('layouts.app')

<style>
    body{
        background-image: url("/./images/Group10.png");
        background-repeat: no-repeat;
        background-position: center top;
    }
    .footerTalk{
        top:40vh;
    }
</style>

@section('content')
<div class="container loginTalkContent">
    <div class="row justify-content-center">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Sign IN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="reg-tab" data-toggle="tab" href="#reg" role="tab" aria-controls="reg" aria-selected="false">Sign UP</a>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="tab-content col-md-8 col-lg-6 col-xl-5" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <div class="panel panel-default loginTalkPanelLogin">
                        <div class="loginTalkBlurLayout"></div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
        
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                                    <div class="loginTalkFormDiv">
                                        <label for="email" class="col-md-4 control-label">Email</label>
                                        <input id="email" type="email" class="col-md-6 mr-auto" name="email" value="{{ old('email') }}" required autofocus>
        
                                        @if ($errors->has('email'))
                                        <br>
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    
        
                                    <div class="loginTalkFormDiv">
                                        <label for="password" class="col-md-4 control-label">Password</label>
                                        <input id="password" type="password" class="col-md-6 mr-auto" name="password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                    <button type="submit" class="loginTalkLoginBtn">
                                        Login
                                    </button>
                            </form>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                    </div>
            </div>
            <div class="tab-pane fade" id="reg" role="tabpanel" aria-labelledby="reg-tab">
                    <div class="panel panel-default loginTalkPanelLogin">
                        <div class="loginTalkBlurLayout"></div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
        
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                                    <div class="loginTalkFormDiv">
                                        <label for="email" class="col-md-4 control-label">REG</label>
                                        <input id="email" type="email" class="col-md-6 mr-auto" name="email" value="{{ old('email') }}" required autofocus>
        
                                        @if ($errors->has('email'))
                                        <br>
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    
        
                                    <div class="loginTalkFormDiv">
                                        <label for="password" class="col-md-4 control-label">REG</label>
                                        <input id="password" type="password" class="col-md-6 mr-auto" name="password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                    <button type="submit" class="loginTalkLoginBtn">
                                        Login
                                    </button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
