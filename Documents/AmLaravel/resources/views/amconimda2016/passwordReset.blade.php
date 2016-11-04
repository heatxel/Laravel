@extends('amconimda20162')

@section('content')
    <div class="container ">
      <h1 class="main-title" style="color:white;">Recuperar contraseña</h1>
      <div class="content-info user-info">
            <h2>{{Session::get('name')}}</h2>
            <hr />
       </div> 
      {!! Form::open(array('url'=>'AdmineditaPass','method'=>'POST')) !!}
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
          	<input id="token" name="token" type="hidden" value="{{$token}}">
            <label>Contraseña <span>(6 caracteres mínimo)</span></label>
            <input type="password" name="password" id="password">
            <label>Confirmar contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
          <div style="clear:both;margin: 0 0 10px 0;"></div>
          <div class="col-2" style="float:left;margin: 0 10px 0 0;">
             <a href="/amconimda2016" id="btn-cancel" class="btn-gray" style="color:white;">Cancelar</a>
           </div>
           <div class="col-2" style="min-height:0 !important;height:25px !important; float:left;">
           	{!! Form::submit('Guardar datos', array('class'=>'btn-default', 'id'=>'btn-changeprofile')) !!}
           </div>
           <div style="clear:both;"></div>
           {!! Form::close() !!}             
          </fieldset>
      </form>
    </div>
@endsection