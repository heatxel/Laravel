@extends('amconimda2016')

@section('content')
    <div id="choose-activities" class="row ">
    <h1 class="main-title item-centered" style="text-align:center;">User administrator</h1> 
    <br>
    {!! Form::open(array('route' => array('adhome'), 'id'=>'Filtra', 'name'=>'Filtra','style'=>'float:left;')) !!}
    <select name="Filtra" id="Filtra">
      <option value="">Todo</option> 
      @foreach ($users as $user)
      <option value="{{$user->id}}">{{$user->name}} {{$user->lastName}}</option> 
      @endforeach
    </select> 
    {!! Form::submit('Filtrar', array('class'=>'btn-default send-btn')) !!}       
    {!! Form::close() !!}
    {!! Form::open(array('url'=>'filtraUsuarios','method'=>'GET', 'class'=>'search', 'id'=>'searchAdmin','style'=>'float:right;')) !!}
    {!! Form::text('search','', array('style'=>'width:54%;')) !!}
    {!! Form::submit('Busca lo que sea', array('class'=>'btn-default send-btn')) !!}
    {!! Form::close() !!}
    <span class="clearfix"></span>
    <br>
    
    <table id="admin-table-photos" style="border-top:1px #fff solid;border-left:1px #fff solid;border-right:1px #fff solid;width:100%;margin:0 auto; text-indent:5px;">
      <thead style="border-bottom:1px #fff solid;">
        <tr style="color:white;">
          <th style="border-right:1px #fff solid;">ID</th>
          <th style="border-right:1px #fff solid;">Foto</th>
          <th style="border-right:1px #fff solid;">Usuario</th>
          <th style="border-right:1px #fff solid;">Youtuber</th>
           <th style="border-right:1px #fff solid;">Actividades</th>
          <th style="border-right:1px #fff solid;">Fecha de creacion</th>
          <th style="border-right:1px #fff solid;">Status</th>
          <th style="border-right:1px #fff solid;">Puntos</th>
        </tr>
      </thead>
      <tbody>
        <!-- item foto -->     
        @foreach($adminphotos as $adminphoto)             
        <tr style="border-bottom:1px #fff solid;color:white;">
          <td style="border-right:1px #fff solid;padding:5px 3px;vertical-align:middle;">{{$adminphoto -> id}}</td>
          <td class="item-photo the-photo" style="border-right:1px #fff solid;padding:5px 3px;vertical-align:middle;">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="{{$adminphoto->name}} {{$adminphoto->lastName}}" data-caption="Influencer: {{$adminphoto->youtuber}}" data-image="{{$adminphoto->avatar}}" data-target="#image-gallery">
              <img class="img-responsive" src="{{$adminphoto->avatar}}" alt="{{$adminphoto->name}} {{$adminphoto->lastName}}" width="59" height="59">
            </a>
          </td>
          <td style="border-right:1px #fff solid;padding:5px 3px;vertical-align:middle;">
              <p>{{$adminphoto->name}} {{$adminphoto->lastName}}</p>
              <p>{{$adminphoto->email}}</p>
              <p><a href="http://www.facebook.com/{{$adminphoto->facebook_id}}" target="_blank">Facebook</a></p> 
              <p>Newsletter: @if($adminphoto->newsletter == 1) Si @else No @endif</p>
              <p>Términos y condiciones: @if($adminphoto->tyc == 1) Si @else No @endif</p>
              <p>Liga: {{$adminphoto->string}}</p>
              <p>Última actualización:</p>
              <p>{{$adminphoto->updated_at}}</p>
          </td>
          <td style="border-right:1px #fff solid;padding:5px 3px;vertical-align:middle;text-align:center;">
            <p>{{$adminphoto->youtubername}}</p><br>
            <p style="text-align:center;"> <img style="margin: 0 auto;" class="img-responsive" src="assets/images/{{$adminphoto->youtuberpic}}" alt="{{$adminphoto->youtubername}}" width="59" height="59"></p>
          </td>
          <td style="border-right:1px #fff solid;padding:5px 3px;vertical-align:middle;">
              @if($adminphoto->activities == 'Sin actividades.')
                <p>Sin actividades</p>
              @else
                  @foreach($adminphoto->activities as $activities)
                  <p>{{$activities}}</p>
                  @endforeach
              @endif
          </td>
          <td style="border-right:1px #fff solid;padding:5px 3px;vertical-align:middle;">
            <p>{{$adminphoto->created_at}}</p>
          </td>
          <td style="border-right:1px #fff solid;padding:5px 3px;vertical-align:middle;">
              @if($adminphoto->status == 0)
              <p>Aprobado <img src="assets/images/admin-aprobado.png" alt="aprobado"></p>
              <p><strong>Aprobado por: </strong>{{$adminphoto->nombre}}</p>               
              {!! Form::open(array('url'=>'bloquearUsuario','method'=>'POST', 'class'=>'smaller')) !!}                                       
              <input id="id_user" name="id_user" type="hidden" value="{{$adminphoto->id}}">
              <a href="#" data-tooltip="Rechazar Usuario" class="tooltip-bottom">{!! Form::submit('', array('class'=>'send-btn rechazar')) !!}</a>
              {!! Form::close() !!}
              @else
              <p>Rechazado <img src="assets/images/admin-rechazado.png" alt="rechazado"></p>
              <p><strong>Rechazado por: </strong>{{$adminphoto->nombre}}</p>   
              {!! Form::open(array('url'=>'aprobarUsuario','method'=>'POST', 'class'=>'smaller')) !!}                                        
              <input id="id_user" name="id_user" type="hidden" value="{{$adminphoto->id}}">
              <a href="#" data-tooltip="Aprobar Usuario" class="tooltip-bottom">{!! Form::submit('', array('class'=>'send-btn guardar')) !!}</a>
              {!! Form::close() !!}
              @endif
          </td>
          <td style="padding:5px 3px;vertical-align:middle;">
            <p>
	@if(Session::has('end'))
              @if($adminphoto->total == null || $adminphoto->total == '')
              0
              @else
              {{$adminphoto->total}}
              @endif
	@else
              @if($adminphoto->points == null || $adminphoto->points == '')
              0
              @else
              {{$adminphoto->points}}
              @endif
	@endif
            </p>
          </td>         
        </tr>
        <!-- / item foto -->
        @endforeach         
      </tbody>
    </table>

    <div class="item-centered">{!! $adminphotos->render() !!}</div>
         <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content" style="background:#333;">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title" id="image-gallery-title"></h4>
                      </div>
                      <div class="modal-body">
                          <img id="image-gallery-image" class="img-responsive" src="" style="margin: 0 auto;">
                      </div>
                      <div class="col-xs-12 text-justify" id="image-gallery-caption" style="margin:10px 0;display:block;height:auto;text-align:center;">>
                          This text will be overwritten by jQuery
                      </div>
                      <div class="modal-footer"> 
                          <div class="col-xs-2" style="width:100px;float:left;">
                              <button type="button" style="width:100px;" class="btn btn-primary" id="show-previous-image">Anterior</button>
                          </div> 
                          <div class="col-xs-2" style="width:100px;float:right;">
                              <button type="button" style="width:100px;" id="show-next-image" class="btn btn-primary">Siguiente</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </div> 
@endsection