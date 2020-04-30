@inject('role_form', 'App\Injection\RoleForm')
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
                <form role="form">
                    <div class="form-body">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Display Name:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                 {!! Form::text('display_name', null, array('placeholder' => 'Display Name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <div class="input-group">
                                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
                            </div>
                        </div>
                      
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="fa fa-unlock-alt"></i>
                    <span class="caption-subject bold uppercase">Permission</span>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                       {{-- User model --}}
                        <div class="row">
                            <div class="col-md-4">
                                <strong>User</strong>
                                <br/>
                                @foreach($role_form->user_model() as $id => $value)
                                <label>
                                @if(isset($id) && isset($role_id))    
                                    {{ Form::checkbox('permission[]', $id, $role_form->checked_permission($id, $role_id)? true :false, array('class' => 'name')) }}
                                @else
                                    {{ Form::checkbox('permission[]', $id,false, array('class' => 'name')) }}
                                @endif
                                    {{ $value }}</label>
                                    <br/>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <strong>Role:</strong>
                                <br/>
                                @foreach($role_form->role_model() as $id => $value)
                                <label>
                                    @if(isset($id) && isset($role_id))
                                    {{ Form::checkbox('permission[]', $id, $role_form->checked_permission($id, $role_id)? true : false, array('class' => 'name')) }}
                                    @else
                                    {{ Form::checkbox('permission[]', $id, false, array('class' => 'name')) }}
                                    @endif
                                    {{ $value }}
                                </label>
                                <br/>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <strong>Cabin :</strong>
                                <br/>
                                @foreach($role_form->cabin_model() as $id => $value)
                                <label>
                                @if(isset($id) && isset($role_id))
                                    {{ Form::checkbox('permission[]', $id, $role_form->checked_permission($id, $role_id)?true :false, array('class' => 'name')) }}
                                @else
                                {{ Form::checkbox('permission[]', $id, false, array('class' => 'name')) }}
                                @endif
                                    {{ $value}}
                                </label>
                                <br/>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <strong>RBD:</strong>
                                <br/>
                                @foreach($role_form->rbd_model() as $id => $value)
                                <label>
                                @if(isset($id) && isset($role_id))
                                {{ Form::checkbox('permission[]', $id, $role_form->checked_permission($id, $role_id)? true :false, array('class' => 'name')) }}
                                @else
                                {{ Form::checkbox('permission[]', $id, false, array('class' => 'name')) }}
                                @endif    
                                    {{ $value}}</label>
                                    <br/>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <strong>Flights:</strong>
                                <br/>
                                @foreach($role_form->flight_model() as $id => $value)
                                <label>
                                @if(isset($id) && isset($role_id))
                                {{ Form::checkbox('permission[]', $id, $role_form->checked_permission($id, $role_id)? true :false, array('class' => 'name')) }}
                                @else
                                {{ Form::checkbox('permission[]', $id, false, array('class' => 'name')) }}
                                @endif    
                                    {{ $value}}</label>
                                    <br/>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <strong>Fares:</strong>
                                <br/>
                                @foreach($role_form->fares_model() as $id => $value)
                                <label>
                                @if(isset($id) && isset($role_id))
                                {{ Form::checkbox('permission[]', $id, $role_form->checked_permission($id, $role_id)? true :false, array('class' => 'name')) }}
                                @else
                                {{ Form::checkbox('permission[]', $id, false, array('class' => 'name')) }}
                                @endif    
                                    {{ $value}}</label>
                                    <br/>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            {{-- User model --}}
                            <div class="col-md-6">
                                <strong>Schedules:</strong>
                                <br/>
                                @foreach($role_form->schdule_model() as $id => $value)
                                <label>
                                @if(isset($id) && isset($role_id))    
                                    {{ Form::checkbox('permission[]', $id, $role_form->checked_permission($id, $role_id)? true :false, array('class' => 'name')) }}
                                @else
                                    {{ Form::checkbox('permission[]', $id,false, array('class' => 'name')) }}
                                @endif
                                    {{ $value }}</label>
                                    <br/>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                <strong>Schedulers:</strong>
                                <br/>
                                @foreach($role_form->schduler_model() as $id => $value)
                                <label>
                                    @if(isset($id) && isset($role_id))
                                    {{ Form::checkbox('permission[]', $id, $role_form->checked_permission($id, $role_id)? true : false, array('class' => 'name')) }}
                                    @else
                                    {{ Form::checkbox('permission[]', $id, false, array('class' => 'name')) }}
                                    @endif
                                    {{ $value }}
                                </label>
                                <br/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        @if(isset($role->id))
                            <button type="submit" class="btn blue">Update</button>
                        @else
                            <button type="submit" class="btn blue">New</button>
                        @endif
                        <a href="{{ url('role/') }}" type="button" class="btn default">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


