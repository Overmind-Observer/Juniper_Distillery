@extends('layouts.app')
@section('content')
    <h1>Email Message ...</h1>
    <div class="raw">
    <div class="col-md-6">
            Hi,

            User has sent you a message.
            
            Name: {{ $contact['name'] }}
            
            Email: {{ $contact['email'] }}

            Mobile: {{ $contact['mobile'] }}
            
            Message: {{ $contact['msg'] }}
    </div>
</div>
      
@endsection
