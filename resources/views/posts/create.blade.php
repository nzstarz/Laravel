@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' =>'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['class' =>'form-control', 'placeholder' => 'Body Text'])}}
        <!-- {{Form::textarea('body', '', ['id' =>'article-ckeditor','class' =>'form-control', 'placeholder' => 'Body Text'])}}
        ('id' =>'article-ckeditor') has to be associted if we use public/ckeditor apart from TinyMCE CDN--> 
    </div>
    {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
{!! Form::close() !!}
    
@endsection