@extends('master')
 
@section('title')
 
@section('content')
 <body background="http://www.sonicavenger.com/uploaded_images/ClearBlueSky-741012.jpg">
<div class='col-lg-4 col-lg-offset-4' style="backround:#fff;border:5px solid #ff7400;">
<h2>Create Profile</h2>

{{Form::open(['route' => 'profile.store'])}}
<div>
    <label for="First Name">First Name</label><br>

    {{Form::text('firstname', null)}}
</div>
<div>
    <label for="Last Name">Last Name</label><br>
    {{Form::text('lastname', null)}}
</div>
<div>
    <label for="E-mail">Email</label><br>
    {{Form::text('Email', null)}}
</div><br>
<div>
    {{Form::submit('Create Profile')}}
</div>
{{Form::close()}}

<!-- Errors here 
@include('layouts.errors')
-->
</div>
</body>
@stop