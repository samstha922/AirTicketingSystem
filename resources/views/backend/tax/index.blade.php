@extends('backend.admin_master')

@section('contents')
<div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ url('/dashboard') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Tax</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('tax/create') }}" class="btn btn-info"><i class="fa fa-plus"></i> New</a>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title">All Listed Tax Rates
       
    </h3>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Tax Rates 
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="taxes">
                        <thead class="flip-content">
                            <tr>
                                <th width="10%"> S.N.</th>
                                <th>Tax Head</th>
								<th>Local Rate</th>
								<th>Other's Rate</th>
                                <th>Status</th>
								<th>Options</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            @foreach($taxes as $key=>$tax)
                            <tr>
                                <td>{{ ++$key}}</td>
								<td>{{ $tax->tax_head}}</td>
								<td>{{ $tax->local_price}}</td>
								<td>{{ $tax->usd_price}}</td>
								<td>{{ $tax->active}}</td>

                                <td>
                                <div class="col-md-12" style="display:flex;">
                                <a href="{{route('tax.edit',$tax->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                {!! Form::open(['route'=>['tax.destroy',$tax->id],'method'=>'DELETE'])!!}

                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                {!! Form::close() !!}
                                </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    {{-- <div class="text-center">
                        {{ $taxes->links() }}
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        $("#taxes").DataTable();
    </script>
@endsection