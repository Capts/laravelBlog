<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials._head')
</head> 

<body style="background-color: #34495e;color:#262626;font-family:'Raleway', sans-serif;"">

  @include('partials._nav')
    
    <div class="container-fluid">
     
    	@include('partials._messages')

      <div class="col-md-8 col-md-offset-2">
        
        	@yield('content')
      </div> 
        

    </div><!-- end of contaienr -->
      


      @include('partials._javascript')
      @include('partials._bootstrapscript')
</body>
      @include('partials._footer')
</html>