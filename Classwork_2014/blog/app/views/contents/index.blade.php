@extends('master')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<div style="   margin:0px auto; ">
  <div class="page-header">
    
    <div class="pull-right btn-group">
      
      <a href="/signup" class="btn btn-primary" style="color:orange;">Signup</a>
    </div>
    
    <div class="pull-right btn-group">
      <a href="/login" class="btn btn-primary" style="color:orange;">Login</a>
    </div>



    
  
    <h1 style="color:#F05A28;">E-botics  Kenya</h1>
  </div>
  <p>
  {{Form::open(['route' => 'contents.search', 'method' => 'GET', 'class' => 'form-inline'])}}
    {{Form::text('search', null, ['class' => 'form-control'])}}
    {{Form::submit('Search', ['class' => 'btn btn-default'])}}
  {{Form::close()}}
  </p>
<h2 align="center">Creating a generation that thinks not that follows</h2>

<div style="margin-left: 10px">
<!-- start margin -->


<div style="width: 800px; margin: 0px 3px 3px 5px;float:left;">
<img src="http://blog.wmiafrica.org/wp-content/uploads/2013/09/9662943066_4269a28a2b_z.jpg" width="800px" height="500px" >

 

<div>
 </div>


</div>
<!-- end margin -->

<div style="margin-left: 10px">

<div style="float: left; width: 300px; margin: 4px 3px 3px 5px;">
<!-- start float -->



<div>
<div style="clear: all"></div>
</div><!-- end float -->
<div style="float: left; width: 300px; height:300px; margin: 0px 3px 3px 5px;">
<!-- start float2 -->



<div style="clear: clear all"></div>
</div><!-- end float 2-->

<div style="float: left; width: 300px; height:300px; color:#FO5A28; margin: 0px 3px 3px 5px;">
<!-- start float2 -->
<img src="http://speedysignals.files.wordpress.com/2012/11/overview2.jpg?w=624" width="300px" height="300px">

 

<div></div>


</div><!-- end float 2-->

<div class="pull-right btn-group">
      <a href="/signup" class="btn btn-primary" style="color:#FO5A28; background:orange;">
      Next Step</a>
    </div>
     <hr>
    </div>

 
@stop
