<?php

namespace demo\controllers;

use yii\web\Controller;

final class SparklineChartController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Sparkline charts'];
        parent::init();
    }

    public function actionIndex(): string
    {
        return $this->render('index');
    }
}