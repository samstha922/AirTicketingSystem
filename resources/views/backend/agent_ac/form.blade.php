@inject('role_form', 'App\Injection\RoleForm')
<div class="row">
   <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <label>Balance</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-money"></i>
                            </span>
                         {!! Form::text('debit', null,  ['placeholder' => 'Amount', 'class' => 'form-control']) !!}
                         <input type="hidden" name="user_id" value="{{$id}}">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Submit</button>
                        <a href="{{ url('agent') }}" class="btn default">Cancel</a>
                    </div>
                      <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                            <tr>
                                <th> Debit </th>
                                <th> Crdit </th>
                                <th> Deposite Date </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($agent_balance as $a)
                                @if($agent_balance !== null)
                                    <tr>
                                        <td>{{ $a->debit }}</td>
                                        <td>{{ $a->credit }}</td>
                                        <td>{{ $a->created_at->toFormattedDateString() }}</td>
                                    </tr>
                                @else
                                    <tr><td colspan="2">Balance not deposite yet!</td></tr> 
                                @endif
                            @endforeach
                            <tr>
                                <td colspan="2"><strong>Total</strong></td>
                                <td><strong>{{$total}}</strong></td>
                            </tr> 
                        </tbody>
                    </table>
                    {{$agent_balance->render()}}
                </div>
            </div>
        </div>
    </div>
</div>



