<?php

namespace hyper\assets;

class VectorMapAsset extends BaseHyperAssetBundle
{
    public $css = [
        'jquery.vectormap/jquery-jvectormap-1.2.2.css',
    ];

    public $js = [
        'jquery.vectormap/jquery-jvectormap-1.2.2.min.js',
        'jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js',
    ];
}