@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>{{ strtoupper(Auth::user()->name )}}</h2>
                @if(!$profile)
                    {!! Form::open(['route' => 'create.profile', 'method' => 'POST']) !!}
                    <!-- Address Form Input -->
                        <div class="form-group">
                            {{ Form::label('address', 'Address:') }}
                            {{ Form::text('address', null, ['class' => 'form-control']) }}
                        </div>
                        <!-- Phone Form Input -->
                        <div class="form-group">
                            {{ Form::label('phone', 'Phone:') }}
                            {{ Form::text('phone', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Создать профиль', ['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                @endif
                <table class="table">
                        <thead>
                        <tr>
                            <th>Адрес</th>
                            <th>Телефон</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $profile ? $profile->address : '' }}</td>
                                <td>{{ $profile ? $profile->phone : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                <h3>Заказы</h3>


                <table class="table">
                        <thead>
                        <tr>
                            <th>ID Заказа</th>
                            <th>Сумма заказа</th>
                            <th>Товар</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($profile->user->orders as $order)
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->amount }}</td>
                                @foreach($order->products as $product)
                                    <td>{{ $product->name }}</td>
                                @endforeach
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@stop