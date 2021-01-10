@extends('layouts.app')

@section('content')
    <h1 class="mt-3">Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="card mb-4">
            <div class="card-body">
                <div class="row ">
                    <div class="col-lg-4">
                        <img class="img-fluid" style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-lg-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    
                    </div>
                </div>

            </div>
        </div>  
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection