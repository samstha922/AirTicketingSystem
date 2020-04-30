@extends('backend.admin_master')
 
@section('contents')
	<div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ url('/dashboard') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{ url('admin/') }}">User</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Show</a>
            </li>
        </ul>
         <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('admin/') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title">Role</h3>
	<div class="portlet light bordered">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Name:</strong>
	                {{ $user->name }}
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Email:</strong>
	                {{ $user->email }}
	            </div>
	        </div>
	        <div class="col-xs-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <strong>Roles:</strong>
	                @if(!empty($user->roles))
						@foreach($user->roles as $v)
							<label class="label label-success">{{ $v->display_name }}</label>
						@endforeach
					@endif
	            </div>
	        </div>
		</div>
	</div>
@endsection
