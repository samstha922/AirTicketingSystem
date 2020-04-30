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
	            <a href="{{ url('schedule/') }}">Schedule</a>
	            <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <a href="#">New Schedule</a>
	        </li>
	    </ul>
	     <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('schedule/') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
        </div>
	    
	</div>
	<!-- END PAGE BAR -->
	<!-- BEGIN PAGE TITLE-->
	<h3 class="page-title"> Create Schedule</h3>
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
	<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="fa fa-user-plus"></i>
                    <span class="caption-subject bold uppercase"> Details</span>
                </div>
            </div>
            <div class="portlet-body form">
				{{ Form::model($schedule,[ 'url' => ['/schedule/update', $schedule->id]]) }}
						@include('backend.schedule.partials.form')
				{{ Form::close() }}
			</div>
	</div>
@endsection
@section('footer')
<script type="text/javascript">
		$('#depart_time').timepicker({
			showMeridian: false
		});
		
		$('#arrive_time').timepicker({
			showMeridian: false
		});

</script>
@endsection