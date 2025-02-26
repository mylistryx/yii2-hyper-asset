<?php
namespace hyper\assets;

use yii\web\AssetBundle;

class BootstrapDatePickerAsset extends BaseHyperAssetBundle
{
    public $css = [
        'bootstrap-datepicker/css/bootstrap-datepicker.min.css'
    ];

    public $js = [
        'bootstrap-datepicker/js/bootstrap-datepicker.min.js',
    ];
}