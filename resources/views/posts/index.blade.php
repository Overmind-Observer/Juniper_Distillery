@extends('layouts.app')
@section('content')
    <h1>Customer Experiences</h1>
    <hr style="border-top: 1px dashed black;">
        @if(count($posts) > 0)
            @foreach ($posts as $post)
               <div>
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
        <hr style="border-top: 1px dashed black;">

        
@endsection
