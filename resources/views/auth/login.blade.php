@extends('layouts.app')
@section('headerscript')
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="../assets/pages/css/login-2.min.css" rel="stylesheet" type="text/css" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
@endsection
@section('main')
<div class="login">
    <div class="content form-content" style="margin-top: 10%;">
        <div style="text-align: center">
            <img class="img-responsive" src="img/logo.png" alt="" />
        </div>
        <form class="form-horizontal " role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-title">
                <span class="form-title">Welcome.</span>
            </div>
            
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <div class="col-md-12">

                    <input id="email" type="email" class="form-control form-control-solid placeholder-no-fix" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control form-control-solid placeholder-no-fix" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
                
            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-block uppercase">
                        Login
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('footer')
    <script src="js/backstretch.js" type="text/javascript"></script>
    <script>
        $.backstretch('/img/himalayan_air.jpg');
    </script>
@endsection
