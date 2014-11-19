@extends('master')
 

@section('title')
 
@section('content')




<div  style="border:5px solid #ff7400;width:60%;height:600px;;float:left;margin-left:50px;">
<div  style="backround-color:#cff;">
<h2>E-botics Kenya</h2>
<div class="pull-right">
 <a href="/posts" class=" btn btn-default" style="background:#fff;colour:ff7400;">READ SOMETHING EXCITING</a>


<p><a href="{{action('AuthController@logout')}}">Logout</a></p>
</div>
<p>
    <h4> Hello <i class="fa fa-user"></i>  {{ Auth::user()->profile->firstname }}<br> Welcome to E-bortics Learning centre   </h4>
</p>
<p>
<!---<img src="{{Auth::user()->gravatar()}}" alt="" />-->

</p>

</div>
</div>
<h4>Who Else Uses E-botics</h4>
<div class="module-search module" style="float:right;">
    <h2 class="module-header"></h2>
    <div class="module-content" >
        <form id="search-blog" method="get"
          action="http://www.robotbooks.com/search">
            <input type="search" name="filter.q" results="5" value="" />
            <input type="submit" value="Search" />
        </form>
    </div>
</div>
<br>

<div  style="backround:#fff;border:5px solid #ff7400;width:30%;float:left;margin-left:20px;">

<table>
    <thead>
      <th>Photo</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)
        <tr>
           <td><i class="fa fa-user"></i> </td>
            <td>{{ $profile->firstname }}</td>
            <td>{{ $profile->lastname }}</td>
            
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

</body>


@stop