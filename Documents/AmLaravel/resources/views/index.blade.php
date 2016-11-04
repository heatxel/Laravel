@extends('app')

@section('content')
      <div class="row animated fadeInUp">
        <div class="col-md-6 item-centered">
           <h1 class="main-title text-centered">
            WIN A TRIP TO <br><strong>THE RIVIERA MAYA</strong>
          </h1>
          <p></p>
            @if(Session::has('id'))
            <p class="text-centered"><button class="btn-main glyphicon glyphicon-menu-right" onclick="dataLayer.push({'action': 'jointheguest','redSocial': 'facebook','event': 'themayanchallenge'});window.location.href='logout'"><span>LOGOUT</span></button></p>
            @else
            <p class="text-centered"><button class="btn-main glyphicon glyphicon-menu-right" onclick="dataLayer.push({'action': 'jointheguest','redSocial': 'facebook','event': 'themayanchallenge'});window.location.href='loginFB/facebook'"><span>FB LOGIN</span></button></p>
            <p class="text-centered"><button class="btn-main glyphicon glyphicon-menu-right" onclick="dataLayer.push({'action': 'jointheguest','redSocial': 'facebook','event': 'themayanchallenge'});window.location.href='loginFB/twitter'"><span>TWITER LOGIN</span></button></p>
            @endif
        </div>
      </div>
@endsection