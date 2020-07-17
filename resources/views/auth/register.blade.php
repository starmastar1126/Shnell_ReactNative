<!DOCTYPE html>
<html lang="en">
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
	</head>
	<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Landing</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-features">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-reviews">Reviews</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-pricing">Pricing</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-faq">FAQ</a></li>
            <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="https://uicookies.com/" target="_blank"><span class="pb_rounded-4 px-4">Get Started</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->







     <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
                   
              
          <div class="col-md-6 relative align-self-center">
            <form method="POST" action="{{ route('register') }}" class="bg-white rounded pb_form_v1">
           @csrf
              <h2 class="mb-4 mt-0 text-center">Register</h2>
              
              <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" placeholder="First Name"  name="firstname" id="firstname" required autofocus>
                   @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
              </div>

                <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" placeholder="Last Name"  name="lastname" id="lastname" required autofocus>
                   @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
              </div>


              <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" id="email" name="email" placeholder="Email">

                 @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

              </div>


                 <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" id="password" name="password" placeholder="Password">

                  @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

              </div>


                <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                  

              </div>

             
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Register">

                  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

              </div>
            </form>

          </div>
              
        </div>
      </div>
    </section>
    <!-- END section -->
                        

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

