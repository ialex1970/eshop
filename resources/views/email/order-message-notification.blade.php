<h1>Поступил заказ</h1>
<h3>Информация о заказе:</h3>
<p>Имя: {{ $order_message->user->name }}</p>
<p>Email: {{ $order_message->user->email }}</p>
<p>Телефон: {{ $order_message->user->profile->phone }}</p>
<p>Адрес: {{ $order_message->user->profile->address ? $order_message->user->profile->address : 'Без адреса' }}</p>
<p>Дата заказа: {{ $order_message->created_at }}</p>
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