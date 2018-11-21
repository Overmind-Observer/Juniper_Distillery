@extends('layouts.app')
@section('content')
    <h1>Send Your Inquries here ...</h1>
    <div class="raw">
    <div class="col-md-6">

{!! Form::open(['route' => 'contact.store']) !!}

<div class="form-group">
    {!! Form::label('name', 'Your Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email Address') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::label('mobile', 'Mobile Number') !!}
        {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
    </div>

<div class="form-group">
        {!! Form::label('msg', 'Inquiry') !!}
    {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}
</div>
</div>
      
@endsection