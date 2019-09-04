<nav class="navbar-default navbar-static-top" role="navigation">
     <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
       <h1> <a class="navbar-brand" href="{{ url('/') }}">SITE PRINCIPAL</a></h1>
       </div>
     <div class=" border-bottom">
    <div class="full-left">
      <section class="full-top">
        <button id="toggle"><i class="fa fa-arrows-alt"></i></button>
    </section>
    <form class=" navbar-left-right">
      <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
      <input type="submit" value="" class="fa fa-search">
    </form>
    <div class="clearfix"> </div>
   </div>


    <!-- Brand and toggle get grouped for better mobile display -->

   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="drop-men" >
        <ul class=" nav_1">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">{{ Auth::user()->name }}<i class="caret"></i></span><img src="{{URL::to('/')}}/images/wo.jpg"></a>
              <ul class="dropdown-menu" role="menu">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ route('login') }}">Login</a></li>
                      <li><a href="{{ route('register') }}">Register</a></li>

                  @else

                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endif
              </ul>
            </li>

        </ul>
     </div><!-- /.navbar-collapse -->
    <div class="clearfix">

    </div>
