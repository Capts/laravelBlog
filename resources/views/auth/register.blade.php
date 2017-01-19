@extends('login_main')

@section('title', '| Register')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-1">
		<h1 class="text-center" style="font-weight: 100;color:#ecf0f1;font-family: 'Gloria Hallelujah', cursive;">Signup now!</h1>

	</div>
	<div class="col-md-3 col-md-offset-1">
		<div class="well" style="padding: 15px 35px;">
			{!! Form::open() !!}
				<h2 class="text-center">Register</h2><br>
				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control input-lg']) }}

				{{ Form::label('email', 'Email:', ['class'=> 'form-spacing-top']) }}
				{{ Form::email('email', null, ['class' => 'form-control input-lg']) }}
		
				{{ Form::label('password', 'Password:', ['class'=> 'form-spacing-top']) }}
				{{ Form::password('password', ['class' => 'form-control input-lg']) }}

				{{ Form::label('password_confirmation', 'Password Confirmation:', ['class'=> 'form-spacing-top']) }}
				{{ Form::password('password_confirmation', ['class' => 'form-control input-lg']) }}
				
				{{ Form::submit('Register', ['class' => 'btn btn-primary form-spacing-top btn btn-block btn-lg'])}}


			{!! Form::close() !!}
		</div>
	</div>
</div>
<br>


@endsection