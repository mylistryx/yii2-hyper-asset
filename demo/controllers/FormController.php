<?php

namespace demo\controllers;

use yii\web\Controller;

final class FormController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Forms'];
        parent::init();
    }

    public function actionElements(): string
    {
        return $this->render('elements');
    }
    public function actionAdvanced(): string
    {
        return $this->render('advanced');
    }
    public function actionValidation(): string
    {
        return $this->render('validation');
    }
    public function actionWizard(): string
    {
        return $this->render('wizard');
    }
    public function actionFileUploads(): string
    {
        return $this->render('fileUploads');
    }
    public function actionEditors(): string
    {
        return $this->render('editors');
    }
}