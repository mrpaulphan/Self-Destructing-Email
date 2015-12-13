<?php
return [
    'url' => 'http://selfdestruct.dev/',
    'db' => [
        'mysql' => [
            'host' => 'localhost',
            'dbname' => 'self_destruct',
            'username' => 'root',
            'password' => 'root']
    ],
    'services'=> [
        'mailgun' => [
            'domain'=>'sandboxb124b1de59a14ed38f8829231a236902.mailgun.org',
            'secret'=>'key-43deec8f2e5725a3c383bf0999cc60d9'
        ]
    ]
];
