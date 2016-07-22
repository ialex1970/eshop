<?php
return [
'title' => 'Категории',
    'single' => 'категорию',
    'model' => 'App\Category',
    'columns' => [
    'name',
        'amount' => [
            'title' => 'Количество товаров',
            'relationship' => 'products',
            'select' => "COUNT((:table).name)",
        ],
],
    'edit_fields' => [
    'name' => [
        'title' => 'Категория',
        'type' => 'text',
    ],
],
];