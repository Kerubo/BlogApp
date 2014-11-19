@extends('master')
 
@section('title')
 
@section('content')

<div class='col-lg-4 col-lg-offset-4' style="backround:#fff;border:5px solid #ff7400;">

<div class="all" >
<h2 style="colour:#fff;">Edit Your Profile</h2>

{{Form::model($profile, ['route' => ['profile.update', $profile->id]])}}
<div>
    <label for="First Name">First Name</label><br>
    {{Form::text('firstname', null)}}
</div>
<div>
    <label for="Last Name">Last Name</label><br>
    {{Form::text('lastname', null)}}
</div>
<div>
    <label for="Phone">Phone Number</label><br>
    {{Form::text('phone', null)}}
</div><br>
<div>
    {{Form::submit('Update Profile')}}
</div>
{{Form::close()}}

<!-- Errors here -->
@include('layouts.errors')
</div>
</div>
</body>
@stop