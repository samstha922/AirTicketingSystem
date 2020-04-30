@extends('backend.admin_master')

@section('contents')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Agent</a>
                <i class="fa fa-circle"></i>
            </li>
        </ul>
        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('agent/create') }}" class="btn btn-info"><i class="fa fa-plus"></i> New</a>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title">Agent List</h3>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                        <thead>
                            <tr>
                                <th class="all">S.n</th>
                                <th class="all">Name</th>
                                <th class="min-phone-l">Email</th>
                                <th class="min-phone-l">Organization</th>
                                <th class="min-phone-l">Billing currency</th>
                                <th class="min-phone-l">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $("#sample_1").DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "agent/dt"
            }
          });
    </script>
@endsection


