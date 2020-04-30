<div class="row">
   <div class="col-md-6">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="fa fa-user-plus"></i>
                    <span class="caption-subject bold uppercase"> Basic</span>
                </div>
            </div>
            <div class="portlet-body form">
                    <div class="form-body">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-pencil"></i>
                                </span>
                             {!! Form::text('name', null,  ['placeholder' => 'name', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                {!! Form::text('email',null, array('placeholder' => 'Email','class' => 'form-control')) !!}

                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Confirm password</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-unlock-alt "></i>
                                </span>
                                {!! Form::password('password_confirm', array('placeholder' => 'Password','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-map-marker"></i>
                                </span>
                                {!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </span>
                               {!! Form::text('contact', null, array('placeholder' => 'Contact','class' => 'form-control')) !!}
                            </div>
                        </div>
                      
                        
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="fa fa-file-text-o"></i>
                    <span class="caption-subject bold uppercase"> Detail</span>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <label>Contact Person</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                           {!! Form::text('contact_person', null, array('placeholder' => 'Contact person','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Phone number</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-phone-square"></i>
                            </span>
                           {!! Form::text('phone_no', null, array('placeholder' => 'Phone number','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mobile no</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-mobile-phone"></i>
                            </span>
                           {!! Form::text('mobile_no', null, array('placeholder' => 'Mobile number','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Org</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-building"></i>
                            </span>
                           {!! Form::text('org', null, array('placeholder' => 'Organization','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Billing Currency</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-money"></i>
                            </span>
                           {!! Form::select('billing_currency', ['USD' => 'USD', 'NPR' => 'NPR'], null, ['placeholder' => 'Currency', 'class'=>'form-control'])!!}
                        </div>
                    </div>
                    <div class="form-actions">
                        @if(isset($agent->id))
                            <button type="submit" class="btn blue">Update</button>
                        @else
                            <button type="submit" class="btn blue">New</button>
                        @endif
                        <a href="{{ url('agent/') }}" type="button" class="btn default">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



