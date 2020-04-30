<div class="row">  
  <div class="col-md-6">
          <!-- BEGIN SAMPLE FORM PORTLET-->
      <div class="portlet light bordered">

          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="fa fa-user-plus"></i>
                <span class="caption-subject bold uppercase"> Update Meal Preference</span>
            </div>
          </div>

          <div class="portlet-body">
              <div class="form-body">
            	  <div class="form-group">
  			         <label for="meal_name">Meal Preference:</label>
  			         <div class="input-group">
  			    	    <input class="form-control" type="text" name="meal_name" id="meal_name" required="" value="{{$meal->meal_name}}">
  			  	      </div>
  			        </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Save</button>    
                  <a href="{{url('meal')}}" class="btn btn-default">Cancel</a>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
