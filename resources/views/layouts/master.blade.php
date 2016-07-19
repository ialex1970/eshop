<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    {{ Html::style('src/css/bootstrap.min.css') }}
    @yield('styles')
</head>
<body>
    @include('includes.nav')
    <div class="container">
        @yield('content')
    </div>
    {{ Html::script('src/js/bootstrap.min.js') }}
    @yield('scripts')
</body>
</html>