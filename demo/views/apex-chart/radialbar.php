<?php
/**
 * @var $this View
 */

use hyper\assets\ApexChartAsset;
use hyper\assets\HyperAsset;
use yii\web\View;

ApexChartAsset::register($this);
$this->registerJsFile('/js/pages/demo.apex-chart-radialbar.js', ['depends' => HyperAsset::class]);

$this->title = 'Radial Bar';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Basic RadialBar Chart</h4>
                <div dir="ltr">
                    <div id="basic-radialbar" class="apex-charts" data-colors="#39afd1"></div>
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
                <h4 class="header-title mb-4">Multiple RadialBars</h4>
                <div dir="ltr">
                    <div id="multiple-radialbar" class="apex-charts" data-colors="#6c757d,#ffbc00,#727cf5,#0acf97"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Circle Chart - Custom Angle</h4>
                <div class="text-center" dir="ltr">
                    <div id="circle-angle-radial" class="apex-charts" data-colors="#0acf97,#727cf5,#fa5c7c,#ffbc00"></div>
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
                <h4 class="header-title mb-4">Circle Chart with Image</h4>
                <div dir="ltr">
                    <div id="image-radial" class="apex-charts"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Stroked Circular Guage</h4>
                <div dir="ltr">
                    <div id="stroked-guage-radial" class="apex-charts" data-colors="#727cf5"></div>
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
                <h4 class="header-title mb-4">Gradient Circular Chart</h4>
                <div dir="ltr">
                    <div id="gradient-chart" class="apex-charts" data-colors="#8f75da,#727cf5"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Semi Circle Gauge</h4>
                <div dir="ltr">
                    <div id="semi-circle-gauge" class="apex-charts" data-colors="#727cf5"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->