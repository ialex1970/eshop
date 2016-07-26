<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    {{ Html::style('src/css/jquery-ui.min.css') }}
    {{ Html::style('src/css/bootstrap.min.css') }}
<!--Font-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
    @yield('styles')
</head>
<body>
    @include('includes.nav')
    <div class="container">
    @include('includes.flash')
    @include('includes.errors')
        <div class="row">
            @include('includes.sidebar')
            @yield('content')
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    {{ Html::script('src/js/jquery-ui.min.js') }}
    {{ Html::script('src/js/bootstrap.min.js') }}
    @yield('scripts')
    <script>
        $( function() {
            $( "#accordion" ).accordion({
                collapsible: true
            });
        } );
    </script>
</body>
</html>