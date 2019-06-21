@extends('layouts.adminapp')
@section('content')
    <h1>Edit Recipes</h1>
    {!! Form::open(['action' => ['RecipesController@update',$recipes ->id] , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            <h3>Product Name: {{Session::get('name')}}</h3>
    </div>
    <div class="form-group">
            {{Form::label('Title','Title:')}}
            {{Form::text('Title',$recipes->Title, ['class' =>'form-control', 'placeholder' =>'Title' ])}} 
    </div>
        <div class="form-group">
            {{Form::label('Main_Ingrident','Main Ingrident(s):')}}
            {{Form::text('Main_Ingrident',$recipes->Main_Ingrident, ['class' =>'form-control', 'placeholder' =>'Main_Ingrident' ])}} 
        </div>
        <div class="form-group">
            {{Form::label('Sub_Ingrident','Sub Ingridents:')}}
            {{Form::textarea('Sub_Ingrident',$recipes->Sub_Ingrident, ['class' =>'form-control', 'rows' => 3, 'cols' => 10,'placeholder' =>'Sub_Ingrident(s)' ])}} 
        </div>
        <div class="form-group">
                {{Form::label('Description','Description:')}}
                {!! Form::textarea('Description',$recipes->Description, ['class' =>'form-control', 'rows' => 3, 'cols' => 10,'placeholder' =>'Description' ]) !!} 
        </div>

        <div class="form-group">
                {{Form::label('InActive','Active Status:')}}&nbsp;&nbsp;
    
                @if ($recipes->InActive =='1')
                    {{Form::radio('InActive','1',true,['checked' =>'checked'])}} Active
                    &nbsp;
                    {{Form::radio('InActive','0',false,[])}} InActive
                @else
                    {{Form::radio('InActive','1',false,[])}} Active
                    &nbsp;
                    {{Form::radio('InActive','0',true,['checked' =>'checked'])}} InActive
                @endif
        </div>
    
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
      
@endsection

