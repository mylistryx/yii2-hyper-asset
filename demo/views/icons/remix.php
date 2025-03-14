<?php
/**
 * @var $this View
 */

use hyper\assets\HyperAsset;
use yii\web\View;

$this->title = 'Remix icons';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('/js/pages/demo.remixicons.js', ['depends' => HyperAsset::class]);
?>
<div class="content-container">
    <div class="row">
        <div class="col-12" id="icons"></div> <!-- end col-->
    </div><!-- end row -->
</div>
