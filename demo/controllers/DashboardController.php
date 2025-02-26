<?php

namespace demo\controllers;

use yii\web\Controller;

final class DashboardController extends Controller
{
    public function actionAnalytics(): string
    {
        return $this->render('analytics');
    }
}