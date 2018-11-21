@extends('layouts.app')
@section('content')
    <h1>Share your experiences here ...</h1>
    <div class="raw">
    <div class="col-md-6">
    <!--'enctype' => 'multipart/form-data' added  for image file uploaded -->
    {!! Form::open(['action' => 'PostsController@store' , 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','', ['class' =>'form-control', 'placeholder' =>'Title' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('body','Description')}}
        {{--Form::textarea('body','', ['class' =>'form-control', 'placeholder' =>'Body Text' ])--}} 
        {{Form::textarea('body','', ['id' => 'article-ckeditor', 'class' =>'form-control', 'placeholder' =>'Body Text' ])}} 
    </div>

    <!-- image file uploaded -->
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>

    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
</div>
      
@endsection
