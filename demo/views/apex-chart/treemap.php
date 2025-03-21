<?php
/**
 * @var $this View
 */

use hyper\assets\ApexChartAsset;
use hyper\assets\HyperAsset;
use yii\web\View;

ApexChartAsset::register($this);
$this->registerJsFile('/js/pages/demo.apex-chart-treemap.js', ['depends' => HyperAsset::class]);

$this->title = 'Treemap';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Treemap</h4>
                    <div dir="ltr">
                        <div id="basic-treemap" class="apex-charts" data-colors="#39afd1"></div>
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
                    <h4 class="header-title">Treemap Multiple Series</h4>
                    <div dir="ltr">
                        <div id="multiple-treemap" class="apex-charts" data-colors="#fa5c7c,#6c757d"></div>
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
                    <h4 class="header-title">Distributed Treemap</h4>
                    <div dir="ltr">
                        <div id="distributed-treemap" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c,#6c757d,#39afd1,#ffc35a, #eef2f7, #313a46"></div>
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
                    <h4 class="header-title">Color Range Treemap</h4>
                    <div dir="ltr">
                        <div id="color-range-treemap" class="apex-charts" data-colors="#727cf5,#39afd1"></div>
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