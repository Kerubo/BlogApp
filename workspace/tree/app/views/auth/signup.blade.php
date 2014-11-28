 @extends('master')
@section('title') Login @stop
 
@section('content')
  {{HTML::style('assets/css/main.css')}}
 <div id="wrapper">
<br><br><br><br>
<div id="content">

<h2 color:#0072BB;><i class="fa fa-sign-in"></i> Sign Up Here</h2>

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
   
{{Form::close()}}

<!-- Errors here -->
@include('layouts.errors')
</div>
</div>
@stop
