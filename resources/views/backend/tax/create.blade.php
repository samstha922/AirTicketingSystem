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
	            <a href="{{ url('tax/') }}">Tax</a>
	            <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <a href="#">New</a>
	        </li>
	    </ul>
		   <div class="page-toolbar">
	            <div class="btn-group pull-right">
	                <a href="{{ url('tax/') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
	            </div>
	        </div>
	</div>
	<h3 class="page-title">New Tax Form </h3>
	<!-- END PAGE BAR -->

	{{ Form::open([ 'route' => 'tax.store','method'=>'post']) }}
		@include('backend.tax.partials.form_add_tax')
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