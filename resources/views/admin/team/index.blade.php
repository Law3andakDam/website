@extends('admin.layouts.layout')

@section('content')


<!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <h2><strong>Team</strong> Members</h2>
    </div>
                               
    <div>
        <a href="{{url('/admin/teams/create')}}" class="btn btn-primary btn-info">
        <span class="fa fa-plus"></span> New Member</a>

    </div><br>
<div class="table-responsive"></div>
    <table class="table table-bordered" id="data">
        <thead>
            <tr>
                
                <th class="text-center">Name</th>
                <th class="text-center">Role</th>
                <th class="text-center">Email</th>
                <th class="text-center">Mobile</th>
                <th class="text-center">Control</th>
              
            </tr>
        </thead>
    </table>
    </div>
@stop

@push('scripts')
<script>
$(function() {
    $('#data').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('admin/teams/data') !!}',
        columns: [        
          {data: 'member_name', name: 'member_name'},
          {data: 'role_id', name: 'role_id'},
          {data: 'member_email', name: 'member_email'},
          {data: 'member_mobile', name: 'member_mobile'},
          {data: 'control', name: ''} // will get back with html from controller
        ]
    });
});
</script>
@endpush