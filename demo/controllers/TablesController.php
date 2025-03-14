<?php

namespace demo\controllers;

use yii\web\Controller;

final class TablesController extends Controller
{
    public $layout = 'main-ui';

    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Tables', 'url' => ['index']];
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