<?php
return [
    'title' => 'Пользователи',
    'single' => 'пользователя',
    'model' => 'App\User',
    'columns' => [
        'id',
        'name' => [
            'title' => 'Имя',
        ],
        'email',
        'is_admin'
    ],
    'edit_fields' => [
        'name' => [
            'title' => 'Имя',
            'type' => 'text',
        ],
        'email' => [
            'title' => 'Email',
            'type' => 'text',
        ],
        'is_admin' => [
            'type' => 'bool',
            'title' => 'Админ',
        ],
    ],
];