 <div class="form-body">
  <div class="form-group col-md-4">
      <label>Sector/Flight</label>
      <select class="form-control" name="flight_id" id="flight_id">
          @foreach($flights as $flight)
          <option @if (isset($schedule) && $schedule->flight_id == $flight->id) selected @endif value="{{$flight->id}}">{{$city->getCity($flight->source_id)}}-{{$city->getCity($flight->destination_id)}}-{{$flight->flight_no}}</option>
          @endforeach
      </select>
  </div>
  {{-- <div class="form-group">
  <label>Date</label>
    <input type="text" id="daterange" value="01/01/2015 - 01/31/2015" />
  </div> --}}
  <div class="form-group col-md-12">
      <label class="control-label col-md-3">Date Range</label>
      <div class="col-md-12">
          <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
              <input type="text" id="fromdate" class="form-control" name="date_from">
              <span class="input-group-addon"> to </span>
              <input type="text" id="todate" class="form-control" name="date_to"> </div>
          <!-- /input-group -->
          <span class="help-block"> Select date range </span>
      </div>
  </div>
  <div class="form-actions col-md-12">
        <button type="submit" class="btn blue">Load</button>
  </div>
</div>