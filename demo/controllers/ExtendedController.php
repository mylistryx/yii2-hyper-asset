<?php

namespace demo\controllers;

use yii\web\Controller;

final class ExtendedController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Extended UI'];
        parent::init();
    }

    public function actionDragula(): string
    {
        return $this->render('dragule');
    }

    public function actionRangeSlider(): string
    {
        return $this->render('range-slider');
    }

    public function actionRatings(): string
    {
        return $this->render('ratings');
    }

    public function actionScrollbar(): string
    {
        return $this->render('scrollbar');
    }

    public function actionScrollspy(): string
    {
        return $this->render('scrollspy');
    }

    public function actionTreeview(): string
    {
        return $this->render('treeview');
    }
}