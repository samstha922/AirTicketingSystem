@extends('backend.admin_master')

@section('contents')
  <!-- BEGIN PAGE BAR -->
  <div class="page-bar">
      <ul class="page-breadcrumb">
          <li>
              <a href="{{ url('/dashboard') }}">Home</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <a href="{{ url('tax/') }}">Tax</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <a href="#">Edit</a>
          </li>
      </ul>
       <div class="page-toolbar">
              <div class="btn-group pull-right">
                  <a href="{{ url('tax/') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> Back</a>
              </div>
          </div>
  </div>
  <h3 class="page-title">Update Tax Rate </h3>
  <!-- END PAGE BAR -->

  {!! Form::model($tax, ['route'=>['tax.update',$tax->id], 'method'=>'PUT']) !!}

    @include('backend.tax.partials.form_edit_tax')
    
  {!! Form::close() !!}
@stop

@section('footer')
<script type="text/javascript">

  function upperCaseF(a){
      setTimeout(function(){
          a.value = a.value.toUpperCase();
      }, 1);
  }
</script>
@stop