<?php

namespace demo\controllers;

use yii\web\Controller;

final class WidgetsController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Components'];
        parent::init();
    }

    public function actionIndex(): string
    {
        return $this->render('index');
    }
}