<?php

namespace hyper\assets;

class DataTablesAsset extends BaseHyperAssetBundle
{
    public $css = [
        'datatables.net-bs5/css/dataTables.bootstrap5.min.css',
        'datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css',
        'datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css',
        'datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css',
        'datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css',
        'datatables.net-select-bs5/css/select.bootstrap5.min.css',
    ];
    public $js = [
        'datatables.net/js/jquery.dataTables.min.js',
        'datatables.net-bs5/js/dataTables.bootstrap5.min.js',
        'datatables.net-responsive/js/dataTables.responsive.min.js',
        'datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js',
        'datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js',
        'datatables.net-fixedheader/js/dataTables.fixedHeader.min.js',
        'datatables.net-buttons/js/dataTables.buttons.min.js',
        'datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js',
        'datatables.net-buttons/js/buttons.html5.min.js',
        'datatables.net-buttons/js/buttons.flash.min.js',
        'datatables.net-buttons/js/buttons.print.min.js',
        'datatables.net-keytable/js/dataTables.keyTable.min.js',
        'datatables.net-select/js/dataTables.select.min.js',
    ];
}