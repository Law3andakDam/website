@extends('user.layouts.layout')

@section('content')


<div style=" width: 80%;   margin-left: 10%; margin-top: 5%">

<!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <h2 style="margin-left: 40%;"><strong>Doners </strong> </h2>
    </div>
                               
    <div>

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
 </div>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
          
        ajax: '{!! url('Doners/data') !!}',
        columns: [

           
            { data: 'blood_type_id', name: 'blood_type_id' },
            { data: 'doner_email', name: 'doner_email' },
            { data: 'doner_mobile', name: 'doner_mobile' },
        
           
        ]
    });
});
</script>
@endpush