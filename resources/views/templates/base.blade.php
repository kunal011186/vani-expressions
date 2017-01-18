<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link media="all" type="text/css" rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    {{-- HTML::style('css/bootstrap.min.css') --}}
    <title>@yield('title'){{ config('app.name') }}</title>
    <style type="text/css">
    	.image-right {
    		float: right;
    		margin-left: 10px;
    		margin-bottom:10px;
    	}
    </style>
</head>

<body>
    @yield('body')
</body>
</html>
