<?php
return [
    'title' => 'Brands',
    'single' => 'brand',
    'model' => 'App\Brand',
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
            'title' => 'Brand',
            'type' => 'text',
        ],
    ],
    'filters' => [
        'name' => array(
            'title' => "brands",
            'select' => "name",
        ),
    ],
];