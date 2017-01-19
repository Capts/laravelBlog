@extends('main')

@section('title', '| All Posts')

@section('content')

		<div class="col-md-12" style="padding:10px 20px;">
			<a href="{{ route('posts.create') }}" class="btn btn-md  btn-success pull-right">Create New Post</a>
			
		</div>
		
		
		@foreach ($posts as $post)
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="/img/samp/insert.png" alt="..."  >
					<div class="caption">
						<h3>{{ $post->title }}  <small><h6>Published: {{ date('M j,Y', strtotime($post->created_at)) }} | Edited: {{ date('M j, Y', strtotime($post->updated_at)) }}</h6></small></h3>
						<p>{{ substr($post->body,0, 100) }} {{ strlen($post->body) > 100 ? "..." : '' }}</p>
						<a href="{{ route('posts.show', $post->id)}}" class="btn btn-primary btn-md">view</a>
						<a href="{{ route('posts.edit', $post->id)}}" class="btn btn-default btn-md">edit</a>
						
					</div>

				</div>
			</div>
		@endforeach
@stop

