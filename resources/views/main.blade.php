<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials._head')
</head> 

<body>

  @include('partials._nav')
    
    <div class="container">
      <br>
    	@include('partials._messages')

    	@yield('content')
    	
    </div><!-- end of contaienr -->
      @include('partials._footer')

      @include('partials._javascript')
      @include('partials._bootstrapscript')
 </body>
</html>