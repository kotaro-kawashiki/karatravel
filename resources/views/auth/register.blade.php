@extends('layouts.app')

@section('content')
<div class="container">
    
                <center style="margin-top:100px;" class="jumbotron">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <!--name-->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-6 input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><span class="oi oi-person" title="person" aria-hidden="true"></span></div>
                                </div>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="User Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--email-->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6 input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">@</div>
                                </div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--password-->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6 input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><span class="oi oi-key" title="key" aria-hidden="true"></span></div>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--password-confirm-->
                        <div class="form-group">
                            <div class="col-md-6 input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><span class="oi oi-key" title="key" aria-hidden="true"></span></div>
                                </div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password again" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
              </center>
</div>
@endsection
