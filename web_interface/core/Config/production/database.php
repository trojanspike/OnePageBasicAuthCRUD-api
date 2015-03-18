<?php

return [
    
    'mysql' =>  [
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'database'  => 'production_database',
            'username'  => 'root',
            'password'  => 'password',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'options'   => array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
            ),
            'prefix'    => ''
        ]
];


?>