@extends('layouts.app')
@section('content')

    <h1>Share your experiences here ...</h1>
<<<<<<< HEAD
    <div class="raw">
=======
    <div class ="raw">
>>>>>>> efc101ba33679f28a799048c2d41ca40e6a9bd5a
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

    <div class="row">
        <h3>Rate your experiences</h3>
    </div>
    <div class="row">
        <fieldset class="rate">
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
        </fieldset>
      </div>

    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
</div>

        <!-- Vue Right side of navigation bar, asset => resource folder -->
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor'  );// id
        </script>
    
@endsection
