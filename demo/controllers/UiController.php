<?php

namespace demo\controllers;

use yii\web\Controller;

final class UiController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Base UI'];
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

    public function actionOffcanvas(): string
    {
        return $this->render('offcanvas');
    }

    public function actionPagination(): string
    {
        return $this->render('pagination');
    }

    public function actionPlaceholders(): string
    {
        return $this->render('placeholders');
    }

    public function actionPopovers(): string
    {
        return $this->render('popovers');
    }

    public function actionProgress(): string
    {
        return $this->render('progress');
    }

    public function actionRibbons(): string
    {
        return $this->render('ribbons');
    }

    public function actionSpinners(): string
    {
        return $this->render('spinners');
    }

    public function actionTabs(): string
    {
        return $this->render('tabs');
    }

    public function actionTooltips(): string
    {
        return $this->render('tooltips');
    }

    public function actionTypography(): string
    {
        return $this->render('typography');
    }

    public function actionUtilities(): string
    {
        return $this->render('utilities');
    }
}