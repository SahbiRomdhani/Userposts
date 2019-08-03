@extends('layouts.app')
@section('content')
<h1> Posts  </h1>
@if (count($posts)>0)
    @foreach ($posts as $item)
        <div class="well">
            <h3> <a href="posts/{{$item->id}}"> {{$item->title}} </a></h3>
            <small> written on {{$item->created_at}} </small>
        </div>
        
    
    @endforeach
    {{$posts->links()}}
@else   
    <p> No Data founds</p>
@endif
@endsection