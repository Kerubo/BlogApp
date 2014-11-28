<link rel="stylesheet" href="/css/layout.css" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<div class="header">
</div>
<div class="tent"><h2>Profile Page</h2>
<p>
    Name: {{$profile->firstname}} {{$profile->lastname}}
</p>
<p>
    Phone: {{$profile->phone}}
</p>

<a href="{{route('profile.index')}}">Back</a></div>
 <div class="cont">


</div>
<div class="footer"></div>