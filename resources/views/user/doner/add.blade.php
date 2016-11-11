@extends('admin.layouts.layout')

               
@section('content')


<!-- Horizontal Form Block -->
    <div class="block">
        <!-- Horizontal Form Title -->
        <div class="block-title">
           
            <h2><strong>Add</strong> Doner</h2>
        </div>

    
        <!-- END Horizontal Form Title -->

        <!-- Horizontal Form Content -->
        <form action="{{ url('admin/doners/create') }}" method="post" class="form-horizontal form-bordered"      id="add-doner-form">








<!-- Blood Type-->
 <div class="form-group">
        <label class="col-md-3 control-label " for="blood_type">Blood Type</label>
        <div class="col-md-9">
            <select id="blood_type" name="blood_type" selected="selected" class="select-select2"
             style="width: 100%;" data-placeholder="Choose one..">
             <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->

             @foreach($types as $key => $r)
                <option value="{{$key}}">{{$r}}</option>
            @endforeach
            
            </select>
        </div>
    </div>
    
<!-- End Blood Type -->

<!-- Email -->
        <div class="form-group">
            <label class="col-md-3 control-label" for="doner_email">Email</label>
            <div class="col-md-9">
                <input type="email" id="doner_email" name="doner_email" class="form-control" placeholder="Enter Email..">
            </div>
        </div>
      
<!-- End Email -->

<!-- Mobile -->
        <div class="form-group">
            <label class="col-md-3 control-label" for="doner_mobile">Mobile</label>
            <div class="col-md-9">
                <input type="number" id="doner_mobile" name="doner_mobile" class="form-control" placeholder="Enter Mobile..">
            </div>
        </div>
 
<!-- End Mobile -->



          
            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Add</button>

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

