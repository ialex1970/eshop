<?php
return [
'title' => 'Категории',
    'single' => 'категорию',
    'model' => 'App\Category',
    'columns' => [
    'name',
],
    'edit_fields' => [
    'name' => [
        'title' => 'Категория',
        'type' => 'text',
    ],
],
];