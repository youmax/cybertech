<?php
return [
    'groups' => [
        'admin' => [
            'admin.*',
        ],
        'app' => [
            'app.*',
            'user.login'
        ],
        'user' => [
            'user.*'
        ]
    ],
];
