<?php
return [
    'title' => 'Профиль',
    'single' => 'профиль',
    'model' => 'App\Profile',
    'columns' => [
        'id',
        'address' => [
            'title' => 'Address',
        ],
        'phone',
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