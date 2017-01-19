@extends('main')

@section('title', "| $post->title")

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="well"  style="background-color: #ddd;">
			<h3  style="border-bottom:1px solid #bbb;padding-bottom: 25px;" class="text-center"> {{ $post->title }}</h3>
			
					
			<h5 class="pull-right">Posted in: {{ $post->category->name }} </h5>
			<p style="padding: 50px 30px;line-height: 40px;font-size: 19px;">{{ $post->body }}</p>
		</div>
	</div>
</div>
@endsection