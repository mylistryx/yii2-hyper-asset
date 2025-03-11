<?php
namespace hyper\assets;

use yii\web\AssetBundle;

class BootstrapPluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap';

    /**
     * @inheritDoc
     */
    public $js = [
        'dist/js/bootstrap.bundle.js'
    ];
}
