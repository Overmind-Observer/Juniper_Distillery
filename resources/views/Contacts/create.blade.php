@extends('layouts.adminapp')
@section('content')

    <h1>Add contact details</h1>
    <div class ="raw">
            <div class="col-md-4">
    {!! Form::open(['action' =>'ContactsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('address','Address')}}
        {{Form::text('address','', ['class' =>'form-control', 'placeholder' =>'Address' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::text('email','', ['class' =>'form-control', 'placeholder' =>'E-mail' ])}} 
    </div>    
    <div class="form-group">
        {{Form::label('phone_number','Phone number')}}
        {{Form::text('phone_number','', ['class' =>'form-control','placeholder' =>'Phone number' ])}} 
    </div>

    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
</div>    
@endsection
