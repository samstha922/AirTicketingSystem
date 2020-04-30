@extends('backend.admin_master')

@section('contents')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Flight</a>
                <i class="fa fa-circle"></i>
            </li>
        </ul>
        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('scheduler/create') }}" class="btn btn-info"><i class="fa fa-plus"></i> New</a>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title">Schedule List</h3>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="scheduler">
                        <thead>
                            <tr>
								<th>Date From</th>
								<th>Date To</th>
								<th>Flight no</th>
								<th>Source</th>
								<th>Destination</th>
								<th>Departure Time</th>
								<th>Arrival Time</th>
                                <th class="min-phone-l">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($scheduler as $key => $schedule)
							<tr>
								<td>{{$schedule->date_from}}</td>
								<td>{{$schedule->date_to}}</td>
								<td>{{$schedule->flight->flight_no}}</td>
								<td>{{$city->getCity($schedule->flight->source_id)}}</td>
								<td>{{$city->getCity($schedule->flight->destination_id)}}</td>
								<td>{{$schedule->depart_time}}</td>
								<td>{{$schedule->arrive_time}}</td>
								<td>
								<a class="btn btn-primary" href="{{ url('scheduler/show/'.$schedule->lot_no) }}">Show</a>
								</td>
							</tr>
							@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $("#scheduler").DataTable({
            "processing": true
          });
    </script>
@endsection