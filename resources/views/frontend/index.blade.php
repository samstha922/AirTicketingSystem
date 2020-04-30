@extends('frontend.master')
@section('contents')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <!-- BEGIN PAGE CONTENT BODY -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row widget-row" id="loader" style="height: 369.66px">
                <div id="home-slider" class="owl-carousel">
                    <div class="items">
                        <img src="{{ url('img/Travel.jpg') }}" alt="">
                    </div>
                    <div class="items">
                        <img src="{{ url('img/travel1.jpg') }}" alt="">
                    </div>
                    <div class="items">
                        <img src="{{ url('img/travel2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="row search_form">
                    <form method="post" action="{{url('/agent/search')}}">
                        {{csrf_field()}}
                        <div class="form-body">
                            <div class="row form-padding">
                                <div class="col-md-12" style="padding-left: 30px">
                                    <div class="form-group">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="radio1" name="radio2" class="md-radiobtn" value="one">
                                                <label for="radio1">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> One Way </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="radio2" name="radio2" class="md-radiobtn" value="round" checked>
                                                <label for="radio2">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Round Trip </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input class="form-control input-lg input-resp" name="origin" type="text" placeholder="Select Origin" id="origin">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="col-md-5 date-picker-label" for="date-picker_from">Leaving On</label>
                                                    <div class="input-group date date-picker col-md-7" data-date-format="dd-mm-yyyy">
                                                        <input type="text" name="fromDate" class="form-control datepicker_input" name="datepicker_from">
                                                        <span class="input-group-btn">
                                                            <button class="btn default datepicker_btn" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input class="form-control input-lg input-resp" name="destination" type="text" placeholder="Select Destination">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group" id="not-for-one">
                                                    <label class="col-md-5 date-picker-label" for="date-picker_from">Returning On</label>
                                                    <div class="input-group date date-picker col-md-7" data-date-format="dd-mm-yyyy">
                                                        <input type="text" name="toDate" class="form-control datepicker_input" name="datepicker_to">
                                                        <span class="input-group-btn">
                                                            <button class="btn default datepicker_btn" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 class-label">Class:</label>
                                                    <div class="col-md-8 input-group">
                                                        <select name="class" class="form-control input-lg input-resp">
                                                            <option value="economy">Economy</option>
                                                            <option value="business">Business</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 class-label">Person:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-default btn-number inc-dec-btn" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                                <span class="glyphicon glyphicon-minus"></span>
                                                            </button>
                                                        </span>
                                                        <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-default btn-number inc-dec-btn" data-type="plus" data-field="quant[1]">
                                                                <span class="glyphicon glyphicon-plus"></span>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                     <div class="form-actions">
                                        <button type="submit" class="btn search_btn home_search"><i class="fa fa-search"></i>  Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject bold uppercase font-red">Flight Stats</span>
                                <span class="caption-helper">flight stats...</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-green">
                                <span class="caption-subject bold uppercase">Sales By Region</span>
                                <span class="caption-helper">distance stats...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT INNER -->
    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->
</div>
@endsection

@section('footerscript')
    <script>
        var engine = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace('source'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote:{
                    url: '/scheduler/source/autoload?source=%QUERY',
                    wildcard: '%QUERY'
                }
        });
        $("#origin").typeahead({
            hint: true,
            highlight: true,
            minLength: 0
        }, {
            source: engine.ttAdapter(),
            // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
            name: 'source',
            // the key from the array we want to display (name,id,email,etc...)
            displayKey: 'source',
             templates: {
                    header: [
                        '<div class="list-group search-results-dropdown">'
                    ],
                    suggestion: function (data) {
                    return '<p class="consultant">'+data.flight.id+'</p>'
                }
              }
        });
    </script>
@endsection