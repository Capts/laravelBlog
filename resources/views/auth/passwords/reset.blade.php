@extends('main')

@section('title', '| Reset password ')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class=""></div>
				<div class="panel panel-default">
					<div class="panel-heading">Reset password</div>

					<div class="panel-body">
						{!! Form::open(['url' => 'password/reset', 'method' => 'POST']) !!}
							
							{{ Form::hidden('token', $token) }}
							
							{{ Form::label('email', 'Email Address: ') }}
							{{ Form::email('email', $email, ['class' => 'form-control']) }}

							{{ Form::label('password', 'New password: ') }}
							{{ Form::password('email', ['class' => 'form-control']) }}

							{{ Form::label('password_confirmation', 'Confirm new password ') }}
							{{ Form::password('password_confirmation', ['class' => 'form-control']) }}

							{{ Form::submit('Reset password', ['class' => 'btn btn-primary']) }}

						{!! Form::close() !!}
					</div>
				</div> 
			</div>	
	</div>{{-- End of Row --}}


@stop