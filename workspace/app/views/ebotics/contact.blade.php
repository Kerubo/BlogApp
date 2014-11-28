@extends('master')
@section('content')
   


   <div id="wrapper">
   <br><br>
<h2>Contact Us</h2>

      <div id="file">
      	<form>
          <input type="Text" name="name" placeholder="Name:"/><br><br>
          <input type="Text" name="email" placeholder="Email:"/><br><br>
          <textarea name="messageBox" rows="10" cols="50" placeholder="Write Your Message Here:"></textarea><br>
          <input type="Submit" value="Submit" onclick="alert('Details successfully saved');"/>
        </form>
      </div>
 

 <div id="tent">
<div id="rad4"><img src="assets/images/ht.png" height="200" width="200">
</div>
<div id="rad5">
<ul><li>Nokia</li>
<li>Sumsung</li>
<li>Lg</li>
<li>Techno</li></ul>
</div>
<div id="rad6"></div>
</div>
</div>
</div>
 
      
      </div>
      @stop