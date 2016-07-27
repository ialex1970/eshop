@extends('layouts.master')

@section('content')
    <div class="col-md-9 col-sm-12">
        <h1 class="text-center">{{ $category }}</h1>
        <div class="container">
            <div class="row">
                @if(!count($goods))
                    <h4>В этой категории товаров нет</h4>
                @endif
                @foreach($goods as $product)
                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">{{ $product->name }}</h3>
                            </div>
                            <div class="panel-body">
                                <div class="text-center">
                                    <img src="/uploads/products/small/{{  $product->image }}" alt="{{ $product->name }}">
                                </div>
                                <div class="text-center">
                                    <h3>{{ $product->price }} руб.</h3>
                                    <form method="POST" action="{{route('addToCart')}}">
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-primary btn-block add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Add to cart
                                        </button>
                                    </form>
                                    {{--<a class="btn btn-primary btn-block" href="{{ route('cart') }}">Добавить в корзину</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- .row -->
        </div>
    </div>
@stop