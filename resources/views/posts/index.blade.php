@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class ="well">
           <!--    <h3><a herf="/posts{{$post->id}}">{{$post->title}}</a></h3> not responsive: doesn't collate to post-->
               <h3><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small> 
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</P>
    @endif
@endsection