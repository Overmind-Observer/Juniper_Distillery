@extends('layouts.adminapp')
@section('content')

    <h3>Create news</h3>
    <div class ="raw">
    <div class="col-md-6">
    <!--'enctype' => 'multipart/form-data' added  for image file uploaded -->
    {!! Form::open(['action' => ['NewsController@update', $newsN->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('Title','Title:')}}
        {{Form::text('Title', $newsN->Title, ['class' =>'form-control', 'placeholder' =>'Title' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('Body','Description:')}}
        {{Form::textarea('Body',$newsN->Body, ['id' => 'article-ckeditor', 'class' =>'form-control', 'rows' => 3, 'cols' => 10, 'placeholder' =>'Body Text' ])}}
        {{--Form::textarea('Description','', ['id' => 'article-ckeditor', 'class' =>'form-control', 'rows' => 10, 'cols' => 10, 'placeholder' =>'Body Text' ])--}} 
    </div>
    <div class="form-group">

    <!-- image file uploaded -->
<!--    <div class="form-group">
        {{Form::label('Picture_Path','Picture Path:')}}
        {{Form::file('Picture_Path')}}
    </div> 
-->

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
</div>

        <!-- Vue Right side of navigation bar, asset => resource folder -->
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );// id
        </script>
    
@endsection
