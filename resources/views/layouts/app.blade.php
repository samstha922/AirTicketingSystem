<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Himalaya Airlines</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        {{ Html::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}
        {{ Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}
        {{ Html::style('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}
        {{ Html::style('assets/global/plugins/uniform/css/uniform.default.css') }}
        {{ Html::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}
        <!-- END GLOBAL MANDATORY STYLES -->

        
        {{-- data table --}}    
        {{ Html::style('assets/global/plugins/datatables/datatables.min.css') }}
        {{ Html::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}


        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{ Html::style('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}
        {{ Html::style('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}
        {{ Html::style('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}
        {{ Html::style('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}
        {{ Html::style('assets/global/plugins/clockface/css/clockface.css') }}
        {{ Html::style('assets/global/plugins/morris/morris.css') }}
        {{ Html::style('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        {{ Html::style('assets/global/css/components.min.css') }}
        {{ Html::style('assets/global/css/plugins.min.css') }}
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        {{ Html::style('assets/layouts/layout/css/layout.min.css') }}
        {{ Html::style('assets/layouts/layout/css/themes/light.min.css') }}
        {{ Html::style('assets/layouts/layout/css/custom.min.css') }}
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
         @yield('headerscript')
        </head>


       
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white login">
        @yield('main')
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        {{ Html::script('assets/global/plugins/jquery.min.js') }}
        {{ Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}
        {{ Html::script('assets/global/plugins/js.cookie.min.js') }}
        {{ Html::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}
        {{ Html::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
        {{ Html::script('assets/global/plugins/jquery.blockui.min.js') }}
        {{ Html::script('assets/global/plugins/uniform/jquery.uniform.min.js') }}
        {{ Html::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{ Html::script('assets/global/plugins/moment.min.js') }}
        {{ Html::script('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}
        {{ Html::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}
        {{ Html::script('assets/global/plugins/morris/morris.min.js') }}
        {{-- {{ Html::script('assets/global/plugins/morris/raphael-min.js') }} --}}
        {{ Html::script('../assets/global/plugins/counterup/jquery.waypoints.min.js') }}
        {{ Html::script('../assets/global/plugins/counterup/jquery.counterup.min.js') }} 
        {{-- {{ Html::script('assets/global/plugins/amcharts/amcharts/amcharts.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/amcharts/amcharts/serial.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/amcharts/amcharts/pie.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/amcharts/amcharts/radar.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/amcharts/amcharts/themes/light.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/amcharts/amcharts/themes/patterns.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/amcharts/amcharts/themes/chalk.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/amcharts/ammap/ammap.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/amcharts/amstockcharts/amstock.js') }} --}}
        {{ Html::script('assets/global/plugins/fullcalendar/fullcalendar.min.js') }}
        {{-- {{ Html::script('assets/global/plugins/flot/jquery.flot.min.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/flot/jquery.flot.resize.min.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/flot/jquery.flot.categories.min.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }} --}}
        {{-- {{ Html::script('assets/global/plugins/jquery.sparkline.min.js') }} --}}
        {{-- <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script> --}}
        {{-- <script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        {{ Html::script('assets/frontend/js/mdb.min.js') }}
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        {{ Html::script('assets/frontend/js/mdb.min.js') }}
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        {{ Html::script('assets/frontend/js/mdb.min.js') }}
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        {{ Html::script('assets/frontend/js/mdb.min.js') }}
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        {{ Html::script('assets/frontend/js/mdb.min.js') }}
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        {{ Html::script('assets/frontend/js/mdb.min.js') }}
        <script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script> --}}
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        {{ Html::script('assets/global/scripts/app.min.js') }}
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        {{ Html::script('assets/pages/scripts/dashboard.min.js') }}
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        {{ Html::script('assets/layouts/layout/scripts/layout.min.js') }}
        {{ Html::script('assets/layouts/layout/scripts/demo.min.js') }}
        {{ Html::script('assets/layouts/global/scripts/quick-sidebar.min.js') }}
        <!-- END THEME LAYOUT SCRIPTS -->

        {{-- footer table --}}
        {{ Html::script('assets/global/scripts/datatable.js') }}
        {{ Html::script('assets/global/plugins/datatables/datatables.min.js') }}
        {{ Html::script('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}
        {{ Html::script('assets/pages/scripts/table-datatables-responsive.min.js') }}


        {{-- date picker --}}
        {{ Html::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}
        {{ Html::script('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}
     
        @yield('footer')
    </body>

</html>
