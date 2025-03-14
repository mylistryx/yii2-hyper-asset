<?php
/**
 * @var $this View
 */

use hyper\assets\CodeHighLightAsset;
use hyper\assets\GoogleMapsAsset;
use yii\web\View;

$this->title = 'Google maps';

CodeHighLightAsset::register($this);
GoogleMapsAsset::register($this);

$this->registerJsFile('/js/pages/demo.google-maps.js', ['depends' => GoogleMapsAsset::class]);

?>

<div class="content-container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Basic Google Map</h4>
                    <div id="gmaps-basic" class="gmaps"></div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Markers Google Map</h4>
                    <div id="gmaps-markers" class="gmaps"></div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Street View Panoramas Google Map</h4>
                    <div id="panorama" class="gmaps"></div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Google Map Types</h4>
                    <div id="gmaps-types" class="gmaps"></div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Ultra Light with Labels</h4>
                    <div id="ultra-light" class="gmaps"></div>
                </div>
                <!-- end card-body-->
            </div>
            <!-- end card-->
        </div>
        <!-- end col-->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Dark</h4>
                    <div id="dark" class="gmaps"></div>
                </div>
                <!-- end card-body-->
            </div>
            <!-- end card-->
        </div>
        <!-- end col-->
    </div>
    <!-- end row-->
</div>