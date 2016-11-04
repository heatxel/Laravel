@extends('amconimda20162')

@section('content')
<div class="container">
 <h1 class="main-title" style="color:white;">Registro</h1>
	<form id="loginForm" class="form-horizontal" role="form" method="POST" action="{{ url('/amconimda2016/register') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
            <label>Correo corporativo</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="password">
            <label>Confirma tu contraseña</label>
            <input type="password" class="form-control" name="password_confirmation"><br/>
            <input id="register-send" type="submit" value="Registrarme" class="btn-default">           
          </fieldset>
          <hr>
      </form>
         <a href="../amconimda2016" style="color:white;" class="btn-gray">Ya tengo cuenta</a>
</div>
@endsection