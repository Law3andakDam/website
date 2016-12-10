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

				  <form action="{{url('/NeedBlood')}}" method="post" 
                           id="add-blood-needy-form"> 
                               {{ csrf_field() }}

				    	<div class="input-group">
						  	<span class="input-group-addon" id="basic-addon1">Name</span>
						  	<input type="text" class="form-control" name="case_name">						 
						</div>
				    	<div class="input-group">
						  	<span class="input-group-addon" id="basic-addon1">EMAIL</span>
						  	<input type="email" class="form-control"  name="case_email">
						</div>
				    	<div class="input-group">
						  	<span class="input-group-addon" id="basic-addon1">TELEPHONE</span>
						  	<input type="number" class="form-control" name="case_mobile">
						</div>
				    	<div class="input-group">
						  	<span class="input-group-addon" id="basic-addon1">HOSPITAL</span>
						  	<input type="text" class="form-control" name="case_hospital">
						</div>
				    	<div class="input-group">
						  	<span class="input-group-addon" id="basic-addon1">BLOOD TYPE</span>
						  	  <select class="form-control" name="case_blood_type" selected="selected"   data-placeholder="Choose one..">
						  	  <!--  for data-placeholder -->
                                <option></option>
                                 @foreach($types as $key => $r)
                                  <option value="{{$key}}">{{$r}}</option>
                                 @endforeach
                            </select>
						</div>
						<div class="input-group text-center">
							<button class="btn">SUBMIT</button>
						</div>
					  </form>
				  	</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer -->
@endsection
