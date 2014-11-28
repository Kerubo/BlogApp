<link rel="stylesheet" href="/css/layout.css" />
<div class="header">
<b>E-Botics Kenya</b>
  
  </div>
<div class="tent"><h2>Robotics</h2></div>
<div class="cont">
 <h2>
      Explore Robotics       <a href="/logout" class="btn btn-primary">Logout</a>
    
    </h2>
  {{Form::open(['route' => 'posts.store'])}}
  <div class="form-group">
    {{Form::text('title', null,['class' => 'form-control', 'placeholder' =>'Name of your Robot'])}}
  </div>

  <div class="form-group">
    {{Form::textarea('text', null,['class' => 'form-control', 'placeholder' =>'Solution'])}}
  </div>
  <div class="form-group">
    {{Form::submit('post solution', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
</div>
<div class="footer"></div>
