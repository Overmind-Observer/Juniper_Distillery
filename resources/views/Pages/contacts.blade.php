@extends('layouts.app')
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
        @else
            <p>Here will be our contacts.</p>
        @endif
<p> 


    <p>Location:</p>
        <div style="width: 800px; height: 500px;">
        <!-- This is the place to display the map -->
            {!! Mapper::render() !!}
        </div>
        <br>
</p>
    </div>

@endsection
