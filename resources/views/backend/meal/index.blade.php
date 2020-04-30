@extends('backend.admin_master')
	

@section('contents')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ url('/dashboard') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Meal</a>
            </li>
        </ul>

        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <a href="{{ url('meal/create') }}" class="btn btn-info"><i class="fa fa-plus"></i> New</a>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> List of All Meal Preferences
    </h3>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Meals </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="meals">
                        <thead class="flip-content">
                            <tr>
                                <th width="20%"> S.N. </th>
                                <th> Meal Preference </th>
                                <th> Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($meals as $key=>$meal)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $meal->meal_name}}</td>
                                <td>
                                <div class="col-md-12" style="display:flex;">
                                <a href="{{route('meal.edit',$meal->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                {!! Form::open(['route'=>['meal.destroy',$meal->id],'method'=>'DELETE'])!!}

                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                {!! Form::close() !!}
                                </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')
    <script>
        $("#meals").DataTable();
    </script>
@endsection