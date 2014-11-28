@extends('master')
 
@section('title') Login @stop

@section('search')

  @include('todos.search')
@stop

@section('content')


 {{HTML::style('assets/css/main.css')}}
 <div id="wrapper">
<div id="content">
<br><br><br><br>
<div id="slidar">
<div class='col-lg-4 col-lg-offset-4'>
  <div class="page-header">
    <div class="pull-right">
      
      @if(Auth::check())
        <a href="/logout" class="btn btn-primary">Logout</a>
      @endif
    </div>
    <h2><a href="/todos">E-botics Sessions</a></h2>
  </div>
  <ul>
  
    @foreach($todos as $todo)
      <p2>{{{ $todo->todo }}}</p2>
      <br>
    @endforeach
  </ul>
  </div>
  </div>
  </div>
@stop
