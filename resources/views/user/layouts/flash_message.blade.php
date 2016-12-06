@if(Session::has('flash_message'))

<script>
	swal("{{ Session::get('flash_message')}}","", "success");
</script>
@endif




