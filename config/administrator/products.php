<?php
return [
    'title' => 'Товары',
    'single' => 'товар',
    'model' => 'App\Product',
    'columns' => [
        'category' => [
            'title' => 'Категория',
            'relationship' => 'category',
            'select' => "(:table).name",
        ],
        'brand_name' => [
            'title' => 'Brand',
            'relationship' => 'brand',
            'select' => "(:table).name",
        ],
        'name' => [
            'title' => 'Наименование',
        ],
        /*'description' => [
            'title' => 'Описание',
        ],*/
        'price' => [
            'title' => 'Цена',
        ],
       
    ],
    'filters' => [
        'brand' => [
            'type' => 'relationship',
            'title' => 'Brand',
            'name_field' => 'name',
        ],
        'category' => [
            'type' => 'relationship',
            'title' => 'Категория',
            'name_field' => 'name',
        ],
    ],
    'edit_fields' => [
        'category' => [
            'title' => "Категория",
            'type' => 'relationship',
            'name_field' => 'name',
        ],
        'brand' => [
            'title' => "Brand",
            'type' => 'relationship',
            'name_field' => 'name',
        ],
        'name' => [
            'title' => 'Наименование',
            'type' => 'text',
        ],
        'description' => [
            'title' => 'Описание',
            'type' => 'wysiwyg',
        ],
        'image' => [
            'type' => 'image',
            'location' => public_path() . '/uploads/products/original/',
            'sizes' => [
                [282, 150, 'auto', public_path() . '/uploads/articles/small/', 100],
                [596, 270, 'auto', public_path() . '/uploads/articles/large/', 100],
            ],
        ],
    ],
    'form_width' => 500,
];