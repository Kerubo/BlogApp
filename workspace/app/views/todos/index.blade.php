@extends('layouts.master')
 
@section('title') Login @stop

@section('search') 
  @include('todos.search')
@stop

@section('content')

 
<div class='col-lg-4 col-lg-offset-4'>
  <div class="page-header">
    <div class="pull-right">
      
      @if(Auth::check())
        <a href="/logout" class="btn btn-primary">Logout</a>
      @endif
    </div>
    <h2><a href="/todos">INFO 2</a></h2>
  </div>
  <ul>
  
    @foreach($todos as $todo)
      <p>{{{ $todo->todo }}}</p>
    @endforeach
  </ul>
  </div>
@stop
