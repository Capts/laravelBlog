@extends('main')

@section('title', '| Blog')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1>Blog</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead style="font-size:16px;">
										<tr>
											<th>Title</th>
											<th>Body</th>
											<th>Views</th>
											<th>Published</th>

										</tr>
									</thead>
									@foreach ($posts as $post)
										<tbody style="font-size: 16px;">
											<td><a href="{{ route('blog.single', $post->id) }}" >{{ $post->title}}</a></td>
											<td>{{ substr($post->body, 0, 80) }}{{ strlen($post->body) > 80 ? '...' : "" }}</td>
											<td>views here</td>
											<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
										</tbody>
									@endforeach
								</table>
								<hr>
							</div><!-- end responsive-->
						</div> <!-- end md-10 offset 1 -->
					</div>


			</div> <!-- panel default -->

		</div> <!-- col md 12 -->
	</div>
	<div class="div">
		<div class="col-md-12">
			<div class="div">
				<div class="text-center">
					{!! $posts->links() !!}
				</div>
			</div>

		</div>
	</div>
@endsection