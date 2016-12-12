<?php use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>
 <html class="no-js"> 
    <head>
        <meta charset="utf-8">

        <title>L3D Dashboard</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

<!-- new dashord -->
  
<!-- Bootstrap 3.3.6 -->
{!! Html::style('/asset/bootstrap/css/bootstrap.min.css') !!}
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
{!! Html::style('/asset/dist/css/AdminLTE.min.css') !!}
<!-- AdminLTE Skins. Choose a skin from the css -->
{!! Html::style('/asset/dist/css/skins/_all-skins.min.css') !!}
<!-- iCheck -->
{!! Html::style('/asset/plugins/iCheck/flat/blue.css') !!}
<!-- Morris chart -->
{!! Html::style('/asset/plugins/morris/morris.css') !!}
<!-- jvectormap -->
{!! Html::style('/asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
<!-- Date Picker -->
{!! Html::style('/asset/plugins/datepicker/datepicker3.css') !!}
<!-- Daterange picker -->
{!! Html::style('/asset/plugins/daterangepicker/daterangepicker.css') !!}
<!-- bootstrap wysihtml5 - text editor -->
{!! Html::style('/asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Styles -->
<link href="/css/app.css" rel="stylesheet">
<!-- New Dashord -->


 

<!-- Browser Icon -->
<link rel="shortcut icon" type="image/x-icon" href="/user_interface/img/logos/lw3andakdam.png" >
<!-- END Icons -->

<!-- Sweet Alerts -->
<link rel="stylesheet" href="{{URL::asset('custom/sweetalerts/sweetalert.css')}}">
<!-- End Sweet Alerts -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="{{URL::asset('/css/plugins.css')}}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{{URL::asset('/css/main.css')}}">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="{{URL::asset('/css/themes.css')}}">
        <!-- END Stylesheets -->



    </head>
    <body>





    
    <!-- Page Wrapper -->
        <div id="page-wrapper">

           <!-- Preloader -->
            <div class="preloader themed-background">
                <div class="inner">
                    <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- End Preloader -->
            

        <!-- Page Container -->
           <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
        



             <!-- Alternative Sidebar -->
                <div id="sidebar-alt">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-alt-scroll">

                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                           


                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
             <!-- END Alternative Sidebar -->


            <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="index.html" class="sidebar-brand">
                                <i class=""> <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png" /></i><span class="sidebar-nav-mini-hide"><strong>{{getSetting()}}</strong></span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="page_ready_user_profile.html">
                                        <img src="{{URL::asset('img/placeholders/avatars/avatar2.jpg')}}" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name">{{Auth::user()->name}}</div>
                                <div class="sidebar-user-links">
                                    
                                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>

                                    <a href="{{url('/admin/logout')}}" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>
                            <!-- END User Info -->



                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                      
                            @include('admin.layouts.navbar')
                            </ul>
                            <!-- END Sidebar Navigation --> 


                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->

                </div>
            <!-- END Main Sidebar -->




        <!-- Main Container -->
                <div id="main-container">

             <!-- START Header -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->
                        </ul>
                        <!-- END Left Header Navigation -->

            
                      
                    </header>
             <!-- END Header -->


             <div id="page-content">
              @yield('content')
             </div>

            <!-- Footer -->
               <footer class="clearfix">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                </div>
                <div class="pull-left">
                    <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">Law3andakDam</a>
                </div>
               </footer>
            <!-- END Footer -->
 

               </div>
                <!-- END Main Container -->
          </div>
            <!-- END Page Container -->
       </div>
        <!-- END Page Wrapper -->


    <!-- Setting Div Icon In Side Bar -->
     <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="{{url('/admin/ChangeInformation')}}" method="POST"  
                        class="form-horizontal form-bordered" onsubmit="return myFunction()">
                           {{ csrf_field() }}
                            <fieldset>
                                <legend>Vital Info</legend>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="username">

                                    Username</label>
                                  <div class="col-md-8">
                                         <input type="text" id="username" name="username" 
                                         class="form-control" value="{{Auth::user()->name}}" >
                                  </div>                                   
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="email" name="email" class="form-control" 
                                        value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                                
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="pass1" name="password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="password">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="pass2" 
                                        name="password" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>

                   
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->

<!-- new dashord -->
  <!-- jQuery 2.2.3 --> 
{!! Html::script('/asset/plugins/jQuery/jquery-2.2.3.min.js') !!}
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
{!! Html::script('/asset/bootstrap/js/bootstrap.min.js') !!}
  
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
{!! Html::script('/asset/plugins/morris/morris.min.js') !!}
 
<!-- Sparkline -->
{!! Html::script('/asset/plugins/sparkline/jquery.sparkline.min.js') !!}
 
<!-- jvectormap -->
{!! Html::script('/asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
{!! Html::script('/asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
 
<!-- jQuery Knob Chart -->
{!! Html::script('/asset/plugins/knob/jquery.knob.js') !!}
 
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
{!! Html::script('/asset/plugins/daterangepicker/daterangepicker.js') !!}
 
<!-- datepicker -->
{!! Html::script('/asset/plugins/datepicker/bootstrap-datepicker.js') !!}
 
<!-- Bootstrap WYSIHTML5 -->
{!! Html::script('/asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
 
<!-- Slimscroll -->
{!! Html::script('/asset/plugins/slimScroll/jquery.slimscroll.min.js') !!}
 
<!-- FastClick -->
{!! Html::script('/asset/plugins/fastclick/fastclick.js') !!}
 
<!-- AdminLTE App -->
{!! Html::script('/asset/dist/js/app.min.js') !!}
 
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!! Html::script('/asset/dist/js/pages/dashboard.js') !!}
 
<!-- AdminLTE for demo purposes -->
{!! Html::script('/asset/dist/js/demo.js') !!}
  <!-- new dashord -->
  
<!-- Validation -->
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js">
      
  </script>
  <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/additional-methods.js"></script>
  <script src="{{URL::asset('/custom/validation.js')}}"></script>
<!-- Validation -->


        <!-- Modernizr (browser feature detection library) & Respond.js (enables responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="{{URL::asset('/js/vendor/modernizr-respond.min.js')}}"></script>


        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="{{URL::asset('/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{URL::asset('/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins.js')}}"></script>
        <script src="{{URL::asset('/js/app.js')}}"></script>
        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->

        <!-- Sweet Alert -->
        <script src="{{URL::asset('/custom/sweetalerts/sweetalert.min.js')}}"></script>
         @include('admin.layouts.flash_message')
          <!-- End Sweet Alert -->


      <!-- Load and execute javascript code used only in this page -->
        <script src="/js/pages/tablesDatatables.js"></script>
        <script>$(function () {
                TablesDatatables.init();
            });</script>

        @stack('scripts')
    </body>
</html>
