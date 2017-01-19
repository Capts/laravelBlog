@extends('login_main')

@section('title', '| Login')

@section('content')	

<div class="row">
	<div class="col-md-6 col-md-offset-1">
		<h1 class="text-center" style="font-weight: 100;color:#ecf0f1;font-family: 'Gloria Hallelujah', cursive;">Blogging will never be the same.</h1>

	</div>
	<div class="col-md-3 col-md-offset-1">
		<div class="well" style="padding: 15px 35px;">
			{!! Form::open() !!}
			<h2 class="text-center">Login</h2>
			<br>
			{{ Form::label('email', 'Email:') }}
			{{ Form::email('email', null, ['class' => 'form-control input-lg']) }}

			{{ Form::label('password', 'Password:', ['class' => 'form-spacing-top']) }}
			{{ Form::password('password', ['class' => 'form-control input-lg']) }}
			<br>

			{{ Form::checkbox('remember') }}{{ Form::label('remember', ' &nbsp;&nbsp;Remember me')}}
			<br>

			{{ Form::submit('Login', ['class' => 'btn btn-primary form-spacing-top btn btn-block btn-lg'])}} <br>
			<p><a href="{{ url('password/reset')}}" style="color:#000099;">Forgot password?</a></p>

			{!! Form::close() !!}
		</div>
	</div>
</div>
<br><br><br><br>

@endsection