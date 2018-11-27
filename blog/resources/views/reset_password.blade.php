@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="padding-top: 15%;">
            <div class="login-panel panel panel-default" >
                <div class="panel-heading">
                    <h3 class="panel-title">Reset Password</h3>
                </div>
                <div class="panel-body">
                    <form role="form"  method="post" action="{{url('resetpassword')}}">
                        <fieldset>
                            <div class="form-group">
                                <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>"> 
                                <input name="user_id" type="hidden" value="{{ $data['user_id'] or old('user_id') }}"> 
                                <input type="hidden" name="user_email" value="<?php echo $data['user_email'];?>" />
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                                @if ($errors->has('user_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('user_password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Confirm Password" name="confirm_password" type="password" value="">
                                @if ($errors->has('confirm_user_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('confirm_user_password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block">Register</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection