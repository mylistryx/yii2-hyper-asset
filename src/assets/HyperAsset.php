<?php

namespace hyper\assets;

use yii\font\assets\FontNunitoAsset;
use yii\mdi\assets\MaterialDesignIconsAsset;
use yii\ri\assets\RemixIconsAsset;
use yii\uil\assets\UniconsIconsAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\web\View;

class HyperAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../sources';

    public $css = [
        ["css/app.css", 'id' => 'app-style'],
    ];

    public $js = [
        ["js/hyper-config.js", 'position' => View::POS_HEAD],
        ["js/vendor.js"],
        ["js/app.js", 'position' => View::POS_END],
    ];

    public $publishOptions = [
        'only' => [
            'css/*',
            'js/*',
            'images/*',
        ],
    ];

    public $depends = [
        FontNunitoAsset::class,
        MaterialDesignIconsAsset::class,
        RemixIconsAsset::class,
        UniconsIconsAsset::class,
        JqueryAsset::class,
    ];
}