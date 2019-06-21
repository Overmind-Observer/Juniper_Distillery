@extends('layouts.app')

@section('content')
    <a href="/news" class="btn btn-default">Go Back</a>
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
@endsection
