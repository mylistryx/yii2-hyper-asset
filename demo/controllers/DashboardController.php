<?php

namespace demo\controllers;

use yii\web\Controller;

final class DashboardController extends Controller
{
    public $layout = 'main-ui';

    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Dashboards', 'url' => ['index']];
        parent::init();
    }

    public function actionAnalytics(): string
    {
        return $this->render('analytics');
    }
}