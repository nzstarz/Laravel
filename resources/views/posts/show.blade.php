@extends('layouts.app')

@section('content')
<a href="{!!url('/posts'); !!}" class="btn btn-default">Go Back</a>
<!--<a herf="/posts" class="btn btn-default">Go Back</a> Not responsive-->
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}<!-- To Parse Html into the textarea use single {} with !! in it -->
    </div>
    <hr>
        <small> Written On {{$post->created_at}} by {{$post->user->name}}</small>
    </hr>
   <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

   {!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST', 'class' =>'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}

    {!!Form::close()!!}
   <!--  <a href="{!!url('/posts/{{$post->id}}/edit'); !!}" class="btn btn-primary">Edit</a>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning" onclick="return confirm('are you sure?')">Edit</a>-->
@endsection