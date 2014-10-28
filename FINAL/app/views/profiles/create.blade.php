@extends("master")
@section("content")
<h2>Create Profile</h2>

{{Form::open(['route' => 'profile.store'])}}
<div class="form-group">
    <label for="First Name">First Name</label>
    {{Form::text('firstname', null)}}
</div><br> <br>
<div class="form-group">
    <label for="Last Name">Last Name</label>
    {{Form::text('lastname', null)}}
</div>
<br> <br>
<div >
    <label for="Phone">Phone Number</label>
    {{Form::text('phone', null)}}
</div>
<br> <br>
<div>
    {{Form::submit('Create Profile')}}
</div>
{{Form::close()}}

<!-- Errors here -->
@include('layouts.errors')
@stop
