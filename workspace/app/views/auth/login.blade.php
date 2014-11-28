<!DOCTYPE html>
<html>
<head>
<title>FONT AWESOME Yahoooooo</title>

<link href="assets/css/normalize.css" rel="stylesheet" type="text/css">
<link href="assets/css/main.css" rel="stylesheet" type="text/css">
<link href="assets/Fonts/font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css">

</head>





<body>
<div id="wrapper">
<!--start wrapper-->
<div id="header">
<!--start header-->
<div id="logo">
<div id="log"><img src="assets/images/ebotics.png" width="100%" height="100%"></div>
<div id="ogo"><h1>E-botics<br><small>Kenya</small></h1></div>
<div id="head">

<nav><!--start of nav-->
        <ul><!--start of main ul-->
        <li>
             <a href="/">HOME</a>
            <ul>
              <li><a href="brief.html">US</a></li> 
              <li><a href="">More</a></li>
            </ul>
          </li>
        
        <li>
             <a href="/about">ABOUT</a>
            <ul>
              <li><a href="">Brief</a></li> 
              <li><a href="">More</a></li>
            </ul>
          </li>
          <li>
             <a href="/team">TEAM</a>
            <ul>
              <li><a href="brief.html">Brief</a></li> 
              <li><a href="">More</a></li>
            </ul>
          </li>
          <li>
             <a href="/product">ADVERTS</a>
           <ul>
             <li><a href="">E-botics</a></li>
             <li><a href="">Entreprenuership</a></li>
             <li><a href="">Explore</a></li>
           </ul>
          </li>
          <li>
             <a href="/contact">CONTACTS</a>
            <ul>
              <li><a href="">Social</a></li>
              <li><a href="">Locations</a></li>
            </ul>
            <li>
             <a href="/home">ADMIN</a>
            <ul>
              <li><a href="">UPDATES</a></li>
              <li><a href="">ADVERTISE</a></li>
            </ul>
          </li>
        </ul><!--end of main ul-->
        <br clear="all">
      </nav><!--end of nav-->

</div>

</div>
</div>
<div id="content">
<br><br><br><br>
<div id="slidar">
<br><br><br><br>
<div class="col-lg-10 col-lg-offset-1">
<h1 style="color:#106DA0;"> <i class="fa fa-lock"></i>  User Login here</h1>
     <div id="file">
{{Form::open(['action' => 'AuthController@login'])}}
<div class='form-group'>
        {{ Form::label('username', 'Username') }}<br>
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 <br>
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}<br>
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div><br>
 <div class='form-group'>
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    </div>
{{Form::close()}}
</div>
</div>
</div>
<h3> Dont have and Account yet <a href="/signup">SIGNUP HERE</a> It is simple ans easy</h3>
</div>
</div>
</div>
</div>
