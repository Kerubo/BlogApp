@extends('master')
@section('content')
<div class="come">
<h2>Profiles</h2>
<p>
    <h4>WELCOME {{ Auth::user()->profile->firstname }} 
    <img src="{{Auth::user()->gravatar()}}" alt=""/></h4>

</p>

 <div class="pull-right btn-group">
      <a href="{{route('posts.index')}}" class="btn btn-default">Entreprenuership</a>
      <a href="{{route('posts.index')}}" class="btn btn-default">Robotics</a>
      <a href="/logout" class="btn btn-primary">Logout</a>
    </div>

<p><a href="{{action('AuthController@logout')}}">Logout</a></p>
<table style="border-top: 2px;border: 4px solid #000;">
    <thead style="background:#ccc;">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)
        <tr>
            <td>{{ $profile->firstname }}</td>
            <td style=" background-color:  #ccc;">{{ $profile->lastname }}</td>
            <td>{{ $profile->phone }}</td>
            <td>
                @if(Auth::user()->id == $profile->user_id)
                    <a href="{{route('profile.edit', [$profile->id])}}">
                        Update
                    </a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<div class="come"></div>
@stop