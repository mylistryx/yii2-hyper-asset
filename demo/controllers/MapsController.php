<?php

namespace demo\controllers;

use yii\web\Controller;

final class MapsController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Maps'];
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