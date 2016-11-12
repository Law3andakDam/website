@extends('admin.layouts.layout')




               
@section('content')


<!-- Horizontal Form Block -->
    <div class="block">
        <!-- Horizontal Form Title -->
        <div class="block-title">
           
            <h2><strong>Contacts </strong>Setting</h2>
        </div>

    
        
    @foreach($contact as $cont)
        <!-- Horizontal Form Content -->
        <form action="{{ url('admin/contact_settings') }}" method="post" class="form-horizontal form-bordered" >


          <div class="form-group">
                <label class="col-md-3 control-label" >{{$cont->slug}}</label>
                <div class="col-md-9">
                    <input type="text"  name="{{$cont->contact_name}}" class="form-control" value="{{$cont->value}}">

                     @if ($errors->has($cont->contact_name))
                        <span class="help-block">
                            <strong>{{ $errors->first($cont->contact_name) }}</strong>
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

