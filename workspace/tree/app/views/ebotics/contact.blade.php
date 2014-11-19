@extends('master')
@section('content')
    <div id="wrapper">
<h2>Contact Us</h2>

      <div id="file">
      	<form>
          <input type="Text" name="name" placeholder="Name:"/><br><br>
          <input type="Text" name="email" placeholder="Email:"/><br><br>
          <textarea name="messageBox" rows="10" cols="50" placeholder="Write Your Message Here:"></textarea><br>
          <input type="Submit" value="Submit" onclick="alert('Details successfully saved');"/>
        </form>
      </div>
      </div>
      @stop