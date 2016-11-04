@extends('amconimda2016')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Ha habido un error con tu login.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form method="POST" action="{{ action("Auth\AdminAuthController@getLogin") }}">
					    {!! csrf_field() !!}
					 
					    <div>
					        Email
					        <input style="width:auto !important;" type="email" name="email" value="{{ old('email') }}">
					    </div>
					 
					    <div>
					        Password
					        <input type="password" name="password" id="password">
					    </div>
					 
					    <div>
					        <input type="checkbox" name="remember"> Remember Me
					    </div>
					 	<br/>
					    <div>
					        <button type="submit">Login</button>
					    </div>
					</form>
					<span class="clearfix"></span>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
