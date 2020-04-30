@extends('backend.admin_master')

@section('contents')
	<div class="page-bar">
	    <ul class="page-breadcrumb">
	        <li>
	            <a href="{{ url('/dashboard') }}">Home</a>
	            <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <a href="#">User</a>
	        </li>    
	    </ul>
	    <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('admin/create') }}" class="btn btn-info"><i class="fa fa-plus"></i> New</a>
            </div>
        </div>
	    
	</div>
	<!-- END PAGE BAR -->
	<!-- BEGIN PAGE TITLE-->
	<h3 class="page-title"> User List
	</h3>
	<div class="row">
	    <div class="col-md-12">
	        <!-- BEGIN EXAMPLE TABLE PORTLET-->
	        <div class="portlet light bordered">
				<div class="portlet-body">
	                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="user_tb">
	                    <thead>
	                        <tr>
	                        	<th class="all">S.n.</th>
	                            <th class="all">Name</th>
	                            <th class="min-phone-l">Email</th>
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
		$("#user_tb").DataTable({
	        "processing": true,
	        "serverSide": true,
	        "ajax": {
	            "url": "admin/dt"
	        }
	      });
	</script>
@endsection


