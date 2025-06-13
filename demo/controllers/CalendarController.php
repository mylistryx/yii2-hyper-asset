<?php
namespace demo\controllers;

use yii\web\Controller;

final class CalendarController extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }
}