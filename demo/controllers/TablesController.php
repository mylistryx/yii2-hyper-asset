<?php

namespace demo\controllers;

use yii\web\Controller;

final class TablesController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Tables'];
        parent::init();
    }

    public function actionBasic(): string
    {
        return $this->render('basic');
    }
    public function actionData(): string
    {
        return $this->render('data');
    }
}