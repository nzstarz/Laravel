@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'PUT', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title',  $post->title, ['class' =>'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['class' =>'form-control', 'placeholder' => 'Body Text'])}}
        <!-- {{Form::textarea('body', '', ['id' =>'article-ckeditor','class' =>'form-control', 'placeholder' => 'Body Text'])}}
        ('id' =>'article-ckeditor') has to be associted if we use public/ckeditor apart from TinyMCE CDN--> 
    </div>
    <div Class="form-group">
        {{Form::file('cover_image')}}
    </div>
        {{Form::hidden('__method', 'PUT')}}
         {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection