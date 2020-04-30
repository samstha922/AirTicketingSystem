@extends('layouts.app')

@section('main')
<!-- BEGIN HEADER -->
@include('backend.partial.header')   
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">

<!-- BEGIN SIDEBAR -->
 @include('backend.partial.sidebar')
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">

    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
	@include('backend/city/partials/_message'){{-- for session msg flash --}}
   	@yield('contents')    
	</div>
    <!-- END CONTENT BODY -->
</div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('backend.partial.footer')

<!-- END FOOTER -->

@endsection