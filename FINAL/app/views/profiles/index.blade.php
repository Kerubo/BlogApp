<link rel="stylesheet" href="/css/layout.css" />
<div class="header">
<b>E-Botics Kenya</b>
<a href="{{action('AuthController@logout')}}">Logout</a>
</div>
<div class="tent"><div class="pull-right btn-group">
      <a href="{{route('posts.index')}}" class="btn btn-default">Entreprenuership</a>
      <a href="{{route('posts.index')}}" class="btn btn-default">Robotics</a>
     
    </div><img src="http://blog.wmiafrica.org/wp-content/uploads/2013/09/9662943550_57442a281f_z.jpg"></div>
<div class="cont">
<p>

    <h4>WELCOME {{ Auth::user()->profile->firstname }} 
    <img src="{{Auth::user()->gravatar()}}" alt=""/></h4>
</p>



 
<h3 style="ont-size:20px;
  font-family:Aril Narrow;
  background-color: #016DA0;
  color:#F05A28;text-align:center;">Connect with other E-Botics Users</h3>
<!--
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
</table>-->
</div>
<div class="footer"></div>