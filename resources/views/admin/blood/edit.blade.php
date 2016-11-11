@extends('admin.layouts.layout')


               
@section('content')


<!-- Horizontal Form Block -->
    <div class="block">
        <!-- Horizontal Form Title -->
        <div class="block-title">
            
            <h2><strong>Edit</strong> Blood Type</h2>
        </div>

    
        <!-- END Horizontal Form Title -->

        <!-- Horizontal Form Content -->
        <form action="{{ url('/admin/blood_types/update') }}" method="post" class="form-horizontal form-bordered" >
         <input type="hidden" name="id"  value="{{$bloodtype->id}}" >


            <div class="form-group">
                <label class="col-md-3 control-label" for="type">Blood Type</label>
                <div class="col-md-9">
                    <input type="text" id="type" name="type" class="form-control" 
                    value="{{$bloodtype->type}}">
                    
                </div>
            </div>
          
            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>

                    <a class="btn btn-sm btn-primary" href="{{url('/admin/blood_types')}}"> Back 
                        <i class="fa fa-reply" aria-hidden="true"></i> 
                    </a>

                    
                </div>
            </div>
        </form>
        <!-- END Horizontal Form Content -->
    </div>
    <!-- END Horizontal Form Block -->
@endsection