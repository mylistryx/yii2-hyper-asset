<?php

namespace demo\controllers;

use yii\web\Controller;

final class TasksController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Tasks'];
        parent::init();
    }

    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function actionDetails(): string
    {
        return $this->render('details');
    }

    public function actionKanban(): string
    {
        return $this->render('kanban');
    }
}