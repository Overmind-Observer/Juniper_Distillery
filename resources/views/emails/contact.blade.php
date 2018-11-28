{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}
    <html><h1>User's Inquiry ...</h1>
    <div class="raw">
    <div class="col-md-6">
            
        <p>Hi,</p>

            <p>User has sent you an Inquiry Message.</p>
            <P> <h4>Sender Information...</h4></P>
            <hr style="border-top: 1px dashed black;">
            <P> <b>Name:</b> {{$name}}</P>
            
                    <P> <b>Email:</b> {{$email}}</P>

                            <P> <b>Mobile:</b> {{$mobile}}</P>
                            <hr style="border-top: 1px dashed black;">
                                    <P> <b>Inquiry Message:</b> {{$text }}</P>
                                    <br>
                                    <img style="width:35%" src="../images/home/logo.png">
    </div>
</div></html>
      
{{-- @endsection --}}
