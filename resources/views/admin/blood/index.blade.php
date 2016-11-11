@extends('admin.layouts.layout')

@section('content')


<!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <h2><strong>Blood</strong> Types</h2>
    </div>
                               
    <div>
        <a href="{{url('/admin/blood_types/create')}}" class="btn btn-primary btn-info">
        <span class="fa fa-plus"></span> New Type</a>

    </div><br>
<div class="table-responsive"></div>
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                
                <th class="text-center"> Blood Type</th>
                <th class="text-center">Control</th>
              
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
        ajax: '{!! url('admin/blood_types/data') !!}',
        columns: [

            { data: 'type', name: 'type' },
            {data: 'control', name: ''}
        ]
    });
});
</script>
@endpush