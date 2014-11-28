<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 lte9 lte8 lte7" lang="en"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en"><![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

{{HTML::style('assets/css/bootstrap.min.css')}}
     {{HTML::style('quiz_files/css/jquery.css')}}

 {{HTML::style('quiz_files/css/jquery.css')}}












  <title>E-BOTICS KENYA</title>

  <script src="quiz_files/analytics.js" async=""></script><script type="text/javascript">
    /* immediately break out of an iframe if coming from the marketing website */
    (function(window) {
      if (window.location !== window.top.location) {
        window.top.location = window.location;
      }
    })(this);
  </script>

  <script type="text/javascript" src="quiz_files/a"></script>

  
  
    <link href="quiz_files/lms-style-vendor.css" rel="stylesheet" type="text/css">



  
    <link href="quiz_files/lms-style-app.css" rel="stylesheet" type="text/css">



  
    <link href="quiz_files/lms-style-app-extend1.css" rel="stylesheet" type="text/css">



  
    <link href="quiz_files/lms-style-app-extend2.css" rel="stylesheet" type="text/css">




  
    <script type="text/javascript" src="quiz_files/lms-main_vendor.js" charset="utf-8"></script><style type="text/css"> .vjs-youtube .vjs-poster { background-size: cover; }.iframeblocker { display:none;position:absolute;top:0;left:0;width:100%;height:100%;cursor:pointer;z-index:2; }.vjs-youtube.vjs-user-inactive .iframeblocker { display:block; } .vjs-quality-button > div:first-child > span:first-child { position:relative;top:7px }</style>



  

  
    <link href="quiz_files/lms-style-course-vendor.css" rel="stylesheet" type="text/css">



  
    <link href="quiz_files/lms-style-course.css" rel="stylesheet" type="text/css">








<script type="text/javascript" src="quiz_files/split.js"></script>
<script type="text/javascript" src="quiz_files/jquery_004.js"></script>
<script type="text/javascript" src="quiz_files/jquery.js"></script>
<script type="text/javascript" src="quiz_files/Markdown.js"></script>
<script type="text/javascript" src="quiz_files/Markdown_003.js"></script>
<script type="text/javascript" src="quiz_files/Markdown_002.js"></script>
<script type="text/javascript" src="quiz_files/jquery_005.js"></script>
<script type="text/javascript" src="quiz_files/jquery_006.js"></script>
<script type="text/javascript" src="quiz_files/jquery_007.js"></script>
<script type="text/javascript" src="quiz_files/mustache.js"></script>
<script type="text/javascript" src="quiz_files/URI.js"></script>
<script type="text/javascript" src="quiz_files/underscore-min.js"></script>
<script type="text/javascript" src="quiz_files/backbone-min.js"></script>
<script type="text/javascript" src="quiz_files/tooltip_manager.js"></script>

<link href="quiz_files/jquery.css" rel="stylesheet" type="text/css">


  




  
  

    

<link rel="stylesheet" href="quiz_files/su-identity.css">
<link href="quiz_files/css.css" rel="stylesheet" type="text/css">


  

  <meta name="path_prefix" content="">
  <meta name="google-site-verification" content="_mipQ4AtZQDNmbtOkwehQDOgCxUUV2fb_C0b6wbiRHY">

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40837107-1', 'class.stanford.edu');
  ga('send', 'pageview');

</script>




<style type="text/css">.MathJax_Hover_Frame {border-radius: .25em; -webkit-border-radius: .25em; -moz-border-radius: .25em; -khtml-border-radius: .25em; box-shadow: 0px 0px 15px #83A; -webkit-box-shadow: 0px 0px 15px #83A; -moz-box-shadow: 0px 0px 15px #83A; -khtml-box-shadow: 0px 0px 15px #83A; border: 1px solid #A6D ! important; display: inline-block; position: absolute}
.MathJax_Hover_Arrow {position: absolute; width: 15px; height: 11px; cursor: pointer}
</style><style type="text/css">#MathJax_About {position: fixed; left: 50%; width: auto; text-align: center; border: 3px outset; padding: 1em 2em; background-color: #DDDDDD; color: black; cursor: default; font-family: message-box; font-size: 120%; font-style: normal; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; z-index: 201; border-radius: 15px; -webkit-border-radius: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; box-shadow: 0px 10px 20px #808080; -webkit-box-shadow: 0px 10px 20px #808080; -moz-box-shadow: 0px 10px 20px #808080; -khtml-box-shadow: 0px 10px 20px #808080; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
.MathJax_Menu {position: absolute; background-color: white; color: black; width: auto; padding: 5px 0px; border: 1px solid #CCCCCC; margin: 0; cursor: default; font: menu; text-align: left; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; z-index: 201; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; box-shadow: 0px 10px 20px #808080; -webkit-box-shadow: 0px 10px 20px #808080; -moz-box-shadow: 0px 10px 20px #808080; -khtml-box-shadow: 0px 10px 20px #808080; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
.MathJax_MenuItem {padding: 1px 2em; background: transparent}
.MathJax_MenuArrow {position: absolute; right: .5em; color: #666666}
.MathJax_MenuActive .MathJax_MenuArrow {color: white}
.MathJax_MenuCheck {position: absolute; left: .7em}
.MathJax_MenuRadioCheck {position: absolute; left: .7em}
.MathJax_MenuLabel {padding: 1px 2em 3px 1.33em; font-style: italic}
.MathJax_MenuRule {border-top: 1px solid #DDDDDD; margin: 4px 3px}
.MathJax_MenuDisabled {color: GrayText}
.MathJax_MenuActive {background-color: #606872; color: white}
.MathJax_Menu_Close {position: absolute; width: 31px; height: 31px; top: -15px; left: -15px}
</style><style type="text/css">#MathJax_Zoom {position: absolute; background-color: #F0F0F0; overflow: auto; display: block; z-index: 301; padding: .5em; border: 1px solid black; margin: 0; font-weight: normal; font-style: normal; text-align: left; text-indent: 0; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; box-shadow: 5px 5px 15px #AAAAAA; -webkit-box-shadow: 5px 5px 15px #AAAAAA; -moz-box-shadow: 5px 5px 15px #AAAAAA; -khtml-box-shadow: 5px 5px 15px #AAAAAA; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')}
#MathJax_ZoomOverlay {position: absolute; left: 0; top: 0; z-index: 300; display: inline-block; width: 100%; height: 100%; border: 0; padding: 0; margin: 0; background-color: white; opacity: 0; filter: alpha(opacity=0)}
#MathJax_ZoomFrame {position: relative; display: inline-block; height: 0; width: 0}
#MathJax_ZoomEventTrap {position: absolute; left: 0; top: 0; z-index: 302; display: inline-block; border: 0; padding: 0; margin: 0; background-color: white; opacity: 0; filter: alpha(opacity=0)}
</style><style type="text/css">.MathJax_Preview {color: #888}
#MathJax_Message {position: fixed; left: 1px; bottom: 2px; background-color: #E6E6E6; border: 1px solid #959595; margin: 0px; padding: 2px 8px; z-index: 102; color: black; font-size: 80%; width: auto; white-space: nowrap}
#MathJax_MSIE_Frame {position: absolute; top: 0; left: 0; width: 0px; z-index: 101; border: 0px; margin: 0px; padding: 0px}
.MathJax_Error {color: #CC0000; font-style: italic}
</style><style type="text/css">DIV.MathJax_MathML {text-align: center; margin: .75em 0px}
.MathJax_MathML {font-style: normal; font-weight: normal; line-height: normal; font-size: 100%; font-size-adjust: none; text-indent: 0; text-align: left; text-transform: none; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; direction: ltr; border: 0; padding: 0; margin: 0}
span.MathJax_MathML {display: inline}
div.MathJax_MathML {display: block}
.MathJax_mmlExBox {display: block; overflow: hidden; height: 1px; width: 60ex; padding: 0; border: 0; margin: 0}
[mathvariant="double-struck"] {font-family: MathJax_AMS, MathJax_AMS-WEB}
[mathvariant="script"] {font-family: MathJax_Script, MathJax_Script-WEB}
[mathvariant="fraktur"] {font-family: MathJax_Fraktur, MathJax_Fraktur-WEB}
[mathvariant="bold-script"] {font-family: MathJax_Script, MathJax_Caligraphic-WEB; font-weight: bold}
[mathvariant="bold-fraktur"] {font-family: MathJax_Fraktur, MathJax_Fraktur-WEB; font-weight: bold}
[mathvariant="monospace"] {font-family: monospace}
[mathvariant="sans-serif"] {font-family: sans-serif}
[mathvariant="bold-sans-serif"] {font-family: sans-serif; font-weight: bold}
[mathvariant="sans-serif-italic"] {font-family: sans-serif; font-style: italic}
[mathvariant="sans-serif-bold-italic"] {font-family: sans-serif; font-style: italic; font-weight: bold}
[class="MJX-tex-oldstyle"] {font-family: MathJax_Caligraphic, MathJax_Caligraphic-WEB}
[class="MJX-tex-oldstyle-bold"] {font-family: MathJax_Caligraphic, MathJax_Caligraphic-WEB; font-weight: bold}
[class="MJX-tex-caligraphic"] {font-family: MathJax_Caligraphic, MathJax_Caligraphic-WEB}
[class="MJX-tex-caligraphic-bold"] {font-family: MathJax_Caligraphic, MathJax_Caligraphic-WEB; font-weight: bold}
@font-face /*1*/ {font-family: MathJax_AMS-WEB; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_AMS-Regular.otf')}
@font-face /*2*/ {font-family: MathJax_Script-WEB; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Script-Regular.otf')}
@font-face /*3*/ {font-family: MathJax_Fraktur-WEB; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Fraktur-Regular.otf')}
@font-face /*4*/ {font-family: MathJax_Caligraphic-WEB; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Caligraphic-Regular.otf')}
@font-face /*5*/ {font-family: MathJax_Fraktur-WEB; font-weight: bold; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Fraktur-Bold.otf')}
@font-face /*6*/ {font-family: MathJax_Caligraphic-WEB; font-weight: bold; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Caligraphic-Bold.otf')}
</style><style type="text/css">.MathJax_Display {text-align: center; margin: 1em 0em; position: relative; display: block; width: 100%}
.MathJax .merror {background-color: #FFFF88; color: #CC0000; border: 1px solid #CC0000; padding: 1px 3px; font-style: normal; font-size: 90%}
#MathJax_Tooltip {background-color: InfoBackground; color: InfoText; border: 1px solid black; box-shadow: 2px 2px 5px #AAAAAA; -webkit-box-shadow: 2px 2px 5px #AAAAAA; -moz-box-shadow: 2px 2px 5px #AAAAAA; -khtml-box-shadow: 2px 2px 5px #AAAAAA; filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true'); padding: 3px 4px; z-index: 401; position: absolute; left: 0; top: 0; width: auto; height: auto; display: none}
.MathJax {display: inline; font-style: normal; font-weight: normal; line-height: normal; font-size: 100%; font-size-adjust: none; text-indent: 0; text-align: left; text-transform: none; letter-spacing: normal; word-spacing: normal; word-wrap: normal; white-space: nowrap; float: none; direction: ltr; border: 0; padding: 0; margin: 0}
.MathJax img, .MathJax nobr, .MathJax a {border: 0; padding: 0; margin: 0; max-width: none; max-height: none; vertical-align: 0; line-height: normal; text-decoration: none}
img.MathJax_strut {border: 0 !important; padding: 0 !important; margin: 0 !important; vertical-align: 0 !important}
.MathJax span {display: inline; position: static; border: 0; padding: 0; margin: 0; vertical-align: 0; line-height: normal; text-decoration: none}
.MathJax nobr {white-space: nowrap ! important}
.MathJax img {display: inline ! important; float: none ! important}
.MathJax * {transition: none; -webkit-transition: none; -moz-transition: none; -ms-transition: none; -o-transition: none}
.MathJax_Processing {visibility: hidden; position: fixed; width: 0; height: 0; overflow: hidden}
.MathJax_Processed {display: none!important}
.MathJax_ExBox {display: block; overflow: hidden; width: 1px; height: 60ex}
.MathJax .MathJax_EmBox {display: block; overflow: hidden; width: 1px; height: 60em}
.MathJax .MathJax_HitBox {cursor: text; background: white; opacity: 0; filter: alpha(opacity=0)}
.MathJax .MathJax_HitBox * {filter: none; opacity: 1; background: transparent}
#MathJax_Tooltip * {filter: none; opacity: 1; background: transparent}
@font-face {font-family: MathJax_Main; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Main-Regular.woff') format('woff'), url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Main-Regular.otf') format('opentype')}
@font-face {font-family: MathJax_Main; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Main-Bold.woff') format('woff'), url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Main-Bold.otf') format('opentype'); font-weight: bold}
@font-face {font-family: MathJax_Main; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Main-Italic.woff') format('woff'), url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Main-Italic.otf') format('opentype'); font-style: italic}
@font-face {font-family: MathJax_Math; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Math-Italic.woff') format('woff'), url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Math-Italic.otf') format('opentype'); font-style: italic}
@font-face {font-family: MathJax_Caligraphic; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Caligraphic-Regular.woff') format('woff'), url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Caligraphic-Regular.otf') format('opentype')}
@font-face {font-family: MathJax_Size1; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Size1-Regular.woff') format('woff'), url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Size1-Regular.otf') format('opentype')}
@font-face {font-family: MathJax_Size2; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Size2-Regular.woff') format('woff'), url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Size2-Regular.otf') format('opentype')}
@font-face {font-family: MathJax_Size3; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Size3-Regular.woff') format('woff'), url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Size3-Regular.otf') format('opentype')}
@font-face {font-family: MathJax_Size4; src: url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/woff/MathJax_Size4-Regular.woff') format('woff'), url('https://edx-static.s3.amazonaws.com/mathjax-MathJax-727332c/fonts/HTML-CSS/TeX/otf/MathJax_Size4-Regular.otf') format('opentype')}
.MathJax .noError {vertical-align: ; font-size: 90%; text-align: left; color: black; padding: 1px 3px; border: 1px solid}
</style></head>

<body class="courseware  lang_en"><div style="visibility: hidden; overflow: hidden; position: absolute; top: 0px; height: 1px; width: auto; padding: 0px; border: 0px none; margin: 0px; text-align: left; text-indent: 0px; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal;"><div id="MathJax_Hidden"></div></div><div style="display: none;" id="MathJax_Message"></div>
  <a class="nav-skip" href="#seq_content">Skip to this view's content</a>




 <header class="global slim" aria-label="Global Navigation" style="background:#106DA0;">
    <nav>
    <h1 class="logo">
      <a href="https://class.stanford.edu/">
        
  <img src="quiz_files/stanford-S-logo.png" alt="Stanford Online, Courses List" height="35">

      </a>
    </h1>

    <h2><span class="provider">Explore</span> Robotics and Enterprenuership</h2>

    <ol class="left nav-global authenticated">
      
  <li class="nav-global-01">
    <a href="https://class.stanford.edu/about">ABOUT</a>
  </li>
  <li class="nav-global-02">
    <a href="https://class.stanford.edu/course">Find Topics</a>
  </li>

    </ol>
    <ol class="user">
      <li class="primary">
        <a href="https://class.stanford.edu/dashboard" class="user-link">
          <span class="avatar"></span>
          <span class="sr">Dashboard for: </span> Me
        </a>
      </li>
      <li class="primary">
        <a href="#" class="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr">MORE</span> ▾</a>
        <ul class="dropdown-menu" aria-label="More Options" role="menu">
          
          <li><a href="/login" role="menuitem">Log Out</a></li>
        </ul>
      </li>
    </ol>
  </nav>
</header>















<div class="help-tab">

  
      <a href="#help-modal" rel="leanModal" role="button">Help</a>
</div>

<section id="help-modal" class="modal" aria-hidden="true" role="dialog" aria-label="Stanford Online Help">
  <div class="inner-wrapper" id="help_wrapper">
    <button class="close-modal " tabindex="0">
      <i class="icon-remove"></i>
      <span class="sr">
        Close
      </span>
    </button>

    <header>
      <h2>
	<span class="edx">E-botics Kenya</span> Help
      </h2>
      <hr>
    </header>



    <p>For <strong>questions ,suggestions or comments</strong>, post in open forun</p>
	<ul class="help-buttons">
	  <li><a class="help-modal-button" href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/discussion/forum">
		Post
	  </a></li>
	</ul>

    <p>Have <strong>general questions about Stanford Online</strong>? You can find lots of helpful information in the Stanford Online Help Center.</p>
	
	<ul class="help-buttons">
	  <li><a class="help-modal-button" href="https://stanfordonline.zendesk.com/hc" target="_blank">
		Access the Help Center
	  </a></li>
	</ul>

	<hr>
    <p>Can't find an answer to your question? contact E-botics online support team <a href="#" id="feedback_link_question">by clicking here</a>.</p>

    <p class="note">We only Communicate in English Language only</p>
  </div>

  <div class="inner-wrapper" id="feedback_form_wrapper">
    <button class="close-modal">
      <i class="icon-remove"></i>
      <span class="sr">
        Close
      </span>
    </button>

    <header></header>

    <form id="feedback_form" class="feedback_form" method="post" data-remote="true" action="/submit_feedback">
      <div id="feedback_error" class="modal-form-error" tabindex="-1"></div>
      <label data-field="subject" for="feedback_form_subject">What is your question*</label>
      <input name="subject" id="feedback_form_subject" aria-required="true" type="text">
      <label data-field="details" for="feedback_form_details">Briefly describe in details*
<span class="tip"> more</span></label>
      <textarea name="details" id="feedback_form_details" aria-required="true"></textarea>
      <input name="issue_type" type="hidden">
      <input name="course_id" value="Engineering/CS101/Summer2014" type="hidden">
      <div class="submit">
        <input name="submit" value="Submit" id="feedback_submit" type="submit">
      </div>
    </form>
  </div>

  <div class="inner-wrapper" id="feedback_success_wrapper" tabindex="0">
    <button class="close-modal" tabindex="0">
      <i class="icon-remove"></i>
      <span class="sr">
        Close
      </span>
    </button>

    <header>
      <h2>Thank You!</h2>
      <hr>
    </header>

    
    <p>
    Thank you for your inquiry or feedback. We typically respond to a 
request within 24 hours In the meantime, please review our <a href="https://stanfordonline.zendesk.com/hc/en-us" target="_blank" id="feedback-faq-link" tabindex="0">Help Center articles</a>, For similer Questions and responses
    </p>
  </div>
</section>

<script type="text/javascript">
(function() {
    var onModalClose = function() {
            $(".help-modal .close-modal").off("click");
            $("#lean_overlay").off("click");
            $("#help-modal").attr("aria-hidden", "true");
            $('area,input,select,textarea,button').removeAttr('tabindex');
            $(".help-tab a").focus();
        },
        cycle_modal_tab = function(from_element_name, to_element_name) {
            $(from_element_name).on('keydown', function(e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode === 9) {
                    e.preventDefault();
                    $(to_element_name).focus();
                }
            });
        };

    $(".help-tab").click(function() {
        $(".field-error").removeClass("field-error");
        $("#feedback_form")[0].reset();
        $("#feedback_form input[type='submit']").removeAttr("disabled");
        $("#feedback_form_wrapper").css("display", "none");
        $("#feedback_error").css("display", "none");
        $("#feedback_success_wrapper").css("display", "none");
        $("#help_wrapper").css("display", "block");
        $("#help-modal").attr("aria-hidden", "false");
        $("#help-modal .close-modal").click(onModalClose);
        $("#lean_overlay").click(onModalClose);
        $("#help_wrapper .close-modal").focus();
    });
    showFeedback = function(event, issue_type, title, subject_label, details_label) {
        $("#help_wrapper").css("display", "none");
        $("#feedback_form input[name='issue_type']").val(issue_type);
        $("#feedback_form_wrapper").css("display", "block");
        $("#feedback_form_wrapper header").html("<h2>" + title + "</h2><hr>");
        $("#feedback_form_wrapper label[data-field='subject']").html(subject_label);
        $("#feedback_form_wrapper label[data-field='details']").html(details_label);
        $("#feedback_form_wrapper .close-modal").focus();
        event.preventDefault();
    };
    cycle_modal_tab("#feedback_link_question", "#help_wrapper .close-modal");
    cycle_modal_tab("#feedback_submit", "#feedback_form_wrapper .close-modal");
    cycle_modal_tab("#feedback-faq-link", "#feedback_success_wrapper .close-modal");
    $("#help-modal").on("keydown", function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 27) {
            e.preventDefault();
            $("#help_wrapper .close-modal").click();
        }
    });
    $("#feedback_link_problem").click(function(event) {
        showFeedback(
            event,
            "problem",
            "Report a Problem",
            "Brief description of the problem" + "*",
            "Details of the problem you are encountering" + "*" + "<span class='tip'>" +
              "Include error messages, steps which lead to the issue, etc." + "</span>"
        );
    });
    $("#feedback_link_suggestion").click(function(event) {
        showFeedback(
            event,
            "suggestion",
            "Make a Suggestion",
            "Brief description of your suggestion" + "*",
            "Details" + "*"
        );
    });
    $("#feedback_link_question").click(function(event) {
        showFeedback(
            event,
            "question",
            "Ask a Question",
            "Brief summary of your question" + "*",
            "Details" + "*"
        );
    });
    $("#feedback_form").submit(function() {
        $("input[type='submit']", this).attr("disabled", "disabled");
        $('area,input,select,textarea,button').attr('tabindex', -1);
        $("#feedback_form_wrapper .close-modal").focus();
    });
    $("#feedback_form").on("ajax:complete", function() {
        $("input[type='submit']", this).removeAttr("disabled");
    });
    $("#feedback_form").on("ajax:success", function(event, data, status, xhr) {
        $("#feedback_form_wrapper").css("display", "none");
        $("#feedback_success_wrapper").css("display", "block");
        $("#feedback_success_wrapper").focus();
    });
    $("#feedback_form").on("ajax:error", function(event, xhr, status, error) {
        $(".field-error").removeClass("field-error").removeAttr("aria-invalid");
        var responseData;
        try {
            responseData = jQuery.parseJSON(xhr.responseText);
        } catch(err) {
        }
        if (responseData) {
            $("[data-field='"+responseData.field+"']").addClass("field-error").attr("aria-invalid", "true");
            $("#feedback_error").html(responseData.error).stop().css("display", "block");
        } else {
            // If no data (or malformed data) is returned, a server error occurred
            htmlStr = "An error has occurred.";
            // If no email is configured, we can't do much other than
            // ask the user to try again later
            htmlStr += "Please try again later.";
            $("#feedback_error").html(htmlStr).stop().css("display", "block");
        }
        // Make change explicit to assistive technology
        $("#feedback_error").focus();
    });
})(this)
</script>




  <div class="content-wrapper" id="content">
    
<div class="robotics">








<script type="text/template" id="image-modal-tpl">
    <div class="wrapper-modal wrapper-modal-image">
  <section class="image-link">
    <%= smallHTML%>
    <a href="#" class="modal-ui-icon action-fullscreen" role="button">
      <span class="label">
        <i class="icon-fullscreen icon-large"></i> <%= gettext("Fullscreen") %>
      </span>
    </a>
  </section>
  
  <section class="image-modal">
    <section class="image-content">
      <div class="image-wrapper">
        <img alt="<%= largeALT %>, <%= gettext('Large') %>" src="<%= largeSRC %>" />
      </div>
      
      <a href="#" class="modal-ui-icon action-close" role="button">
        <span class="label">
          <i class="icon-remove icon-large"></i> <%= gettext("Close") %>
        </span>
      </a>
      
      <ul class="image-controls">
        <li class="image-control">
          <a href="#" class="modal-ui-icon action-zoom-in" role="button">
            <span class="label">
              <i class="icon-zoom-in icon-large"></i> <%= gettext("Zoom In") %>
            </span>
          </a>
        </li>
    
        <li class="image-control">
          <a href="#" class="modal-ui-icon action-zoom-out is-disabled" role="button">
            <span class="label">
              <i class="icon-zoom-out icon-large"></i> <%= gettext("Zoom Out") %>
            </span>
          </a>
        </li>
      </ul>
    </section>
  </section>
</div>
</script>













  














<nav class="courseware course-material">
  <div class="inner-wrapper">
    <ol class="course-tabs">
        
          <li>
             <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware" class="active">
                 Topic
                   <span class="sr">,Level</span>
             </a>
          </li>
        
         
          <li>
             <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/progress" class="">
                 Progress
             </a>
          </li>
    
    </ol>
  </div>
</nav>



<div class="container">
  <div class="course-wrapper">

    <div class="course-index" role="navigation">
      <header id="open_close_accordion">
        <a href="#">close</a>
      </header>

      <div role="tablist" class="ui-accordion ui-widget ui-helper-reset" id="accordion" style="">
        <nav aria-label="Course Navigation">
            



    
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-0" id="ui-accordion-accordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Week 1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Robotics Level&nbsp;1</a>
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
        <a href="#">Robotics Level&nbsp;1</a>
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
        <a href="#">Robotics Level&nbsp;1</a>
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
        <a href="#">Robotics Level&nbsp;1</a>
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
        <a href="#">Robotics Level&nbsp;1</a>
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
        <a href="#">Robotics Level&nbsp;1</a>
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
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-6" id="ui-accordion-accordion-header-6" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Finishing Up"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Finishing&nbsp;Up</a>
      </h3>

    <ul aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-accordion-header-6" id="ui-accordion-accordion-panel-6" style="display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/37184b1806934748bea0d5be46ee3216/75c471412c94481997f9a6be19f9a483/">
              <p>Post-Course Survey </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/37184b1806934748bea0d5be46ee3216/362f118c23a04698b8496353dfca6a00/">
              <p>Generate your Statement of Accomplishment </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
    </ul>
  </div>

    
  <div class="chapter">
      
      <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-accordion-panel-7" id="ui-accordion-accordion-header-7" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" aria-label="Course Resources"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
        <a href="#">Find&nbsp; More</a>
      </h3>

    <ul aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-accordion-header-7" id="ui-accordion-accordion-panel-7" style="display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/d1714dd9a6f84dd683be1eb737b6dbfe/80370d8713f74890ab042d48d80df3ed/">
              <p>Books </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/d1714dd9a6f84dd683be1eb737b6dbfe/d47eb90418a64f3b8c7a8e0467f0db45/">
              <p>Videos </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/d1714dd9a6f84dd683be1eb737b6dbfe/2188c8cbabb34488be854c63fd80a782/">
              <p>Events</p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/d1714dd9a6f84dd683be1eb737b6dbfe/b90374914f014763962c3b0ed76554a2/">
              <p>Schools</p>
              
              <p class="subtitle"></p>
            </a>
          </li>
          <li class=" ">
            <a href="https://class.stanford.edu/courses/Engineering/CS101/Summer2014/courseware/d1714dd9a6f84dd683be1eb737b6dbfe/7a96ffaf52994869a08660eaac191c0c/">
              <p>Gallary </p>
              
              <p class="subtitle"></p>
            </a>
          </li>
    </ul>
  </div>


        </nav>
      </div>
    </div>

    <section class="course-content" id="course-content">
      <div class="xblock xblock-student_view xmodule_display xmodule_SequenceModule xblock-initialized" data-runtime-class="LmsRuntime" data-init="XBlockToXModuleShim" data-block-type="sequential" data-request-token="042cd8f470ba11e4aeb8021e90aa5731" data-runtime-version="1" data-usage-id="i4x:;_;_Engineering;_CS101;_sequential;_63a549fd5cde4f4d89272c8a0342adee" data-type="Sequence" data-course-id="Engineering/CS101/Summer2014">
    

<div id="sequence_i4x-Engineering-CS101-sequential-63a549fd5cde4f4d89272c8a0342adee" class="sequence" data-id="i4x://Engineering/CS101/sequential/63a549fd5cde4f4d89272c8a0342adee" data-position="1" data-ajax-url="/courses/Engineering/CS101/Summer2014/xblock/i4x:;_;_Engineering;_CS101;_sequential;_63a549fd5cde4f4d89272c8a0342adee/handler/xmodule_handler">
  <nav class="sequence-nav">
    <ul class="sequence-nav-buttons">
      <li class="prev"><a aria-hidden="true" class="disabled" role="button" href="#">Previous</a></li>
    </ul>

    <div class="sequence-list-wrapper">
      <ol style="left: 0px;" role="tablist" aria-label="Section Navigation" id="sequence-list">
        <li>
        <a aria-selected="true" class="seq_problem active progress-none" data-id="i4x://Engineering/CS101/vertical/786f1817c0dd48a387dec6d33bcc96a6" data-element="1" href="javascript:void(0);" title="Q1
Q2" data-page-title="Q1" aria-controls="seq_contents_0" id="tab_0" tabindex="0" role="tab">
            <p aria-hidden="false">Q1
Q2</p>
          </a>
        </li>
      </ol>
    <div style="opacity: 0;" class="left-shadow"></div><div style="opacity: 0;" class="right-shadow"></div></div>

    <ul class="sequence-nav-buttons">
      <li class="next"><a aria-hidden="true" class="disabled" role="button" href="#">Next</a></li>
    </ul>
  </nav>
</div>
  <div id="seq_contents_0" aria-labelledby="tab_0" aria-hidden="true" class="seq_contents tex2jax_ignore asciimath2jax_ignore">
     &lt;div class="xblock xblock-student_view xmodule_display 
xmodule_VerticalModule" data-runtime-class="LmsRuntime" 
data-init="XBlockToXModuleShim" data-block-type="vertical" 
data-request-token="042cd8f470ba11e4aeb8021e90aa5731" 
data-runtime-version="1" 
data-usage-id="i4x:;_;_Engineering;_CS101;_vertical;_786f1817c0dd48a387dec6d33bcc96a6"
 data-type="None" data-course-id="Engineering/CS101/Summer2014"&gt;
    &lt;div class="vert-mod"&gt;
  &lt;div class="vert vert-0" 
data-id="i4x://Engineering/CS101/problem/c54f15173e3f4e008506ac6ab0469ac4"&gt;

    &lt;div class="xblock xblock-student_view xmodule_display 
xmodule_CapaModule" data-runtime-class="LmsRuntime" 
data-init="XBlockToXModuleShim" data-block-type="problem" 
data-request-token="042cd8f470ba11e4aeb8021e90aa5731" 
data-runtime-version="1" 
data-usage-id="i4x:;_;_Engineering;_CS101;_problem;_c54f15173e3f4e008506ac6ab0469ac4"
 data-type="Problem" data-course-id="Engineering/CS101/Summer2014"&gt;
    &lt;div 
id="problem_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4"
 class="problems-wrapper" 
data-problem-id="i4x://Engineering/CS101/problem/c54f15173e3f4e008506ac6ab0469ac4"
 
data-url="/courses/Engineering/CS101/Summer2014/xblock/i4x:;_;_Engineering;_CS101;_problem;_c54f15173e3f4e008506ac6ab0469ac4/handler/xmodule_handler"
 data-progress_status="done" data-progress_detail="1/1"&gt;&lt;/div&gt;

&lt;/div&gt;

  &lt;/div&gt;
  &lt;div class="vert vert-1" 
data-id="i4x://Engineering/CS101/problem/63be5ed45db345459d0a827cca2d47aa"&gt;

    &lt;div class="xblock xblock-student_view xmodule_display 
xmodule_CapaModule" data-runtime-class="LmsRuntime" 
data-init="XBlockToXModuleShim" data-block-type="problem" 
data-request-token="042cd8f470ba11e4aeb8021e90aa5731" 
data-runtime-version="1" 
data-usage-id="i4x:;_;_Engineering;_CS101;_problem;_63be5ed45db345459d0a827cca2d47aa"
 data-type="Problem" data-course-id="Engineering/CS101/Summer2014"&gt;
    &lt;div 
id="problem_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa"
 class="problems-wrapper" 
data-problem-id="i4x://Engineering/CS101/problem/63be5ed45db345459d0a827cca2d47aa"
 
data-url="/courses/Engineering/CS101/Summer2014/xblock/i4x:;_;_Engineering;_CS101;_problem;_63be5ed45db345459d0a827cca2d47aa/handler/xmodule_handler"
 data-progress_status="done" data-progress_detail="1/1"&gt;&lt;/div&gt;

&lt;/div&gt;

  &lt;/div&gt;
&lt;/div&gt;

&lt;/div&gt;

  </div>
  <div aria-labelledby="tab_0" id="seq_content" role="tabpanel">
     <div class="xblock xblock-student_view xmodule_display xmodule_VerticalModule xblock-initialized" data-runtime-class="LmsRuntime" data-init="XBlockToXModuleShim" data-block-type="vertical" data-request-token="042cd8f470ba11e4aeb8021e90aa5731" data-runtime-version="1" data-usage-id="i4x:;_;_Engineering;_CS101;_vertical;_786f1817c0dd48a387dec6d33bcc96a6" data-type="None" data-course-id="Engineering/CS101/Summer2014">
    <div class="vert-mod">
  <div class="vert vert-0" data-id="i4x://Engineering/CS101/problem/c54f15173e3f4e008506ac6ab0469ac4">
    <div class="xblock xblock-student_view xmodule_display xmodule_CapaModule xblock-initialized" data-runtime-class="LmsRuntime" data-init="XBlockToXModuleShim" data-block-type="problem" data-request-token="042cd8f470ba11e4aeb8021e90aa5731" data-runtime-version="1" data-usage-id="i4x:;_;_Engineering;_CS101;_problem;_c54f15173e3f4e008506ac6ab0469ac4" data-type="Problem" data-course-id="Engineering/CS101/Summer2014">
    <div aria-atomic="false" aria-live="off" aria-busy="false" id="problem_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4" class="problems-wrapper" data-problem-id="i4x://Engineering/CS101/problem/c54f15173e3f4e008506ac6ab0469ac4" data-url="/courses/Engineering/CS101/Summer2014/xblock/i4x:;_;_Engineering;_CS101;_problem;_c54f15173e3f4e008506ac6ab0469ac4/handler/xmodule_handler" data-progress_status="done" data-progress_detail="1/1">


<h2 class="problem-header">
  Q1
</h2>

<div class="problem-progress">(1 point possible)</div>


<div class="problem" role="application">
  <div>
<p>Which one of the following emails looks like a trojan attack?</p>
<span><form class="choicegroup capa_inputtype" id="inputtype_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1">
    <div class="indicator_container">
        <span class="status unanswered" id="status_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1" aria-describedby="inputtype_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1">
            <span class="sr">
                -
                unanswered
            </span>
        </span>
    </div>

    <fieldset role="radiogroup" aria-label="Which one of the following emails looks like a trojan attack?">

        <label for="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1_choice_0">
            <input name="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1" id="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1_choice_0" aria-role="radio" aria-describedby="answer_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1" value="choice_0" type="radio"> This is a very important message from your bank. Please email us your password so we can verify it.

        </label>
        <label for="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1_choice_1">
            <input name="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1" id="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1_choice_1" aria-role="radio" aria-describedby="answer_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1" value="choice_1" type="radio"> Please visit www.scwhab.bad-guy.ru and log in with your regular password -- the standard log-in page is broken today.

        </label>
        <label for="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1_choice_2">
            <input name="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1" id="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1_choice_2" aria-role="radio" aria-describedby="answer_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1" value="choice_2" type="radio">
 I have 27 million dollars here in Spain. If you will send me your 
contact info to help me transfer the money to your account, I would be 
happy to give you 10% of it. Please help me, you're my only hope!

        </label>
        <label for="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1_choice_3">
            <input name="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1" id="input_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1_choice_3" aria-role="radio" aria-describedby="answer_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1" value="choice_3" type="radio"> We have detected a virus on your computer. Please download and run this program to check: SuperVirusChecker.exe

        </label>
        <span id="answer_i4x-Engineering-CS101-problem-c54f15173e3f4e008506ac6ab0469ac4_2_1"></span>
    </fieldset>

</form></span>


</div>

  <div class="action">
    <input name="problem_id" value="Q1" type="hidden">

    <input class="reset" value="Reset" type="button">
    <input class="check Submit" data-checking="Checking..." value="Submit" type="button">
  </div>
</div>
</div>

</div>

  </div>
  <div class="vert vert-1" data-id="i4x://Engineering/CS101/problem/63be5ed45db345459d0a827cca2d47aa">
    <div class="xblock xblock-student_view xmodule_display xmodule_CapaModule xblock-initialized" data-runtime-class="LmsRuntime" data-init="XBlockToXModuleShim" data-block-type="problem" data-request-token="042cd8f470ba11e4aeb8021e90aa5731" data-runtime-version="1" data-usage-id="i4x:;_;_Engineering;_CS101;_problem;_63be5ed45db345459d0a827cca2d47aa" data-type="Problem" data-course-id="Engineering/CS101/Summer2014">
    <div aria-atomic="false" aria-live="off" aria-busy="false" id="problem_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa" class="problems-wrapper" data-problem-id="i4x://Engineering/CS101/problem/63be5ed45db345459d0a827cca2d47aa" data-url="/courses/Engineering/CS101/Summer2014/xblock/i4x:;_;_Engineering;_CS101;_problem;_63be5ed45db345459d0a827cca2d47aa/handler/xmodule_handler" data-progress_status="done" data-progress_detail="1/1">


<h2 class="problem-header">
  Q2
</h2>

<div class="problem-progress">(1 point possible)</div>


<div class="problem" role="application">
  <div>
<p>How to best to avoid being attacked through a "vulnerability"?</p>
<span><form id="inputtype_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1" class="choicegroup capa_inputtype">
    <div class="indicator_container">
        <span id="status_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1" aria-describedby="inputtype_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1" class="status unanswered">
            <span class="sr">
                -
                unanswered
            </span>
        </span>
    </div>

    <fieldset aria-label="How to best to avoid being attacked through a " role="radiogroup" vulnerabilityu00022u0003fu00022="">

        <label for="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1_choice_0">
            <input name="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1" aria-describedby="answer_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1" aria-role="radio" id="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1_choice_0" value="choice_0" type="radio"> Reboot your machine each morning.

        </label>
        <label for="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1_choice_1">
            <input name="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1" aria-describedby="answer_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1" aria-role="radio" id="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1_choice_1" value="choice_1" type="radio"> Avoid web sites where people post pictures of cats.

        </label>
        <label for="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1_choice_2">
            <input name="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1" aria-describedby="answer_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1" aria-role="radio" id="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1_choice_2" value="choice_2" type="radio"> Keep all your internet-facing software at the latest version.

        </label>
        <label for="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1_choice_3">
            <input name="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1" aria-describedby="answer_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1" aria-role="radio" id="input_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1_choice_3" value="choice_3" type="radio"> Always use a fake identity when forum posting.

        </label>
        <span id="answer_i4x-Engineering-CS101-problem-63be5ed45db345459d0a827cca2d47aa_2_1"></span>
    </fieldset>

</form>
</span>


</div>

  <div class="action">
    <input name="problem_id" value="Q2" type="hidden">

    <input class="reset" value="Reset" type="button">
    <input class="check Submit" data-checking="Checking..." value="Submit" type="button">
  </div>
</div>
</div>

</div>

  </div>
</div>

</div>

  </div>

</div>



<script type="text/javascript">
  var sequenceNav;
  $(document).ready(function() {
    sequenceNav = new SequenceNav($('.sequence-nav'));
  });
</script>

</div>

    </section>
  </div>
</div>


<div id="accessibile-confirm-modal" class="modal" aria-hidden="true">
  <div class="inner-wrapper" role="dialog" aria-labelledby="accessibile-confirm-title">
    <button class="close-modal">
      <i class="icon-remove"></i>
      <span class="sr">
        Close
      </span>
    </button>

    <header>
      <h2 id="accessibile-confirm-title">
          Confirm
        <span class="sr">,
          modal open
        </span>
      </h2>
    </header>
    <div role="dialogalert" class="status message" tabindex="-1">
        <p class="message-title"></p>
    </div>
    <hr aria-hidden="true">
    <div class="actions">
        <button class="dismiss ok-button">OK</button>
        <button class="dismiss cancel-button" data-dismiss="leanModal">Cancel</button>
    </div>
  </div>
  <a href="#accessibile-confirm-modal" rel="leanModal" id="confirm_open_button" style="display:none">open</a>
</div>

<script type="text/javascript">
var accessible_confirm = function(message, callback) {
    $("#accessibile-confirm-modal .cancel-button").click(function(){
        $("#accessibile-confirm-modal .close-modal").click();
    });
    $("#accessibile-confirm-modal .ok-button").click(function(){
        $("#accessibile-confirm-modal .close-modal").click();
        callback();
    });

    accessible_modal("#accessibile-confirm-modal #confirm_open_button", "#accessibile-confirm-modal .close-modal", "#accessibile-confirm-modal", ".content-wrapper");
    $("#accessibile-confirm-modal #confirm_open_button").click();
    $("#accessibile-confirm-modal .message-title").html(message);
};
</script>


    
  </div>

  
<div class="wrapper-footer"  style="background:#106DA0;">
  <footer>
    <div class="colophon">
      <nav class="nav-colophon">
        <ol>
         
         </li>
          <li><a href="https://class.stanford.edu/tos#honor">HOME</a></li>
          <li><a href="https://class.stanford.edu/tos#copyright">ABOUT</a></li>
          <li><a href="https://class.stanford.edu/about#careers">TEAM</a></li>
          <li><a href="https://class.stanford.edu/about#contact">COUNTACTS</a></li>
          <li><a href="https://stanfordonline.zendesk.com/hc">ADVERTISEMENT</a></li>
        </ol>
      </nav>
    </div>
    <div class="references">
      <a id="stanford-footer-edx-image" href="http://openedx.org/">
        <span class="sr">Powered <a href="www.akirachix">Akirachix</a> <a href="www.ihub.co.ke">I hub</a></span>
      </a>
    </div>
  </footer>
</div>

<div id="su-footer"   style="background:#106DA0;">
  <div class="su-container">
    <div class="su-row">
      <div id="su-footer-logo" class="span2">
        <a href="http://www.stanford.edu/">
          <img src="quiz_files/footer-stanford-logo2x.png" alt="Stanford University" height="49" width="105">
        </a>
      </div>
      <div id="su-footer-text" class="span10">
        <ul>
          <li class="home"><a href="http://www.stanford.edu/">SU Home</a></li>
          <li class="maps alt"><a href="http://visit.stanford.edu/plan/maps.html">Maps &amp; Directions</a></li>
          <li class="search-stanford"><a href="http://www.stanford.edu/search/">Search E-botics</a></li>
          <li class="terms alt"><a href="http://www.stanford.edu/site/terms.html">Terms of Use</a></li>
         
        </ul>
        <div class="clear"></div>
        <p class="copyright vcard">© <span class="fn org">Stanford University</span>, <span class="adr"> <span class="locality">E-botics</span>, <span class="region">Kenya</span> <span class="postal-code">1439-00-800</span> </span></p>
      </div>
      <div style="clear: both;"></div>
    </div>
  </div>
</div>


  <script>window.baseUrl = "/static/";</script>
  
    <script type="text/javascript" src="quiz_files/lms-application.js" charset="utf-8"></script>


  
    <script type="text/javascript" src="quiz_files/lms-modules.js" charset="utf-8"></script>



  
  <script type="text/javascript" src="quiz_files/jquery_002.js"></script>
  <script type="text/javascript" src="quiz_files/jquery_003.js"></script>

  <script type="text/javascript" src="quiz_files/codemirror-compressed.js"></script>

  
    <script type="text/javascript" src="quiz_files/lms-courseware.js" charset="utf-8"></script>


  
    <script type="text/javascript" src="quiz_files/discussion.js" charset="utf-8"></script>



  



<script type="text/x-mathjax-config;executed=true">
  MathJax.Hub.Config({
    tex2jax: {
      inlineMath: [
        ["\\(","\\)"],
        ['[mathjaxinline]','[/mathjaxinline]']
      ],
      displayMath: [
        ["\\[","\\]"],
        ['[mathjax]','[/mathjax]']
      ]
    }
  });
</script>

<!-- This must appear after all mathjax-config blocks, so it is after the imports from the other templates.
     It can't be run through static.url because MathJax uses crazy url introspection to do lazy loading of
     MathJax extension libraries -->
<script type="text/javascript" src="quiz_files/MathJax.js"></script>

<script type="text/template" id="_user_profile">

<h2>Active Threads</h2>
<section class="discussion">
    {{#threads}}
        <article class="discussion-thread" id="thread_{{id}}"/>
    {{/threads}}
</section>
<section class="pagination"/>
</script>
<script type="text/template" id="_profile_thread">

<article class="discussion-article" data-id="{{id}}">
    <div class="discussion-post">
        <header>
            <h3>{{title}}</h3>
            <p class="posted-details">                
                {{#user}}
                <a href="{{user_url}}" class="username">{{username}}</a>
                {{/user}}
                {{^user}}
                anonymous
                {{/user}}

                <span class="timeago" title="{{created_at}}">{{created_at}}</span>
                <span class="post-status-closed top-post-status" style="display: none">
                    &bull; This thread is closed.
                </span>
            </p>
        </header>
        <div class="post-body">{{{abbreviatedBody}}}</div>
    </div>
    <div class="post-tools">
        <a href="{{permalink}}">View discussion</a>
    </div>

</article>
</script>
<script type="text/template" id="_pagination">

<nav class="discussion-{{discussiontype}}-paginator discussion-paginator">
    <ol>
        {{#previous}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="{{number}}">&lt; Previous</a></li>
        {{/previous}}
        {{#first}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="1">1</a></li>
        {{/first}}
        {{#leftdots}}
        <li>…</li>
        {{/leftdots}}

        {{#lowPages}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="{{number}}">{{number}}</a></li>
        {{/lowPages}}
        <li class="current-page"><span>{{page}}</span></li>
        {{#highPages}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="{{number}}">{{number}}</a></li>
        {{/highPages}}

        {{#rightdots}}
        <li>…</li>
        {{/rightdots}}
        {{#last}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="{{number}}">{{number}}</a></li>
        {{/last}}
        {{#next}}
        <li><a class="discussion-pagination" href="{{url}}" data-page-number="{{number}}">Next &gt;</a></li>
        {{/next}}
    </ol>
</nav>

</script>
<script type="text/template" id="_inline_discussion">

<section class="discussion" data-discussion-id="{{discussionId}}">
    <article class="new-post-article"></article>

    <section class="threads">
        {{#threads}}
            <article class="discussion-thread" id="thread_{{id}}">
            </article>
        {{/threads}}
    </section>

    <section class="pagination">
    </section>
</section>
</script>


  <script type="text/javascript">
    var $$course_id = "Engineering/CS101/Summer2014";

    $(function(){
        $(".ui-accordion-header a, .ui-accordion-content .subtitle").each(function() {
          var elemText = $(this).text().replace(/^\s+|\s+$/g,''); // Strip leading and trailing whitespace
          var wordArray = elemText.split(" ");
          var finalTitle = "";
          if (wordArray.length > 0) {
            for (i=0;i<=wordArray.length-1;i++) {
              finalTitle += wordArray[i];
              if (i == (wordArray.length-2)) {
                finalTitle += "&nbsp;";
              } else if (i == (wordArray.length-1)) {
                // Do nothing
              } else {
                finalTitle += " ";
              }
            }
          }
          $(this).html(finalTitle);
        });
      });
  </script>







  <!-- dummy segment.io -->
<script type="text/javascript">
  var analytics = {
    track: function() { return; },
    pageview: function() { return; }
  };
</script>
<!-- end dummy segment.io -->





<div class="annotator-notice"></div><div style="display: none; opacity: 0;" class="tooltip"></div><div id="lean_overlay"></div><div id="reader-feedback" class="sr" style="display:none" aria-hidden="false" aria-atomic="true" aria-live="assertive"><p>A robot is a tiny little version of me. - incorrect</p>
</div><div style="position: absolute; visibility: hidden; top: 0px; left: 0px; width: auto; padding: 0px; border: 0px none; margin: 0px; white-space: nowrap; text-align: left; text-indent: 0px; text-transform: none; line-height: normal; letter-spacing: normal; word-spacing: normal; font-size: 40px; font-weight: normal; font-style: normal; font-size-adjust: none; font-family: 'MathJax_Size1',sans-serif;" id="MathJax_Font_Test"></div></body></html>