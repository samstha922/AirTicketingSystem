  <div class="row">
    <div class="col-md-6">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="fa fa-user-plus"></i>
                <span class="caption-subject bold uppercase"> Add a City</span>
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
                        <input class="form-control" type="text" id="city_name" name="city_name" placeholder="Enter the city name" required="">
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="iata_code">IATA Code:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </span>
                      <input style="text-transform:uppercase;" type="text" class="form-control" id="iata_code" name="iata_code" maxlength="3" placeholder="Enter IATA code" required="" onkeydown="upperCaseF(this)">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="icao_code">ICAO Code:</label>
                    <div class="input-group"> 
                      <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </span>
                      <input type="text" class="form-control" id="icao_code" name="icao_code" required="" maxlength="4" required="" placeholder="Enter ICAO code" onkeydown="upperCaseF(this)">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="airport_name">Airport Name:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </span>
                      <input type="text" class="form-control" name="airport_name" id="airport_name" placeholder="Enter Airport name" required="">
                    </div>
                  </div>

                  <div class="form-group chosen-timezone">
                    <label for="timezone_id">Time Zone:</label>
                    <div class="col-sm-5 input-group  ">
                        <select class="form-control timezone_id" name="timezone_id">
                          
                          
                            <option value="" disabled selected>Select your Timezone</option>
                            @foreach($timezones as $timezone)
                              <option value="{{$timezone->id}}">({{$timezone->offset}}){{"  "}}{{$timezone->location}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>

                  
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save</button>    
                    <a href="{{url('city')}}" class="btn btn-default">Cancel</a>
                  </div>
                </div>
            
            </div>
        </div>
    </div>
  </div>


