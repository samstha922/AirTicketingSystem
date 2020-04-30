@extends('backend.admin_master')

@section('contents')
	<div class="page-bar">
	    <ul class="page-breadcrumb">
	        <li>
	            <a href="index.html">Home</a>
	            <i class="fa fa-circle"></i>
	        </li>
	    </ul>
	    
	</div>
	<!-- END PAGE BAR -->
	<!-- BEGIN PAGE TITLE-->
	<h3 class="page-title"> Dashboard
	    
	</h3>
	<div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="1349">0</span>
                    </div>
                    <div class="desc"> Total Flights</div>
                </div>
                <!-- <a class="more" href="javascript:;"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a> -->
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="12,5">0</span>M$ </div>
                    <div class="desc"> Total Profit </div>
                </div>
               <!--  <a class="more" href="javascript:;"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a> -->
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="549">0</span>
                    </div>
                    <div class="desc"> New Orders </div>
                </div>
               <!--  <a class="more" href="javascript:;"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a> -->
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat purple">
                <div class="visual">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                    <div class="number"> +
                        <span data-counter="counterup" data-value="89"></span>% </div>
                    <div class="desc"> Brand Popularity </div>
                </div>
                <!-- <a class="more" href="javascript:;"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a> -->
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-md-8 col-sm-8">
            <div class="portlet light bordered">
		    	<div class="portlet-title">
		            <div class="caption">
		                <i class="icon-check font-blue"></i>
		                <span class="caption-subject font-blue bold uppercase">Recent Reservations</span>
		            </div>
		        </div>    
		    	<div class="portlet-body">
		            <div class="scroller" style="height: auto;" data-always-visible="1" data-rail-visible="0">
		                <ul class="feeds">
		                    <li>
		                        <div class="col1">
		                            <div class="cont">
		                                <div class="cont-col1">
		                                    <div class="label label-sm label-info">
		                                        <i class="fa fa-check"></i>
		                                    </div>
		                                </div>
		                                <div class="cont-col2">
		                                    <div class="desc"> Mr. ABC has booked for Flight No.: H9892 [KTM-RGN] <em>Ticket No:799-1211-1221-1212</em>.</div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="col2">
		                            <div class="date"> Just now </div>
		                        </div>
		                    </li>
		                    <li>
	                            <div class="col1">
	                                <div class="cont">
	                                    <div class="cont-col1">
	                                        <div class="label label-sm label-success">
	                                            <i class="fa fa-bar-chart-o"></i>
	                                        </div>
	                                    </div>
	                                    <div class="cont-col2">
	                                        <div class="desc"> Mr. EFG has booked for Flight No.: H9892 [KTM-RGN] <em>Ticket No:799-1211-1221-4543</em>.</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col2">
	                                <div class="date"> 20 mins </div>
	                            </div>
		                    </li>
		                    <li>
		                        <div class="col1">
		                            <div class="cont">
		                                <div class="cont-col1">
		                                    <div class="label label-sm label-danger">
		                                        <i class="fa fa-user"></i>
		                                    </div>
		                                </div>
		                                <div class="cont-col2">
		                                    <div class="desc"> Mr. XYZ has booked for Flight No.: H9892 [KTM-RGN] <em>Ticket No:799-1211-1221-3454</em>.</div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="col2">
		                            <div class="date"> 24 mins </div>
		                        </div>
		                    </li>
		                   
		                </ul>
		            </div>
		            <div class="scroller-footer">
		                <div class="btn-arrow-link pull-right">
		                    <a href="javascript:;">See All Records</a>
		                    <i class="icon-arrow-right"></i>
		                </div>
		            </div>
		        </div>
			</div>
		</div>  
		<div class="col-md-4 col-sm-4">
            <div class="portlet light bordered">
		    	<div class="portlet-title">
		            <div class="caption">
		                <i class="icon-plane font-blue"></i>
		                <span class="caption-subject font-blue bold uppercase">Todays Flights</span>
		            </div>
		        </div>    
		    	<div class="portlet-body">
		    		<div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-hover table-light">
                            <thead>
                                <tr class="uppercase">
                                    <th> # </th>
                                    <th> Flight No </th>
                                    <th> Departure </th>
                                    <th> Arrival </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td> H9 892 </td>
                                    <td> 10:15 </td>
                                    <td> 2:15 </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> H9 893 </td>
                                    <td> 3:15 </td>
                                    <td> 5:15 </td>
                                </tr>
                       
                            </tbody>
                        </table>
                    </div>
		        </div>
			</div>
		</div>       
    </div>
@endsection


