<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'JinnApp') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,700,100o" rel="stylesheet" type="text/css">    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,800,300,600,700" rel="stylesheet" type="text/css">    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

     <!-- script -->   
    <script src="{{ mix('js/app.js') }}" ></script>
    <script src="{{asset ('js/jquery.js')}}"></script>
    <script src="{{asset ('js/bootstrap.min.js')}}"></script>

    <!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{asset('style.css')}}">
<link href="{{asset('css/animate.css')}}" rel="stylesheet">
<link href="{{asset('css/main.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">
        
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content') 
        </div> 
    </div>
    @include('inc.footer')
</body>
</html>
