@extends('layouts.app')
@section('content')
    <h1>Edit Posts</h1>
    {!! Form::open(['action' => ['PostsController@update',$post ->id] , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title, ['class' =>'form-control', 'placeholder' =>'Title' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$post->body, ['id' => 'article-ckeditor', 'class' =>'form-control', 'placeholder' =>'Body Text' ])}} 
    </div>
    <div class="row">
            <fieldset class="rate">
            @if ($post->rate_id =='1')
                    {{-- {{Form::radio('rate_id','1',true,['checked' =>'checked'])}}  --}}
                    {{Form::radio('rate1','5', '', ['id' => 'rate1_star5'])}}
                    {{Form::label('rate1_star5','5', '', ['title' => 'Excellent'])}} 
                    {{Form::radio('rate1','4', '', ['id' => 'rate1_star4'])}}                   
                    {{Form::label('rate1_star4','4', '', ['title' => 'Good'])}}  
                    {{Form::radio('rate1','3', '', ['id' => 'rate1_star3'])}}                  
                    {{Form::label('rate1_star3','3', '', ['title' => 'Satisfactory'])}}
                    {{Form::radio('rate1','2', '', ['id' => 'rate1_star2'])}}                    
                    {{Form::label('rate1_star2','2', '', ['title' => 'Bad'])}}
                    {{Form::radio('rate1','1', '', ['id' => 'rate1_star1'])}}
                    {{Form::label('rate1_star1','1', '', ['title' => 'Very bad'])}}                    
 
            @else
            <input id="rate1-star5" type="radio" name="rate1" value="5" />
            <label for="rate1-star5" title="Excellent">5</label>
        
            <input id="rate1-star4" type="radio" name="rate1" value="4" />
            <label for="rate1-star4" title="Good">4</label>
        
            <input id="rate1-star3" type="radio" name="rate1" value="3" />
            <label for="rate1-star3" title="Satisfactory">3</label>
        
            <input id="rate1-star2" type="radio" name="rate1" value="2" />
            <label for="rate1-star2" title="Bad">2</label>
        
            <input id="rate1-star1" type="radio" name="rate1" value="1" />
            <label for="rate1-star1" title="Very bad">1</label>
            @endif

            </fieldset>
          </div>
    
   
       <!-- image file uploaded -->
       <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
    
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
      
@endsection
