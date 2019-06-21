@extends('layouts.adminapp')
@section('content')

<h1>Contacts</h1>

@if(count($contacts) > 0)
            @foreach ($contacts as $contacts)
               <div>
                    <div class = "row">
                        <div class="col-md-4 col-sm-4"> <!--show post info -->
                            <div class = "pull-left">
                            <p class = "pull-left">Address: {{$contacts ->address}}</p><br>
                            <p class = "pull-left">Phone:   {{$contacts ->email}}</p><br>
                            <p class = "pull-left">E-mail:  {{$contacts ->phone_number}}</p><br>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <a href="/Contacts/{{$contacts->id}}/edit" class="btn btn-default">Edit</a>
            {!! Form::open(['action' => ['ContactsController@destroy', $contacts->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
              {{Form::hidden('_method','DELETE')}}
              {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
            {!! Form::close() !!}
        @else
            <p>Here will be our contacts.</p>
        @endif
    </div>

@endsection
