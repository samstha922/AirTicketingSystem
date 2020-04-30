@extends('backend.admin_master')
 
@section('contents')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Agent Registration</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ url('agent/') }}"> Back</a>
	        </div>
	    </div>
	</div>
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
	{!! Form::model($agent, ['url' => ['agent/update', $agent->user_id]]) !!}
		@include('backend.agent.form')
	{!! Form::close() !!}
@endsection