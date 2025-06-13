<?php

use yii\log\FileTarget;

$config = [
    'id' => 'app-console',
    'controllerNamespace' => 'demo\console',
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
];

return $config;
