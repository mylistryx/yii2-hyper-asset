<?php

namespace demo\controllers;

use yii\web\Controller;

final class MapsController extends Controller
{
    public $layout = 'main-ui';

    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Maps', 'url' => ['index']];
        parent::init();
    }

    public function actionGoogle(): string
    {
        return $this->render('google');
    }

    public function actionVector(): string
    {
        return $this->render('vector');
    }
}