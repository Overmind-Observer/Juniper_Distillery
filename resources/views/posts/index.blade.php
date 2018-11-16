@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
        @if(count($posts) > 0)
            @foreach ($posts as $post)
                <div class="well">
                    <div class = "row">
                        <div class="col-md-4 col-sm-4"> <!--show image info -->
                            <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <div class="col-md-4 col-sm-4"> <!--show post info -->
                            <h3><a href="/posts/{{$post ->id}}">{{$post->title}}</a></h3> 
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>Post not found...</p>
        @endif

        
@endsection
