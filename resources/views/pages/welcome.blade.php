@extends('main')

@section('title', ' | Welcome')

@section('content')
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          <div class="jumbotron">
            <h1>Welcome chief !</h1>
            <p class="lead">Make something different.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
          </div>
        {{-- </div> --}}
      </div><!-- end of row -->
      
      <div class="row">
        <div class="col-md-8">

          @foreach($posts as $post)

            <div class="post">
              <a href="{{ url('blog/'.$post->slug) }}" style="text-decoration:none;color:#3399ff;font-size:16px;"><b><h3>{{ $post->title }}</h3></b></a>
              <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }} </p>
            </div>

            <hr>
          @endforeach
      </div>
         
        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
        </div>
      </div>
@endsection