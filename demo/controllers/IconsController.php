<?php

namespace demo\controllers;

use yii\web\Controller;

final class IconsController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Icons'];
        parent::init();
    }

    public function actionRemix(): string
    {
        return $this->render('remix');
    }

    public function actionMdi(): string
    {
        return $this->render('mdi');
    }

    public function actionUnicons(): string
    {
        return $this->render('unicons');
    }
}