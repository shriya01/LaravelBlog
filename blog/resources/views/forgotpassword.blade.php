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
                        <form role="form" method="post" action="{{url('forgot')}}">
                            <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>"> 
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                                      @if ($errors->has('user_email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('user_email') }}</strong>
                                </span>
                                @endif
                                </div>
                                 <button class="btn btn-success w-md waves-effect waves-light" type="submit">Send Mail</button>
                <a href="{{url('/')}}" class="btn btn-success w-md waves-effect waves-light">Login</a>

                                <!-- Change this to a button or input when using this as a form -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection