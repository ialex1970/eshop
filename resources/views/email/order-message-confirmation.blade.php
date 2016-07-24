<h1>Мы получили Ваш заказ</h1>
<p>Спасибо за Ваш заказ. В ближайшее время с Вами свяжется наш менеджер для подтверждения заказа</p>
<h3>Информация о Вашем заказе:</h3>
<p>Имя: {{ $order_message->user->name }}</p>
<p>Email: {{ $order_message->user->email }}</p>
<p>Телефон: {{ $order_message->user->profile->phone }}</p>
<p>Адрес: {{ $order_message->user->profile->address ? $order_message->user->profile->address : 'Без адреса' }}</p>
<h4>Товар</h4>
<table>
        <thead>
        <tr>
            <th></th>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Количество</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=0 ?>
        @foreach($order_message->products as $product)
            <?php $i++ ?>
            <tr>
                <th>{{ $i}}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->pivot->qty }}</td>
            </tr>

        @endforeach
        </tbody>
    </table>

<p>На общую сумму: {{ $order_message->amount }}</p>
