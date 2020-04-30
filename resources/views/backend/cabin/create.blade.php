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
	            <a href="{{ url('cabin/') }}">Cabin</a>
	            <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <a href="#">New</a>
	        </li>
	    </ul>
		   <div class="page-toolbar">
	            <div class="btn-group pull-right">
	                <a href="{{ url('cabin/') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
	            </div>
	        </div>
	</div>

	<h3 class="page-title">New Cabin </h3>
	<!-- END PAGE BAR -->

	{{ Form::open([ 'route' => 'cabin.store','method'=>'post']) }}

		@include('backend.cabin.partials.form_add_cabin')	

	{{ Form::close() }}

@stop

@section('footer')
<script type="text/javascript">

	function upperCaseF(a){
	    setTimeout(function(){
	        a.value = a.value.toUpperCase();
	    }, 1);
	}
</script>

@stop