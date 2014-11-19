@extends('master')
@section('content')
  <div class="page-header">
    @if(Auth::check())
   <!-- <div class="pull-right btn-group">
      <a href="{{route('posts.create')}}" class="btn btn-default">Create Blog</a>-->
     <div class="pull-right btn-group">
     <a href="/todos" class="btn btn-primary" style="background:#ff7400;">Robotics</a> 
      <a href="ebotics/index" class="btn btn-primary" style="background:#ff7400;">Entreprenuership</a> 
      <a href="/logout" class="btn btn-primary" style="background:#ff7400;">Logout</a>   
    </div>
 <!--   @else
    <div class="pull-right btn-group">
      <a href="/login" class="btn btn-primary">Login</a>
    </div>
    @endif-->
    <h2 style="color:#fff;">LETS GET STARTED</h2>
  </div>
  <div class="module-search module">
    <h2 class="module-header"></h2>
    <div class="module-content" >
        <form id="search-blog" method="get"
          action="http://www.robotbooks.com/search">
            <input type="search" name="filter.q" results="5" value="" />
            <input type="submit" value="Search" />
        </form>
    </div>
</div>

  <!--
  <p>
  {{Form::open(['route' => 'posts.search', 'method' => 'GET', 'class' => 'form-inline'])}}
    {{Form::text('search', null, ['class' => 'form-control'])}}
    {{Form::submit('Search', ['class' => 'btn btn-default'])}}
  {{Form::close()}}
  </p>
  @foreach ($posts as $post)
    <li>
      <h2>
        <a href="{{route('posts.show', [$post->slug])}}">
          {{$post->title}}
        </a>
      </h2>
    </li>
  @endforeach

  {{$posts->links()}}-->
@stop
