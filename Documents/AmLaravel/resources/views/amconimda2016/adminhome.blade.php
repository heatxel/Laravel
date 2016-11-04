@extends('amconimda2016')

@section('content')
<div class="container" style="color:white !important;">
      <h1 style="color:white !important;">Bienvenido</h1>
       <div class="content-info" style="color:white !important;">
        <div class="col-sm-12 item-centered">
          <div class="login-area">
            <form method="POST" action="{{ action("Auth\AdminAuthController@getLogin") }}">
            {!! csrf_field() !!}
              @foreach ($errors->all() as $error)
              <div class="alert alert-danger">
              Ups! something wrong. Try again.
              <ul>          
                <li>{{ $error }}</li>         
              </ul>
              </div>
              <br/>
              @endforeach
                      <fieldset>
                        <label>Email</label>                    
                        <input type="email" name="email" value="{{ old('email') }}" style="color:#333;">
                        <label>Contraseña</label>
                        <input type="password" name="password" id="password" style="color:#333;width:100%;">
                        <a href="AdminrecuperaPass" class="link" style="color:white !important;">¿Olvidaste tu contraseña?</a>
                        <br/>
                        <br/>
                        <button type="submit" class="login" style="color:#333;">Iniciar sesión</button>
                      </fieldset>
                    </form>
              </div>
           </div>
           <div class="col-sm-12 item-centered">
             <h2><a href="amconimda2016/register" style="color:white !important;">Regístrate ahora para administrar</a></h2>
           </div>  
       </div>  
    </div>
@endsection