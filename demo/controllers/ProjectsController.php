<?php

namespace demo\controllers;

use yii\web\Controller;

final class ProjectsController extends Controller
{
    public function actionAdd(): string
    {
        return $this->render('add');
    }

    public function actionDetails(): string
    {
        return $this->render('details');
    }

    public function actionGantt(): string
    {
        return $this->render('gantt');
    }

    public function actionList(): string
    {
        return $this->render('list');
    }
}