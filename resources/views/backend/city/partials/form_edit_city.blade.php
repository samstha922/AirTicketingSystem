<div class="row">
  <div class="col-md-6">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="fa fa-user-plus"></i>
                <span class="caption-subject bold uppercase"> Edit this City</span>
            </div>
          </div>



            <div class="portlet-body">
              
                <div class="form-body">
                  <div class="form-group">
                      <label for="city_name">City Name:</label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                        </span>
                        <input class="form-control" type="text" name="city_name" id="city_name" value="{{$city->city_name}}" required="">
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="iata_code">IATA Code:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </span>

                      <input style="text-transform:uppercase;" type="text" class="form-control" id="iata_code" name="iata_code" maxlength="3" value="{{$city->iata_code}}" onkeydown="upperCaseF(this)" required="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="icao_code">ICAO Code:</label>
                    <div class="input-group"> 
                      <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </span>

                      <input type="text" class="form-control" name="icao_code" id="icao_code" required="" maxlength="4" value="{{$city->icao_code}}" onkeydown="upperCaseF(this)" required="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="airport_name">Airport Name:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </span>
                      <input type="text" class="form-control" name="airport_name" id="airport_name" required="" value="{{$city->airport_name}}" required="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="timezone_id">Time Zone:</label>
                    <div class="col-sm-6 input-group  ">
                        <select class="form-control timezone_id" name="timezone_id">
                          @foreach($timezones as $timezone)
                            <option value='{{$timezone->id}}' @if($city->timezone_id == $timezone->id) selected @endif>({{$timezone->offset}}){{"  "}}{{$timezone->location}}</option>
                          @endforeach  
                        </select>
                    </div>
                  </div>

                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>    
                    <a href="{{url('city')}}" class="btn btn-default">Cancel</a>
                  </div>
                </div>
             
            </div>
        </div>
    </div>
</div>  



  


