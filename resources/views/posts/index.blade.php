@extends('main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-md btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>

		<div class="col-md-12">
			<hr>
		</div>
	</div> {{-- end of row --}}

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead style="color:#595959;">
					{{-- <th>ID</th> --}}
					<th>Title</th>
					<th>Body</th>
					<th>Created at</th>
					<th></th>
				</thead>	
				<tbody>

					@foreach ($posts as $post)

						<tr>
							{{-- <th> {{ $post->id }} </th> --}}
							{{-- <td> {{ $post->title }} </td> --}}
							<td> <a href="{{ route('posts.show', $post->id) }}" style="text-decoration:none;color:#3399ff;font-size:16px;"><b>{{ $post->title }}</b></a></td>
							<td> {{ substr($post->body,0, 50) }} {{ strlen($post->body) > 50 ? "..." : '' }}</td>
							<td> {{ date('M j,Y', strtotime($post->created_at)) }} </td>
							<td> <a href="{{ route('posts.show', $post->id)}}" class="btn btn-default btn-md">view</a> &nbsp; <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-default btn-md">edit</a> </td>
						</tr>

					@endforeach

				</tbody>
			</table>

			{{-- pagination --}}
			<div class="text-center">
				{!! $posts->links() !!}
			</div>


		</div>
	</div>

@stop

