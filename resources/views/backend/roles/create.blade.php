@extends('backend.admin_master')
 
@section('contents')
	<!-- BEGIN PAGE BAR -->
	<div class="page-bar">
	    <ul class="page-breadcrumb">
	        <li>
	            <a href="index.html">Home</a>
	            <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <span>Role</span>
	        </li>
	    </ul>
	    <div class="pull-right">
	            <a class="btn btn-primary" href="{{ url('/role') }}"> Back</a>
	        </div>
	   
	</div>
	<h3 class="page-title"> New Role</h3>
	<!-- END PAGE BAR -->
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
	{!! Form::open(array('url' => 'role/store','method'=>'POST')) !!}
	   @include('backend.roles.form')
	{!! Form::close() !!}
@endsection