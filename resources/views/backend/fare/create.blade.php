@extends('backend.admin_master')
@section('contents')

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ URL::to('dashboard') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{ route('fare.index') }}">Fare &amp; Availability</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Create Fare for {{ $flightdesc->flight_no }}</span>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
    <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ route('fare.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{ $city->getCity($flightdesc->source_id) }} - {{ $city->getCity($flightdesc->destination_id) }} {{ $flightdesc->flight_no }}</h2>
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
    <form action="{{ route('fare.create') }}" method="POST">
      {!! csrf_field() !!}
        <div class="form-body">

            <div class="portlet-body tableFlight ">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> # </th>
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

                            @foreach ($rbds as $key => $rbd)
                              <tr>
                                  <td> {{ $key+1 }} </td>
                                  <td> {{ $cabin->getCabin($rbd->cabin_id)}} <input type="hidden" name="farePrice[{{$key}}][cabin]" value="{{$rbd->cabin_id}}" ></td>
                                  <td> {{ $rbd->rbd}}  <input type="hidden" name="farePrice[{{$key}}][rbd]" class="form-control input-xsmall" value="{{ $rbd->id }}"> </td>

                                  <td> <input type="number" name="farePrice[{{$key}}][seat]" class="form-control input-xsmall" required > </td>
                                  <td> <input type="number" name="farePrice[{{$key}}][onewayNpr]" class="form-control input-xsmall" required > </td>
                                  <td> <input type="number" name="farePrice[{{$key}}][onewayUsd]" class="form-control input-xsmall" required > </td>
                                  <td> <input type="number" name="farePrice[{{$key}}][roundTripNpr]" class="form-control input-xsmall" required > </td>
                                  <td> <input type="number" name="farePrice[{{$key}}][roundTripUsd]" class="form-control input-xsmall" required > </td>
                              </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn green">Create</button>
                    <a href="{{ route('fare.index') }}" class="btn red">Cancel</a>
                </div>
            </div>
            <input type="hidden" name="flight_id" value="{{ $flight_id }}" class="form-control input-xsmall">

    </form>
    <!-- END FORM-->
  </div>
</div>
@endsection

@section('footer')
  <script>
    $(document).ready(function(){
        $(document).on('change','#flightOption',function(){
          $(".tableFlight").show();
        });
    });

  </script>
@endsection
