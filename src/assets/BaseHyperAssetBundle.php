<?php

namespace hyper\assets;

use yii\web\AssetBundle;

abstract class BaseHyperAssetBundle extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../vendor';

    public $depends = [
        HyperAsset::class,
    ];
}