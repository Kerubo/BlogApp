@extends('master')
@section('content')
	<div id="wrapper">
	<!--start of images section-->
  <div id="outer"><!--start of outer layer-->
    <div id="wrapper"><!--start of wrapper-->

      <header><!--start of header-->
       {{HTML::style('assets/css/bootstrap.min.css')}}
      </header><!--end of header-->

      <nav><!--start of nav-->
        <ul><!--start of main ul-->
          <li>
             <a href="file:///home/akirachix/second%20semister/quiz3/about.html">About</a>
            <ul>
              <li><a href="file:///home/akirachix/second%20semister/quiz3/quiz3.html">Brief</a></li> 
              <li><a href="">More</a></li>
            </ul>
          </li>
          <li>
             <a href="file:///home/akirachix/second%20semister/quiz3/product.html">Products</a>
           <ul>
             <li><a href=""></a></li>
             <li><a href=""></a></li>
             <li><a href=""></a></li>
           </ul>
          </li>
          <li>
             <a href="file:///home/akirachix/second%20semister/quiz3/contact.html">Contact</a>
            <ul>
              <li><a href="">Social media</a></li>
              <li><a href="">Locations</a></li>
            </ul>
          </li>
        </ul><!--end of main ul-->
        <br clear="all">
      </nav><!--end of nav-->

      <section id="content"><!--start of section-->

       <div id="phone">
       	<div id="sidebar">
       	    <div id="bar"></div>
       	</div>
       	<div id="blog">
       		<div id="tablet"></div>
       	</div>
       </div>

       <div id="images">
       	<div id="image1">
          <img src="assets/images/mek.jpeg" class="me">
          <p class="main">.grown accordingly.Mobile content is any type of electronic media which is viewed or used on mobile phones, like ringtones, graphics, discount offers, games, movies, and GPS navigation. </p>
        </div>
       	<div id="image2">
          <img src="assets/images/galaxy.jpg" class="me">
          <p class="main">Mobile content is on mobile phones, like ringtones, graphics, discount offers, games, movies, and GPS navigation. As mobile phone use has grown since the mid-1990s, the significance of the devices in everyday life has grown accordingly.Mobile content is any type of electronic media which is viewed or used on mobile phones, like ringtones, graphics, discount offers, games, movies, and GPS navigation.</p>
        </div>
       	<div id="image3">
          <img src="assets/images/images.jpeg" class="me">
          <p class="main">
        </div>
       </div>
       <br clear"all">
      </section><!--end of section-->

      <footer><!--start of footer-->
        <p class="foot">
       
        </p>
      </footer><!--end of footer-->        

    </div><!--end of wrapper-->

  </div><!--end of outer layer-->




	</div>
@stop
