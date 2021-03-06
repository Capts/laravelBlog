<!--NAVBARRRRRRRRRRRRRRR -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid" style="background-color: #000; height: 55px;">
      
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="/" style="margin-left: 100px;font-family: 'Reem Kufi', sans-serif;">BLOG &nbsp;<small style="font-size: 32px;font-family: 'Permanent Marker', cursive;">A </small> THING</a>
          <!-- <a class="navbar-brand" href="/"> <img src="/img/logos/logo.png" style="height: 60px;width: 60px; position: absolute;margin-left: 150px;top:-1px;" /></a> -->
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >

          <ul class="nav navbar-nav " style="font-size:17px;font-family: 'Raleway', sans-serif;">
            <li class="{{ Request::is('/') ? "active" : " " }}"><a href="/" style="margin-left: 100px;"><b>Home</b></a></li>
            <li class="{{ Request::is('blog') ? "active" : " " }}"><a href="/blog"><b>Blog</b></a></li>
            
            @if(Auth::check())
           <!--  <li class="{{ Request::is('blog') ? "active" : " " }}"><a href="/about"><b>About</b></a></li> 
            <li class="{{ Request::is('blog') ? "active" : " " }}"><a href="/contact"><b>Contact</b></a></li>-->
            
            <a href="{{ route('posts.create') }}" class="btn btn-md  btn-success pull-right btn-sm" style="margin:10px 20px;">Create New Post</a>
            @else
            <!-- Does hide the contact and about -->
            @endif
            {{-- <li class="{{ Request::is('contact') ? "active" : " " }}"><a href="/contact">Contact</a></li> --}}
            {{-- <li class="{{ Request::is('about') ? "active" : " " }}"><a href="/about">About</a></li> --}}

          </ul>

         
          <ul class="nav navbar-nav navbar-right">

            <div class="col-md-7">
              {!! Form::open(['method' => 'GET', 'route' => 'blog.index', 'class' => 'navbar-form navbar-left' ]) !!}
              <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="search...">
                <span class="input-group-btn">
                  <button type="submitn" class="btn btn-default">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>

              {!! Form::close() !!}
            </div>

            @if (Auth::check())
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b> Hello {{ Auth::user()->name }}! <span class="caret"></span></b></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('posts.index') }}">My Posts</a></li>
                  <!-- <li><a href="about">About Me</a></li>
                  <li><a href="contact">Contact me</a></li> -->
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('categories.index') }}">Categories</a></li>
                  <li><a href="{{ route('tags.index') }}">Tags</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
              </li>
            @else
              
                <a href="{{ route('login') }}"  style="margin:8px 5px;" class="btn btn-default">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary" style="margin-right: 20px;">Register</a>
            @endif

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- end of navbarrrrrrrrrrrrrrrrrr -->