<?php

namespace hyper\assets;

class BriteChartAsset extends BaseHyperAssetBundle
{
    public $css = [
        'britecharts/css/britecharts.min.css',
    ];

    public $js = [
        'd3/d3.min.js',
        'britecharts/bundled/britecharts.min.js',
    ];
}