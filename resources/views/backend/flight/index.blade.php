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
                <a href="{{ url('flight/create') }}" class="btn btn-info"><i class="fa fa-plus"></i> New</a>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title">Flight List</h3>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="flight">
                        <thead>
                            <tr>
                                <th>SN</th>
								<th>Flight</th>
                                <th class="min-phone-l">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($flights as $key => $flight)
							<tr>
								<td>{{++$key}}</td>
								<td>{{$city->getCity($flight->source_id)}}-{{$city->getCity($flight->destination_id)}}-{{$flight->flight_no}}</td>
								<td>
								<a class="btn btn-primary" href="{{ url('flight/edit/'.$flight->id) }}">Edit</a>
								<a class="btn btn-danger" style="display:inline" href="{{ url('flight/delete'.'/'.$flight->id) }}">Delete</a>
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
        $("#flight").DataTable({
            "processing": true
          });
    </script>
@endsection