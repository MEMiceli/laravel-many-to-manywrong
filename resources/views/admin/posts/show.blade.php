@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
        </div>
        <div class="card-body">
            <div class="md-3">
                <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Back</a>
            </div>
            <div>
                {{$post->content}}
            </div>
            <div>
                <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
</div>

    
@endsection