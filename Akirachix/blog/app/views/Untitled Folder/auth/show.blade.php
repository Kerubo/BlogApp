@extends('master')
@section('content')
  <div class="page-header">
    <a href="{{route('auth.login')}}" class="btn btn-default">
      &larr; Back to Content
    </a>
  </div>
  <p class="lead">{{$content->title}}</p>
  <p>
    {{$content->text}}
  </p>
  <blockquote>
    <small>User</small>
    {{$content->User->username}}
  </blockquote>
@stop
