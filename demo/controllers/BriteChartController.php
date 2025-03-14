<?php

namespace demo\controllers;

use yii\web\Controller;

final class BriteChartController extends Controller
{
    public $layout = 'main-ui';

    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Brite charts', 'url' => ['index']];
        parent::init();
    }

    public function actionIndex(): string
    {
        return $this->render('index');
    }
}