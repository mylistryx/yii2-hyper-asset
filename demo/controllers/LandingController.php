<?php

namespace demo\controllers;

use yii\web\Controller;

final class LandingController extends Controller
{
    public $layout = 'maintenance';
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Landing'];
        parent::init();
    }

    public function actionIndex(): string
    {
        return $this->render('index');
    }
}