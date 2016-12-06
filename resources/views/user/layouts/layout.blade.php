<!DOCTYPE html>
<html>
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Browser Icon -->
      <link rel="shortcut icon" type="image/x-icon" href="/user_interface/img/logos/lw3andakdam.png" />
    <!-- Website Title -->
    <title>Law3andakDam - لو عندك دم</title>
    <!-- Include bootstrap.min.css -->
    <link rel="stylesheet" type="text/css" href="/user_interface/css/bootstrap.min.css">
    <!-- Include font-awesome.min.css -->
    <link rel="stylesheet" type="text/css" href="/user_interface/css/font-awesome.min.css">
    <!-- Include iCheck Skins  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/all.css">
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300" rel="stylesheet">
    <!-- Include style.css -->
    <link rel="stylesheet" type="text/css" href="/user_interface/css/style.css">
    <!-- Sweet Alerts -->
    <link rel="stylesheet" href="{{URL::asset('custom/sweetalerts/sweetalert.css')}}">
     

</head>
<body>
<!-- Navbar -->

<nav>
    <div class="container">
        <div class="row">
            <div class="logos">
                <div class="col-xs-12 col-sm-6 col-md-2 text-center">
                  <a href="{{url('/admin/home')}}">
                    <img src="/user_interface/img/logos/lw3andakdam.png" class="img-responsive">
                  </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 text-center">
                    <a href="http://desktop.bey2ollak.com/" target="_blank">
                    <img src="/user_interface/img/logos/bey2olak.png" class="img-responsive">
                    </a>
                </div>
            </div>

            <div class="col-xs-12 col-md-8 text-right">
                <img src="/user_interface/img/icons/menu_icon.png">
            </div>
        </div>
    </div>
</nav>




@yield('content')

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <label>Sign Up For Our Newsletter</label>
                <input type="text" class="form-control subscribeInput" placeholder="Enter E-mail Address">
                <button class="btn joinBtn">Join</button>
            </div>
            <div class="col-xs-12 col-md-8">
                <div class="footerLinks">
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <h4>CONNECT</h4>
                            <ul>
                                <li>
                                    <a href="{{getFaceBook()}}" 
                                     target="_blank">
                                        <i class="fa fa-facebook"></i>
                                        <span>Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{getTwitter()}}"  target="_blank">
                                        <i class="fa fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <h4>ABOUT</h4>
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>About us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/admin/Terms')}}">
                                        <span>Terms of Services</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <h4>HELP</h4>
                            <ul>
                                <li>
                                    <a href="{{url('/admin/ContactUs')}}">
                                        <span>Contact us</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p>Copyright @copy 2016 <a href="http://www.law3andakdam.com/">http://www.law3andakdam.com/</a> All Right Reserved ♥ Made With Love From Egypt</p>
            </div>
        </div>
    </div>
</footer>

<!-- validation -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js">
</script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/additional-methods.js"></script>
<script src="{{URL::asset('/custom/validation.js')}}"></script>
<!-- Include jquery-1.11.2.min.css -->
<script src="/user_interface/js/jquery-1.11.2.min.js"></script>
<!-- Include bootstrap.min.js -->
<script src="/user_interface/js/bootstrap.min.js"></script>
<!-- Include iCheck.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<!-- Include custom.js -->
<script src="/user_interface/js/custom.js"></script>


<!-- Sweet Alert -->
<script src="{{URL::asset('custom/sweetalerts/sweetalert.min.js')}}"></script>
@include('user.layouts.flash_message')
<!-- End Sweet Alert -->

</body>
</html>