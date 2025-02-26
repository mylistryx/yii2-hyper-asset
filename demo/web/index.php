<?php

use yii\helpers\ArrayHelper;

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require dirname(__DIR__, 2) . '/vendor/autoload.php';
require dirname(__DIR__, 2) . '/vendor/yiisoft/yii2/Yii.php';

$config = ArrayHelper::merge(
    require dirname(__DIR__) . '/config/main.php',
    require dirname(__DIR__) . '/config/web.php',
);

(new yii\web\Application($config))->run();
