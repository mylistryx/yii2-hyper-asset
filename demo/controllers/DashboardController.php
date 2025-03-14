<?php

namespace demo\controllers;

use yii\web\Controller;

final class DashboardController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Dashboards'];
        parent::init();
    }

    public function actionAnalytics(): string
    {
        return $this->render('analytics');
    }
}