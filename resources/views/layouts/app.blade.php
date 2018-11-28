<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'JinnApp') }}</title>

    <!-- Fonts -->
    <style type="text/css">
    @font-face{
    font-family:'FontAwesome';
    src:url('../fonts/fontawesome-webfont.eot?v=4.7.0');
    src:url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'),
    url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),
    url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),
    url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),
    url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:normal;
    font-style:normal
}
    </style>

    <!-- icon -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

<!-- Stylesheet -->
            <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
<link href="{{asset('css/price-range.css')}}" rel="stylesheet">
<link href="{{asset('css/animate.css')}}" rel="stylesheet">
   <link href="{{asset('css/main.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

<!-- Favicons -->
<link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.min.css')}}">



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
