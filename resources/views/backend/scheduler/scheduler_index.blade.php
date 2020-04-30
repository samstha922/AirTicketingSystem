@extends('backend.admin_master')
@section('contents')

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{ url('scheduler/index') }}">Flight Schedules</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h5>Flight no:{{$city->getCity($schedule->flight->source_id)}}-{{$city->getCity($schedule->flight->destination_id)}}-{{$schedule->flight->flight_no}}</h5>
        <h5>Departure: {{$schedule->depart_time}}</h5>
        <h5>Arrival: {{$schedule->arrive_time}}</h5>
        </div>
    </div>
</div>

<div class="portlet box green">
  <div class="portlet-title">
      <div class="caption">
          <i class="fa fa-gift"></i>Flight Schedule List</div>
      <div class="tools">
          <a href="javascript:;" class="collapse"> </a>

      </div>
  </div>
  <div class="portlet-body form">
    <!-- BEGIN FORM-->
    <form action="{{ url('scheduler/store') }}" method="POST">
      {!! csrf_field() !!}
        <div class="form-body">

            <div class="portlet-body tableFlight ">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Date</th>
                                <th> Cabin </th>
                                <th> RBD </th>
                                <th> Seat </th>
                                <th> Oneway (NPR)  </th>
                                <th> Oneway (USD) </th>
                                <th> Round Trip (NPR) </th>
                                <th> Round Trip (USD) </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $key = 0; @endphp 

                                @foreach($flight_dates as $date)
                            @foreach($fare as $data)
                                @php $key++; @endphp
                            <tr>
                                <td> {{$key}}<input type="hidden" name="scheduler[{{$key}}][flight_id]" value="{{$schedule->flight->id}}" > </td>
                                <td> {{$date}}<input type="hidden" name="scheduler[{{$key}}][date]" value="{{$date}}" ></td>
                                <td>{{$data->cabin}}<input type="hidden" name="scheduler[{{$key}}][cabin_id]" value="{{$data->cabin_id}}" ></td>
                                <td>{{$data->rbd}}<input type="hidden" name="scheduler[{{$key}}][rbd_id]" value="{{$data->rbd_id}}" ></td>
                                <td><input type="text" name="scheduler[{{$key}}][seat]" class="form-control input-xsmall" value="{{$data->seat}}" required></td>
                                <td><input type="text" name="scheduler[{{$key}}][price_local_oneway]" class="form-control input-xsmall" value="{{$data->price_local_oneway}}" required></td>
                                <td><input type="text" name="scheduler[{{$key}}][price_usd_oneway]" class="form-control input-xsmall" value="{{$data->price_usd_oneway}}" required></td>
                                <td><input type="text" name="scheduler[{{$key}}][price_local_roundtrip]" class="form-control input-xsmall" value="{{$data->price_local_roundtrip}}" required></td>
                                <td><input type="text" name="scheduler[{{$key}}][price_usd_roundtrip]" class="form-control input-xsmall" value="{{$data->price_usd_roundtrip}}" required></td>
                                <input type="hidden" name="scheduler[{{$key}}][date_from]" value="{{$date_from}}" >
                                <input type="hidden" name="scheduler[{{$key}}][date_to]" value="{{$date_to}}" >
                                <input type="hidden" name="scheduler[{{$key}}][depart_time]" value="{{$schedule->depart_time}}" >
                                <input type="hidden" name="scheduler[{{$key}}][arrive_time]" value="{{$schedule->arrive_time}}" >
                                <input type="hidden" name="scheduler[{{$key}}][lot]" value="{{$lot}}" >
                                <input type="hidden" name="scheduler[{{$key}}][source]" value="{{$city->getCity($schedule->flight->source_id)}}" >
                                <input type="hidden" name="scheduler[{{$key}}][destination]" value="{{$city->getCity($schedule->flight->destination_id)}}" >
                           </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn green">Submit</button>
                    <a href="{{ url('scheduler/create') }}" class="btn red">Cancel</a>
                </div>
            </div>
            {{-- <input type="hidden" name="flight_id" value="{{ $flight_id }}" class="form-control input-xsmall"> --}}

    </form>
    <!-- END FORM-->
  </div>
</div>
@endsection