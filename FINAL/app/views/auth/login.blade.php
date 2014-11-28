<link rel="stylesheet" href="/css/layout.css" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<div class="header">
<b>E-Botics Kenya</b>
</div>
<div class="tent"><img src="http://blog.wmiafrica.org/wp-content/uploads/2013/09/9662943550_57442a281f_z.jpg"></div>
<div class="cont">
    <h2> <i class='fa fa-lock'></i>     Login</h2>
  
{{Form::open(['action' => 'AuthController@login'])}}
<div>
    <label for="Username">Username</label>
    {{Form::text('username', null)}}
</div>
<div>
    <label for="Password">Password</label>
    {{Form::password('password')}}
</div>
<div>
    {{Form::submit('Login')}}
</div>
{{Form::close()}}
</div>
<div class="footer"></div>
