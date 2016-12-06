@extends('user.layouts.layout')



@section('content')
<!-- Buttons -->
<div class="buttons">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-2 col-md-offset-4">
                <a href="{{url('/admin/NeedBlood')}}" class="btn">I NEED BLOOD</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="{{url('/admin/Doner')}}" class="btn">I'M A DONOR</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p>Donate Blood. Save Lives</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
@endsection
