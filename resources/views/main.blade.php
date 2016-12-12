<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials._head')
</head> 

<body style="background-color: #F6F7F2;">

  @include('partials._nav')
    
    <div class="container">
     
    	@include('partials._messages')

    	@yield('content')
    	
    </div><!-- end of contaienr -->
      @include('partials._footer')

      @include('partials._javascript')
      @include('partials._bootstrapscript')
</body>
</html>