<div class="form-body">
    <div class="form-group col-md-4">
        <label>Source</label>
        <div class="input-group">
          <span class="input-group-addon">
              <i class="fa fa-envelope"></i>
          </span>
            <select class="form-control" name="source" id="source">
                @foreach ($city as $cities)
                    <option @if (isset($flight) && $flight->source_id == $cities->id) selected @endif value="{{ $cities->id }}">{{ $cities->iata_code }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group col-md-4">
        <label>Destination</label>
        <div class="input-group">
          <span class="input-group-addon">
              <i class="fa fa-envelope"></i>
          </span>
            <select class="form-control" name="destination" id="destination">
                @foreach ($city as $cities)
                    <option @if (isset($flight) && $flight->destination_id == $cities->id) selected @endif value="{{ $cities->id }}">{{ $cities->iata_code }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group col-md-12">
      <label>Flight No</label>
      <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-envelope"></i>
        </span>
        {{ Form::text( 'flight_no', old('flight_no'), [ 'required' ] ) }}
      </div>
    </div>
    <div class="form-actions col-md-12">
        @if(isset($flight))
            <button type="submit" class="btn blue">Update</button>
        @else
            <button type="submit" class="btn blue">New</button>
        @endif
        <a href="{{ url('flight/') }}" class="btn default">Cancel</a>
    </div>
</div>