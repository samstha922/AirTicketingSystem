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
	            <span>Agent</span>
	        </li>
	    </ul>
	    <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('agent/') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
	   
	</div>
	<h3 class="page-title">Agent Registration</h3>
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
	{!! Form::open(array('url' => 'agent/store','method'=>'POST')) !!}
	   @include('backend.agent.form')
	{!! Form::close() !!}
@endsection