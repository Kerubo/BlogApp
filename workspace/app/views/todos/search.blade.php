@extends('layouts.master')
 
@section('title')
 
@section('search')
 

{{Form::open(['action' => 'TodosController@search', 'method' => 'GET', 'class' => 'form-inline'])}}
  {{Form::text('search', null, ['class' => 'form-control'])}}
  {{Form::submit('Search', ['class' => 'btn btn-primary'])}}
{{Form::close()}}

@stop