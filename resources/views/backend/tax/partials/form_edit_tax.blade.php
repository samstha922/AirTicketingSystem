  <div class="row">
    <div class="col-md-6">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="fa fa-user-plus"></i>
                <span class="caption-subject bold uppercase"> Edit this Tax Rate</span>
            </div>
          </div>


            <div class="portlet-body">
                <div class="form-body">
                  <div class="form-group">
                      <label for="tax_head">Tax Head:</label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                        </span>
                        <input class="form-control" type="text" id="tax_head" value="{{$tax->tax_head}}" name="tax_head" placeholder="Enter Tax Head" required="">
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="local_price">Local Rate:</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </span>
                      <input type="number" min='0' step='0.001' class="form-control" id="local_price" value="{{$tax->local_price}}" name="local_price" placeholder="Enter Rate">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="usd_price">Others(Rate):</label>
                    <div class="input-group"> 
                      <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </span>
                      <input type="number" min='0' step='0.001' class="form-control" id="usd_price" value="{{$tax->usd_price}}" name="usd_price"  placeholder="Enter Rate">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="active">Status:</label>
                    <div class="col-sm-4 input-group  ">
                        <select class="form-control" name="active" id="active">
                            <option value='1' @if($tax->active =='1') selected @endif>Active</option>
                            <option value="0" @if($tax->active =='0') selected @endif>Inactive</option>
                        </select>
                    </div>
                  </div>

                  
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>    
                    <a href="{{url('tax')}}" class="btn btn-default">Cancel</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>


