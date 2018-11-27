@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="padding-top: 15%;">
            <div class="login-panel panel panel-default" >
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>

                <div class="panel-body">
                    <form role="form" action="" method="post">
                        <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>"> 

                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="First Name" name="user_firstname" type="text" autofocus>
                                @if ($errors->has('user_firstname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('user_firstname') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Last Name" name="user_lastname" type="text" autofocus>
                                @if ($errors->has('user_lastname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('user_lastname') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                                @if ($errors->has('user_email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('user_email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                                @if ($errors->has('user_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('user_password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Confirm Password" name="confirm_user_password" type="password" value="">
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