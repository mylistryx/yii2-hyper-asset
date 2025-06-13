<?php
namespace demo\controllers;

use yii\web\Controller;

final class FileManagerController extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }
}