<div class="row">
  <div class="col-md-6">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="fa fa-user-plus"></i>
                <span class="caption-subject bold uppercase"> Assign RBD</span>
            </div>
          </div>


            <div class="portlet-body">
              
                <div class="form-body">
                  <div class="form-group">
                      <label for="rbd">RBD Name:</label>
                      <div class="input-group col-sm-1">
                        <input class="form-control" type="text" name="rbd" id="rbd" maxlength="1" required="" onkeydown="upperCaseF(this)">
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="cabin_id">Cabin:</label>
                    <div class="col-sm-4 input-group  ">
                        <select class="form-control" name="cabin_id" id="cabin_id">
                            @foreach($cabins as $cabin)
                            <option value="{{$cabin->id}}">{{$cabin->cabin}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="hierarchy">Hierarchy:</label>
                    <div class="input-group col-sm-2"> 
                      <input type="number" min="0" max="99" class="form-control" id="hierarchy" name="hierarchy" value="0" required="">
                    </div>
                  </div>

                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save</button>    
                    <a href="{{url('rbd')}}" class="btn btn-default">Cancel</a>
                  </div>
                </div>
               
            </div>
        </div>
  </div>
</div>    
  


