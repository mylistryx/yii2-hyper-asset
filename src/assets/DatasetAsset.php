<?php

namespace hyper\assets;

class DatasetAsset extends BaseHyperAssetBundle
{
    public $css = [
        'datatables.net-bs5/css/dataTables.bootstrap5.min.css',
        'datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css',
    ];
    public $js = [
        'datatables.net/js/jquery.dataTables.min.js',
        'datatables.net-bs5/js/dataTables.bootstrap5.min.js',
        'datatables.net-responsive/js/dataTables.responsive.min.js',
        'datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js',
        'jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js',
    ];
}