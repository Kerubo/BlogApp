@extends('master')
@section('content')
  <div class="page-header">
    <div class="pull-right">
      <a href="/signup" class="btn btn-default">SIGN UP</a>
    </div>
      <h1><i class='fa fa-lock'></i> Login</h1>
  </div>
{{Form::open(['action' => 'AuthController@login'])}}
<div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>
<div class='form-group'>
    {{Form::submit('Login')}}
</div>
{{Form::close()}}
@stop