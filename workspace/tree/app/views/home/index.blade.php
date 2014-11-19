@extends('layouts.master')
 
@section('title') Login @stop
 
@section('content')
  <body background="http://www.sonicavenger.com/uploaded_images/ClearBlueSky-741012.jpg">
<div class='col-lg-4 col-lg-offset-4' style="background:#fff;border:5px solid #ff7400;">
 
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif
 
    <h1 style="color:#0072BB;"><i class='fa fa-lock'></i> Admin  Login</h1>
 
    {{ Form::open(['role' => 'form']) }}
 
    <div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    </div>
 
    {{ Form::close() }}
 
</div>
 </body>
@stop