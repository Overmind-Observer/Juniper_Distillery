@extends('layouts.app')

@section('content')
    <h1>News</h1>
    <hr style="border-top: 1px dashed black;">
        @if(count($news) > 0)
            @foreach ($news as $newsN)
               <div>
                    <div class = "row">
                        <div class="col-md-4 col-sm-4"> <!--show post info -->
                            <h3><a href="/news/{{$newsN ->id}}">{{$newsN ->Title}}</a></h3> 
                            <small>Created on {{$newsN->created_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            
            {{$news->links()}}
        @else
            <p>News not found...</p>
        @endif
        <hr style="border-top: 1px dashed black;">

        
@endsection