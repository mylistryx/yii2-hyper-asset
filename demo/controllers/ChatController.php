<?php
namespace demo\controllers;

use yii\web\Controller;

final class ChatController extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }
}