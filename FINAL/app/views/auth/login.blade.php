@extends('master')
@section('content')
  <div class="page-header">
    <div class="pull-right">
      <a href="/signup" class="btn btn-default">SIGN UP</a>
    </div>
    <h2>Login</h2>
  </div>
{{Form::open(['action' => 'AuthController@login'])}}
<div>
    <label for="Username">Username</label>
    {{Form::text('username', null)}}
</div>
<div>
    <label for="Password">Password</label>
    {{Form::password('password')}}
</div>
<div>
    {{Form::submit('Login')}}
</div>
{{Form::close()}}
@stop