@extends('backend.admin_master')
@section('contents')

  <div class="page-bar">
      <ul class="page-breadcrumb">
          <li>
              <a href="{{ URL::to('dashboard') }}">Home</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
            <span>Fare &amp; Availability</span>
          </li>
      </ul>
      <div class="page-toolbar">
              <div class="btn-group pull-right">
                  <a href="{{ URL::to('dashboard') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
              </div>
      </div>

  </div>

  <div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Fare &amp; Availability</h2>
	        </div>
	    </div>
	</div>

  <div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Add Fare Descrption</div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>

        </div>
    </div>
    <div class="portlet-body form">
      <!-- BEGIN FORM-->
      <form action="{{ route('fare.check') }}" method="POST">
        {!! csrf_field() !!}
          <div class="form-body">
              <div class="form-group">
                  <label>Sector/ Flight</label>
                  <select name = "flight_id" class="form-control input-xlarge" id="flightOption" required>
                      <option value="" disabled selected hidden>Select sector/ flight</option>
                      @foreach ($flights as $flight)
                        <option  value="{{ $flight->id }}">{{ $city->getCity($flight->source_id) }} - {{ $city->getCity($flight->destination_id) }} {{ $flight->flight_no }}</option>
                      @endforeach
                  </select>
              </div>

          </div>
          <div class="form-actions">
              <button type="submit" class="btn green">Load</button>
              <a href="{{ route('fare.index') }}" class="btn red">Cancel</a>
          </div>
      </form>
      <!-- END FORM-->
    </div>
@endsection
