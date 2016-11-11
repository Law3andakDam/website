@extends('admin.layouts.layout')



@section('content')


<!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <h2><strong>Roles</strong> </h2>
    </div>
                               
    <div>
        <a href="{{url('/admin/roles/create')}}" class="btn btn-primary btn-info">
        <span class="fa fa-plus"></span> New Role</a>

    </div><br>
<div class="table-responsive"></div>
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                
                <th class="text-center"> Role</th>
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
        ajax: '{!! url('admin/roles/data') !!}',
        columns: [

            { data: 'role', name: 'role' },
            {data: 'control', name: ''}
        ]
    });
});
</script>

@endpush


