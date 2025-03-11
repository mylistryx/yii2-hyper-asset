<?php
/**
 * @var View $this
 * @var mixed $content
 */

use hyper\assets\HyperAsset;
use hyper\Html;
use yii\web\View;

$hyperAsset = HyperAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

$this->beginPage()
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <?= $content ?>

    <?= $this->render('footer-alt') ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>