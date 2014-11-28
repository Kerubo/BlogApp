@extends('master')
@section('content')
 {{HTML::style('assets/css/main.css')}}
    <div id="wrapper">
    <br>
   <div id="content">

    
    <div class="module-search module">
    <h2 class="module-header"></h2>
    <div class="module-content">
        <form id="search-blog" method="get"
          action="http://www.robotbooks.com/search">
            <input type="search" name="filter.q" results="5" value="" />
            <input type="submit" value="Search" />
        </form>
    </div>
</div>

<div id="cont">
<div class="pull-right btn-group" style="align:center">
     <a href="/todos" class="btn btn-primary" >Robotics</a> 
      <a href="/quiz" class="btn btn-primary" >Entreprenuership</a> 
      <a href="/logout" class="btn btn-primary" >Logout</a>   
    </div>
<br><br>
<h4>INTRODUCTION TO ROBOTICS| UNIT ONE</h4>
<iframe width="700" height="400" src="//www.youtube.com/embed/sLflN8gJ2G0" frameborder="0" allowfullscreen></iframe>
<br><h4><a href="/">How To Build A Robot For Beginners </a></h4>
</div>
<div id="tent">
<h4> Here is what we need</h4>
<div id="rad4">
<ul class="a">
 <li>Card Board</li>
 <li>Paper</li>
 <li>pencil</li>
 <li>wires</li>
</ul>  
</div>
<div id="rad5">
<ul class="b"><li>Card Board</li>
 <li>Paper</li>
 <li>pencil</li>
 <li>wires</li>
</div>
<div id="rad6">
    <ul class="a">
 <li>Card Board</li>
 <li>Paper</li>
 <li>pencil</li>
 <li>wires</li>
</ul>  
</div>
</div>
<div id="cont">
<iframe width="700" height="400" src="//www.youtube.com/embed/X3PvFqkRlvQ" frameborder="0" allowfullscreen></iframe>
<br><h4><a href="/">tutorial for beginers For Beginners </a></h4>
</div>

</div>
</div>
<!--end content-->




@stop
 