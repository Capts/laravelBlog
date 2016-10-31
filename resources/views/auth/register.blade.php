@extends('main')

@section('title', '| Register')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::open() !!}
				<h2>Register</h2>
				<hr><br>
				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control input-lg']) }}

				{{ Form::label('email', 'Email:', ['class' => 'form-spacing-top']) }}
				{{ Form::email('email', null, ['class' => 'form-control input-lg']) }}
		
				{{ Form::label('password', 'Password:', ['class' => 'form-spacing-top']) }}
				{{ Form::password('password', ['class' => 'form-control input-lg']) }}

				{{ Form::label('password_confirmation', 'Password Confirmation:', ['class' => 'form-spacing-top']) }}
				{{ Form::password('password_confirmation', ['class' => 'form-control input-lg']) }}
				
				{{ Form::submit('Register', ['class' => 'btn btn-primary form-spacing-top btn btn-block btn-lg'])}}


			{!! Form::close() !!}
		</div>
	</div>



@endsection