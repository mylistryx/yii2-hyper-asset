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

    public function actionEcommerce(): string
    {
        return $this->render('ecommerce');
    }

    public function actionProjects(): string
    {
        return $this->render('projects');
    }

    public function actionCrm(): string
    {
        return $this->render('crm');
    }

    public function actionWallet(): string
    {
        return $this->render('wallet');
    }
}