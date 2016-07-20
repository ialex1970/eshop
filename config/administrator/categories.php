<?php
return [
'title' => 'Categories',
    'single' => 'category',
    'model' => 'App\Category',
    'columns' => [
    'name',
],
    'edit_fields' => [
    'name' => [
        'type' => 'text',
    ],
],
];