@extends('layouts.app')
@section('content')

    <h3>Create Product here...</h3>
    <div class ="raw">
    <div class="col-md-6">
    <!--'enctype' => 'multipart/form-data' added  for image file uploaded -->
    {!! Form::open(['action' => 'ProductController@store' , 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('Product_Name','Product Name:')}}
        {{Form::text('Product_Name','', ['class' =>'form-control', 'placeholder' =>'Product Name' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('Description','Description:')}}
        {{Form::textarea('Description','', ['class' =>'form-control', 'rows' => 3, 'cols' => 10,'placeholder' =>'Body Text' ])}} 
        {{--Form::textarea('Description','', ['id' => 'article-ckeditor', 'class' =>'form-control', 'rows' => 10, 'cols' => 10, 'placeholder' =>'Body Text' ])--}} 
    </div>
    <div class="form-group">
        {{Form::label('Price','Price:')}}
        {{Form::text('Price','', ['class' =>'form-control', 'placeholder' =>'Price' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('Capacity','Capacity:')}}
        {{Form::text('Capacity','', ['class' =>'form-control', 'placeholder' =>'Capacity' ])}} 
    </div>
    <div class="form-group">
            {{Form::label('Spe_Inst','Special Instructions::')}}
            {{--Form::textarea('body','', ['class' =>'form-control', 'placeholder' =>'Body Text' ])--}} 
            {{Form::textarea('Spe_Inst','', ['id' => 'article-ckeditor', 'class' =>'form-control', 'rows' => 10, 'cols' => 10, 'placeholder' =>'Body Text' ])}} 
    </div>
    <div class="form-group">
                {{Form::label('Avl_Qty','Quantity Available:')}}
                {{Form::text('Avl_Qty','', ['class' =>'form-control', 'placeholder' =>'Quantity' ])}} 
    </div>       
    <div class="form-group">
            {{Form::label('Prodcut_Range','	Prodcut Range:')}}
            {{Form::text('Prodcut_Range','', ['class' =>'form-control', 'placeholder' =>'Prodcut Range' ])}} 
    </div>
    <div class="form-group">
            {{Form::label('Flag','Appear in home page:')}}&nbsp;&nbsp;
            {{Form::radio('Flag','1')}} Yes
            &nbsp;
            {{Form::radio('Flag','0')}} No
    </div>
    <div class="form-group">
            {{Form::label('InActive','Active Status:')}}&nbsp;&nbsp;
            {{Form::radio('InActive','1')}} Active
            &nbsp;
            {{Form::radio('InActive','0')}} InActive
    </div>
    <!-- image file uploaded -->
    <div class="form-group">
        {{Form::label('Picture_Path','Picture Path:')}}
        {{Form::file('Picture_Path')}}
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
