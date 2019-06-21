@extends('layouts.adminapp')

@section('content')
    <a href="/Contacts" class="btn btn-default">Go Back</a><br><br><br>
    <p>{{$contacts->address}}</p><br>
    <p>{{$contacts->email}}</p><br>
    <p>{{$contacts->phone_number}}</p><br>     
@endsection
