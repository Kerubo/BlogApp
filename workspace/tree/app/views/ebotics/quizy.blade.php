
@extends('master')
@section('title')
 
@section('content')
 {{HTML::style('assets/css/main.css')}}
<div id="wrapper">
<div id="content">
<br><br><br><br>
<br>
  <div class="page-header">
    @if(Auth::check())
   <!-- <div class="pull-right btn-group">
      <a href="{{route('posts.create')}}" class="btn btn-default">Create Blog</a>-->
     <div class="pull-right btn-group" style="align:center">
     <a href="/todos" class="btn btn-primary" >Robotics</a> 
      <a href="/quiz" class="btn btn-primary" >Entreprenuership</a> 
      <a href="/logout" class="btn btn-primary" >Logout</a>   
    </div>
 <!--   @else
    <div class="pull-right btn-group">
      <a href="/login" class="btn btn-primary">Login</a>
    </div>
    @endif-->
    
   
  
  </div>
  <div class="module-search module">
    <h2 class="module-header"></h2>
    <div class="module-content" >
        <form id="search-blog" method="get"
          action="http://www.robotbooks.com/search">
            <input type="search" name="filter.q" results="5" value="" />
            <input type="submit" value="Search" />
        </form>
    </div>
</div>
<br><br>

<div class="class">
  <div class="chapter">
      
      <h tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="/posts">Introduction</a>
      </h3>

    <ul aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-accordion-header-0" id="ui-accordion-accordion-panel-0" style="display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z1/">
              <p>Introduction </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          
          </li>
          <li class=" graded">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z21/">
              <p>Code Writing Exercises </p>
              
              <p class="subtitle">Exercises</p>
            </a>
          </li>
          
    </ul>
  </div>
    
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#"> Level&nbsp;1</a>
      </h3>

    <ul aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-accordion-header-0" id="ui-accordion-accordion-panel-0" style="display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z1/">
              <p>Introduction </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          
          </li>
          <li class=" graded">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z21/">
              <p>Code Writing Exercises </p>
              
              <p class="subtitle">Exercises</p>
            </a>
          </li>
          
    </ul>
  </div>
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#"> Level&nbsp;2</a>
      </h3>

    <ul aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-accordion-header-0" id="ui-accordion-accordion-panel-0" style="display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z1/">
              <p>Introduction </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          
          </li>
          <li class=" graded">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/z54/z21/">
              <p>Code Writing Exercises </p>
              
              <p class="subtitle">Exercises</p>
            </a>
          </li>
          
    </ul>
  </div>
    
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Level&nbsp;3</a>
      </h3>

  </div>
  </div>
   
  <div class="id1">
 
    <!--start of videos section-->
  <section id="pics">
   <a href="/serve">Watch a Video</a>
<h3>Unit 1: Introduction to Robotics</h3>
 <p> 2.1: What is Robotics?<br>

A robot is a programmable mechanical device that can perform tasks and interact with its environment, 
without the aid of human interaction. 
<br>Robotics is the science and technology behind the design,
 manufacturing and application of robots.

<br>The word robot was coined by the Czech playwright Karel Capek in 1921. He wrote a play called 
“Rossum's Universal Robots” that was about a slave class of manufactured human-like servants and their struggle for freedom. The Czech word robota loosely means "compulsive servitude.” 
The word robotics was first used by the famous science fiction writer, Isaac Asimov, in 1941. </p>

 <img src="assets/images/s2.jpg" width="300px" height="200px" alt="image 1"/>
      <img src="assets/images/s3.jpg" width="300px" height="200px" alt="image 2"/>
    <p>The concept of creating machines that can operate autonomously dates back to classical times,
     but research into the functionality and potential uses of robots did not grow substantially until
      the 20th century.[2] Throughout history, robotics has been often seen to mimic human behavior,
       and often manage tasks in a similar fashion. Today, robotics is a rapidly growing field, as technological
        advances continue, research, design, and building new robots serve various practical purposes, whether 
        domestically, commercially, or militarily. Many robots do jobs that are hazardous to people such as defusing 
        bombs, mines and exploring shipwrecks.

To view robotics as an application of the principles of motions together with motors 
to provide motion and sensors to provide location and velocity may miss the inherent 
complexity of the discipline. A real robot does face potential for errors due to a number 
of reasons, including: incorrect parameter (for example: mass, direction, distance) values, frictional
 forces and terrain estimations, play at the link joints, calibration errors in sensors, errors in the values read from the sensors. The resulting errors in robot actions need corrections; preferably, without any explicit human help. These corrections cannot be precomputed by using the laws of physics and must be generated, as they are detected, by the robot as it executes the operation to enhance their ability to avoid immobilization, accommodate degraded performance and even self-recover.
 The needed correction differs from one repetition of an operation to the next due to unpredictability 
 of many of </p>
  </section>
  <!--end of videos section-->
  </div>
  <!--
  <p>
  {{Form::open(['route' => 'posts.search', 'method' => 'GET', 'class' => 'form-inline'])}}
    {{Form::text('search', null, ['class' => 'form-control'])}}
    {{Form::submit('Search', ['class' => 'btn btn-default'])}}
  {{Form::close()}}
  </p>
  @foreach ($posts as $post)
    <li>
      <h2>
        <a href="{{route('posts.show', [$post->slug])}}">
          {{$post->title}}
        </a>
      </h2>
    </li>
  @endforeach

  {{$posts->links()}}-->
  </div>

</div>
@stop