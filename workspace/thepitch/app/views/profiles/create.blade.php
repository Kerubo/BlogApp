<link rel="stylesheet" href="/css/layout.css" />
<div class="header">
<b>E-Botics Kenya</b>
</div>
<div class="tent">
<img src="http://blog.wmiafrica.org/wp-content/uploads/2013/09/9662943550_57442a281f_z.jpg">
/div>
<div class="cont">
<h2>Create Profile</h2>

{{Form::open(['route' => 'profile.store'])}}
<div class="form-group">
    <label for="First Name">First Name</label>
    {{Form::text('firstname', null)}}
</div><br> <br>
<div class="form-group">
    <label for="Last Name">Last Name</label>
    {{Form::text('lastname', null)}}
</div>
<br> <br>
<div >
    <label for="Phone">Phone Number</label>
    {{Form::text('phone', null)}}
</div>
<br> <br>
<div>
    {{Form::submit('Create Profile')}}
</div>
{{Form::close()}}
</div>
<div class="footer"></div>

<!-- Errors here -->
@include('layouts.errors')
