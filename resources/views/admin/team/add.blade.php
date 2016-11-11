@extends('admin.layouts.layout')

               
@section('content')


<!-- Horizontal Form Block -->
<div class="block">
    <!-- Horizontal Form Title -->
    <div class="block-title">
        
        <h2><strong>Add</strong> Team Member</h2>
    </div>


    <!-- END Horizontal Form Title -->

    <!-- Horizontal Form Content -->
    <form action="{{ url('/admin/teams/create') }}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data" id="add-member-form">


<!-- Name -->
        <div class="form-group">
            <label class="col-md-3 control-label" for="member_name">Name</label>
            <div class="col-md-9">
                <input type="text" id="member_name" name="member_name" class="form-control" placeholder="Enter Name..">  
            </div>
        </div>
<!-- End Name -->

<!-- Image -->
        <div class="form-group">
            <label class="col-md-3 control-label" for="member_image">Personal Image <em>(Optional)</em></label>
            <div class="col-md-9">
                <input type="file"   name="member_image" class="form-control">  
            </div>
        </div>
<!-- End Image -->

<!--Role -->

 <div class="form-group">
        <label class="col-md-3 control-label " for="member_role">Role</label>
        <div class="col-md-9">
            <select id="member_role" name="member_role" selected="selected" class="select-select2"
             style="width: 100%;" data-placeholder="Choose one..">
     <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
            @foreach($roles as $key => $r)
                <option value="{{$key}}">{{$r}}</option>
            @endforeach
            </select>
        </div>
    </div>
    
<!-- End Role -->

<!-- Mobile -->
        <div class="form-group">
            <label class="col-md-3 control-label" for="member_mobile">Mobile</label>
            <div class="col-md-9">
                <input type="number" id="member_mobile" name="member_mobile" class="form-control" placeholder="Enter Mobile..">
            </div>
        </div>
 
<!-- End Mobile -->



<!-- Email -->
        <div class="form-group">
            <label class="col-md-3 control-label" for="member_email">Email</label>
            <div class="col-md-9">
                <input type="email" id="member_email" name="member_email" class="form-control" placeholder="Enter Email..">
            </div>
        </div>
      
<!-- End Email -->



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