@extends('layouts.adminapp')

@section('content')
    <a href="/News" class="btn btn-default">Go Back</a>
    <h1>{{$newsN->Title}}</h1>
    <br>
    <br>
    <br>
    <br>
    <div class="well">
    {{--$post ->body--}}
    {!! $newsN->Body !!}
                
    </div>
    <hr>
    <small>Written on {{$newsN->created_at}} by Juniper Distillery</small>
    <br>
    <hr>
    
    <a href="/News/{{$newsN->id}}/edit" class="btn btn-default">Edit</a>
          {!! Form::open(['action' => ['NewsController@destroy', $newsN->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
          {!! Form::close() !!}
        
@endsection
