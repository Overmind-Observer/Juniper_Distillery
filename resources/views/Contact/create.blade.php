@extends('layouts.app')

@section('content')

        <h1>Send your inquries here please</h1>
               <div class="col-md-8 col-sm-12">
{!! Form::open(['action'=> 'ContactController@store', 'method'=>'POST', 'enctype' => 'multipart/form-data','route' => 'contact.store']) !!}

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
      
@endsection