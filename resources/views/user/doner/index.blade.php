@extends('admin.layouts.layout')

@section('content')


<!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <h2><strong>Roles</strong> </h2>
    </div>
                               
    <div>
        <a href="{{url('/admin/doners/create')}}" class="btn btn-primary btn-info">
        <span class="fa fa-plus"></span> New Doner</a>

    </div><br>
<div class="table-responsive"></div>
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                
                
                
                <th class="text-center"> Blood Type</th>
                <th class="text-center">Email</th>
                <th class="text-center"> Mobile</th>
          
              
            </tr>
        </thead>
    </table>
    </div>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('admin/doners/data') !!}',
        columns: [

           
            { data: 'blood_type_id', name: 'blood_type_id' },
            { data: 'doner_email', name: 'doner_email' },
            { data: 'doner_mobile', name: 'doner_mobile' },
        
           
        ]
    });
});
</script>
@endpush