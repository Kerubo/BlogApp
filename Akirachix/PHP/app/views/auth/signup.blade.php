@extends('master')
@section('content')
  <div class="page-header">
    <div class="pull-right">
      <a href="/login" class="btn btn-default">LOGIN</a>
    </div>
    <h2>Sign up</h2>
  </div>
{{Form::open(['action' => 'AuthController@signup'])}}
<div>
    <label for="Username">Username</label>
    {{Form::text('username', null)}}
</div>
<div>
    <label for="Password">Password</label>
    {{Form::password('password')}}
</div>
<div>
    {{Form::submit('Create Account')}}
</div>
{{Form::close()}}

<!-- Errors here -->
@include('layouts.errors')
@stop