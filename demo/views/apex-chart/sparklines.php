<?php
/**
 * @var $this View
 */

use hyper\assets\ApexChartAsset;
use hyper\assets\HyperAsset;
use yii\web\View;

ApexChartAsset::register($this);
$this->registerJsFile('/js/pages/demo.apex-chart-sparklines.js', ['depends' => HyperAsset::class]);

$this->title = 'Sparklines';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content-container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row" dir="ltr">
                        <div class="col-md-4">
                            <div id="spark1" class="apex-charts" data-colors="#DCE6EC"></div>
                        </div>
                        <div class="col-md-4">
                            <div id="spark2" class="apex-charts" data-colors="#DCE6EC"></div>
                        </div>
                        <div class="col-md-4">
                            <div id="spark3" class="apex-charts" data-colors="#0acf97"></div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-centered mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th>Total Value</th>
                                        <th>Percentage of Portfolio</th>
                                        <th>Last 10 days</th>
                                        <th>Volume</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>$32,554</td>
                                        <td>15%</td>
                                        <td>
                                            <div id="chart1" data-colors="#727cf5"></div>
                                        </td>
                                        <td>
                                            <div id="chart5" data-colors="#727cf5"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>$23,533</td>
                                        <td>7%</td>
                                        <td>
                                            <div id="chart2" data-colors="#0acf97"></div>
                                        </td>
                                        <td>
                                            <div id="chart6" data-colors="#0acf97"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>$54,276</td>
                                        <td>9%</td>
                                        <td>
                                            <div id="chart3" data-colors="#ffbc00"></div>
                                        </td>
                                        <td>
                                            <div id="chart7" data-colors="#ffbc00"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>$11,533</td>
                                        <td>2%</td>
                                        <td>
                                            <div id="chart4" data-colors="#fa5c7c"></div>
                                        </td>
                                        <td>
                                            <div id="chart8" data-colors="#fa5c7c"></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive -->
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div><!-- end card body-->
            </div><!-- end card -->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
</div>