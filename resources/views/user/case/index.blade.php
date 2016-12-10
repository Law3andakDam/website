@extends('admin.layouts.layout')

@section('content')




<!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <h2><strong>Cases </strong> </h2>
    </div>
                               
    <div>

    </div><br>
<div class="table-responsive"></div>
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                
                
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Mobile</th>
                <th class="text-center">Hospital</th>
                <th class="text-center"> Blood Type</th>
              
          
              
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
          
        ajax: '{!! url('admin/Cases/data') !!}',
        columns: [

            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'mobile', name: 'mobile' },
            { data: 'hospital_name', name: 'hospital_name' },
            { data: 'blood_type_id', name: 'blood_type_id' },
        
        
           
        ]
    });
});
</script>
@endpush