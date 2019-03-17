@extends('layouts.app')

@section('content')
    <img src="{{asset("/images/FotoWithGrad.png")}}" class="img-fluid header-img">
    <div class="container mainInfo">
        <div class="col-12 text-center">
            <h1>Welcome to <b>Talk</b></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis tempor metus vitae lobortis. Suspendisse in nisi in nisi hendrerit faucibus ut a eros. Nulla ut ex turpis. Aenean non aliquet purus, ut rutrum ante. Integer porta vestibulum fringilla. Vestibulum sit amet risus dui. Cras tellus neque, lacinia dignissim odio at, dapibus auctor lorem. Praesent finibus lacus quis cursus pretium. Suspendisse porttitor egestas lacus sit amet varius.</p><br>
            <p>Sed placerat, magna ut maximus congue, arcu eros vulputate odio, ut sodales turpis sem ut enim. Integer pulvinar placerat nisi, vulputate molestie urna. Vivamus facilisis mi nisi, imperdiet tempor velit ultrices sed. Suspendisse potenti. Nulla euismod sapien ac nunc tincidunt eleifend. Praesent finibus risus velit, vitae ornare elit cursus at. Vivamus eu eleifend ligula. Quisque cursus, justo in ornare convallis, orci lorem pulvinar mi, vitae pharetra erat lectus id nisl. Donec convallis felis vitae augue commodo, sed sollicitudin odio sollicitudin. Nulla accumsan vel ipsum id vestibulum. Cras interdum massa nec urna blandit, at volutpat tortor accumsan. Vestibulum eget ante et dui finibus pretium vel nec est. Duis sollicitudin porttitor augue eu congue. Etiam tempor ex sit amet lacus facilisis efficitur. Suspendisse eros felis, consequat sit amet sem non, venenatis dapibus nisl. Sed diam eros, aliquam eu ornare et, fermentum a lacus.</p>
        </div>
        <hr>
        <div class="col-12 text-center">
            <h3 style="margin-bottom:3em;">To start chatting PUSH TO TALK</h3>
            <a class="btnTalk" href="#">Talk</a>
        </div>
    </div>
@endsection
