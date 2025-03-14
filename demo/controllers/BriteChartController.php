<?php

namespace demo\controllers;

use yii\web\Controller;

final class BriteChartController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Brite charts'];
        parent::init();
    }

    public function actionIndex(): string
    {
        return $this->render('index');
    }
}