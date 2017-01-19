@extends('main')

@section('title', '| Blog')

@section('content')

	<div class="row" >
		<div class="col-md-12">
			<div class="well">
				<h2 class="text-center" style="font-size:17px;font-family: 'Raleway', sans-serif;font-size: 26px;">ALL BLOG POSTS</h2>
  				<hr width="50%">
					<div class="row">
						<div class="col-md-10 col-md-offset-1" >
							<div class="table-responsive">
								<table class="table">
									<thead style="font-size:16px;color:#000;">
										<tr>
											<th>Title</th>
											<th>Body</th>
											<th>Published</th>

										</tr>
									</thead>
									@foreach ($posts as $post)
										<tbody style="font-size: 16px;color:#000;">
											<td><a href="{{ route('blog.single', $post->slug) }}" >{{ $post->title}}</a></td>
											<td>{{ substr($post->body, 0, 100) }}{{ strlen($post->body) > 100 ? '...' : "" }}</td>
											
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