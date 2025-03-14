<?php

namespace hyper\assets;

use yii\web\JqueryAsset;

class JqueryMaskAsset extends BaseHyperAssetBundle
{
    public $js = [
        'jquery-mask-plugin/jquery.mask.min.js',
    ];

    public $depends = [
        JqueryAsset::class,
    ];
}