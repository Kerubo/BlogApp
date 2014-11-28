@extends('master')
@section('content')

 {{HTML::style('assets/css/main.css')}}
 <div id="wrapper">
<div id="content">
<br><br><br><br>
<div id="slidar">
  <div class="page-header">
    <h2>Update Sessions</h2>
  </div>
  {{Form::open(['route' => 'todos.store'])}}
  <div class="form-group">
    {{Form::text('todo', null, ['class' => 'form-control', 'placeholder' => 'Update Information'])}}
  </div>
  <div class="form-group">
    {{Form::submit('updtate', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
  </div>
  </div>
@stop

