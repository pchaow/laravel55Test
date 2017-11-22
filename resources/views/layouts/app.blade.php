<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default" >
        <a class="navbar-brand" href="/">Layout</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>

</div>
<!-- Scripts -->
@yield("javascript")
</body>

</html>