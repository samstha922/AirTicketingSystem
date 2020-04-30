<div class="row">
  <div class="col-md-6">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="fa fa-user-plus"></i>
                <span class="caption-subject bold uppercase"> Edit this RBD</span>
            </div>
          </div>

          <div class="portlet-body">
              <div class="form-body">
                <div class="form-group">
                    <label for="rbd">RBD Name:</label>
                    <div class="input-group col-sm-1">
                      <input class="form-control" type="text" name="rbd" id="rbd" maxlength="1" value="{{$rbd->rbd}}" onkeydown="upperCaseF(this)"> 
                    </div>
                </div>

                <div class="form-group">
                    <label for="cabin_id">Cabin:</label>
                    <div class="col-sm-4 input-group  ">
                        <select class="form-control" name="cabin_id" id="cabin_id">
                            @foreach($cabins as $cabin)
                            <option value="{{$cabin->id}}" @if($cabin->id == $rbd->cabin_id ) selected @endif>{{$cabin->cabin}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>

                <div class="form-group">
                  <label for="hierarchy">Hierarchy:</label>
                  <div class="input-group col-sm-2"> 
                    <input type="number" min="0" max="999" class="form-control" name="hierarchy" id="hierarchy" required="" value="{{$rbd->hierarchy}}">
                  </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>    
                    <a href="{{url('rbd')}}" class="btn btn-default">Cancel</a>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>  
  



  


