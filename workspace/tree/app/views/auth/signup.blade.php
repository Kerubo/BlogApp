 @extends('master')
@section('title') Login @stop
 
@section('content')
 
<div class='col-lg-4 col-lg-offset-4' style="backround:#fff;border:5px solid #ff7400;">
<h1 color:#0072BB;><i class="fa fa-sign-in"></i> Sign Up Here</h1>

{{Form::open(['action' => 'AuthController@signup'])}}
<div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
   </div>
    <div class='form-group'>
        {{ Form::submit('Create Account', ['class' => 'btn btn-primary']) }}
    </div>
{{Form::close()}}

<!-- Errors here -->
@include('layouts.errors')

@stop
