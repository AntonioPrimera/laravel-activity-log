<?php

return [
	'activity_log' => [
		'driver'         => 'mysql',

		'url'            => env('ACTIVITY_LOG_DATABASE_URL'),
		'host'           => env('ACTIVITY_LOG_DB_HOST', '127.0.0.1'),
		'port'           => env('ACTIVITY_LOG_DB_PORT', '3306'),

		'database'       => env('ACTIVITY_LOG_DB_DATABASE', 'forge'),
		'username'       => env('ACTIVITY_LOG_DB_USERNAME', 'forge'),
		'password'       => env('ACTIVITY_LOG_DB_PASSWORD', ''),

		'unix_socket'    => env('ACTIVITY_LOG_DB_SOCKET', ''),

		'charset'        => 'utf8mb4',
		'collation'      => 'utf8mb4_unicode_ci',

		'prefix'         => '',
		'prefix_indexes' => true,

		'strict'         => false,
		'engine'         => null,

        'options'        => extension_loaded('pdo_mysql')
            ? array_filter([PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA')])
            : [],
	],
];