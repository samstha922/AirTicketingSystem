@extends('backend.admin_master')

@section('contents')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ url('/dashboard') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">City</a>
            </li>
        </ul>

        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('city/create') }}" class="btn btn-info"><i class="fa fa-plus"></i> New</a>
            </div>
        </div>
    </div>
    <h3 class="page-title"> List of All Cities
    </h3>
    
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Cities </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="cities">
                        <thead class="flip-content">
                            <tr>
                                <th width="10%"> S.N.</th>
                                <th>City Name</th>
								<th>IATA Code</th>
								<th>ICAO Code</th>
								<th>Airport Name</th>
                                <th>Time Zone</th>
								<th>Options</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            @foreach($cities as $key => $city)
                            <tr>
                                <td>{{ ++$key }}</td>
								<td>{{ $city->city_name}}</td>
								<td>{{ $city->iata_code}}</td>
								<td>{{ $city->icao_code}}</td>
								<td>{{ $city->airport_name}}</td>
                                <td>{{ $city->timezone->offset}}</td>

                                <td>
                                <div class="col-md-12" style="display:flex;">
                                <a href="{{route('city.edit',$city->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                {!! Form::open(['route'=>['city.destroy',$city->id],'method'=>'DELETE'])!!}

                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                {!! Form::close() !!}
                                </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        $("#cities").DataTable();
    </script>
@endsection