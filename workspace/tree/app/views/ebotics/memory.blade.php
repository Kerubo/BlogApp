<!DOCTYPE html>
<html>
<head>

  <title>E-botics</title>
  
   {{HTML::style('assets/css/bootstrap.min.css')}}
     {{HTML::style('assets/css/app.css')}}


<body>
<div id="wrapper">
<div id="content">
  <div class="pull-right">
 <a href="/posts" class=" btn btn-primary" style="colour:ff7400;">ROBOTICS</a>
 <a href="/todos" class=" btn btn-primary" style="colour:ff7400;">START QUIZ</a>

  <a href="/quiz" class=" btn btn-primary" style="colour:ff7400;">BACK</a>


<p><a href="{{action('AuthController@logout')}}">Logout</a></p></div>
<div id="portrait">
  <div class="chrono" data-seconds=""></div>
  <div class="table">
    <div class="cell">
      <div class="wrapper">
        <div data-goto="0" class="turnLink inTop icon-arrow-down"></div>
        <div id="container" class="index">
          <div id="cube" class="show-front">
            <div class="cubeFace front">
              <h1 style="backgound:white">Entreprenuership
              <img src="assets/images/png.png" width="200px" height="200px"></h1>
              <a href="#" class="startGame">Play</a>
            </div>
            <div class="cubeFace top"></div>
            <div class="cubeFace bottom"></div>
            <div class="cubeFace left"></div>
            <div class="cubeFace right"></div>
            <div class="cubeFace back"></div>
          </div>
        </div>
        <div data-goto="1" class="turnLink inBottom icon-arrow-up"></div>
      </div>
    </div>
  </div>
  <div class="icon-cog"> E-botics Guide Lines</div>
  <div id="appMenu">
    <div class="icon-cog"> Back </div>
    <div class="contentAppMenu">
      <a href="#" class="menuToLevels">Enterprenuership Levels</a>
      <h2>HOW TO PLAY</h2>
      <p>Find the pair of each card hidden in the faces of the cube. Use your memory to remember the location of each card.</p>
      <p>Navigate through the diferent cube faces clicking or swiping from the top or the bottom of the cube.</p>
      <p>Click or Tap in the cards to flip them and show his content.</p>
      <p>Double click or Double tap in a card to select it. Do it again in another card to compare the two cards.</p>
      <p>If you want deselect a previously selected card, Double click or Double tap in it.</p>
      
  </div>
</div>
<div id="landscape">
  <div class="icon-spinner">
    <br />Make your Screen a little wider
  </div>
</div>
</div>
</div>
<script src="js/zepto.min.js"></script>
<script src="js/touchable.min.js"></script>
<script src="js/app.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-7726013-18', 'github.com');
  ga('send', 'pageview');
</script>

</body>
</html>
