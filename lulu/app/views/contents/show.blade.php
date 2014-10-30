@extends('master')

@section('content')
<div class="page-header">
  <div class="pull-right">
    <div class="btn-group">
      <!-- Back to list of all users -->
      <a href="{{ route('contents.create') }}" class="btn btn-default">Back</a>
      <!-- Link to Edit Profile Page -->
      <a href="{{ route('contents.edit', array($user->id)) }}" class="btn btn-default">Edit Profile</a>
    </div>
  </div>
  <h2>Show Profile</h2>
</div>
<!-- User Details goes here -->
<p class="lead">Name: {{ $user->names }}</p>
<p class="lead">Email: {{ $user->e-mail}}</p>
<p class="lead">password: {{ $user->password }}</p>

@stop
