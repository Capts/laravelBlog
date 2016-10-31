@extends('main')

@section('title', '| All Posts')

@section('content')
	<div class="row">
				<div class="col-md-10">
					<h2 class="text-left">My Posts</h2>
				</div>
				<div class="col-md-2">
					<a href="{{ route('posts.create') }}" class="btn btn-md  btn-success btn-h1-spacing">Create New Post</a>
				</div>
				<br><br><br><br><br><br>
	</div> {{-- end of row --}}
		
	<div class="row">
				@foreach ($posts as $post)
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="/img/samp/linux.jpg" alt="..." >
							<div class="caption">
								<h3>{{ $post->title }}  <small><h6>Published: {{ date('M j,Y', strtotime($post->created_at)) }} | Edited: {{ date('M j, Y', strtotime($post->updated_at)) }}</h6></small></h3>
								<p>{{ substr($post->body,0, 100) }} {{ strlen($post->body) > 100 ? "..." : '' }}</p>
								<a href="{{ route('posts.show', $post->id)}}" class="btn btn-primary btn-md">view</a>
								<a href="{{ route('posts.edit', $post->id)}}" class="btn btn-default btn-md">edit</a>
							</div>

						</div>
					</div>
				@endforeach
	</div>
	
		






@stop

