@extends('layouts.adminapp')
@section('content')
    <h3>Recipe Title: {{$recipes ->Title}}</h3>
    <h4><b>Product Name:</b> {{$products[0]->Product_Name}}</h4>
    <h4><b>Description:</b><h4>
    <div class="well">
            {{Session::put('name', $products[0]->Product_Name)}}
    {!! $recipes ->Description !!}
                
    </div>
    <hr>
    <small>Created on {{$recipes->created_at}}</small>
    <br>
    <hr>
      <table><tr>
    <a href="/Recipes/{{$recipes->id}}/edit" class="btn btn-primary">Edit</a>
      {{-- <a href="route{{ }}" class="btn btn-primary">Edit</a> --}}

    {!! Form::open(['action' => ['RecipesController@destroy', $recipes->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
                {!! Form::close() !!}</tr><table>
@endsection
