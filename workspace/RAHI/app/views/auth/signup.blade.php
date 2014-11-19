<h2>Sign Up</h2>

{{Form::open(['action' => 'AuthController@signup'])}}
<div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>
 <div class='form-group'>
        {{ Form::submit('Create Account', ['class' => 'btn btn-primary']) }}
    </div>
{{Form::close()}}

<!-- Errors here -->
@include('layouts.errors')
