@extends('main')

@section('title', '| Login')

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			{!! Form::open() !!}
				<h2 class="text-center">Login</h2>
				<hr width="50%"><br>
				{{ Form::label('email', 'Email:') }}
				{{ Form::email('email', null, ['class' => 'form-control input-lg']) }}

				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['class' => 'form-control input-lg']) }}
				<br>

				{{ Form::checkbox('remember') }}{{ Form::label('remember', ' &nbsp;&nbsp;Remember me')}}
				<br>

				{{ Form::submit('Login', ['class' => 'btn btn-primary form-spacing-top btn btn-block btn-lg'])}}


			{!! Form::close() !!}
		</div>
	</div>
<br><br><br><br><br><br><br><br><br><br>
@endsection