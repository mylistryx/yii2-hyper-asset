<?php
/**
 * @var $this View
 */

use hyper\assets\ApexChartAsset;
use hyper\assets\HyperAsset;
use yii\web\View;

ApexChartAsset::register($this);
$this->registerJsFile('/js/pages/demo.apex-chart-timeline.js', ['depends' => HyperAsset::class]);

$this->title = 'Timeline';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content-container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Basic Timeline</h4>
                    <div dir="ltr">
                        <div id="basic-timeline" class="apex-charts" data-colors="#fa6767"></div>
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
                    <h4 class="header-title mb-3">Distributed Timeline </h4>
                    <div dir="ltr">
                        <div id="distributed-timeline" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c,#6c757d,#39afd1"></div>
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
                    <h4 class="header-title mb-3">Multi Series Timeline</h4>

                    <div dir="ltr">
                        <div id="multi-series-timeline" class="apex-charts" data-colors="#6c757d,#39afd1"></div>
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
                    <h4 class="header-title mb-3">Advanced Timeline</h4>
                    <div dir="ltr">
                        <div id="advanced-timeline" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c"></div>
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
                    <h4 class="header-title mb-3">Multiple Series - Group Rows</h4>
                    <div dir="ltr">
                        <div id="group-rows-timeline" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c,#6c757d,#39afd1,#ffc35a, #eef2f7, #313a46,#3577f1, #0ab39c, #f0a548,#68eaff"></div>
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