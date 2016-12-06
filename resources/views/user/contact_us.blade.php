@extends('user.layouts.layout')

@section('content')

<!-- Contact Us Form -->
<div class="needBlood">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Contact us</div>
                    <div class="panel-body">

                <form class="form-horizontal"  method="POST" action="{{url('/admin/sendmail')}}">

                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">NAME</span>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">EMAIL</span>
                            <input type="email" class="form-control" name="mailano">
                        </div>
                         <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">SUBJECT</span>
                            <input type="text" class="form-control"  name="subject">
                        </div>
                         <div class="input-group">
                            <input type="text" class="form-control" name="mess"  
                            placeholder="Type your message ..." style="height:200px;">
                        </div>
                        
                       
                        <div class="input-group text-center">
                            <button class="btn">SEND</button>
                        </div>
                                   {{ csrf_field() }}
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection