<?php
/**
 * @var View $this
 * @var mixed $content
 */

use hyper\assets\HyperAsset;
use hyper\Breadcrumbs;
use hyper\Html;
use yii\web\View;

$hyperAsset = HyperAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

$this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <?= $this->render('toolbar') ?>
        <?= $this->render('sidebar') ?>
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs'] ?? []]) ?>
                                </div>
                                <h4 class="page-title"><?= Html::encode($this->title) ?></h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?= $content ?>
                </div>
            </div>
            <?= $this->render('footer') ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        <?= $this->render('theme') ?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>