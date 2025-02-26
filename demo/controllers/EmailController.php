<?php

namespace demo\controllers;

use yii\web\Controller;

final class EmailController extends Controller
{
    public function actionInbox(): string
    {
        return $this->render('inbox');
    }

    public function actionRead(): string
    {
        return $this->render('read');
    }
}