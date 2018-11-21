@extends('layouts.app')
@section('content')
    <h1>Send Email</h1>
    <!--'enctype' => 'multipart/form-data' added  for image file uploaded -->
    {!! Form::open(['route' => 'ContactController@store' , 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name','Your Name')}}
        {{Form::text('name','', ['class' =>'form-control', 'placeholder' =>'Title' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('email','Body')}}
        {{--Form::textarea('body','', ['class' =>'form-control', 'placeholder' =>'Body Text' ])--}} 
        {{Form::textarea('body','', ['id' => 'article-ckeditor', 'class' =>'form-control', 'placeholder' =>'Body Text' ])}} 
    </div>

    <!-- image file uploaded -->
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>

    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
      
@endsection