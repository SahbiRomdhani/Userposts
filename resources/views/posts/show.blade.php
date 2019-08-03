@extends('layouts.app')
@section('content')
<a href="/testlaravel/public/posts/" class="btn btn-success"> Go Back </a> 
<h1> {{ $post->title }}  </h1>
<div> {!!$post->body!!}</div>
<hr>
<small> written on {{$post->created_at}} </small>
<hr>
<a href="/testlaravel/public/posts/{{$post->id}}/edit/"> Edit </a>
{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'DELETE']) !!}

{{Form::submit('Delete','class'=>'btn btn-danger')}}
{!! Form::close() !!}
@endsection