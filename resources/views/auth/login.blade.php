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
            <div class="panel panel-default col-md-8 col-lg-6 col-xl-5 loginTalkPanelLogin">
                <div class="loginTalkBlurLayout"></div>
                <div class="panel-heading h1" style="margin-bottom:1em">Log In</div>
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
        </div>
    </div>
</div>
@endsection
