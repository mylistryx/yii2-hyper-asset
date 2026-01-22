<?php
/**
 * @var $this View
 */

use hyper\assets\HyperAsset;
use yii\mdi\MDI;
use yii\web\View;

$this->title = 'Material design icons';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('/js/pages/demo.materialdesignicons.js', ['depends' => HyperAsset::class]);
?>
<div class="content-container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">New Icons <span class="badge badge-danger-lighten">7.4.47</span></h4>
                    <div class="row icons-list-demo" id="newIcons"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">All Icons</h4>
                    <div class="row icons-list-demo" id="icons"></div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <h4 class="header-title mb-4">Size</h4>

                    <div class="row icons-list-demo">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('account')->size18() ?> ...->size18()
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('account')->size24() ?> ...->size24()
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('account')->size36() ?> ...->size36()
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('account')->size48() ?> ...->size48()
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <h4 class="header-title mb-4">Rotate</h4>

                    <div class="row icons-list-demo">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('account')->rotate45() ?> ...->rotate450()
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('account')->rotate90() ?> ...->rotate90()
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('account')->rotate135() ?> ...->rotate135()
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('account')->rotate180() ?> ...->rotate180()
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('account')->rotate225() ?> ...->rotate225()
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('account')->rotate270() ?> ...->rotate270()
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('account')->rotate315() ?> ...->rotate315()
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <h4 class="header-title mb-4">Spin</h4>

                    <div class="row icons-list-demo">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('loading')->spin() ?> ...->spin()
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('star')->spin() ?> ...->spin()
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <h4 class="header-title mb-4">Flip</h4>

                    <div class="row icons-list-demo">
                        <div class="col-xl-3 col-lg-4 col-sm-4">
                            <?= MDI::i('z-wave') ?> Original
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-4">
                            <?= MDI::i('z-wave')->flipH() ?> ...->flipH()
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-4">
                            <?= MDI::i('z-wave')->flipV() ?> ...->flipV()
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <h4 class="header-title mb-4">Color</h4>

                    <div class="row icons-list-demo">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('z-wave')->colorDark() ?> ...->colorDark()
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <?= MDI::i('z-wave')->colorDark()->inactive() ?> ...->colorDark()->inactive()
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6" style="background-color: #444 !important;">
                            <?= MDI::i('z-wave')->colorLight() ?> ...->colorLight()
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6" style="background-color: #444 !important;">
                            <?= MDI::i('z-wave')->colorLight()->inactive() ?> ...->colorLight()->inactive()
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
