<?php

namespace hyper\assets;

use yii\font\assets\FontNunitoAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\web\View;

class HyperAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../sources';

    public $css = [
        ["css/app.css", 'id' => 'app-style'],
        ["css/icons.css", 'id' => 'app-icons-style'],
    ];

    public $js = [
        ["js/hyper-config.js", 'position' => View::POS_HEAD],
        ["js/vendor.min.js"],
        ["js/app.min.js", 'position' => View::POS_END],
    ];

    public $publishOptions = [
        'only' => [
            'css/*',
            'js/*',
            'fonts/*',
            'images/*',
        ],
    ];

    public $depends = [
        FontNunitoAsset::class,
//        BootstrapPluginAsset::class,
        JqueryAsset::class,
    ];
}