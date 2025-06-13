<?php
namespace demo\controllers;

use yii\web\Controller;

final class CrmController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'CRM'];
        parent::init();
    }
    public function actionClients(): string
    {
        return $this->render('clients');
    }

    public function actionManagement(): string
    {
        return $this->render('management');
    }

    public function actionOrdersList(): string
    {
        return $this->render('orders-list');
    }

    public function actionProjects(): string
    {
        return $this->render('projects');
    }
}