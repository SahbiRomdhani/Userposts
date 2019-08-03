@extends('layouts.app')

@section('content')
<h1> TEst Post page </h1>
<h3> {{$title}} </h3> 
@if (count($services)>0)
    @foreach ($services as $item)
    
        <ul class="list-group"> 
            <li class="list-group-item"> {{$item}} </li>
        </ul>
   
    @endforeach
    
@endif
@endsection