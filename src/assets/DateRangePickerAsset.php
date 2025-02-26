<?php

namespace hyper\assets;

class DateRangePickerAsset extends BaseHyperAssetBundle
{
    public $css = [
        ['daterangepicker/daterangepicker.css', ['rel' => 'stylesheet']]
    ];
    public $js = [
        'daterangepicker/moment.min.js',
        'daterangepicker/daterangepicker.js',
    ];


}