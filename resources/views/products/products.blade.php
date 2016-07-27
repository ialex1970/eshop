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
                                <img src="/uploads/products/small/{{  $product->image }}" alt="{{ $product->name }}">
                            </div>
                            <div class="text-center">
                                <h3>{{ $product->price }} руб.</h3>
                                {!! Form::open(['route' => 'addToCart', 'method' => 'post']) !!}
                                    {!! Form::hidden('product_id', $product->id) !!}
                                	<div class="form-group">
                                	    {!! Form::submit('В корзину', ['class' => 'btn btn-primary btn-block']) !!}
                                	</div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> <!-- .row -->
        </div>
    </div>
@stop