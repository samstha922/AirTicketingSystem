@extends('backend.admin_master')
 
@section('contents')

	<div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ url('/dashboard') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{ url('role/') }}">Role</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Show</a>
            </li>
        </ul>
         <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('role/') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title">Role</h3>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
<div class="portlet light bordered">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $role->display_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $role->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permissions:</strong>
                @if(!empty($rolePermissions))
					@foreach($rolePermissions as $v)
						<label class="label label-success" style="line-height: 2!important">{{ $v->display_name }}</label>
					@endforeach
				@endif
            </div>
        </div>
	</div>
</div>
@endsection