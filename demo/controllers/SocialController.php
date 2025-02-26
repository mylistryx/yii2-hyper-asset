<?php

namespace demo\controllers;

use yii\web\Controller;

final class SocialController extends Controller
{
    public function actionFeed(): string
    {
        return $this->render('feed');
    }
}