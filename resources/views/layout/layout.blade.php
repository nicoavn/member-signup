
<html>
<head>
    <title>@yield('title', 'Home')</title>

    <!--Este es los link de bootstrap version 4.5.3-->

    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bs-stepper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bs-stepper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/_main.css') }}" rel="stylesheet">



</head>
<body>
@include('layout.header')
@yield('content')
@include('layout.footer')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('js/_main.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min_compressed.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/stripe_custom.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/visible_plugin.js') }}"></script>
</body>
</html>
