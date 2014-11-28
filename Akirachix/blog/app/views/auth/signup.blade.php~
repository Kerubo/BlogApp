@extends('master')
@section('content')
<div style="  height:600px; background:#016DA0;:margin:40px auto">
  <div class="page-header">
   <div class="pull-right">
      <a href="/login" class="btn btn-default">Login</a>
    </div>
    <h1 style="color:#F05A28;">E-Botics Kenya</h1>
  </div>
  <div class='col-lg-4 col-lg-offset-4'>
  <h2><i class="fa fa-sign-in"></i>Sign-Up</h2>

  {{Form::open(['action' => 'AuthController@signup'])}}
  <div class="form-group">
   {{ Form::label('Username') }}
    {{Form::text('username')}}
  </div>
  <div class="form-group">
   {{ Form::label('E-mail Add') }}
    {{Form::text('email')}}
  </div>
  <div class="form-group">
   {{ Form::label('Password') }}
    {{Form::password('password')}}
  </div>
  <div class="form-group">
    {{Form::submit('Create Account', ['class' => 'btn btn-primary'])}}
  </div>
  {{Form::close()}}
  <!--
  <div class="pull-left btn-group">
      <a href="{{route('contents.show')}}" class="btn btn-default">
      Create Account</a></div>-->
      </div>
      </div>
@stop
