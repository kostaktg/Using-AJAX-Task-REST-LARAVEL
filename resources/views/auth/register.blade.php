@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-body body-panel" >
                 <h1 class="text-center"> Sign Up</h1>

                 <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="row col-md-offset-2">
                        <label for="name" class="col-md-4 ">First name</label>
                    </div>

                    <div class="row col-md-offset-2">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>


                        <div class="row col-md-offset-2">
                        <label for="name" class="col-md-4 ">Last name</label>
                    </div>

                    <div class="row col-md-offset-2">
                        <div class="form-group">
                            <div class="col-md-10">
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('name') }}" required >

                            </div>
                        </div>
                    </div>




                    <div class="row col-md-offset-2">
                        <label for="email" class="col-md-4 ">E-Mail Address</label>
                    </div>
                    <div class="row col-md-offset-2">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>



                    <div class="row col-md-offset-2">
<label for="password" class="col-md-6 ">Password ( 6 or more characters)</label>
</div>

<div class="row col-md-offset-2">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        

                        <div class="col-md-10">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    </div>


                    <div class="row col-md-offset-2">
<label for="password-confirm" class="col-md-4 ">Confirm Password</label>
</div>

<div class="row col-md-offset-2">
                    <div class="form-group">
                        

                        <div class="col-md-10">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    </div>




                    <div class="form-group">
                    <p class="text-center">By clicking Sing Up, you agree to <strong>User Agreement, Privacy<br/> Policy</strong>,and <strong>Cookie Policy</strong>.</p>
                        <div class="col-md-10 col-md-offset-2">


                            <button type="submit" class="btn-my">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
