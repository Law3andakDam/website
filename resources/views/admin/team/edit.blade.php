@extends('admin.layouts.layout')

               
@section('content')


<!-- Horizontal Form Block -->
<div class="block">
    <!-- Horizontal Form Title -->
    <div class="block-title">
       
        <h2><strong>Edit</strong> Team Member</h2>
    </div>


    <!-- END Horizontal Form Title -->

    <!-- Horizontal Form Content -->
    <form action="{{ url('/admin/teams/update') }}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data" >
     <input type="hidden" name="id"  value="{{$teammember->id}}" >


<!-- Name -->
        <div class="form-group">
            <label class="col-md-3 control-label" for="member_name">Name</label>
            <div class="col-md-9">
                <input type="text" id="member_name" name="member_name" class="form-control" 
                 value="{{$teammember->member_name}}">  
            </div>
        </div>
<!-- End Name -->

<!-- Name -->
        <div class="form-group">

             <div class="clearfix"></div>
                                
                             @if(isset($teammember))  <!-- teammember param from edit.blade.php form -->
                              @if($teammember->member_image != '')
                           <div style="width:500px; margin:0 auto;">
                                <img src="{{ Request::root().'/team_images/'.$teammember->member_image}}" alt="avatar" class="img-circle" width="150">
                            </div><br>
                              @endif
                              @endif
                                
            <div class="clearfix"></div>

            <label class="col-md-3 control-label" for="member_image">Personal Image</label>

            <div class="col-md-9">
                <input type="file"   name="member_image" class="form-control">  
            </div>
        </div>
<!-- End Name -->

<!--Role -->

 <div class="form-group">
        <label class="col-md-3 control-label" for="member_role">Role</label>
        <div class="col-md-9">
            <select id="member_role" name="role_id"  class="select-select2" style="width: 100%;" >
           <option>{{$roles[$teammember->role_id]}}</option>
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
                <input type="text" id="member_mobile" name="member_mobile" class="form-control" 
                value="{{$teammember->member_mobile}}">
            </div>
        </div>
      
<!-- End Mobile -->
<!-- Email -->
        <div class="form-group">
            <label class="col-md-3 control-label" for="member_email">Email</label>
            <div class="col-md-9">
                <input type="email" id="member_email" name="member_email" class="form-control"
                value="{{$teammember->member_email}}">
            </div>
        </div>
      
<!-- End Email -->



        <div class="form-group form-actions">
            <div class="col-md-9 col-md-offset-3">
                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>
                
                  <a class="btn btn-sm btn-primary" href="{{url('/admin/teams')}}"> Back 
                        <i class="fa fa-reply" aria-hidden="true"></i> 
                    </a>
            </div>
        </div>



    </form>
    <!-- END Horizontal Form Content -->
</div>
<!-- END Horizontal Form Block -->
@endsection