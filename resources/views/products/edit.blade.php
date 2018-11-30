@extends('layouts.app')
@section('content')
    <h1>Edit Product</h1>
    {!! Form::open(['action' => ['ProductController@update',$product ->id] , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('Product_Name','Product Name:')}}
        {{Form::text('Product_Name',$product->Product_Name, ['class' =>'form-control', 'placeholder' =>'Product Name' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('Description','Description:')}}
        {{Form::textarea('Description',$product->Description, ['class' =>'form-control', 'rows' => 3, 'cols' => 10,'placeholder' =>'Body Text' ])}} 
        {{--Form::textarea('Description','', ['id' => 'article-ckeditor', 'class' =>'form-control', 'rows' => 10, 'cols' => 10, 'placeholder' =>'Body Text' ])--}} 
    </div>
    <div class="form-group">
        {{Form::label('Price','Price:')}}
        {{Form::text('Price',$product->Price, ['class' =>'form-control', 'placeholder' =>'Price' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('Capacity','Capacity:')}}
        {{Form::text('Capacity',$product->Capacity, ['class' =>'form-control', 'placeholder' =>'Capacity' ])}} 
    </div>
    <div class="form-group">
            {{Form::label('Spe_Inst','Special Instructions::')}}
            {{--Form::textarea('body','', ['class' =>'form-control', 'placeholder' =>'Body Text' ])--}} 
            {{Form::textarea('Spe_Inst',$product->Spe_Inst, ['id' => 'article-ckeditor', 'class' =>'form-control', 'rows' => 10, 'cols' => 10, 'placeholder' =>'Body Text' ])}} 
    </div>
    <div class="form-group">
                {{Form::label('Avl_Qty','Quantity Available:')}}
                {{Form::text('Avl_Qty',$product->Avl_Qty, ['class' =>'form-control', 'placeholder' =>'Quantity' ])}} 
    </div>       
    <div class="form-group">
            {{Form::label('Prodcut_Range','	Prodcut Range:')}}
            {{Form::text('Prodcut_Range', $product->Prodcut_Range,['class' =>'form-control', 'placeholder' =>'Prodcut Range' ])}} 
    </div>
    <div class="form-group">
            {{Form::label('Flag','Appear in home page:')}}&nbsp;&nbsp;
            @if ($product->Flag =='1')
                {{Form::radio('Flag','1',true,['checked' =>'checked'])}} Yes
                &nbsp;
                {{Form::radio('Flag','0',false,[])}} No
            @else
                {{Form::radio('Flag','1',false,[])}} Yes
                &nbsp;
                {{Form::radio('Flag','0',true,['checked' =>'checked'])}} No
            @endif
        </div>
    <div class="form-group">
            {{Form::label('InActive','Active Status:')}}&nbsp;&nbsp;

            @if ($product->Flag =='1')
                {{Form::radio('InActive','1',true,['checked' =>'checked'])}} Active
                &nbsp;
                {{Form::radio('InActive','0',false,[])}} InActive
            @else
                {{Form::radio('InActive','1',false,[])}} Active
                &nbsp;
                {{Form::radio('InActive','0',true,['checked' =>'checked'])}} InActive
            @endif
    </div>
    <!-- image file uploaded -->
    <div class="form-group">
        {{Form::label('Picture_Path','Picture Path:')}}
        {{Form::file('Picture_Path')}}
    </div>

    
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
      
@endsection
