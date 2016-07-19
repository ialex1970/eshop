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