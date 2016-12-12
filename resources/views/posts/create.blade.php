@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

	{!! Html::style('./css/parsley.css') !!}
	


@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => ''], ['class' => 'form-horizontal']) !!}

				{{ Form::label('title', 'Title:')}}
				{{ Form::text('title', null, array('class' => 'form-control','placeholder' => "Title here...", 'required' => '', 'maxlength' => "250"))}}
				
				{{ Form::label('slug', 'Slug:', ['class' => 'btn-h1-spacing']) }}
				{{ Form::text('slug', null, ['class'=> 'form-control', 'required' => '', 'minlength'=> '5', 'maxlength'=> '255'])}}

				{{ Form::label('category', 'Category', ['class' => 'btn-h1-spacing'])  }}
	            <select class="form-control" name="category_id">
	            	@foreach($categories as $category)
	            		<option value='{{$category->id }}'> {{ $category->name }} </option>
					@endforeach	
	            </select>
	            
				{{ Form::label('body', 'Post Body', ['class' => 'btn-h1-spacing'])}}
				{{ Form::textarea('body', null, array('class' => 'form-control','placeholder' => "Enter your content...", 'required' => ''))}}
				{{ Form::submit('Submit post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:5px;' ))}}

			{!! Form::close() !!}
			
		</div>
	</div>

@endsection

@section('scripts')
	
	{!! Html::script('../js/parsley.min.js') !!}

