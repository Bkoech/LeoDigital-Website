@extends('backpack::layout_min')

@section('after_styles')
<style type="text/css">
    .content-wrapper,.main-footer,.right-side{margin-left:0}.full-height{height:100vh}.flex-center{align-items:center;display:flex;justify-content:center}.position-ref{position:relative}.top-right{position:absolute;right:10px;top:18px}.content{text-align:center}.title{font-size:84px;color:#636b6f!important;font-family:Raleway,sans-serif!important;font-weight:100}.links>a{color:#636b6f;padding:0 25px;font-size:12px;font-weight:600;letter-spacing:.1rem;text-decoration:none;text-transform:uppercase}.m-b-md{margin-bottom:30px}.box{box-shadow:0 4px 10px 10px rgba(0,0,0,.1)!important}.navbar{margin-bottom:0}
</style>
@endsection

@section('content')
<div class="row">
    <div class="title m-b-md">
        &nbsp;
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-title">{{ trans('backpack::base.login') }}</div>
            </div>
            <div class="box-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url(config('backpack.base.route_prefix').'/login') }}">
                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">{{ trans('backpack::base.email_address') }}</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">{{ trans('backpack::base.password') }}</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">
                                {{ trans('backpack::base.login') }}
                            </button>

                            <!-- <a class="btn btn-link" href="{{ url(config('backpack.base.route_prefix').'/password/reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
