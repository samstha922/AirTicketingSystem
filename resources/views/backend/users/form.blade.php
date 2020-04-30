@inject('user_form', 'App\Injection\UserForm')
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
                        <i class="fa fa-user-circle"></i>
                        <span class="caption-subject bold uppercase"> Role</span>
                    </div>
                </div>
                <div class="portlet-body form">
                        <div class="form-body">
                            <div class="form-group">
                                <label>Role</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </span>
                                   {!! Form::select('role[]', App\Role::pluck('display_name', 'id'), null, ['class' => 'form-control', 'placeholder'=>'Select Role']) !!}
                                </div>
                            </div>
                            
                        <div class="form-actions">
                            @if(isset($user))
                                <button type="submit" class="btn blue">Update</button>
                            @else
                                <button type="submit" class="btn blue">New</button>
                            @endif
                            <a href="{{ url('admin/') }}" class="btn default">Cancel</a>
                        </div>
                  
                    </div>
                </div>
            </div>
        </div>
</div>