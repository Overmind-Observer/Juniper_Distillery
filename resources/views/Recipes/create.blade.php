@extends('layouts.adminapp')
@section('content')

    <h3>Create Recipes here...</h3>
    <div class ="raw">
    <div class="col-md-6">
    <!--'enctype' => 'multipart/form-data' added  for image file uploaded -->
    
    {{-- {{$products}} --}}
    {!! Form::open(['action' => 'RecipesController@store' , 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('Product_Name','Select Product:')}}
        
        <select name ="Product_Name", class = "form-control", placeholder = "Product Name"> 
        @foreach($products as $product)
            <option value="{{$product->id}}",class ="form-control", placeholder ="Product Name"> 
            {{$product->Product_Name}}
            </option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        {{Form::label('Title','Title:')}}
        {{Form::text('Title','', ['class' =>'form-control', 'placeholder' =>'Title' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('Main_Ingrident','Main Ingrident(s):')}}
        {{Form::text('Main_Ingrident','', ['class' =>'form-control', 'placeholder' =>'Main Ingrident(s)' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('Sub_Ingrident','Sub Ingridents:')}}
        {{Form::textarea('Sub_Ingrident','', ['class' =>'form-control', 'rows' => 3, 'cols' => 10,'placeholder' =>'Sub Ingrident(s)' ])}} 
        {{--Form::textarea('Description','', ['id' => 'article-ckeditor', 'class' =>'form-control', 'rows' => 10, 'cols' => 10, 'placeholder' =>'Body Text' ])--}} 
    </div>
    <div class="form-group">
            {{Form::label('Description','Description:')}}
            {{--Form::textarea('body','', ['class' =>'form-control', 'placeholder' =>'Body Text' ])--}} 
            {{Form::textarea('Description','', ['id' => 'article-ckeditor', 'class' =>'form-control', 'rows' => 10, 'cols' => 10, 'placeholder' =>'Description' ])}} 
    </div>
    <div class="form-group">
            {{Form::label('InActive','Active Status:')}}&nbsp;&nbsp;
            {{Form::radio('InActive','1')}} Active
            &nbsp;
            {{Form::radio('InActive','0')}} InActive
    </div>
    
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
