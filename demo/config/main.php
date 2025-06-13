<?php

use yii\caching\FileCache;
use yii\db\Connection;
use yii\i18n\PhpMessageSource;
use yii\web\User;

$config = [
    'language'   => 'ru-RU',
    'basePath'   => dirname(__DIR__),
    'bootstrap'  => ['log'],
    'aliases'    => [
        '@app'   => __DIR__,
        '@demo'  => '@app',
        '@vendor' => dirname(__DIR__,2) . '/vendor',
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
//        '@web'   => '@app/web',
//        '@webroot' => '@app/root',
    ],
    'modules'    => [],
    'components' => [
        'cache' => [
            'class' => FileCache::class,
        ],
        'i18n'  => [
            'translations' => [
                '*'       => [
                    'class' => PhpMessageSource::class,
                ],
                'models*' => [
                    'class'   => PhpMessageSource::class,
                    'fileMap' => [
                        'Identity' => '/models/Identity.php',
                    ],
                ],
            ],
        ],
        'db'    => [
            'class'    => Connection::class,
            'dsn'      => 'mysql:host=127.0.0.1;dbname=hyper',
            'username' => 'root',
            'password' => '123123123',
            'charset'  => 'utf8mb4',
        ],
        'user'  => [
            'class'    => User::class,
            'loginUrl' => ['/auth/login'],
        ],
    ],
    'params'     => array_merge(
        require __DIR__ . '/params.php',
    ),
];

return $config;