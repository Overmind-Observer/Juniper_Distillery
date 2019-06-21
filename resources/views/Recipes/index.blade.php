@extends('layouts.adminapp')
@section('content')
    <h1>Recipes Details</h1>
    <hr style="border-top: 1px dashed black;">
        @if(count($recipes) > 0)
            @foreach ($recipes as $recipe)
               <div>
                    <div class = "row">
                        <div class="col-md-4 col-sm-4"> <!--show post info -->
                            <h3><a href="/Recipes/{{$recipe ->id}}">{{$recipe ->Title}}</a></h3> 
                            <small>Created on {{$recipe->created_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            
            {{$recipes->links()}}
        @else
            <p>Recipes not found...</p>
        @endif
        <hr style="border-top: 1px dashed black;">

        
@endsection
