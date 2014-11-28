@extends('master')
@section('content')
<div style="  height:600px; :margin:40px auto">
  <div class="page-header">
    <div class="pull-right">
      <a href="/signup" class="btn btn-primary">Sign Up</a>
    </div>

    <h1 style="color:#F05A28;"> E-Botics Kenya 
    </h1>
  </div>

<div class='col-lg-4 col-lg-offset-4'>
 <h2><i class='fa fa-lock'></i> Login</h2>
  {{Form::open(['action' => 'AuthController@login'])}}
  <div class="form-group">
   {{ Form::label('Username') }}
    {{Form::text('username')}}
  </div>
  <div class="form-group">
   {{ Form::label('Password') }}
    {{Form::password('password')}}
  </div>
  
  {{Form::close()}}
 
  <div class="pull-left btn-group">
      <a href="{{route('contents.create')}}" class="btn btn-primary">
      Access Account</a></div>
      </div>
      </div>
@stop
