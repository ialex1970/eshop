@extends('layouts.user')

@section('styles')
    {{ Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css') }}
    {{ Html::style('src/css/style.css') }}
@stop

@section('content')

    <section id="cart_items">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">


            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                @if(count($cart))
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $item)
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="images/cart/one.png" alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="">{{$item->name}}</a></h4>
                                </td>
                                <td class="cart_price">
                                    <p>{{$item->price}} руб.</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href='{{url("cart?product_id=$item->id&increment=1")}}'> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href=""> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">{{$item->subtotal}} руб.</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="btn btn-danger" href="{{ route('update.cart', $item->id) }}">
                                        <i class="fa fa-trash-o" title="Delete" aria-hidden="true"></i>
                                        <span class="sr-only">Delete</span>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td>Всего</td>
                            <td></td>
                            <td></td>
                            <td><span>{{Cart::total()}} руб.</span></td>
                            <td></td>
                        </tr>
                        @else
                            <p>You have no items in the shopping cart</p>
                        @endif
                        </tbody>
                    </table>
                    <div class="col-sm-6">
                        <div class="total_area">
                            {{--<ul>
                                <li>Cart Sub Total <span>$59</span></li>
                                <li>Eco Tax <span>$2</span></li>
                                <li>Shipping Cost <span>Free</span></li>
                                <li>Total <span>${{Cart::total()}}</span></li>
                            </ul>--}}
                            <a class="btn btn-danger update" href="{{url('clear-cart')}}">Очистить корзину</a>
                            {{--<a class="btn btn-primary  check_out" href="{{url('checkout')}}">Оформить заказ</a>--}}
                        </div>
                    </div>
            </div>
                    @if(\Auth::check() && \Auth::user()->profile)
                        @include('includes._profile-form')
                    @else
                        @include('includes._new-profile-form')
                    @endif
                </div>
            </div>
        </div> <!-- .container-->
    </section>


@stop

{{--
@if(\Auth::user()->profile()->id)
    @include('includes._profile-form')
@else
    @include('includes._new-profile-form)
@endif--}}
