@extends('master')
@section('content')
  <div class="page-header">
    <h2>UPDATE INFORMATION</h2>
  </div>
  {{Form::open(['route' => 'todos.store'])}}
  <div class="form-group">
    {{Form::text('todo', null, ['class' => 'form-control', 'placeholder' => 'INFO GOES HERE'])}}
  </div>
  <div class="form-group">
    {{Form::submit('Update', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
@stop
