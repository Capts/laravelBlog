@extends('main')

@section('title', '| All Tags')

@section('content')
	<div class="row">
		<div class="col-md-8" style="color:white;">
			<h1>Tags</h1>
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tags as $tag)
						<tr>
							<th>{{ $tag->id }}</th>
							<td>{{ $tag->name}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div> {{-- End of Md-8--}}

		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
					<h2>Create new tag</h2>
					{{ Form::label('name', 'Name')}}
					{{ Form::text('name', null,['class' => 'form-control' ]) }}

					{{ Form::submit('Create new tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing' ])}}
				{!!  Form::close() !!}


			</div>
		</div>
	</div>

@stop