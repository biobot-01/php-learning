<?php

return [
    'app' => [
        'name' => 'PHP Learning | Laracasts'
    ],
    'database' => [
        'name' => 'php_learning',
        'username' => 'your_user_name',
        'password' => 'your_password',
        'connection' => 'mysql:host=your_host_ip',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
