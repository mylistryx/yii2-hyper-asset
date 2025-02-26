<?php

use demo\models\Identity;
use yii\log\FileTarget;

$config = [
    'id' => 'app-web',
    'controllerNamespace' => 'demo\controllers',
    'components' => [
        'request' => [
            'cookieValidationKey' => '12345',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'user' => [
            'identityClass' => Identity::class,
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [],
        ],
    ],
];

return $config;
