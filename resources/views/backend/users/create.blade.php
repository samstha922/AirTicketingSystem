@extends('backend.admin_master')
@section('contents')
	<!-- BEGIN PAGE BAR -->
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
	            <a href="#">New</a>
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
	<h3 class="page-title"> New Registration</h3>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::open(array('url' => 'admin/store','method'=>'POST')) !!}
		@include('backend.users.form')
	{!! Form::close() !!}
@endsection