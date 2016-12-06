@extends('user.layouts.layout')



@section('content')
<!-- I Need Blood Form -->
<div class="needBlood">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center">I NEED BLOOD</div>
				  	<div class="panel-body">
				    	<div class="input-group">
						  	<span class="input-group-addon" id="basic-addon1">Name</span>
						  	<input type="text" class="form-control">
						</div>
				    	<div class="input-group">
						  	<span class="input-group-addon" id="basic-addon1">EMAIL</span>
						  	<input type="text" class="form-control">
						</div>
				    	<div class="input-group">
						  	<span class="input-group-addon" id="basic-addon1">TELEPHONE</span>
						  	<input type="text" class="form-control">
						</div>
				    	<div class="input-group">
						  	<span class="input-group-addon" id="basic-addon1">HOSPITAL</span>
						  	<input type="text" class="form-control">
						</div>
				    	<div class="input-group">
						  	<span class="input-group-addon" id="basic-addon1">BLOOD TYPE</span>
						  	<select class="form-control">
						  		<option>A</option>
						  		<option>A+</option>
						  		<option>B</option>
						  		<option>O</option>
						  	</select>
						</div>
						<div class="input-group text-center">
							<button class="btn">SUBMIT</button>
						</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer -->
@endsection
