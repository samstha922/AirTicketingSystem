<div class="row">
  <div class="col-md-6">
        <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light bordered">

        <div class="portlet-title">
          <div class="caption font-red-sunglo">
              <i class="fa fa-user-plus"></i>
              <span class="caption-subject bold uppercase"> Edit this Cabin</span>
          </div>
        </div>


        <div class="portlet-body">
            <div class="form-body">
              <div class="form-group">
                <label>Cabin Name:</label>
                <div class="input-group">
                  <input class="form-control" type="text" name="cabin" value="{{$cabin->cabin}}" onkeydown="upperCaseF(this)">
                </div>
              </div>

              <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Update</button>    
                  <a href="{{url('cabin')}}" class="btn btn-default">Cancel</a>
              </div>
            </div>
        </div>
    </div>
  </div>
<div>  
  