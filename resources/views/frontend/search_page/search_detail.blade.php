@extends('frontend.master')
@section('contents')
{{-- {{dd($request)}} --}}
<!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <!-- BEGIN PAGE CONTENT BODY -->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Dashboard</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <form action="{{url('/agent/search')}}">
                            <div class="portlet light">
                                <div class="row" style="padding-left:20px">
                                    <div class="form-group">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="radio1" name="radio2" class="md-radiobtn" value="one" @if ($request->radio2 == 'one') checked @endif>
                                                <label for="radio1">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> One Way </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="radio2" name="radio2" class="md-radiobtn" value="round" @if ($request->radio2 == 'round') checked @endif>
                                                <label for="radio2">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Round Trip </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>From</label>
                                            <input type="text" name="origin" class="form-control" placeholder="Origin" value="{{$request->origin}}"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>To</label>
                                            <input type="text" name="destination" class="form-control" placeholder="Destination" value="{{$request->destination}}"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Dates</label>
                                            <div class="input-group input-large date-picker input-daterange search-date" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                <input type="text" class="form-control" name="fromDate" value="{{$request->fromDate}}">
                                                <span class="input-group-addon"> to </span>
                                                <input type="text" class="form-control" name="toDate" value="{{$request->toDate}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Class</label>
                                            <select class="form-control" name="class">
                                                <option value="economy" @if ($request->class == 'economy') selected @endif>Economy</option>
                                                <option value="business" @if ($request->class == 'business') selected @endif>Business</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Person:</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-minus"></span>
                                                    </button>
                                                </span>
                                                <input type="text" name="quant[1]" class="form-control search-no" value="{{$request->quant[1]}}" min="1" max="10" >
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn search_btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <div class="portlet light" id="form_wizard_1">
                            <div class="portlet-body form">
                                <form class="form-horizontal" action="#" id="submit_form" method="POST">
                                    <div class="form-wizard">
                                        <div class="form-body">
                                            <ul class="nav nav-pills nav-justified steps">
                                                <li>
                                                    <a href="#tab1" data-toggle="tab" class="step">
                                                        <span class="number"> 1 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Find </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab2" data-toggle="tab" class="step">
                                                        <span class="number"> 2 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Detail </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab3" data-toggle="tab" class="step active">
                                                        <span class="number"> 3 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Book </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab4" data-toggle="tab" class="step">
                                                        <span class="number"> 4 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Ticket </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div id="bar" class="progress progress-striped" role="progressbar">
                                                <div class="progress-bar progress-bar-success"> </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab1">
                                                    @if ($request->radio2 == 'one')
                                                        <div class="row">
                                                            <div class="col-md-12 ">
                                                                <div class="col-md-9">
                                                                    <div class="col-md-12"> 
                                                                        <h4>Himalaya Air</h4>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h5 class="col-md-12">KTM Kathmandu</h5>
                                                                        <span class="col-md-7 flight-time">12:00</span>
                                                                        <div class="col-md-5 flight-time-padding">
                                                                            <span class="time-font">AM</span> <br>
                                                                            <span class="time-font">jan 10 Fri</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="row">To</div>
                                                                        <div class="row">
                                                                            <hr class="col-md-6 hr-black">
                                                                            <div class="col-md-3">
                                                                                <i class="fa fa-plane icon-margin"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                         <h5 class="col-md-12">New York</h5>
                                                                        <span class="col-md-7 flight-time">12:00</span>
                                                                        <div class="col-md-5 flight-time-padding">
                                                                            <span class="time-font">AM</span> <br>
                                                                            <span class="time-font">jan 10 Fri</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <h3 class="flight-charge">$350</h3>
                                                                    <button type="submit" class="btn book-btn button-next">Book Now</button>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    @else
                                                        <div class="row">
                                                            <div class="col-md-12 ">
                                                                <div class="col-md-9">
                                                                    <div class="col-md-12"> 
                                                                        <h4>Himalaya Air</h4>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h5 class="col-md-12">KTM Kathmandu</h5>
                                                                        <span class="col-md-7 flight-time">12:00</span>
                                                                        <div class="col-md-5 flight-time-padding">
                                                                            <span class="time-font">AM</span> <br>
                                                                            <span class="time-font">jan 10 Fri</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="row">To</div>
                                                                        <div class="row">
                                                                            <hr class="col-md-6 hr-black">
                                                                            <div class="col-md-3">
                                                                                <i class="fa fa-plane icon-margin"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                         <h5 class="col-md-12">New York</h5>
                                                                        <span class="col-md-7 flight-time">12:00</span>
                                                                        <div class="col-md-5 flight-time-padding">
                                                                            <span class="time-font">AM</span> <br>
                                                                            <span class="time-font">jan 10 Fri</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h5 class="col-md-12">New York</h5>
                                                                        <span class="col-md-7 flight-time">12:00</span>
                                                                        <div class="col-md-5 flight-time-padding">
                                                                            <span class="time-font">AM</span> <br>
                                                                            <span class="time-font">jan 10 Fri</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="row">To</div>
                                                                        <div class="row">
                                                                            <hr class="col-md-6 hr-black">
                                                                            <div class="col-md-3">
                                                                                <i class="fa fa-plane icon-margin"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                         <h5 class="col-md-12">Kathmadnu</h5>
                                                                        <span class="col-md-7 flight-time">12:00</span>
                                                                        <div class="col-md-5 flight-time-padding">
                                                                            <span class="time-font">AM</span> <br>
                                                                            <span class="time-font">jan 10 Fri</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <h3 class="flight-charge">$350</h3>
                                                                    <button type="submit" class="btn book-btn button-next">Book Now</button>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    @endif                                                
                                                </div>
                                                <div class="tab-pane" id="tab2">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn book-btn back-btn pull-right button-previous">Back</button>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5 class="col-md-4"><strong>From:</strong></h5>
                                                            <h5 class="col-md-8">Kathmandu</h5>
                                                            <h5 class="col-md-4"><strong>To:</strong></h5>
                                                            <h5 class="col-md-6">New York</h5>
                                                            <h5 class="col-md-4"><strong>Departure:</strong></h5>
                                                            <h5 class="col-md-6">Jan 10, 2017 Friday</h5>
                                                        </div>
                                                        {{-- if round trip show the returning information --}}
                                                        <div class="col-md-6">
                                                            <h5 class="col-md-4"><strong>From:</strong></h5>
                                                            <h5 class="col-md-8">New York</h5>
                                                            <h5 class="col-md-4"><strong>To:</strong></h5>
                                                            <h5 class="col-md-8">Kathmandu</h5>
                                                            <h5 class="col-md-4"><strong>Return:</strong></h5>
                                                            <h5 class="col-md-8">Jan 10, 2017 Friday</h4>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <h5 class="col-md-2"><strong>Class:</strong></h5>
                                                            <h5 class="col-md-6">Economy</h4>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h3><strong>Customer Details</strong></h3>
                                                            {{-- loop till number of customers --}}
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Full Name:</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="firstname" class="form-control input-small" placeholder="First Name">
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="middlename" class="form-control input-small" placeholder="Middle Name">
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="lastname" class="form-control input-small" placeholder="Last Name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label"> Nationality:</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" name="nationality" class="form-control" placeholder="Nationality" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Passport No.:</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="passport" class="form-control" placeholder="Passport Number" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Issued Date:</label>
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                                                                        <input type="text" class="form-control" readonly="">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn default" type="button">
                                                                                <i class="fa fa-calendar"></i>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Expiry Date:</label>
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                                                                        <input type="text" class="form-control" readonly="">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn default" type="button">
                                                                                <i class="fa fa-calendar"></i>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Meal Preference</label>
                                                                <div class="col-md-4">
                                                                    <select class="form-control" name="meal">
                                                                        <option>Option 1</option>
                                                                        <option>Option 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Seat Preference</label>
                                                                <div class="col-md-4">
                                                                    <select class="form-control" name="seat">
                                                                        <option>Option 1</option>
                                                                        <option>Option 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Mobile No.:</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="mobile" class="form-control" placeholder="Mobile Number" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">E-mail:</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="email" class="form-control" placeholder="Email" >
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <button type="submit" class="btn book-btn book-btn-info button-next">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab3">
                                                </div>
                                                <div class="tab-pane" id="tab4">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <a href="javascript:;" class="btn default button-previous">
                                                        <i class="fa fa-angle-left"></i> Back </a>
                                                    <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn green button-submit"> Submit
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT BODY -->
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@endsection
@section('footerscript')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection