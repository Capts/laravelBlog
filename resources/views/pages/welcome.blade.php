@extends('main')

@section('title', ' | Welcome')

@section('content')
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          <div class="jumbotron">
            <h1>Welcome to my Blog</h1>
            <p class="lead">Hello friend</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
          </div>
        {{-- </div> --}}
      </div><!-- end of row -->
      
      <div class="row">
        <div class="col-md-8">

          @foreach($posts as $post)

            <div class="post">
              <h3>{{ $post->title }}</h3>
              <p>{{ $post->body }}</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>
          @endforeach
      </div>
         
        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
        </div>
      </div>
@endsection