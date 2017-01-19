@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

	{!! Html::style('./css/parsley.css') !!}
	{!! Html::style('./css/select2.min.css') !!}
@endsection	


@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="well" style="padding:20px 60px;">
				<h3 class="text-center" style="border-bottom:0px solid #bbb;padding-bottom: 25px;">Create New Post</h3>
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
					
					{{ Form::label('tags', 'Tags', ['class' => 'btn-h1-spacing'])  }}
		            <select class="form-control select2-multi" name="tags[]" multiple="multiple">
		            	@foreach($tags as $tag)
		            		<option value='{{$tag->id }}'> {{ $tag->name }} </option>
						@endforeach	
		            </select>
		            
					{{ Form::label('body', 'Post Body', ['class' => 'btn-h1-spacing'])}}
					{{ Form::textarea('body', null, array('class' => 'form-control','placeholder' => "Enter your content...", 'required' => ''))}}
					{{ Form::submit('Submit post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:5px;' ))}}

				{!! Form::close() !!}
			</div>
			
		</div>
	</div>

@endsection

@section('scripts')
	
	{!! Html::script('../js/parsley.min.js') !!}
	{!! Html::script('../js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>
@endsection
