@extends('layouts.master')
 
@section('title') Login @stop
 
@section('content')
 
<div class='col-lg-4 col-lg-offset-4'>
  <div class="page-header">
    <div class="pull-right">
      
      @if(Auth::check())
        <a href="/logout" class="btn btn-primary">Logout</a>
      @endif
    </div>
    <h2><a href="/todos">INFO</a></h2>
  </div>
  @include('todos.search')
  <ul>
    @foreach ($todos as $todo)
      <li>{{ $todo->todo }}</li>
    @endforeach
  </ul>
  </div>
@stop
