<?php
/**
 * @var $this View
 */

use hyper\assets\CodeHighLightAsset;
use hyper\assets\VectorMapsAsset;
use yii\web\View;

$this->title = 'Vector maps';

CodeHighLightAsset::register($this);
VectorMapsAsset::register($this);

$this->registerJsFile('/js/pages/demo.vector-maps.js', ['depends' => VectorMapsAsset::class]);

?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">World Vector Map</h4>
                <div id="world-map-markers" style="height: 360px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Russia Vector Map</h4>
                <div id="russia-vectormap" style="height: 360px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">USA Vector Map</h4>
                <div id="usa-vectormap" style="height: 300px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">India Vector Map</h4>
                <div id="india-vectormap" style="height: 300px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Australia Vector Map</h4>
                <div id="australia-vectormap" style="height: 300px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Chicago Vector Map</h4>
                <div id="chicago-vectormap" style="height: 300px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">UK Vector Map</h4>
                <div id="uk-vectormap" style="height: 300px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Canada Vector Map</h4>
                <div id="canada-vectormap" style="height: 300px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Europe Vector Map</h4>
                <div id="europe-vectormap" style="height: 300px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">France Vector Map</h4>
                <div id="france-vectormap" style="height: 300px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Spain Vector Map</h4>
                <div id="spain-vectormap" style="height: 300px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Spain Vector Map</h4>
                <div id="spain2-vectormap" style="height: 300px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->
