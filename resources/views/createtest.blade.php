@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div align="center">
            <a href="/mainlanding"><img src="back.jpg" width="60px" title="Main" /></a>
            <a href="/createtest"><img src="test.png" width="80px" title="Create a New Test" /></a>

          </div>
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Test</div>

                <div class="panel-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="testname" class="col-md-4 control-label">Test Name</label>

                            <div class="col-md-6">
                                <input id="testname" type="text" class="form-control" name="testname" value="{{ old('testname') }}" required autofocus>

                                @if ($errors->has('testname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namtestnamee') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="login" class="col-md-4 control-label">Login</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}" required autofocus>

                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="Link" class="col-md-4 control-label">Link </label>

                            <div class="col-md-6">
                                <input id="Link" type="text" class="form-control" name="Link" required>

                                @if ($errors->has('Link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                                <button type="reset" class="btn btn-aler">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}

                            
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
