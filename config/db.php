<?php

return [

    'mysql' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'son_financas',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci'
    ],

    'sqlite' => [
        'driver' => 'sqlite',
        'host' => '',
        'database' => 'db/database.sqlite',
        'username' => 'root',
        'password' => '',
        'charset' => '',
        'collation' => ''
    ],

    'sqlsrv' => [
        'driver' => 'sqlsrv',
        'host' => '',
        'database' => '',
        'username' => '',
        'password' => '',
        //'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci'
    ],
    
];