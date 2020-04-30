@extends('backend.admin_master')
@section('contents')
	<div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ url('/dashboard') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Role</span>
            </li>
        </ul>
         <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('role/create') }}" class="btn btn-info"><i class="fa fa-plus"></i> New</a>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title">Role list</h3>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>lists </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                            <tr>
                                <th width="20%"> No </th>
                                <th> Name </th>
                                <th class="numeric"> Description </th>
                                <th class="numeric"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach ($roles as $key => $role)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $role->display_name }}</td>
								<td>{{ $role->description }}</td>
								<td>
                                    <a type="button" href="{{ url('role/edit/'.$role->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                    <a type="button" href="{{ url('role/show/'.$role->id) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a type="button" href="{{ url('role/delete/'.$role->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							@endforeach
                        </tbody>
                    </table>
                    {!! $roles->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection