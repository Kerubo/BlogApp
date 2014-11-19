<link rel="stylesheet" href="/css/layout.css" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<div class="header">
</div>
<div class="tent"><img src="http://blog.wmiafrica.org/wp-content/uploads/2013/09/9662943066_4269a28a2b_z.jpg"></div>
 <div class="cont">
    <h2>   <i class="fa fa-sign-in"></i>    Sign up</h2>
  
{{Form::open(['action' => 'AuthController@signup'])}}
<div>
    <label for="Username">Username</label>
    {{Form::text('username', null)}}
</div>
<div>
    <label for="Password">Password</label>
    {{Form::password('password')}}
</div>
<div>
    {{Form::submit('Create Account')}}
</div>
{{Form::close()}}

<!-- Errors here -->
@include('layouts.errors')
</div>
<div class="footer"></div>
