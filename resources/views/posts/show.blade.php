@extends('layouts.app')

@section('content')
<a href="{!!url('/posts'); !!}" class="btn btn-default">Go Back</a>
<!--<a herf="/posts" class="btn btn-default">Go Back</a> Not responsive-->
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
        <small> Written On {{$post->created_at}}</small>
    </hr>
@endsection