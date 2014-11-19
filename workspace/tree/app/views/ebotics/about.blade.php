@extends('master')
@section('content')
    <div id="wrapper">
    <div class="module-search module">
    <h2 class="module-header"></h2>
    <div class="module-content">
        <form id="search-blog" method="get"
          action="http://www.robotbooks.com/search">
            <input type="search" name="filter.q" results="5" value="" />
            <input type="submit" value="Search" />
        </form>
    </div>
</div>



@stop
 