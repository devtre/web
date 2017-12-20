<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="{{url('css/index.css') }}">
    @section('css')
    @show
    <title>@yield('title')</title>
</head>
<body>
@yield('body')
<script src="{{ url('js/jquery1.0.js') }}" type="text/javascript"></script>
@section('js')
@show
</body>
</html>
