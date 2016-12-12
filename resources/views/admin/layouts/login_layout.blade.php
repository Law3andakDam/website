<!DOCTYPE html>
<html>
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <title>Law3andakDam - لو عندك دم</title>
     
      <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">


    <!-- Browser Icon -->
      <link rel="shortcut icon" type="image/x-icon" href="/user_interface/img/logos/lw3andakdam.png" />
    <!-- Website Title -->

     <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins.css')}}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="{{URL::asset('css/themes.css')}}">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (enables responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="{{URL::asset('js/vendor/modernizr-respond.min.js')}}"></script>
     

</head>
<body>
        <!-- START Login Full Background -->
        <img src="/user_interface/img/Homepage_background.png" alt="Login Full Background" class="full-bg animation-pulseSlow">
        <!-- END Login Full Background -->


<!-- Navbar -->
        <nav>
            <div class="container">
                <div class="row">
                    <div class="logos">
                        <div class="col-xs-12 col-sm-6 col-md-2 text-center">
                          <a href="{{url('/Home')}}">
                            <img src="/user_interface/img/logos/lw3andakdam.png" class="img-responsive">
                          </a>
                        </div>
                       
                    </div>

                </div>
            </div>
        </nav>
<!-- Navbar -->



@yield('content')



        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="{{URL::asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{URL::asset('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins.js')}}"></script>
        <script src="{{URL::asset('js/app.js')}}"></script>
       <script src="{{URL::asset('/custom/validation.js')}}"></script>
        <!-- Load and execute javascript code used only in this page -->
        <script src="{{URL::asset('js/pages/login.js')}}"></script>
        <script>$(function(){ Login.init(); });</script>
</body>
</html>