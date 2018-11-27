@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{$action}}">
                        <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>"> 
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button  class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
                    <div > 
                        <a href="{{url('register')}}">Register new user</a>
                        <a href="{{url('forgot')}}" class="pull-right"><i class="fa fa-lock " ></i>Forgot Your Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection