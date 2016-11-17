@extends('admin.layouts.layout')

               
@section('content')


<!-- Horizontal Form Block -->
    <div class="block">
        <!-- Horizontal Form Title -->
        <div class="block-title">
           
            <h2><strong>CMS </strong>Setting</h2>
        </div>

    
        
    @foreach($cmss as $cms)
        <!-- Horizontal Form Content -->
        <form action="{{ url('admin/cms_settings') }}" method="post" class="form-horizontal form-bordered" >


          <div class="form-group">
                <label class="col-md-3 control-label" >{{$cms->slug}}</label>
                <div class="col-md-9">
             
                           @if($cms->type == 0)
                            {!! Form::text("$cms->setting_name", $cms->value, ['class'=>'form-control']) !!}
                           @else
                            {!! Form::textarea("$cms->setting_name", $cms->value, ['class'=>'form-control']) !!}
                            @endif

                 

                     @if ($errors->has($cms->setting_name))
                        <span class="help-block">
                            <strong>{{ $errors->first($cms->setting_name) }}</strong>
                        </span>
                    @endif
                    
                </div>
            </div>
@endforeach

          
            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>

                    <a class="btn btn-sm btn-primary" href="{{url('/admin/dashboard')}}"> Back 
                        <i class="fa fa-reply" aria-hidden="true"></i> 
                    </a>
                    
                </div>
            </div>
        </form>
        <!-- END Horizontal Form Content -->
    </div>
    <!-- END Horizontal Form Block -->

@endsection

