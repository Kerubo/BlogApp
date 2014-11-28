 @extends('master')
 
@section('title') Login @stop
 
@section('content')

    {{HTML::style('assets/css/main.css')}}
<div id="wrapper">
<br><br><br><br>
<div id="content">
<h2 color:#0072BB;> <i class="fa fa-lock"></i>  User Login here</h2>

{{Form::open(['action' => 'AuthController@login'])}}
<div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>
 <div class='form-group'>
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    </div>
{{Form::close()}}
</div>
</div>
</body>
@stop