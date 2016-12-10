@extends('user.layouts.layout')


@section('content')


<!-- I Need Blood Form -->
<div class="needBlood">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">I'M A DONOR</div>
                    <div class="panel-body">

                      <form action="{{url('/Doner')}}" method="post" 
                           id="add-doner-form">
                               {{ csrf_field() }}

                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">EMAIL</span>
                            <input type="text" name="doner_email" class="form-control">
                           
                        </div>
                      
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">TELEPHONE</span>
                            <input type="number" name="doner_mobile" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">BLOOD TYPE</span>
                            <select class="form-control" name="blood_type" selected="selected" data-placeholder="Choose one..">
                            <!--  for data-placeholder -->
                                <option></option>

                                 @foreach($types as $key => $r)
                                  <option value="{{$key}}">{{$r}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="input-group">
                        <input type="checkbox" id="agree"> <label for="agree">I agree to terms and conditions</label>
                        </div>
                        <div class="input-group text-center">
                            <button class="btn" id="btn_checked" disabled>SUBMIT</button>
                        </div>
                    

                    </form>

               
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
