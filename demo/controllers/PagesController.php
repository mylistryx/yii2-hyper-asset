<?php

namespace demo\controllers;

use yii\web\Controller;

final class PagesController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Pages'];
        parent::init();
    }

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

    public function actionStarter(): string
    {
        return $this->render('starter');
    }

    public function actionPreloader(): string
    {
        return $this->render('preloader');
    }

    public function actionTimeline(): string
    {
        return $this->render('timeline');
    }

    public function actionLanding(): string
    {
        return $this->render('landing');
    }
}