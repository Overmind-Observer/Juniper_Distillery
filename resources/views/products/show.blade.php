@extends('layouts.adminapp')
@section('content')
    <a href="/products" class="btn btn-default">Go Back</a>
    <h1>{{$product ->title}}</h1>
    <br>
    <!--show image info -->
    <img style="width:35%" src="/storage/images/products/{{$product->Picture_Path}}">
    <br>
    <br>
    <br>
    <div class="well">
    {{--$post ->body--}}
    {!! $product ->body !!}
                
    </div>
    <hr>
    <small>Written on {{$product->created_at}}</small>
    <br>
    <hr>

    <a href="/products/{{$product->id}}/edit" class="btn btn-default">Edit</a>
                {!! Form::open(['action' => ['ProductController@destroy', $product->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
                {!! Form::close() !!}
    @if (!Auth::guest())
        @if (Auth::user()->id == $product->user_id)
            
        @endif
    @endif
@endsection
