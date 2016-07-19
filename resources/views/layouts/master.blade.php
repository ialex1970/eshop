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
                            @foreach($categories as $category)
                            <h3>{{ $category->name }}</h3>
                            <div>
                                <ul>
                                    @foreach($products as $product)
                                        @if ($category->id === $product->category_id)
                                            <li><a href="{{ route('products', $product->brand->name) }}">{{ $product->brand->name }}</a></li>
                                        @else
                                            <p>В этой категории товаров нет</p>
                                            <?php break; ?>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
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