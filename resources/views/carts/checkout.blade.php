@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <h1>Checkout</h1>
                <h4>Your total: {{ $total }} руб.</h4>
                {!! Form::open(['route' => 'checkout', 'method' => 'post', 'id' => 'checkout-form']) !!}
            <!-- Name Form Input -->
                <div class="form-group">
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', Auth::user()->name, ['class' => 'form-control', 'id' => 'name', 'required']) }}
                </div>
                <!-- Address Form Input -->
                <div class="form-group">
                    {{ Form::label('address', 'Address:') }}
                    {{ Form::text('address', Auth::user()->profile->address, ['class' => 'form-control', 'id' => 'address', 'required']) }}
                </div>
                <!-- Card-name Form Input -->
                <div class="form-group">
                    {{ Form::label('card-name', 'Card Holder Name:') }}
                    {{ Form::text('card-name', null, ['class' => 'form-control', 'id' => 'card-name', 'required'])}}
                </div>
                <!-- Card-number Form Input -->
                <div class="form-group">
                    {{ Form::label('card-number', 'Credit Card Number:') }}
                    {{ Form::text('card-number', null, ['class' => 'form-control', 'id' => 'card-number', 'required']) }}
                </div>
                <!-- Cart-expiry-month Form Input -->
                <div class="form-group">
                    {{ Form::label('cart-expiry-month', 'Expiration Month:') }}
                    {{ Form::text('cart-expiry-month', null, ['class' => 'form-control', 'id' => 'cart-expiry-month', 'required']) }}
                </div>
                <!-- Cart-expiry-year Form Input -->
                <div class="form-group">
                    {{ Form::label('cart-expiry-year', 'Expiration Year:') }}
                    {{ Form::text('cart-expiry-year', null, ['class' => 'form-control', 'id' => 'cart-expiry-year', 'required']) }}
                </div>
                <!-- Card-cvc Form Input -->
                <div class="form-group">
                    {{ Form::label('card-cvc', 'CVC:') }}
                    {{ Form::text('card-cvc', null, ['class' => 'form-control', 'id' => 'card-cvc', 'required']) }}
                </div>
                <div class="form-group">
                    {!! Form::submit('Buy now', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop