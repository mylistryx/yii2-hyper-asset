<?php

namespace demo\controllers;

use yii\web\Controller;

final class ApexChartController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'ApexCharts'];
        parent::init();
    }

    public function actionArea(): string
    {
        return $this->render('area');
    }

    public function actionBar(): string
    {
        return $this->render('bar');
    }

    public function actionBubble(): string
    {
        return $this->render('bubble');
    }

    public function actionCandlestick(): string
    {
        return $this->render('candlestick');
    }

    public function actionColumn(): string
    {
        return $this->render('column');
    }

    public function actionHeatmap(): string
    {
        return $this->render('heatmap');
    }

    public function actionLine(): string
    {
        return $this->render('line');
    }

    public function actionMixed(): string
    {
        return $this->render('mixed');
    }
    public function actionTimeline(): string
    {
        return $this->render('timeline');
    }
    public function actionBoxplot(): string
    {
        return $this->render('boxplot');
    }
    public function actionTreemap(): string
    {
        return $this->render('treemap');
    }
    public function actionPie(): string
    {
        return $this->render('pie');
    }
    public function actionRadar(): string
    {
        return $this->render('radar');
    }
    public function actionRadialbar(): string
    {
        return $this->render('radialbar');
    }
    public function actionScatter(): string
    {
        return $this->render('scatter');
    }
    public function actionPolarArea(): string
    {
        return $this->render('polarArea');
    }
    public function actionSparklines(): string
    {
        return $this->render('sparklines');
    }
}