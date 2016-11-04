@extends('app')

@section('content')
      <div id="registro" class="row ">
         @foreach ($user as $users)   
        {!! Form::open(array('route' => array('saveUser'))) !!}
        {!! Form::hidden('facebook_id', $users->facebook_id, array('placeholder'=>$users->facebook_id))!!}
        {!! Form::hidden('id', Session::get('id'), array('placeholder'=>Session::get('id') ))!!}
        {!! Form::hidden('friend', $users->friend, array('placeholder'=>$users->friend ))!!}
          <fieldset>  
          @if (count($errors) > 0)
            <ul class="alert alert-danger">
              @foreach ($errors->all() as $error) 
                <li>{{$error}}</li>
              @endforeach
            </ul>
          @endif
              <div class="col-sm-10 item-centered">
                <h1 class="main-title text-centered"><span>Step 1</span> of 4:  Register</h1>

                <div class="col-sm-3">
                    <label>Name</label>
                    {!!Form::text('name', $users->name, array('placeholder'=>'Confirm your name','data-parsley-required-message'=>'This is required.','required'))!!}
                </div>
                <div class="col-sm-3">
                    <label>Last name</label>
                    {!!Form::text('lastname', $users->lastName, array('placeholder'=>'Confirm your last name','data-parsley-required-message'=>'This is required.','required'))!!}
                </div>
                <div class="col-sm-6">
                    <label>Email</label>
                    <input type="email" name="email" value="{{$users->email}}" placeholder="Confirm your email" id="fbMail" data-parsley-type="email" data-parsley-required-message="This is required." parsley-type-email-message="Please provide a valid email." required="required">
                </div>
                @endforeach
                <div class="col-sm-6">
                    <label class="small">{!! Form::checkbox('newsletter', 1, true) !!} I would like to receive exclusive offers from Aeromexico.</label>
                </div>
                <div class="col-sm-6">
                    <label class="small">
                        {!!Form::checkbox('tyc', 1, true, array('required'))!!} I’ve read and accepted <a href="https://aeromexico.com/en/travel-with-aeromexico/preparing-your-trip/regulations-and-policies/privacy-policy/?site=us" target="_blank">Privacy Policy</a> & <a href="#" data-toggle="modal" data-target="#terms">Terms and Conditions.</a>
                    </label>
                </div>
                <p class="text-centered">
                  <button class="btn-main glyphicon glyphicon-menu-right"><span>NEXT</span></button>
                </p>
            </div>
          </fieldset>
        {!!Form::close()!!}
      </div>
@endsection