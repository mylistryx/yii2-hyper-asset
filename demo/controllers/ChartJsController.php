<?php

namespace demo\controllers;

use yii\web\Controller;

final class ChartJsController extends Controller
{
    public $layout = 'main-ui';

    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'ChartJS charts', 'url' => ['index']];
        parent::init();
    }

    public function actionArea(): string
    {
        return $this->render('area');
    }

    public function actionBar(): string
    {
        return $this->render('bar');
    }

    public function actionLine(): string
    {
        return $this->render('line');
    }

    public function actionOther(): string
    {
        return $this->render('other');
    }
}