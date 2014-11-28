@extends('master')
 
 
@section('content')
 {{HTML::style('assets/css/main.css')}}
 <div id="wrapper">
<div id="content">
<br><br><br><br>
<div id="slidar">



<h5> Hello<!---<img src="{{Auth::user()->gravatar()}}" alt="" />-->
 <i class="fa fa-user"></i>  {{ Auth::user()->profile->firstname }} 
<br> Welcome to E-botics cool kids and explore the fun  </h5>



<div class="pull-right" >
<a href="/serve" class=" btn btn-primary" style="colour:#106DA0;">ROBOTICS</a>
<a href="/quiz" class=" btn btn-primary" style="colour:106DA0;">ENTREPRENUERSHIP</a>
 


<a href="{{action('AuthController@logout')}}">Logout</a>

</div>

<!---<img src="{{Auth::user()->gravatar()}}" alt="" />-->




<div class="module-search module" style="float:right;">
   
    <div class="module-content" >
        <form id="search-blog" method="get"
          action="http://www.robotbooks.com/search">
            <input type="search" name="filter.q" results="5" value="" />
            <input type="submit" value="Search" />
        </form>
    </div>
</div>
</div>

</div>
</div>
</div>
<div></div>

</div>
<!--
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
</div>-->
@stop