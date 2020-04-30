<div class="row">  
  <div class="col-md-6">
          <!-- BEGIN SAMPLE FORM PORTLET-->
      <div class="portlet light bordered">

          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="fa fa-user-plus"></i>
                <span class="caption-subject bold uppercase"> Assign Cabin</span>
            </div>
          </div>

          <div class="portlet-body">
              <div class="form-body">
            	  <div class="form-group">
  			         <label for="cabin">Cabin Name:</label>
  			         <div class="input-group">
  			    	    <input class="form-control" type="text" name="cabin" id="cabin" required="" max="20" autocomplete="off" onkeydown="upperCaseF(this)">
  			  	      </div>
  			        </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Save</button>    
                  <a href="{{url('cabin')}}" class="btn btn-default">Cancel</a>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
