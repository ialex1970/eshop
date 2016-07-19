@extends('layouts.master')

@section('content')
    <div class="col-md-9 col-sm-12">
        <h1 class="text-center">{{ $brand }}</h1>
        <div class="container">
            <div class="row">
                @foreach($goods as $product)
                    <div class="col-md-3 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">{{ $product->name }}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="text-center">
                                <img src="http://placehold.it/170x150" alt="">
                            </div>
                            <div class="text-center">
                                <h3>{{ $product->price }} руб.</h3>
                                <a class="btn btn-primary btn-block" href="#">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> <!-- .row -->
        </div>
    </div>
@stop