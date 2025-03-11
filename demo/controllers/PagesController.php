<?php

namespace demo\controllers;

use yii\web\Controller;

final class PagesController extends Controller
{
    public function actionProfile(): string
    {
        return $this->render('profile');
    }

    public function actionProfile2(): string
    {
        return $this->render('profile2');
    }

    public function actionInvoice(): string
    {
        return $this->render('invoice');
    }

    public function actionFaq(): string
    {
        return $this->render('faq');
    }

    public function actionPricing(): string
    {
        return $this->render('pricing');
    }

    public function actionMaintenance(): string
    {
        $this->layout = 'maintenance';
        return $this->render('maintenance');
    }
}