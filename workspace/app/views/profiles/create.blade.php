@extends('master')
 
@section('title')
 
@section('content')
 {{HTML::style('assets/css/main.css')}}
 <div id="content">
<br><br><br><br>
<div id="slidar">
<br><br><br><br>


<div class='col-lg-4 col-lg-offset-4' >
<h2>Create Profile</h2>
    <div id="file">
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
    <label for="Phone">Phone</label><br>
    {{Form::text('phone', null)}}
</div><br>
<div>
    {{Form::submit('Create Profile')}}
</div>
{{Form::close()}}


@include('layouts.errors')
</div>
</div>
</div>
</div>
</body>
@stop