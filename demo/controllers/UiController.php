<?php

namespace demo\controllers;

use yii\web\Controller;

final class UiController extends Controller
{
    public $layout = 'main-ui';

    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Base UI', 'url' => ['index']];
        parent::init();
    }

    public function actionAccordions(): string
    {
        return $this->render('accordions');
    }

    public function actionAlerts(): string
    {
        return $this->render('alerts');
    }

    public function actionAvatars(): string
    {
        return $this->render('avatars');
    }

    public function actionBadges(): string
    {
        return $this->render('badges');
    }

    public function actionBreadcrumb(): string
    {
        return $this->render('breadcrumb');
    }

    public function actionButtons(): string
    {
        return $this->render('buttons');
    }

    public function actionCards(): string
    {
        return $this->render('cards');
    }

    public function actionCarousel(): string
    {
        return $this->render('carousel');
    }

    public function actionDropdowns(): string
    {
        return $this->render('dropdowns');
    }

    public function actionEmbedVideo(): string
    {
        return $this->render('embed-video');
    }

    public function actionGrid(): string
    {
        return $this->render('grid');
    }

    public function actionListGroup(): string
    {
        return $this->render('list-group');
    }

    public function actionModals(): string
    {
        return $this->render('modals');
    }

    public function actionNotifications(): string
    {
        return $this->render('notifications');
    }
}