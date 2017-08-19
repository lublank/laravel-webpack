<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$page_title}}</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="renderer" content="webkit">
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <link rel="shortcut icon" href="/favicon.ico" />
    {{--<link rel="stylesheet" href="{{elixir('css/app.css')}}">--}}
    <script src="{{mix('js/vendor.js')}}"></script>
    <script src="{{mix('js/app.js')}}"></script>
    @yield('header')
</head>

<body>
@include('shared.header')

@yield('content')

@include('shared.footer')
</body>
</html>