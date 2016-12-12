@extends('main')

@section('title', '| Forgot password')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class=""></div>
				<div class="panel panel-default">
					<div class="panel-heading">Reset password</div>

					<div class="panel-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
						{!! Form::open(['url' => 'password/email', 'method' => 'POST']) !!}
							
							{{ Form::label('email', 'Email Address: ') }}
							{{ Form::email('email', null, ['class' => 'form-control']) }}

							{{ Form::submit('Reset password', ['class' => 'btn btn-primary btn-h1-spacing']) }}

						{!! Form::close() !!}
					</div>
				</div> 
			</div>	
	</div>{{-- End of Row --}}


@stop