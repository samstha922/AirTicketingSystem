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
    <div class="col-lg-12 margin-tb">
        {{-- <div class="pull-left">
            <h5>Flight no:{{$city->getCity($schedule->flight->source_id)}}-{{$city->getCity($schedule->flight->destination_id)}}-{{$schedule->flight->flight_no}}</h5>
        <h5>Departure: {{$schedule->depart_time}}</h5>
        <h5>Arrival: {{$schedule->arrive_time}}</h5>
        </div> --}}
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="scheduler">
                        <thead>
                            <tr>
								<th>Date</th>
								<th>Rbd</th>
                                <th>Seat</th>
								<th>Oneway (NPR)</th>
								<th>Oneway (USD)</th>
								<th>Round Trip (NPR)</th>
                                <th>Round Trip (USD)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($scheduler as $key => $schedule)
							<tr>
								<td>{{$schedule->date}}</td>
								<td>{{$rbd->getRbd($schedule->rbd_id)}}</td>
								<td>{{$schedule->seat}}</td>
								<td>{{$schedule->price_local_oneway}}</td>
								<td>{{$schedule->price_usd_oneway}}</td>
                                <td>{{$schedule->price_local_roundtrip}}</td>
                                <td>{{$schedule->price_usd_roundtrip}}</td>
								<td>
								<a class="btn btn-primary" href="{{ url('scheduler/edit/'.$schedule->id) }}">Edit</a>
								<a class="btn btn-danger" style="display:inline" href="{{ url('scheduler/delete'.'/'.$schedule->id) }}">Delete</a>
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