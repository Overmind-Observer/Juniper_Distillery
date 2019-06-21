@extends('layouts.adminapp')
@section('content')

    <h1>Update your contacts</h1>

    <a href="/Contacts" class="btn btn-default">Go Back</a><br><br>

    <div class ="raw">
            <div class="col-md-4">
    {!! Form::open(['action' =>['ContactsController@update', $contacts->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('address','Address')}}
        {{Form::text('address', $contacts->address, ['class' =>'form-control', 'placeholder' =>'Address' ])}} 
    </div>
    <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::text('email', $contacts->email, ['class' =>'form-control', 'placeholder' =>'E-mail' ])}} 
    </div>    
    <div class="form-group">
        {{Form::label('phone_number','Phone number')}}
        {{Form::text('phone_number', $contacts->phone_number, ['class' =>'form-control','placeholder' =>'Phone number' ])}} 
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
</div>    
@endsection
