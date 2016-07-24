<?php

return [
    'title' => 'Заказы',
    'single' => 'заказ',
    'model' => 'App\Order',
    'columns' => [
        'id',
        'amount' => [
            'title' => 'Сумма заказа'
        ],
        'name' => [
            'title' => 'Покупатель',
            'relationship' => 'user',
            'select' => '(:table).name'
        ],
        'name' => [
            'title' => 'Товар',
            'relationship' => 'products',
            'select' => "GROUP_CONCAT((:table).name SEPARATOR ', ')",
        ],
        'created_at' => [
            'title' => 'Создан',
        ],
    ],
    'filters' => [
        'user' => [
            'type' => 'relationship',
            'title' => 'Name',
            'name_field' => 'name',
        ],
        'products' => [
            'type' => 'relationship',
            'title' => 'Товар',
            'name_field' => 'name',
        ],
        'created_at' => [
            'type' => 'date',
            'title' => 'Создан'
        ],
    ],
    'edit_fields' => [
        'name' => [
            'title' => 'Категория',
            'type' => 'text',
        ],
    ],
];