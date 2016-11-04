@extends('amconimda2016')

@section('content')
    <div class="container">
      <h1 class="main-title" style="color:white;">Recuperar contraseña</h1>

      {!! Form::open(array('url'=>'AdminpasswordReset','method'=>'POST')) !!}
	@if (count($errors) > 0)
		<span class="error">
		<strong style="color:white;">Hubo un error, inténtelo de nuevo</strong><br><br>
			<ul>
			@foreach ($errors->all() as $error)
				<li style="color:white;">{{ $error }}</li>
			@endforeach
			</ul>
		</span>
	</br>
	@endif
          <fieldset>
            <label>Correo corporativo</label>
            {!! Form::text('email','', array('placeholder'=>'email@aeromexico.com')) !!}
            {!! Form::submit('Enviar acceso', array('class'=>'btn-default', 'id'=>'btn-changeprofile')) !!}
          </fieldset>
      {!! Form::close() !!} 
      <br/>
      	<a href="amconimda2016" style="color:white;" class="btn-gray">Ir al acceso a administradores</a>
    </div>
@endsection