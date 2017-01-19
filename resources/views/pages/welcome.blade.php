@extends('main')

@section('title', ' | Welcome')

@section('content')
        

<div class="well" style="color:#000;">
  <h2 class="text-center" style="font-size:17px;font-family: 'Raleway', sans-serif;font-size: 26px;">Latest Posts</h2>
  <hr width="50%">
  @foreach($posts as $post) 

  <div class="post" style="padding: 10px 20px;">
    <a href="{{ url('blog/'.$post->slug) }}" style="font-family: 'Exo', sans-serif;font-size:21;text-decoration:none;color:#2980b9;"><b><h3>{{ $post->title }}</h3></b></a>
    <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }} </p>
    <hr>
  </div>

  @endforeach
</div>
 

@endsection