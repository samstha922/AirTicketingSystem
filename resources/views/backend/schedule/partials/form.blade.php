 <div class="form-body">
  <div class="form-group col-md-4">
      <label>Flight</label>
      <select class="form-control" name="flight">
        @foreach($flights as $flight)
        <option @if (isset($schedule) && $schedule->flight_id == $flight->id) selected @endif value="{{$flight->id}}">{{$city->getCity($flight->source_id)}}-{{$city->getCity($flight->destination_id)}}-{{$flight->flight_no}}</option>
        @endforeach
      </select>
  </div>
  <div class="form-group col-md-12">
    <input type="checkbox" name="day[]" @if(isset($schedule) && $city->getDay($schedule->id,"1")== "true") checked @endif value="1">Sunday
    <input type="checkbox" name="day[]" @if(isset($schedule) && $city->getDay($schedule->id,"2")== "true") checked @endif value="2">Monday
    <input type="checkbox" name="day[]" @if(isset($schedule) && $city->getDay($schedule->id,"3")== "true") checked @endif value="3">Tuesday
    <input type="checkbox" name="day[]" @if(isset($schedule) && $city->getDay($schedule->id,"4")== "true") checked @endif value="4">Wednesday
    <input type="checkbox" name="day[]" @if(isset($schedule) && $city->getDay($schedule->id,"5")== "true") checked @endif value="5">Thursday
    <input type="checkbox" name="day[]" @if(isset($schedule) && $city->getDay($schedule->id,"6")== "true") checked @endif value="6">Friday
    <input type="checkbox" name="day[]" @if(isset($schedule) && $city->getDay($schedule->id,"7")== "true") checked @endif value="7">Saturday
  </div>
  <div class="form-group col-md-2">
  <label class="control-label">Depart time</label>
    {{-- <div class="col-md-4"> --}}
        <div class="input-group">
            {{ Form::text( 'depart_time', old('depart_time'), [ 'class'=>'form-control timepicker timepicker-24', 'id' => 'depart_time','required' ] ) }}
            <span class="input-group-btn">
                <button class="btn default" type="button">
                    <i class="fa fa-clock-o"></i>
                </button>
            </span>
        </div>
    {{-- </div> --}}
  </div>
  <div class="form-group col-md-2">
  <label class="control-label">Arrive time</label>
    {{-- <div class="col-md-4"> --}}
        <div class="input-group">
            {{ Form::text( 'arrive_time', old('arrive_time'), [ 'class'=>'form-control timepicker timepicker-24', 'id' => 'arrive_time','required' ] ) }}
            <span class="input-group-btn">
                <button class="btn default" type="button">
                    <i class="fa fa-clock-o"></i>
                </button>
            </span>
        </div>
    {{-- </div> --}}
  </div>
  <div class="form-actions col-md-12">
        @if(isset($schedule))
            <button type="submit" class="btn blue">Update</button>
        @else
            <button type="submit" class="btn blue">New</button>
        @endif
        <a href="{{ url('schedule/') }}" class="btn default">Cancel</a>
    </div>
</div>