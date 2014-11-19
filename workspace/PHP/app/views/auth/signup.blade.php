<link rel="stylesheet" href="/css/layout.css" />
<div class="header">
</div>
<div class="tent"><big>Creating  a generation that thinks, not that folows</big><img src="http://blog.wmiafrica.org/wp-content/uploads/2013/09/9662943066_4269a28a2b_z.jpg"></div>
 <div class="cont">
 <h1>Sign_up</h1>
{{Form::open(['action' => 'AuthController@signup'])}}
<div>
    <label for="Username">Username</label>
    {{Form::text('username', null)}}
</div>
<div>
    <label for="email">E-mail</label>
    {{Form::text('email', null)}}
</div>
<div>
    <label for="Password">Password</label>
    {{Form::password('password')}}
</div>
<div>
    {{Form::submit('Create Account')}}
</div>
{{Form::close()}}<br>

<!-- Errors here -->
@include('layouts.errors')
</div>
<div class="footer"></div>
