<?php

namespace demo\controllers;

use yii\web\Controller;
use yii\web\ErrorAction;

final class SiteController extends Controller
{
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
        ];
    }

    public function actionIndex(): string
    {
        return $this->render('index');
    }
}