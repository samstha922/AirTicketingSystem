@extends('backend.admin_master')
 
@section('contents')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit User Registration</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ url('/dashboard') }}"> Back</a>
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
	@if (session('email_exit'))
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			{{session('email_exit')}}
		</div>
	@endif
	{!! Form::model($user, ['method' => 'POST','url' => ['admin/update/'.$user->id]]) !!}
	     @include('backend.users.form')
	{!! Form::close() !!}
@endsection