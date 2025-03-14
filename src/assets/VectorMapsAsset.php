<?php

namespace hyper\assets;

class VectorMapsAsset extends BaseHyperAssetBundle
{
    public $css = [
        'jquery.vectormap/jquery-jvectormap-1.2.2.css',
    ];

    public $js = [
        'jquery.vectormap/jquery-jvectormap-1.2.2.min.js',
        'jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js',
        'jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js',
        'jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js',
        'jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js',
        'jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js',
        'jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js',
        'jquery.vectormap/maps/jquery-jvectormap-europe-mill-en.js',
        'jquery.vectormap/maps/jquery-jvectormap-fr-merc-en.js',
        'jquery.vectormap/maps/jquery-jvectormap-es-merc.js',
        'jquery.vectormap/maps/jquery-jvectormap-es-mill.js',
        'jquery.vectormap/maps/jquery-jvectormap-russia-ru.js',
        'jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js',
    ];
}