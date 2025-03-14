<?php

namespace demo\controllers;

use yii\web\Controller;

final class SparklineChartController extends Controller
{
    public $layout = 'main-ui';

    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Sparkline charts', 'url' => ['index']];
        parent::init();
    }

    public function actionIndex(): string
    {
        return $this->render('index');
    }
}