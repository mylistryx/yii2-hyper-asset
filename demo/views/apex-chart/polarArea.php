<?php
/**
 * @var $this View
 */

use hyper\assets\ApexChartAsset;
use hyper\assets\HyperAsset;
use yii\web\View;

ApexChartAsset::register($this);
$this->registerJsFile('/js/pages/demo.apex-chart-polar-area.js', ['depends' => HyperAsset::class]);

$this->title = 'Polar Area';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content-container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Polar Area Chart</h4>
                    <div dir="ltr">
                        <div id="basic-polar-area" class="apex-charts" data-colors="#727cf5,#6c757d,#0acf97,#fa5c7c,#ffbc00,#39afd1"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Monochrome Polar Area</h4>
                    <div dir="ltr">
                        <div id="monochrome-polar-area" class="apex-charts" data-colors="#6c757d"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-->
    </div>
    <!-- end row-->
</div>