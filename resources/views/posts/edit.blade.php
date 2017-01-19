@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

@section('stylesheets')

	{!! Html::style('./css/select2.min.css') !!}

@endsection

	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

			<div class="col-md-8">

				<div class="well" style="padding:20px 50px;">
					{{ Form::label('title', 'Title')}}
					{{ Form::text('title', null, ["class" => 'form-control']) }}

					{{ Form::label('slug', 'Slug:', ["class" => 'form-spacing-top']) }}
					{{ Form::text('slug', null, ['class'=> 'form-control', 'required' => '', 'minlength'=> '5', 'maxlength'=> '255'])}}

					{{ Form::label('category_id', 'Category', ["class" => 'form-spacing-top']) }}
					{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

					{{ Form::label('body', 'Body', ["class" => 'form-spacing-top'])}}
					{{ Form::textarea('body', null, ["class" => 'form-control'])}}
				</div>
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<label>Url:</label>
							<p><a href="{{ url($post->slug) }}">{{ url($post->slug) }}</a></p>
					</dl>
					<dl class="dl-horizontal">
						<label>Created At:</label>
						<p>{{ date('M j, Y h:ia', strtotime($post->created_at))}}</p>
					</dl>
					<dl class="dl-horizontal">
						<label>Last updated:</label>
						<p>{{ date('M j, Y h:ia', strtotime($post->updated_at))}}</p>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block'))!!}
						</div>
						<div class="col-sm-6">
							{{ Form::submit('Save', ["class" => 'btn btn-success btn-block'])}}
						</div>
					</div>
				</div>
			</div>
		{!! Form::close()!!}
		
	</div> {{-- end of the row .form --}}

@stop

@section('scripts')
	{!! Html::script('../js/select2.min.js') !!}
@endsection