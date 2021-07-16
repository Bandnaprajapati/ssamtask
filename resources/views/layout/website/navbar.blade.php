  <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">        
        <div class="navigation navigation-2 navigation-3">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                        <nav class="navbar navbar-expand-lg">
                            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    

                                    <li class="nav-item">
                                        <a  href="{{url('/')}}">Home</a>
                                        
                                    </li>
                                    
                                    
                                    <li class="nav-item">
                                        <a href="{{url('event')}}">Events</a>
                                        
                                    </li>
                                    
                                    @auth
                                    
                                    <li class="nav-item">
                                        <a href="{{url('/home')}}">Dashboard</a>
                                    </li>
                                   
                                    @endauth
                                    @guest
                                    <li class="nav-item">
                                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                     </li>
                                     @if (Route::has('register'))
                                     <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                     </li>
                                     @endif
                                    @else
                                    @endguest
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="right-icon text-right">
                           <ul>
                            <li>
                                <form action="{{url('search')}}" method="post">
                                    @csrf
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" name="name" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <!-- <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search fa-sm"></i>
                                </button> -->
                                <button type="submit" class="btn btn-default">
                                <i class="fa fa-search fa-sm"></i>
                            </button>
                            </div>
                        </div>
                    </form>
                    </li>
                        </ul>
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->