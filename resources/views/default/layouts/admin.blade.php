<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('default/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('default/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('default/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('default/css/style.css') }}">
    <link rel="stylesheet" href="">
</head>
<body>
<div class="wrapper">
    <div class="header">
        @yield('header')
    </div>
    <div class="main-content">
        @yield('content')
    </div>
    <div class="footer">
        <div class="footer-bottom">
            <p>Copyright © 2013</p>
        </div>
    </div>
</div>

<script src="{{ asset('default/js/jquery.min.js') }}"></script>
<script src="{{ asset('default/js/admin.js') }}"></script>
</body>
</html>