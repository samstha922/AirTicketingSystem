@extends('backend.admin_master')
@section('headerscript')
	{{ Html::style('css/chosen.css') }}
@endsection
@section('contents')
	<!-- BEGIN PAGE BAR -->
	<div class="page-bar">
	    <ul class="page-breadcrumb">
	        <li>
	            <a href="{{ url('/dashboard') }}">Home</a>
	            <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <a href="{{ url('city/') }}">City</a>
	            <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <a href="#">Edit</a>
	        </li>
	    </ul>
		   <div class="page-toolbar">
	            <div class="btn-group pull-right">
	                <a href="{{ url('city/') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
	            </div>
	        </div>
	</div>
	<h3 class="page-title">Update City </h3>
	<!-- END PAGE BAR -->

	{!! Form::model($city, ['route'=>['city.update',$city->id], 'method'=>'PUT']) !!}

		@include('backend.city.partials.form_edit_city')
		
	{!! Form::close() !!}
@stop


@section('footer')
{{ Html::script('js/chosen.jquery.js') }}

<script type="text/javascript">

	function upperCaseF(a){
	    setTimeout(function(){
	        a.value = a.value.toUpperCase();
	    }, 1);
	}
	$(document).ready(function(){
		$(".timezone_id").chosen();
	});
</script>
@endsection