<?php
/**
 * @var $this View
 */

use hyper\assets\ApexChartAsset;
use hyper\assets\HyperAsset;
use yii\web\View;

ApexChartAsset::register($this);
$this->registerJsFile('/js/pages/demo.apex-chart-bar.js', ['depends' => HyperAsset::class]);

$this->title = 'Bar chart';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content-container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Bar Chart</h4>
                    <div dir="ltr">
                        <div id="basic-bar" class="apex-charts" data-colors="#39afd1"></div>
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
                    <h4 class="header-title">Grouped Bar Chart</h4>
                    <div dir="ltr">
                        <div id="grouped-bar" class="apex-charts" data-colors="#fa5c7c,#6c757d"></div>
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
                    <h4 class="header-title">Stacked Bar Chart</h4>
                    <div dir="ltr">
                        <div id="stacked-bar" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c,#6c757d,#39afd1"></div>
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
                    <h4 class="header-title">100% Stacked Bar Chart</h4>
                    <div dir="ltr">
                        <div id="full-stacked-bar" class="apex-charts" data-colors="#ffbc00,#39afd1,#6c757d,#e3eaef,#727cf5"></div>
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
                    <h4 class="header-title">Bar with Negative Values</h4>
                    <div dir="ltr">
                        <div id="negative-bar" class="apex-charts" data-colors="#fa5c7c,#0acf97"></div>
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
                    <h4 class="header-title">Reversed Bar Chart</h4>
                    <div dir="ltr">
                        <div id="reversed-bar" class="apex-charts" data-colors="#727cf5,#0acf97"></div>
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
                    <h4 class="header-title">Bar with Image Fill</h4>
                    <div dir="ltr">
                        <div id="image-fill-bar" class="apex-charts" data-colors="#727cf5,#0acf97,#e3eaef"></div>
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
                    <h4 class="header-title">Custom DataLabels Bar</h4>
                    <div dir="ltr">
                        <div id="datalables-bar" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c,#6c757d,#39afd1,#2b908f,#ffbc00,#90ee7e,#f48024,#212730"></div>
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
                    <h4 class="header-title">Patterned Bar Chart</h4>
                    <div dir="ltr">
                        <div id="pattern-bar" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c,#39afd1"></div>
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
                    <h4 class="header-title">Bar with Markers</h4>
                    <div dir="ltr">
                        <div id="bar-markers" class="apex-charts" data-colors="#0acf97,#fa5c7c"></div>
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