<?php
/**
 * @var $this View
 */

use hyper\assets\BriteChartAsset;
use hyper\assets\HyperAsset;
use yii\web\View;

BriteChartAsset::register($this);
$this->registerJsFile('/js/pages/demo.britechart.js', ['depends' => HyperAsset::class]);

$this->title = 'Area chart';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Bar Chart</h4>
                <div dir="ltr">
                    <div class="bar-container" style="width: 100%;height: 300px;" data-colors="#39afd1"></div>
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
                <h4 class="header-title mb-4">Horizontal Bar Chart</h4>
                <div dir="ltr">
                    <div class="bar-container-horizontal" style="width: 100%;height: 300px;" data-colors="#727cf5,#0acf97,#6c757d,#fa5c7c,#ffbc00,#39afd1,#e3eaef"></div>
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
                <h4 class="header-title">Brush Chart</h4>
                <p>Darg on a graph and check the console to see selected data</p>
                <div dir="ltr">
                    <div class="brush-container" style="width: 100%;"></div>
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
                <h4 class="header-title">Step Chart</h4>
                <p>&nbsp;</p>
                <div dir="ltr">
                    <div class="step-container" style="width: 100%;"></div>
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
                <h4 class="header-title mb-3">Line Chart</h4>
                <div dir="ltr">
                    <div class="line-container" style="width: 100%;"></div>
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
                <h4 class="header-title mb-4">Donut Chart</h4>
                <div dir="ltr">
                    <div class="donut-container text-center" style="width: 100%;" data-colors2="#727cf5,#0acf97,#6c757d,#fa5c7c,#ffbc00,#39afd1"></div>
                    <div class="legend-chart-container text-center"></div>
                </div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->
