@extends('admin.layouts.login_layout')

@section('content')
<div class="container">
   

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
                <form action="{{url('/login')}}" method="POST" id="form-login" class="form-horizontal form-bordered form-control-borderless">
                {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email" value="{{ old('email') }}" 
                                required autofocus>
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
                        
                        <div class="col-xs-8 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Login </button>
                             <a class="btn btn-sm btn-success" href="{{url('register')}}">
                               Signup
                             </a> 
                        </div>
                          
                    </div>
                
                </form>
                <!-- END Login Form -->

              
            </div>
            <!-- END Login Block -->
        </div>
        <!-- END Login Container -->

</div>
@endsection
