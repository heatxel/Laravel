@extends('app')

@section('content')
{{\Debugbar::disable()}}
      <div class="row animated fadeInUp">
        <div class="col-md-6 item-centered">
           <h1 class="main-title text-centered">
            Gana una experiencia de vuelo a bordo de nuestro simulador Boeing 787
          </h1>
          <hr>
          <p class="text-centered">Regístrate y sé de los primeros en participar</p>
        </div>
      </div><!-- row-->
      <img src="assets/images/simulador_home.png" alt="simulador" class="responsive-image animated fadeInUp super-image">
      <div class="row animated fadeInUp">
        <div class="col-md-6 item-centered"> 
          <div id="preregistro" class="row ">
               {!! Form::open(array('route' => array('saveRegister'))) !!}
                <fieldset>
                    <div class="col-sm-10 item-centered">
                      <div class="col-sm-12">
                          {!!Form::text('name', '', array('placeholder'=>'Nombre','data-parsley-required-message'=>'This is required.','required'))!!}
                      </div>
                      <div class="col-sm-12">
                          {!!Form::text('lastname', '', array('placeholder'=>'Apellido','data-parsley-required-message'=>'This is required.','required'))!!}
                      </div>
                      <div class="col-sm-12">
                          <input type="email" name="email" value="" placeholder="Email" id="fbMail" data-parsley-type="email" data-parsley-required-message="Éste campo es requerido." parsley-type-email-message="Por favor proporciona un correo válido." required="required">
                      </div>
        
                      <div class="col-sm-12">
                          <label class="small">
                              {!!Form::checkbox('tyc', 1, true, array('required'))!!} Acepto los <a href="#" data-toggle="modal" data-target="#terminos">términos y condiciones</a>
                          </label>
                      </div>
                      <p class="text-centered">
                        <button class="btn-main glyphicon glyphicon-menu-right"><span>Enviar solicitud</span></button>
                      </p>
<!--                       <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#preregistroSuccess">
                        Launch demo modal
                      </button> -->
                  </div>
                </fieldset>
              {!!Form::close()!!}
            </div>
        </div>
      </div><!-- row-->
@endsection