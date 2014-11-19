@extends('master')

@section('title')
 
@section('content')

<div  style="border:5px solid #ff7400;width:60%;height:200px;;float:right;margin-left:50px;padding-left:20px;">
<div  style="backround-color:#cff;">
<h2 style=" color:#fff;">PERSONAL DETAILS</h2>
<p style="backround-color:#cff;">
    Name: {{$profile->firstname}} {{$profile->lastname}}
</p>
<p>
    Phone: {{$profile->phone}}
</p>

<a href="{{route('profile.index')}}" style="color:#fff;">Back</a>
</div>
@stop