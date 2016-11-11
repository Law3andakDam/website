@if(Session::has('flash_message'))

<script>
	swal("{{ Session::get('flash_message')}}","", "success");
</script>
@endif


@if(Session::has('type_error'))

<script>
	swal("{{ Session::get('type_error')}}","", "error");
</script>
@endif

@if(Session::has('edit_done'))

<script>
	swal("{{ Session::get('edit_done')}}","", "success");
</script>
@endif





