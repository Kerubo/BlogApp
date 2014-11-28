@extends('master')
@section('content')
<div style="  height:600px; background:#016DA0;:margin:40px auto">
  <div class="page-header">
   
    <div class="pull-right btn-group">
      <a href="{{route('contents.index')}}" class="btn btn-default">Entreprenuership</a>
      <a href="{{route('contents.index')}}" class="btn btn-default">Robotics</a>
      <a href="/logout" class="btn btn-primary">Logout</a>
    </div>

    <h2  style="color:#F05A28;background:#016DA0;"><b>Welcome Dear Learner 

  </ul></b><br>Thank you for choosing E-boticsKenya</h2>
    
  </div>
  {{Form::open(['route' => 'contents.store'])}}
  <div class="form-group">
    {{Form::text('title', null,['class' => 'form-control', 'placeholder' =>'Subject'])}}
  </div>

  <div class="form-group">
    {{Form::textarea('text', null,['class' => 'form-control', 'placeholder' =>'Question/Comment/sugestions'])}}
  </div>
  <div class="form-group">
    {{Form::submit('Post comment', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
   
      </div>
@stop
