<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>L3D Admin Login</title>
        

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
         
         <!-- Browser Icon -->
         <link rel="shortcut icon" type="image/x-icon" href="/user_interface/img/logos/lw3andakdam.png" >
         <!-- END Icons -->


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
   
        <img src="/user_interface/img/Homepage_background.png" alt="Login Full Background" class="full-bg animation-pulseSlow">
        <!-- END Login Full Background -->

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

        <!-- Login Container -->
        <div id="login-container" class="animation-fadeIn">
            <!-- Login Title -->
            <div class="login-title text-center">
                <h1><strong>{{getSetting()}}</strong></h1>
            </div>
            <!-- END Login Title -->

            <!-- Login Block -->
            <div class="block push-bit">
                <!-- Login Form -->
                <form action="{{url('/admin/dashboard')}}" method="POST" id="form-login" class="form-horizontal form-bordered form-control-borderless">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password" required>
                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        
                        <div class="col-xs-7 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Log---in </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <a href="javascript:void(0)" id="link-reminder-login"><small>Forgot password?</small></a>
                        </div>
                    </div>
                </form>
                <!-- END Login Form -->

              
            </div>
            <!-- END Login Block -->
        </div>
        <!-- END Login Container -->

  

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="{{URL::asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{URL::asset('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins.js')}}"></script>
        <script src="{{URL::asset('js/app.js')}}"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="{{URL::asset('js/pages/login.js')}}"></script>
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>