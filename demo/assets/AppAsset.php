<?php

namespace demo\assets;

use hyper\assets\HyperAsset;
use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $depends = [
        HyperAsset::class,
    ];
}