@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <a href="/posts/create" class="btn btn-primary">Create Post</a>
               <!-- <li><a href="{!!url('/posts/create'); !!}" >Create Post</a></li>-->
                    <h3> Your Blog Post</h3>
                    @if(count($posts) > 0)
                        <table class="table table striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                    {!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST', 'class' =>'float-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}

                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                            <p>You Have No Post</p>
                        @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
