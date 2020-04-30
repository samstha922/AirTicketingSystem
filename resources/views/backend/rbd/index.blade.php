@extends('backend.admin_master')

@section('contents')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ url('/dashboard') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">RBD</a>
            </li>
        </ul>

        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('rbd/create') }}" class="btn btn-info"><i class="fa fa-plus"></i> New</a>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> List of All RBDs
    </h3>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>RBDs </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="rbds">
                        <thead class="flip-content">
                            <tr>
                                <th width="20%"> S.N.</th>
                                <th>RBD Name</th>
								<th>Cabin</th>
								<th>Hierarchy</th>
								<th>Options</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($rbds as $key=>$rbd)
                            <tr>
                                <td>{{++$key}}</td>
								<td>{{ $rbd->rbd}}</td>
								<td>{{ $rbd->cabin->cabin}}</td>
								<td>{{ $rbd->hierarchy}}</td>

                                <td>
                                <div class="col-md-12" style="display:flex;">
                                <a href="{{route('rbd.edit',$rbd->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                {!! Form::open(['route'=>['rbd.destroy',$rbd->id],'method'=>'DELETE'])!!}

                                    {{-- {!! Form::submit('<i class="fa fa-trash"></i>',['class'=>'btn btn-danger'])!!} --}}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                {!! Form::close() !!}
                                </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="text-center">
                        {{ $rbds->links() }}
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        $("#rbds").DataTable();
    </script>
@endsection