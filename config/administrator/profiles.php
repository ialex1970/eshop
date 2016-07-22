<?php
return [
    'title' => 'Профиль',
    'single' => 'профиль',
    'model' => 'App\Profile',
    'columns' => [
        'name' => [
            'title' => 'name',
            'relationship' => 'user',
            'select' => "CONCAT((:table).name, ' ', (:table).email)",
        ],
        'address' => [
            'title' => 'Address',
        ],
        'phone',
    ],
    'filters' => [
        'user' => [
            'type' => 'relationship',
            'title' => 'Имя',
            'name_field' => 'name',
        ],
    ],
    'edit_fields' => [
        'address' => [
            'title' => 'address',
            'type' => 'text',
        ],
        'user_email' => array(
            'title' => "Owner's Email",
            'relationship' => 'user', //this is the name of the Eloquent relationship method!
            'select' => "(:table).email",
        ),
    ],
];