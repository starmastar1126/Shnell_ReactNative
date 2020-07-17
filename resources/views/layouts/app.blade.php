<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Landing &mdash; Free One Page Bootstrap 4 Template by uicookies.com</title>
		<meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
		<meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet" />
	<link rel="stylesheet" href="/public/web/assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/public/web/assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/public/web/assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="/public/web/assets/fonts/fontawesome/css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="/public/web/assets/css/slick.css">
    <link rel="stylesheet" href="/public/web/assets/css/slick-theme.css">

    <link rel="stylesheet" href="/public/web/assets/css/helpers.css">
    <link rel="stylesheet" href="/public/web/assets/css/style.css">
    <link rel="stylesheet" href="/public/web/assets/css/landing-2.css">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
   





        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    xxxxxxxxxxxxxxxxxxxxxx
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
   




        <footer class="pb_footer bg-light" role="contentinfo">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <p class="pb_font-14">&copy; 2017 <a href="https://uicookies.com/">Landing</a> Free Bootstrap4. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://uicookies.com/">uicookies.com</a> <small>(Don't remove credit link on this footer. See <a href="https://uicookies.com/license/" target="_blank">license</a>)</small></p>
            <p class="pb_font-14">Demo Images: <a href="https://unsplash.com/" target="_blank" rel="nofollow">Unsplash</a></p>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- loader -->
    <!--<div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div>-->



    <script src="/public/web/assets/js/jquery.min.js"></script>
    
    <script src="/public/web/assets/js/popper.min.js"></script>
    <script src="/public/web/assets/js/bootstrap.min.js"></script>
    <script src="/public/web/assets/js/slick.min.js"></script>
    <script src="/public/web/assets/js/jquery.mb.YTPlayer.min.js"></script>

    <script src="/public/web/assets/js/jquery.waypoints.min.js"></script>
    <script src="/public/web/assets/js/jquery.easing.1.3.js"></script>

    <script src="/public/web/assets/js/main.js"></script>



</body>
</html>
