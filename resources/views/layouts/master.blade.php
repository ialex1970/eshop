<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    {{ Html::style('src/css/jquery-ui.min.css') }}
    {{ Html::style('src/css/bootstrap.min.css') }}
    @yield('styles')
</head>
<body>
    @include('includes.nav')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="product-category-area">
                    <div class="product-categories">
                        <h2 class="text-center">Категории</h2>
                        <div id="accordion">
                            <h3>First header</h3>
                            <div>
                                <ul>
                                    <li><a href="#">Goods 1</a></li>
                                    <li><a href="#">Goods 2</a></li>
                                </ul>
                            </div>
                            <h3>Second header</h3>
                            <div>
                                <ul>
                                    <li><a href="#">Goods 1</a></li>
                                    <li><a href="#">Goods 2</a></li>
                                </ul>
                            </div>
                            <h3>First header</h3>
                            <div>
                                <ul>
                                    <li><a href="#">Goods 1</a></li>
                                    <li><a href="#">Goods 2</a></li>
                                </ul>
                            </div>
                            <h3>Second header</h3>
                            <div>
                                <ul>
                                    <li><a href="#">Goods 1</a></li>
                                    <li><a href="#">Goods 2</a></li>
                                </ul>
                            </div>
                        </div> <!-- .accordion -->
                    </div>
                </div>
            </div>
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