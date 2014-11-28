
<link rel="stylesheet" href="/css/layout.css" />
<div class="header">
<b>E-Botics Kenya</b>
      <a href="{{route('posts.create')}}" class="btn btn-primary">Activity log</a>

      <a href="/logout" class="btn btn-primary">Logout</a>
    

</div>
<div class="tent"><h2>Robotics</h2></div>
<div class="cont">
  
   
    
    
    
  
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

  {{$posts->links()}}
  </div>
<div class="footer"></div>

