@extends("master")
@section("content")
  <h2>Hello {{ Auth::user()->username }}</h2>
  <p>Welcome to your E-botics profile page.</p>
@stop