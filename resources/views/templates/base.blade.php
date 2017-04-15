<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link media="all" type="text/css" rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{URL::asset('css/vaniexp.css')}}">
    <title>@yield('title'){{ config('app.name') }}</title>
    <style type="text/css">
    	.image-right {
    		float: right;
    		margin-left: 10px;
    		margin-bottom:10px;
    	}
        a, a:link, a:visited 
        {
            color: #990000;
        }
        a:active, a:hover { color:#992255; }
    </style>
</head>

<body style="background-color: #990000">
    @yield('body')
</body>
</html>
